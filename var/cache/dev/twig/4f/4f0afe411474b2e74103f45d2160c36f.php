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

/* reservation/mes_reservations.html.twig */
class __TwigTemplate_f9cd4c6a90acff2e6f1b9855f9ace086 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/mes_reservations.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "reservation/mes_reservations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div class=\"container\">
               <h1 class=\"titremesreservations\">Mes réservations</h1>
                  ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 6, $this->source); })())) == 0)) {
            // line 7
            echo "                      <p>Aucune réservation pour le moment.</p>
                  ";
        } else {
            // line 9
            echo "                          <table class=\"table tablemesreservations\">
                            <thead>

                              <tr>
                                <th scope=\"col\">Hebergement</th>
                                <th scope=\"col\">Debut du séjour</th>
                                <th scope=\"col\">Fin du séjour</th>
                                <th scope=\"col\">Prix du séjour TTC</th>
                              </tr>


                            </thead>
                            <tbody>  
                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 23
                echo "
                                    <tr>
                                      <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "hebergement", [], "any", false, false, false, 25), "titre", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                                      <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
                echo "</td>
                                      <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
                echo "</td>
                                      <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getPrixTotal", [], "method", false, false, false, 28), "html", null, true);
                echo "€</td>
                                    </tr>  
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
                             </tbody>
                          </table>
          </div>

    ";
        }
        // line 37
        echo "























";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/mes_reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  113 => 31,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 23,  84 => 22,  69 => 9,  65 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block content %}
        <div class=\"container\">
               <h1 class=\"titremesreservations\">Mes réservations</h1>
                  {% if reservations|length == 0 %}
                      <p>Aucune réservation pour le moment.</p>
                  {% else %}
                          <table class=\"table tablemesreservations\">
                            <thead>

                              <tr>
                                <th scope=\"col\">Hebergement</th>
                                <th scope=\"col\">Debut du séjour</th>
                                <th scope=\"col\">Fin du séjour</th>
                                <th scope=\"col\">Prix du séjour TTC</th>
                              </tr>


                            </thead>
                            <tbody>  
                                {% for reservation in reservations %}

                                    <tr>
                                      <td>{{ reservation.hebergement.titre }}</td>
                                      <td>{{ reservation.dateDebut|date('d/m/Y') }}</td>
                                      <td>{{ reservation.dateFin|date('d/m/Y') }}</td>
                                      <td>{{ reservation.getPrixTotal() }}€</td>
                                    </tr>  
                                {% endfor %}

                             </tbody>
                          </table>
          </div>

    {% endif %}
























{% endblock %}", "reservation/mes_reservations.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\templates\\reservation\\mes_reservations.html.twig");
    }
}
