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

/* base.html.twig */
class __TwigTemplate_5eeb5870bf58ce71c3efe0a47895fd0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <!-- Protection XSS et sécurité -->
        <meta http-equiv=\"Content-Security-Policy\" content=\"
            default-src 'self';
            script-src 'self' ";
        // line 7
        if (array_key_exists("csp_nonce", $context)) {
            echo "'nonce-";
            echo twig_escape_filter($this->env, (isset($context["csp_nonce"]) || array_key_exists("csp_nonce", $context) ? $context["csp_nonce"] : (function () { throw new RuntimeError('Variable "csp_nonce" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "'";
        }
        echo " https://www.googletagmanager.com https://cdn.jsdelivr.net;
            style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com;
            img-src 'self' data: https:;
            font-src 'self' https://fonts.gstatic.com;
            frame-ancestors 'none';
        \">
        <meta http-equiv=\"X-XSS-Protection\" content=\"1; mode=block\">
        <meta http-equiv=\"X-Content-Type-Options\" content=\"nosniff\">

        <meta charset=\"UTF-8\">
        <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"Trouvez des hébergements uniques à des prix incroyables. CozyTrip : Votre refuge douillet, réservé en un instant !\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 24
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 52
        echo "
    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MCR2W77F\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "        
     
   
    </body>      

        
    
</html>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Locations d'hébergements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "        ";
        // line 26
        echo "
       
       <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/logoo.png\" alt=\"icone\">
       


       <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
       <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\">
       <link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
       <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
       <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

       <link href= \"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/allhebergement.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/onehebergement.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mesreservations.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajouthebergement.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/monprofil.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">
       <link href= \"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/commentaire.css"), "html", null, true);
        echo "\" rel =\"stylesheet\">




        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>


  <script ";
        // line 69
        if (array_key_exists("csp_nonce", $context)) {
            echo "nonce=\"";
            echo twig_escape_filter($this->env, (isset($context["csp_nonce"]) || array_key_exists("csp_nonce", $context) ? $context["csp_nonce"] : (function () { throw new RuntimeError('Variable "csp_nonce" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">         
       const barreHamburger = document.querySelector(\".barre-hamburger\")
       const menuLinks = document.querySelector(\".menu-links\")
       barreHamburger.addEventListener('click',()=>{
       menuLinks.classList.toggle('mobile-menu')
       })
  </script>


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 69,  219 => 65,  212 => 64,  202 => 60,  195 => 59,  182 => 46,  178 => 45,  174 => 44,  170 => 43,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 38,  136 => 26,  134 => 25,  127 => 24,  114 => 17,  95 => 79,  92 => 64,  90 => 59,  81 => 52,  78 => 24,  69 => 17,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <!-- Protection XSS et sécurité -->
        <meta http-equiv=\"Content-Security-Policy\" content=\"
            default-src 'self';
            script-src 'self' {% if csp_nonce is defined %}'nonce-{{ csp_nonce }}'{% endif %} https://www.googletagmanager.com https://cdn.jsdelivr.net;
            style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com;
            img-src 'self' data: https:;
            font-src 'self' https://fonts.gstatic.com;
            frame-ancestors 'none';
        \">
        <meta http-equiv=\"X-XSS-Protection\" content=\"1; mode=block\">
        <meta http-equiv=\"X-Content-Type-Options\" content=\"nosniff\">

        <meta charset=\"UTF-8\">
        <title>{% block title %}Locations d'hébergements{% endblock %}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"Trouvez des hébergements uniques à des prix incroyables. CozyTrip : Votre refuge douillet, réservé en un instant !\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
        {# <link href= \"{{asset('css/styleSimplex.min.css')}}\" rel =\"stylesheet\"> #}

       
       <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/logoo.png\" alt=\"icone\">
       


       <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
       <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\">
       <link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
       <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
       <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

       <link href= \"{{asset('css/index.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/allhebergement.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/onehebergement.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/layout.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/footer.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/mesreservations.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/ajouthebergement.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/monprofil.css')}}\" rel =\"stylesheet\">
       <link href= \"{{asset('css/commentaire.css')}}\" rel =\"stylesheet\">




        {% endblock %}

    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MCR2W77F\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        {% block body %}



        {% endblock %}
    {% block javascripts %}

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>


  <script {% if csp_nonce is defined %}nonce=\"{{ csp_nonce }}\"{% endif %}>         
       const barreHamburger = document.querySelector(\".barre-hamburger\")
       const menuLinks = document.querySelector(\".menu-links\")
       barreHamburger.addEventListener('click',()=>{
       menuLinks.classList.toggle('mobile-menu')
       })
  </script>


        {% endblock %}
        
     
   
    </body>      

        
    
</html>




", "base.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\base.html.twig");
    }
}
