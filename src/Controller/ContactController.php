<?php

namespace App\Controller;

use App\DTO\ContactDTO;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $contactDTO = new ContactDTO();
        $form = $this->createForm(ContactType::class, $contactDTO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $email = (new Email())
                    ->from(new Address($contactDTO->getVotreEmail()))
                    ->to('admin@dev.cozytrip.fr')
                    ->subject('Demande de contact')
                    ->html($this->sanitizeMessage($contactDTO->getMessage()));

                $mailer->send($email);

                $this->addFlash('success', 'Votre message a bien été envoyé !');
                return $this->redirectToRoute('app_contact');
            } catch (TransportExceptionInterface $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi du message.');
            }
        }

        return $this->render('contact/index.html.twig', [
            'formulaire' => $form->createView()
        ]);
    }

    private function sanitizeMessage(string $message): string
    {
        // Nettoie le message de tout HTML malveillant
        return htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    }
}
