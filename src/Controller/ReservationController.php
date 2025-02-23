<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Herbergement;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\HerbergementRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\DTO\ReservationDTO;

class ReservationController extends AbstractController
{
    #[Route('/hebergement/{id}/reserver', name: 'reservation_reserver')]
    public function reserver(Request $request, Herbergement $hebergement, HerbergementRepository $repoHeb, ReservationRepository $repoRes): Response
    {
        $user = $this->getUser(); 

        if(!$user){ 
            $this->addFlash('error', 'Veuillez vous connecter afin de réserver '); 
            return $this->redirectToRoute('app_login'); 
        }

        $reservationDTO = new ReservationDTO();
        $form = $this->createForm(ReservationType::class, $reservationDTO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Vérifier les dates existantes
                $existingReservation = $repoRes->findExistingReservation(
                    $hebergement, 
                    $reservationDTO->getDateDebut(), 
                    $reservationDTO->getDateFin()
                );

                if ($existingReservation) {
                    $this->addFlash('error', 'Les dates sélectionnées ne sont pas disponibles.');
                    return $this->redirectToRoute('reservation_reserver', ['id' => $hebergement->getId()]);
                }

                // Calculer le prix
                $nbJours = $reservationDTO->getDateDebut()->diff($reservationDTO->getDateFin())->days;
                $prixTotal = $nbJours * $hebergement->getPrix();

                // Créer la réservation
                $reservation = new Reservation();
                $reservation
                    ->setHebergement($hebergement)
                    ->setUser($user)
                    ->setDateDebut($reservationDTO->getDateDebut())
                    ->setDateFin($reservationDTO->getDateFin())
                    ->setPrixTotal($prixTotal);

                $repoRes->save($reservation, true);

                $this->addFlash('success', 'Réservation effectuée avec succès.');
                return $this->redirectToRoute('app_home');

            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la réservation.');
            }
        }

        return $this->render('reservation/reserver.html.twig', [
            'form' => $form->createView(),
            'hebergement' => $hebergement
        ]);
    }







    #[Route('/mes-reservations', name: 'app_mes_reservations')]

        public function mesReservations(ReservationRepository $repoRes)
        {
            $user = $this->getUser();

            if(!$user){
                $this->addFlash('error', 'Veuillez vous connecter pour acceder a cette page'); 
                return $this->redirectToRoute('app_login'); 
            } 
            $reservations = $repoRes->findBy(['user' => $user]);

            return $this->render('reservation/mes_reservations.html.twig', [
                'reservations' => $reservations,
            ]);
        }















}