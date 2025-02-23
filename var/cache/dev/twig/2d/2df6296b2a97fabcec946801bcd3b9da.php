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

/* reservation/reserver.html.twig */
class __TwigTemplate_c1128d36a8c26c68578f5114f2d79d78 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reserver.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "reservation/reserver.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réserver";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo " <div class=\"container\">
        <h1 class=\"mt-5\">Réserver</h1>

             ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
             ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'widget');
        echo "
              ";
        // line 11
        if (array_key_exists("prixTotalField", $context)) {
            // line 12
            echo "                 ";
            $context["prixTotalRender"] = twig_get_attribute($this->env, $this->source, (isset($context["prixTotalField"]) || array_key_exists("prixTotalField", $context) ? $context["prixTotalField"] : (function () { throw new RuntimeError('Variable "prixTotalField" does not exist.', 12, $this->source); })()), "render", [], "any", false, false, false, 12);
            // line 13
            echo "             ";
        }
        // line 14
        echo "             ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
             ";
        // line 15
        if (array_key_exists("prixTotalRender", $context)) {
            // line 16
            echo "                 ";
            echo twig_escape_filter($this->env, (isset($context["prixTotalRender"]) || array_key_exists("prixTotalRender", $context) ? $context["prixTotalRender"] : (function () { throw new RuntimeError('Variable "prixTotalRender" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "
             ";
        }
        // line 18
        echo "
             ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        const dateDebutField = document.querySelector('#reservation_dateDebut');
        const dateFinField = document.querySelector('#reservation_dateFin');
        const prixTotalField = document.querySelector('#reservation_prixTotal');
        const prixTotalDiv = document.querySelector('#prixTotal');

        const updatePrixTotal = () => {
            const dateDebut = new Date(dateDebutField.value);
            const dateFin = new Date(dateFinField.value);
            const difference = dateFin.getTime() - dateDebut.getTime();

            //j'utilise (1000 * 3600 * 24) pour convertir la différence de temps en millisecondes en une différence en jours.
            const differenceEnJours = difference / (1000 * 3600 * 24);
            const prixTotal = differenceEnJours * ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 40, $this->source); })()), "prix", [], "any", false, false, false, 40), "html", null, true);
        echo ";

            prixTotalField.value = prixTotal.toFixed(2);

            // met à jour la valeur de l'élément HTM, tofixed permet d'arrondir le prix a deux décimal
            prixTotalDiv.innerHTML = `Prix total: \${prixTotal.toFixed(2)} €`;
        };

        dateDebutField.addEventListener('change', updatePrixTotal);
        dateFinField.addEventListener('change', updatePrixTotal);
        updatePrixTotal();
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  128 => 26,  121 => 25,  111 => 19,  108 => 18,  102 => 16,  100 => 15,  95 => 14,  92 => 13,  89 => 12,  87 => 11,  83 => 10,  79 => 9,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Réserver{% endblock %}

{% block content %}
 <div class=\"container\">
        <h1 class=\"mt-5\">Réserver</h1>

             {{ form_start(form) }}
             {{ form_widget(form) }}
              {% if prixTotalField is defined %}
                 {% set prixTotalRender = prixTotalField.render %}
             {% endif %}
             {{ form_end(form) }}
             {% if prixTotalRender is defined %}
                 {{ prixTotalRender }}
             {% endif %}

             {{ form_end(form) }}
   </div>
{% endblock %}



{% block javascripts %}
    {{ parent() }}
    <script>
        const dateDebutField = document.querySelector('#reservation_dateDebut');
        const dateFinField = document.querySelector('#reservation_dateFin');
        const prixTotalField = document.querySelector('#reservation_prixTotal');
        const prixTotalDiv = document.querySelector('#prixTotal');

        const updatePrixTotal = () => {
            const dateDebut = new Date(dateDebutField.value);
            const dateFin = new Date(dateFinField.value);
            const difference = dateFin.getTime() - dateDebut.getTime();

            //j'utilise (1000 * 3600 * 24) pour convertir la différence de temps en millisecondes en une différence en jours.
            const differenceEnJours = difference / (1000 * 3600 * 24);
            const prixTotal = differenceEnJours * {{ hebergement.prix }};

            prixTotalField.value = prixTotal.toFixed(2);

            // met à jour la valeur de l'élément HTM, tofixed permet d'arrondir le prix a deux décimal
            prixTotalDiv.innerHTML = `Prix total: \${prixTotal.toFixed(2)} €`;
        };

        dateDebutField.addEventListener('change', updatePrixTotal);
        dateFinField.addEventListener('change', updatePrixTotal);
        updatePrixTotal();
    </script>
{% endblock %}
", "reservation/reserver.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\reservation\\reserver.html.twig");
    }
}
