<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mention/mentionslegales.html.twig */
class __TwigTemplate_0960cb6454182f64b4ccd9a035873dae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mention/mentionslegales.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mention/mentionslegales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mentions légales";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"container mt-5\">
  <h2>Informations générales</h2>

    <p>Raison sociale : CozyTrip</p>
    <p>Adresse : 26 rue des vacances, Paris</p>
    <p>Téléphone : 0778787878</p>
    <p>Email : support@cozytrip.fr</p>

    <h2>Directeur de publication</h2>
    <p>Chadili Sofiane</p>

    <h2>Hébergement</h2>
    <p>Notre site est hébergé par Hostinger :</p>
    <p>61 Lordou Vironos Street, 6023 Larnaca, Chypre</p>

    <h2>Propriété intellectuelle</h2>
    <p>Tous les contenus présents sur ce site (textes, images, vidéos, etc.) sont protégés par le droit de la propriété intellectuelle et sont la propriété exclusive de CozyTrip ou de ses partenaires. Toute reproduction, distribution, modification ou utilisation non autorisée de ces contenus est strictement interdite.</p>

    <h2>Collecte des données personnelles</h2>
    <p>Notre site collecte certaines données personnelles via des formulaires de contact ou d'inscription. Ces données sont utilisées uniquement dans le cadre de nos services et ne sont pas partagées avec des tiers sans consentement préalable. Pour en savoir plus, veuillez consulter notre politique de confidentialité.</p>

    <h2>Cookies</h2>
    <p>Notre site utilise des cookies pour améliorer votre expérience de navigation. Ces cookies sont de petits fichiers texte stockés sur votre ordinateur et ne contiennent aucune information personnelle. Vous pouvez configurer votre navigateur pour refuser les cookies ou être averti lorsque des cookies sont envoyés.</p>

    <h2>Responsabilité</h2>
    <p>Nous mettons tout en œuvre pour assurer l'exactitude et la mise à jour des informations présentes sur notre site. Cependant, nous ne pouvons garantir l'absence d'erreurs ou d'omissions. Nous déclinons toute responsabilité quant à l'utilisation des informations fournies sur ce site.</p>

    <h2>Liens externes</h2>
    <p>Notre site peut contenir des liens vers des sites externes. Nous n'exerçons aucun contrôle sur ces sites et déclinons toute responsabilité quant à leur contenu ou à leur politique de confidentialité.</p>

    <h2>Contact</h2>
    <p>Pour toute question ou demande concernant nos mentions légales, veuillez nous contacter à l'adresse suivante : support@cozytrip.fr.</p>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mention/mentionslegales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Mentions légales{% endblock %}

{% block content %}

<div class=\"container mt-5\">
  <h2>Informations générales</h2>

    <p>Raison sociale : CozyTrip</p>
    <p>Adresse : 26 rue des vacances, Paris</p>
    <p>Téléphone : 0778787878</p>
    <p>Email : support@cozytrip.fr</p>

    <h2>Directeur de publication</h2>
    <p>Chadili Sofiane</p>

    <h2>Hébergement</h2>
    <p>Notre site est hébergé par Hostinger :</p>
    <p>61 Lordou Vironos Street, 6023 Larnaca, Chypre</p>

    <h2>Propriété intellectuelle</h2>
    <p>Tous les contenus présents sur ce site (textes, images, vidéos, etc.) sont protégés par le droit de la propriété intellectuelle et sont la propriété exclusive de CozyTrip ou de ses partenaires. Toute reproduction, distribution, modification ou utilisation non autorisée de ces contenus est strictement interdite.</p>

    <h2>Collecte des données personnelles</h2>
    <p>Notre site collecte certaines données personnelles via des formulaires de contact ou d'inscription. Ces données sont utilisées uniquement dans le cadre de nos services et ne sont pas partagées avec des tiers sans consentement préalable. Pour en savoir plus, veuillez consulter notre politique de confidentialité.</p>

    <h2>Cookies</h2>
    <p>Notre site utilise des cookies pour améliorer votre expérience de navigation. Ces cookies sont de petits fichiers texte stockés sur votre ordinateur et ne contiennent aucune information personnelle. Vous pouvez configurer votre navigateur pour refuser les cookies ou être averti lorsque des cookies sont envoyés.</p>

    <h2>Responsabilité</h2>
    <p>Nous mettons tout en œuvre pour assurer l'exactitude et la mise à jour des informations présentes sur notre site. Cependant, nous ne pouvons garantir l'absence d'erreurs ou d'omissions. Nous déclinons toute responsabilité quant à l'utilisation des informations fournies sur ce site.</p>

    <h2>Liens externes</h2>
    <p>Notre site peut contenir des liens vers des sites externes. Nous n'exerçons aucun contrôle sur ces sites et déclinons toute responsabilité quant à leur contenu ou à leur politique de confidentialité.</p>

    <h2>Contact</h2>
    <p>Pour toute question ou demande concernant nos mentions légales, veuillez nous contacter à l'adresse suivante : support@cozytrip.fr.</p>
  </div>

{% endblock %}
", "mention/mentionslegales.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\mention\\mentionslegales.html.twig");
    }
}
