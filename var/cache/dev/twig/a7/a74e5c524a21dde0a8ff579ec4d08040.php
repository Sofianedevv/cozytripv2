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

/* layout.html.twig */
class __TwigTemplate_b81e4b1cea80e7d078f867b3935551bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'final_js' => [$this, 'block_final_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

  <nav class=\"barre-menu\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\"><h1>COZY<span class=\"trip\">TRIP</span></h1></a>
        <div class=\"menu-links \">
            <ul class=\"menu\">
                <li class =\"menuone\"><a  href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li class =\"menuone\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        echo "\">Les hébergements</a></li>

                   ";
        // line 14
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 15
            echo "
                <li class =\"menuone\" ><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                <li class =\"menuone\"><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
                  ";
        } else {
            // line 19
            echo "
                  <li class =\"menuone\"><a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations");
            echo "\">Mes réservations </a></li>
                <li class =\"menuone\"><a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mon_profil");
            echo "\">Mon profil</a></li> 


                  ";
        }
        // line 25
        echo "                <li class =\"menuone\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a></li>


                  ";
        // line 28
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            echo " 


                   <li class =\"menuone\"><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_add");
            echo "\">Ajout hebergement</a></li>
                   <li class =\"menuone\"><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_add");
            echo "\">Ajout categorie</a></li>
                   
                  
                  ";
        }
        // line 36
        echo "                  

                   ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 39
            echo "

                <li class =\"menuone\"><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li> 
                  ";
        }
        // line 43
        echo "
            </ul>
        </div>
        
        <img src=\"/img/menu-btn.png\" alt=\"menu hamburger\" class=\"barre-hamburger\">
  </nav>
  

  <header>
    <div class=\"main\">
       <h4 class=\"location\">Locations de vacances</h4>
       <h1 class=\"titrecarte\">\"CozyTrip : Votre refuge douillet, réservé en un instant !\"</h1>
       <button class=\"btnreserver\"  type=\"button\"><a class=\"reservez\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        echo "\">Réservez !</a></button>
    </div>   
  </header>    

  

<main >


";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "\t\t<div class =\"alert alert-danger text-danger\">
\t\t";
            // line 66
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            echo "\t\t<div class =\"alert alert-success text-center \">
\t\t";
            // line 73
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
\t";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "
\t";
        // line 83
        $this->displayBlock('final_js', $context, $blocks);
        // line 86
        echo "</main>

<footer>

  <div class =\"contenu-footer\">

        <div class =\"bloc footer-services\">
          <h3> Nos services </h3>
            <ul class=\"liste-services\">
              <li class =\"menuone\"><a class=\"lien-services\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
              <li class =\"menuone\"><a class=\"lien-services\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        echo "\">Hebergements</a></li>
                   ";
        // line 97
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 98
            echo "
              <li class =\"menuone\"><a class=\"lien-services\" href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>
              <li class =\"menuone\"><a class=\"lien-services\" href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                  ";
        } else {
            // line 102
            echo "
              <li class =\"menuone\"><a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mon_profil");
            echo "\">Mon profil</a></li> 
              <li class =\"menuone\"><a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations");
            echo "\">Mes réservations </a></li>
              <li class =\"menuone\"><a class=\"lien-services\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a></li>

                  ";
        }
        // line 108
        echo "
                   ";
        // line 109
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            echo " 


              <li class =\"menuone\"><a href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_add");
            echo "\">Ajout hebergement</a></li>
              <li class =\"menuone\"><a href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_add");
            echo "\">Ajout categorie</a></li>
                   
                  
                  ";
        }
        // line 117
        echo "
            </ul>
        </div>

        <div class =\"bloc footer-contact\">
          <h3> Contact </h3>
            <ul class=\"liste-services\">
              <li>Tel: 01.20.20.20.20</li>
              <li>21 rue des vacances, Paris, 75000</li>
              <li class =\"menuone\"><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention");
        echo "\">Mention légales </a></li>
              <li class =\"menuone\"><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous</a></li>


            </ul>
        </div>



        <div class =\"bloc footer-horaires\">
            <h3> Horaires service clients </h3>
              <ul class=\"liste-horaires\">
                  <li>✅ Lun 9h30-19h</li>
                  <li>✅ Mar 9h30-19h</li>
                  <li>✅ Mer 9h30-19h</li>
                  <li>✅ Jeu 9h30-19h</li>
                  <li>✅ Ven 9h30-19h</li>
                  <li>❌ Sam fermé</li>
                  <li>❌ Dim fermé</li>
              </ul>
          </div>



        <div class =\"bloc footer-medias\">
          <h3> Nos réseaux </h3>
            <ul class=\"liste-media \">
              <li class =\"menuone\" ><a class=\"lien-reseaux\"href=\"https://fr-fr.facebook.com/\"> <i class=\"fa-brands fa-facebook\"> </i> Facebook</a></li>
              <li class =\"menuone\"><a class=\"lien-reseaux\"href=\"https://www.instagram.com/\"> <i class=\"fa-brands fa-instagram\"> </i> Instagram</a></li>
              <li class =\"menuone\"><a class=\"lien-reseaux\"href=\"https://twitter.com/\"> <i class=\"fa-brands fa-twitter\"> </i> Twitter</a></li>
              <li class =\"menuone\"><a class=\"lien-reseaux\"href=\"https://www.youtube.com/\"> <i class=\"fa-brands fa-youtube\"> </i> Youtube</a></li>
            </ul>
        </div>

  </div>

