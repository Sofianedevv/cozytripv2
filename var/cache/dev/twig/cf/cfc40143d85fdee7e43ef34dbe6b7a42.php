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

/* user/mon-profil.html.twig */
class __TwigTemplate_448ba322cef995dbf5f38771cfbde70e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/mon-profil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "user/mon-profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"profile-card p-4 bg-light rounded shadow\">
                <h1 class=\"text-center mb-4\">Mes informations</h1>
                <div class=\"user-info text-center\">
                    ";
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "photo", [], "any", false, false, false, 12))) {
            // line 13
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "photo", [], "any", false, false, false, 13))), "html", null, true);
            echo "\" class=\"photomonprofil\" alt=\"photo de profil\">
                    <div class=\"mt-1\">
                        <a class=\"btn btnprofil\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.photo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">
                            Modifier la photo de profil
                        </a>
                    </div>
                    ";
        } else {
            // line 20
            echo "                     <div class=\"\">
                        <a class=\"btn btnprofil\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.photo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">
                            Ajouter une photo de profil
                        </a>
                    </div>

                    ";
        }
        // line 27
        echo "
                    <div class=\"info mt-3\">
                        <p><strong>Nom :</strong> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                        <p><strong>Prénom :</strong> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"info\">
                        <p><strong>Email :</strong> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
                        <p><strong>Pseudo :</strong> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "pseudo", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"text-center mt-4\">
                    <a class=\"btn btn-primary btn-block\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">
                        Modifier le profil
                    </a>
                    <a class=\"btn btn-secondary btn-block mt-3\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.password", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">
                        Modifier le mot de passe
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/mon-profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  134 => 38,  127 => 34,  123 => 33,  117 => 30,  113 => 29,  109 => 27,  100 => 21,  97 => 20,  89 => 15,  83 => 13,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Mon Profil{% endblock %}

{% block content %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"profile-card p-4 bg-light rounded shadow\">
                <h1 class=\"text-center mb-4\">Mes informations</h1>
                <div class=\"user-info text-center\">
                    {% if user.photo is not null %}
                        <img src=\"{{ asset('uploads/photos/' ~ user.photo ) }}\" class=\"photomonprofil\" alt=\"photo de profil\">
                    <div class=\"mt-1\">
                        <a class=\"btn btnprofil\" href=\"{{ path('user.edit.photo', {'id': user.id}) }}\">
                            Modifier la photo de profil
                        </a>
                    </div>
                    {% else %}
                     <div class=\"\">
                        <a class=\"btn btnprofil\" href=\"{{ path('user.edit.photo', {'id': user.id}) }}\">
                            Ajouter une photo de profil
                        </a>
                    </div>

                    {% endif %}

                    <div class=\"info mt-3\">
                        <p><strong>Nom :</strong> {{ user.nom }}</p>
                        <p><strong>Prénom :</strong> {{ user.prenom }}</p>
                    </div>
                    <div class=\"info\">
                        <p><strong>Email :</strong> {{ user.email }}</p>
                        <p><strong>Pseudo :</strong> {{ user.pseudo }}</p>
                    </div>
                </div>
                <div class=\"text-center mt-4\">
                    <a class=\"btn btn-primary btn-block\" href=\"{{ path('user.edit', {'id': user.id}) }}\">
                        Modifier le profil
                    </a>
                    <a class=\"btn btn-secondary btn-block mt-3\" href=\"{{ path('user.edit.password', {'id': user.id}) }}\">
                        Modifier le mot de passe
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "user/mon-profil.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\user\\mon-profil.html.twig");
    }
}
