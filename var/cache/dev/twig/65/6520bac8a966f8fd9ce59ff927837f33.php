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

/* commentaire/allCommentaire.html.twig */
class __TwigTemplate_d915709c763b6a51e10941afa48015c9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/allCommentaire.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "commentaire/allCommentaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les commentaires";
        
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
<h1>Liste des commentaires : </h1>

<table class=\"table text-center\">
    <thead class=\"thead-dark\">
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["commentaires"]);
        foreach ($context['_seq'] as $context["_key"] => $context["commentaires"]) {
            // line 18
            echo "            <tr>
               <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaires"], "contenu", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
               <td>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaires", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaires"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" style=\"text-decoration: none\">
                        <i class=\"fas fa-eye mx-1 text-success\"></i>
                    </a>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaires"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" style=\"text-decoration: none\">
                        <i class=\"fas fa-edit mx-1 text-primary\"></i>
                    </a>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaires"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer l\\'categorie ?')\" >
                        <i class=\"fas fa-trash mx-1 text-danger\" style=\"text-decoration: none\"></i>
                    </a>
               </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaires'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/allCommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  110 => 27,  104 => 24,  98 => 21,  93 => 19,  90 => 18,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Les commentaires{% endblock %}

{% block content %}

<h1>Liste des commentaires : </h1>

<table class=\"table text-center\">
    <thead class=\"thead-dark\">
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr
    </thead>
    <tbody>
        {% for commentaires in commentaires %}
            <tr>
               <td>{{ commentaires.contenu }}</td>
               <td>
                    <a href=\"{{ path('app_commentaires', {id: commentaires.id}) }}\" style=\"text-decoration: none\">
                        <i class=\"fas fa-eye mx-1 text-success\"></i>
                    </a>
                    <a href=\"{{ path('app_categorie_modifier', {id: commentaires.id}) }}\" style=\"text-decoration: none\">
                        <i class=\"fas fa-edit mx-1 text-primary\"></i>
                    </a>
                    <a href=\"{{ path('app_categorie_supprimer', {id: commentaires.id}) }}\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer l\\'categorie ?')\" >
                        <i class=\"fas fa-trash mx-1 text-danger\" style=\"text-decoration: none\"></i>
                    </a>
               </td>
            </tr>
        {% endfor %}
    </tbody>
</table>


{% endblock %}", "commentaire/allCommentaire.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\commentaire\\allCommentaire.html.twig");
    }
}
