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

/* herbergement/allhebergements.html.twig */
class __TwigTemplate_bece2d56628b2c375dc764a55fd02634 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "herbergement/allhebergements.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "herbergement/allhebergements.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "all products";
        
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

\t
\t\t\t<div class=\"text-center mt-5 mb-5 \">
\t\t\t\t<div class=\"barrecategorie\">
\t\t\t\t\t<ul class=\"cateresp \">
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        echo "\">
\t\t\t\t\t\t\t<li class=\"btn btn-primary text-center m-\">All</li>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            echo "\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<li class=\" btn btn-primary text-center m-2\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>



\t\t\t<div class =\"heb \"> 

\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 34
            echo "
\t\t\t\t
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["hebergement"], "photos", [], "any", false, false, false, 37));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 38
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" style=\"text-decoration: none; color : black\">
\t\t\t\t\t\t\t\t\t";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/hebergement/" . twig_get_attribute($this->env, $this->source, $context["photo"], "nom", [], "any", false, false, false, 42))), "html", null, true);
                    echo "\" class = \"imgheb\" alt=\"photo de l'hebergement\">
\t\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t\t<span class=\"titreetaddresse\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "titre", [], "any", false, false, false, 45), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "adresse", [], "any", false, false, false, 45), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "pays", [], "any", false, false, false, 45), "html", null, true);
            echo " </h3> <p class = \"ville\"></p></span>
\t\t\t\t\t\t\t<p><span class =\"price\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "prix", [], "any", false, false, false, 46), "html", null, true);
            echo "€ / nuit</span> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class = \"btncard\"><a class=\" btn btn-secondary btnvoir\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" style=\"text-decoration: none\"><i class=\"fa-regular fa-eye \"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 51
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                echo " 

\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btnupdate\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_update", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" style=\"text-decoration: none\"><i class=\"fa-regular fa-pen-to-square\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btndelete\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" style=\"text-decoration: none\" onclick=\"return confirm('êtes vous sûr de vouloir supprmier l\\'article ?')\" > <i class=\"fa-solid fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 58
            echo " </span></p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
\t\t\t</div>

\t\t
\t

































";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "herbergement/allhebergements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 63,  213 => 58,  207 => 56,  201 => 53,  196 => 51,  190 => 48,  185 => 46,  176 => 45,  162 => 44,  157 => 42,  153 => 40,  151 => 39,  146 => 38,  129 => 37,  124 => 34,  120 => 33,  107 => 22,  97 => 18,  92 => 17,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}all products{% endblock %}

{% block content %}


\t
\t\t\t<div class=\"text-center mt-5 mb-5 \">
\t\t\t\t<div class=\"barrecategorie\">
\t\t\t\t\t<ul class=\"cateresp \">
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{path('app_hebergements')}}\">
\t\t\t\t\t\t\t<li class=\"btn btn-primary text-center m-\">All</li>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t{% for categorie in categories %}
\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{path('app_hebergement_categorie', {slug: categorie.slug})}}\">
\t\t\t\t\t\t\t\t\t<li class=\" btn btn-primary text-center m-2\">{{categorie.nom}}</li>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>



\t\t\t<div class =\"heb \"> 

\t\t\t\t{% for hebergement in hebergements %}

\t\t\t\t
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t{% for photo in hebergement.photos %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_hebergement',{id: hebergement.id}) }}\" style=\"text-decoration: none; color : black\">
\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"{{ asset('photos/hebergement/' ~ photo.nom ) }}\" class = \"imgheb\" alt=\"photo de l'hebergement\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<span class=\"titreetaddresse\"><h3>{{ hebergement.titre }}, {{  hebergement.adresse }}, {{  hebergement.pays }} </h3> <p class = \"ville\"></p></span>
\t\t\t\t\t\t\t<p><span class =\"price\">{{ hebergement.prix }}€ / nuit</span> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class = \"btncard\"><a class=\" btn btn-secondary btnvoir\" href=\"{{ path('app_hebergement',{id: hebergement.id}) }}\" style=\"text-decoration: none\"><i class=\"fa-regular fa-eye \"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') and is_granted('ROLE_ADMIN')  %} 

\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btnupdate\" href=\"{{ path('app_hebergement_update', {id: hebergement.id}) }}\" style=\"text-decoration: none\"><i class=\"fa-regular fa-pen-to-square\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger btndelete\" href=\"{{ path('app_hebergement_delete', {id: hebergement.id}) }}\" style=\"text-decoration: none\" onclick=\"return confirm('êtes vous sûr de vouloir supprmier l\\'article ?')\" > <i class=\"fa-solid fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} </span></p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
</a>
\t\t\t\t{% endfor %}

\t\t\t</div>

\t\t
\t

































{% endblock %}

", "herbergement/allhebergements.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\herbergement\\allhebergements.html.twig");
    }
}