\t
</footer>




   
 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 79
        echo "  
  
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_final_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_js"));

        // line 84
        echo "\t\t";
        // line 85
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 85,  384 => 84,  377 => 83,  368 => 79,  361 => 78,  309 => 127,  305 => 126,  294 => 117,  287 => 113,  283 => 112,  277 => 109,  274 => 108,  268 => 105,  264 => 104,  260 => 103,  257 => 102,  252 => 100,  248 => 99,  245 => 98,  242 => 97,  238 => 96,  234 => 95,  223 => 86,  221 => 83,  218 => 82,  216 => 78,  213 => 77,  203 => 73,  200 => 72,  196 => 71,  193 => 70,  183 => 66,  180 => 65,  176 => 64,  164 => 55,  150 => 43,  145 => 41,  141 => 39,  138 => 38,  134 => 36,  127 => 32,  123 => 31,  117 => 28,  110 => 25,  103 => 21,  99 => 20,  96 => 19,  91 => 17,  87 => 16,  84 => 15,  81 => 14,  76 => 12,  72 => 11,  66 => 8,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}


  <nav class=\"barre-menu\">
        <a href=\"{{path('app_home')}}\" class=\"logo\"><h1>COZY<span class=\"trip\">TRIP</span></h1></a>
        <div class=\"menu-links \">
            <ul class=\"menu\">
                <li class =\"menuone\"><a  href=\"{{path('app_home')}}\">Home</a></li>
                <li class =\"menuone\"><a href=\"{{path('app_hebergements')}}\">Les hébergements</a></li>

                   {% if not is_granted('IS_AUTHENTICATED_FULLY') %} {# si aucun utilisateur n'est authentifié #}

                <li class =\"menuone\" ><a href=\"{{path('app_login')}}\">Connexion</a></li>
                <li class =\"menuone\"><a href=\"{{path('app_register')}}\">Inscription</a></li>
                  {% else %}

                  <li class =\"menuone\"><a href=\"{{path('app_mes_reservations')}}\">Mes réservations </a></li>
                <li class =\"menuone\"><a href=\"{{path('app_mon_profil')}}\">Mon profil</a></li> 


                  {% endif %}
                <li class =\"menuone\"><a href=\"{{path('app_contact')}}\">Contact</a></li>


                  {% if is_granted('IS_AUTHENTICATED_FULLY') and is_granted('ROLE_ADMIN')  %} 


                   <li class =\"menuone\"><a href=\"{{path('app_hebergement_add')}}\">Ajout hebergement</a></li>
                   <li class =\"menuone\"><a href=\"{{path('app_categorie_add')}}\">Ajout categorie</a></li>
                   
                  
                  {% endif %}
                  

                   {% if is_granted('IS_AUTHENTICATED_FULLY') %} {# si aucun utilisateur n'est authentifié #}


                <li class =\"menuone\"><a href=\"{{path('app_logout')}}\">Déconnexion</a></li> 
                  {% endif %}

            </ul>
        </div>
        
        <img src=\"/img/menu-btn.png\" alt=\"menu hamburger\" class=\"barre-hamburger\">
  </nav>
  

  <header>
    <div class=\"main\">
       <h4 class=\"location\">Locations de vacances</h4>
       <h1 class=\"titrecarte\">\"CozyTrip : Votre refuge douillet, réservé en un instant !\"</h1>
       <button class=\"btnreserver\"  type=\"button\"><a class=\"reservez\" href=\"{{path('app_hebergements')}}\">Réservez !</a></button>
    </div>   
  </header>    

  

<main >


{% for message in app.flashes('error') %}
\t\t<div class =\"alert alert-danger text-danger\">
\t\t{{message}}
\t\t</div>

\t\t{% endfor %}

\t\t{% for message in app.flashes('success') %}
\t\t<div class =\"alert alert-success text-center \">
\t\t{{message}}
\t\t</div>

\t\t{% endfor %}

\t{% block content %}
  
  
  {% endblock %}

\t{% block final_js %}
\t\t{# insertion des script propre à chaque page #}
\t{% endblock %}
</main>

<footer>

  <div class =\"contenu-footer\">

        <div class =\"bloc footer-services\">
          <h3> Nos services </h3>
            <ul class=\"liste-services\">
              <li class =\"menuone\"><a class=\"lien-services\" href=\"{{path('app_home')}}\">Home</a></li>
              <li class =\"menuone\"><a class=\"lien-services\" href=\"{{path('app_hebergements')}}\">Hebergements</a></li>
                   {% if not is_granted('IS_AUTHENTICATED_FULLY') %} {# si aucun utilisateur n'est authentifié #}

              <li class =\"menuone\"><a class=\"lien-services\" href=\"{{path('app_register')}}\">Inscription</a></li>
              <li class =\"menuone\"><a class=\"lien-services\" href=\"{{path('app_login')}}\">Connexion</a></li>
                  {% else %}

              <li class =\"menuone\"><a href=\"{{path('app_mon_profil')}}\">Mon profil</a></li> 
              <li class =\"menuone\"><a href=\"{{path('app_mes_reservations')}}\">Mes réservations </a></li>
              <li class =\"menuone\"><a class=\"lien-services\" href=\"{{path('app_logout')}}\">Deconnexion</a></li>

                  {% endif %}

                   {% if is_granted('IS_AUTHENTICATED_FULLY') and is_granted('ROLE_ADMIN')  %} 


              <li class =\"menuone\"><a href=\"{{path('app_hebergement_add')}}\">Ajout hebergement</a></li>
              <li class =\"menuone\"><a href=\"{{path('app_categorie_add')}}\">Ajout categorie</a></li>
                   
                  
                  {% endif %}

            </ul>
        </div>

        <div class =\"bloc footer-contact\">
          <h3> Contact </h3>
            <ul class=\"liste-services\">
              <li>Tel: 01.20.20.20.20</li>
              <li>21 rue des vacances, Paris, 75000</li>
              <li class =\"menuone\"><a href=\"{{path('app_mention')}}\">Mention légales </a></li>
              <li class =\"menuone\"><a href=\"{{path('app_contact')}}\">Contactez-nous</a></li>


            </ul>
        </div>



        <div class =\"bloc footer-horaires\">
            <h3> Horaires service clients </h3>
              <ul class=\"liste-horaires\">
                  <li>✅ Lun 9h30-19h</li>
                  <li>✅ Mar 9h30-19h</li>
                  <li>✅ Mer 9h30-19h</li>
                  <li>✅ Jeu 9h30-19h</li>
                  <li>✅ Ven 9h30-19h</li>
                  <li>❌ Sam fermé</li>
                  <li>❌ Dim fermé</li>
              </ul>
          </div>



        <div class =\"bloc footer-medias\">
          <h3> Nos réseaux </h3>
            <ul class=\"liste-media \">
              <li class =\"menuone\" ><a class=\"lien-reseaux\"href=\"https://fr-fr.facebook.com/\"> <i class=\"fa-brands fa-facebook\"> </i> Facebook</a></li>
              <li class =\"menuone\"><a class=\"lien-reseaux\"href=\"https://www.instagram.com/\"> <i class=\"fa-brands fa-instagram\"> </i> Instagram</a></li>
              <li class =\"menuone\"><a class=\"lien-reseaux\"href=\"https://twitter.com/\"> <i class=\"fa-brands fa-twitter\"> </i> Twitter</a></li>
              <li class =\"menuone\"><a class=\"lien-reseaux\"href=\"https://www.youtube.com/\"> <i class=\"fa-brands fa-youtube\"> </i> Youtube</a></li>
            </ul>
        </div>

  </div>

\t
</footer>




   
 

{% endblock %}

", "layout.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\layout.html.twig");
    }
}
