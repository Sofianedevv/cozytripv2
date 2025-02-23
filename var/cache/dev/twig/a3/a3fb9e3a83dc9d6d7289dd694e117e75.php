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

/* herbergement/oneHebergement.html.twig */
class __TwigTemplate_5ff18cd34eb464481a6b1b3fbd2ad158 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "herbergement/oneHebergement.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "herbergement/oneHebergement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
<div class =\"container\">


    
            <div class=\"article-block \"> 

            <div id=\"carouselExampleCaptions\" class=\"carousel slide  mt-5 carrousselone\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-indicators\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 17, $this->source); })()), "photos", [], "any", false, false, false, 17));
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
            // line 18
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) == 1)) {
                // line 19
                echo "                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        ";
            } else {
                // line 21
                echo "                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21) - 1), "html", null, true);
                echo "\" aria-label=\"Slide ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
                echo "\"></button>
                            
                        ";
            }
            // line 24
            echo "
                        ";
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
        // line 26
        echo "                    </div>
                    <div class=\"carousel-inner\">

                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 29, $this->source); })()), "photos", [], "any", false, false, false, 29));
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
            echo "  
                        <div class=\"carousel-item ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) == 1)) {
                echo " active ";
            }
            echo "\">
                    
                            <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/hebergement/" . twig_get_attribute($this->env, $this->source, $context["photo"], "nom", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" class=\"d-block w-100 \" alt=\"photos de l'hébergement\" id =\"carousselimg\">

                        </div>
                        ";
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
        // line 36
        echo "                        
                    

                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>

                <div class=\"description\">
                    <h2>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 51, $this->source); })()), "titre", [], "any", false, false, false, 51), "html", null, true);
        echo "</h2>
                    <p class =\"onehebergementdescription\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    <h6>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 53, $this->source); })()), "prix", [], "any", false, false, false, 53), "html", null, true);
        echo "€/nuit</h6>

                    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_reserver", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">
                            <button class=\"btnone\">
                                Réserver
                            </button>  
                    </a>

                
                </div>
            </div>














                    ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 79
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new RuntimeError('Variable "formCommentaire" does not exist.', 79, $this->source); })()), 'form');
            echo "

            ";
        }
        // line 82
        echo "            <h3 class =\"titrecommentaire mt-5\"> Les avis de nos clients : </h3>    ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " ";
            // line 83
            echo "<p> (connectez-vous pour pouvoir commenter) </p>
";
        }
        // line 85
        echo "

            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 87, $this->source); })()), "commentaires", [], "any", false, false, false, 87)));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 88
            echo "            <div class = \"border-primary border rounded container mb-2\" > 

            ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90) == twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 90))) {
                // line 91
                echo "
            <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\" style=\"text-decoration: none\">
                <i class=\"fas fa-edit mx-1 text-primary\"></i>
            </a>
            
            <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                echo "\" onclick =\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ? ')\"  style=\"text-decoration: none\">
                <i class=\"fas fa-trash mx-1 text-danger\" style=\"text-decoration: none\"></i>
            </a>
            ";
            }
            // line 100
            echo "
            
            <span class=\"user-details\">
            ";
            // line 103
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 103), "photo", [], "any", false, false, false, 103))) {
                // line 104
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 104), "photo", [], "any", false, false, false, 104))), "html", null, true);
                echo "\" class=\"photoprofil\" alt=\"photo de profil\">
                ";
            }
            // line 106
            echo "
            <h6 class=\"nomcommentaire\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true);
            echo "</h6>
            </span>

            <p class=\"datecommentaire\"> ";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateCreation", [], "any", false, false, false, 110), "d/m/Y à H\\hi"), "html", null, true);
            echo " </p>
            <p>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 111), "html", null, true);
            echo " </p>

            </div>





</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "



































<!-- Gallery -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "herbergement/oneHebergement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 121,  316 => 111,  312 => 110,  306 => 107,  303 => 106,  297 => 104,  295 => 103,  290 => 100,  283 => 96,  276 => 92,  273 => 91,  271 => 90,  267 => 88,  263 => 87,  259 => 85,  255 => 83,  251 => 82,  244 => 79,  241 => 78,  215 => 55,  210 => 53,  206 => 52,  202 => 51,  185 => 36,  167 => 32,  160 => 30,  141 => 29,  136 => 26,  121 => 24,  112 => 21,  108 => 19,  105 => 18,  88 => 17,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
\t{{ hebergement.titre }}
{% endblock %}

{% block content %}

<div class =\"container\">


    
            <div class=\"article-block \"> 

            <div id=\"carouselExampleCaptions\" class=\"carousel slide  mt-5 carrousselone\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-indicators\">
                    {% for photo in hebergement.photos %}
                        {% if loop.index == 1 %}
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        {% else %}
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"{{loop.index - 1 }}\" aria-label=\"Slide {{ loop.index }}\"></button>
                            
                        {% endif %}

                        {% endfor %}
                    </div>
                    <div class=\"carousel-inner\">

                        {% for photo in hebergement.photos %}  
                        <div class=\"carousel-item {% if loop.index == 1 %} active {% endif %}\">
                    
                            <img src=\"{{asset('photos/hebergement/' ~ photo.nom )}}\" class=\"d-block w-100 \" alt=\"photos de l'hébergement\" id =\"carousselimg\">

                        </div>
                        {% endfor %}
                        
                    

                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>

                <div class=\"description\">
                    <h2>{{ hebergement.titre }}</h2>
                    <p class =\"onehebergementdescription\">{{ hebergement.description }}</p>
                    <h6>{{ hebergement.prix }}€/nuit</h6>

                    <a href=\"{{ path('reservation_reserver',{id: hebergement.id}) }}\">
                            <button class=\"btnone\">
                                Réserver
                            </button>  
                    </a>

                
                </div>
            </div>














                    {% if is_granted('IS_AUTHENTICATED_FULLY') %} {# si aucun utilisateur n'est authentifié #}
            {{ form(formCommentaire) }}

            {% endif %}
            <h3 class =\"titrecommentaire mt-5\"> Les avis de nos clients : </h3>    {% if not is_granted('IS_AUTHENTICATED_FULLY') %} {# si aucun utilisateur n'est authentifié #}
<p> (connectez-vous pour pouvoir commenter) </p>
{% endif %}


            {% for commentaire in hebergement.commentaires | reverse %}
            <div class = \"border-primary border rounded container mb-2\" > 

            {% if app.user == commentaire.user %}

            <a href=\"{{path('app_commentaire_modifier', {id: commentaire.id} ) }}\" style=\"text-decoration: none\">
                <i class=\"fas fa-edit mx-1 text-primary\"></i>
            </a>
            
            <a href=\"{{path('app_commentaire_supprimer', {id: commentaire.id} ) }}\" onclick =\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ? ')\"  style=\"text-decoration: none\">
                <i class=\"fas fa-trash mx-1 text-danger\" style=\"text-decoration: none\"></i>
            </a>
            {% endif %}

            
            <span class=\"user-details\">
            {% if commentaire.user.photo is not null %}
            <img src=\"{{ asset('uploads/photos/' ~ commentaire.user.photo ) }}\" class=\"photoprofil\" alt=\"photo de profil\">
                {% endif %}

            <h6 class=\"nomcommentaire\">{{ commentaire.user.nom }}</h6>
            </span>

            <p class=\"datecommentaire\"> {{commentaire.dateCreation | date('d/m/Y \\à H\\\\hi') }} </p>
            <p>{{commentaire.contenu}} </p>

            </div>





</div>
{% endfor %}




































<!-- Gallery -->{% endblock %}
", "herbergement/oneHebergement.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\herbergement\\oneHebergement.html.twig");
    }
}
