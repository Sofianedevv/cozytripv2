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

/* @KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig */
class __TwigTemplate_fd344fe144a3a9c39a7a23b26bbeeb04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig"));

        // line 9
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">
    <div class=\"input-group mb-3\">
        ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })())) > 1)) {
            // line 12
            echo "            <select class=\"form-select\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 14
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "\"";
                if (((isset($context["selectedField"]) || array_key_exists("selectedField", $context) ? $context["selectedField"] : (function () { throw new RuntimeError('Variable "selectedField" does not exist.', 14, $this->source); })()) == $context["field"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </select>
        ";
        } else {
            // line 18
            echo "            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()))), "html", null, true);
            echo "\"/>
        ";
        }
        // line 20
        echo "        <input class=\"form-control\" type=\"search\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) || array_key_exists("filterValueName", $context) ? $context["filterValueName"] : (function () { throw new RuntimeError('Variable "filterValueName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\"
               placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_searchword", [], "KnpPaginatorBundle"), "html", null, true);
        echo "\"/>
        <button class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), "button", [], "any", false, false, false, 22), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  91 => 21,  84 => 20,  76 => 18,  72 => 16,  57 => 14,  53 => 13,  48 => 12,  46 => 11,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap v5 Filter control implementation.
 *
 * View that can be used with the filter module
 */
#}
<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">
    <div class=\"input-group mb-3\">
        {% if fields|length > 1 %}
            <select class=\"form-select\" name=\"{{ filterFieldName }}\">
                {% for field, label in fields %}
                    <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
                {% endfor %}
            </select>
        {% else %}
            <input type=\"hidden\" name=\"{{ filterFieldName }}\" value=\"{{ fields|keys|first }}\"/>
        {% endif %}
        <input class=\"form-control\" type=\"search\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\"
               placeholder=\"{{ 'filter_searchword'|trans({}, 'KnpPaginatorBundle') }}\"/>
        <button class=\"btn btn-primary\">{{ options.button }}</button>
    </div>
</form>
", "@KnpPaginator/Pagination/bootstrap_v5_filtration.html.twig", "C:\\Users\\Sofia\\Downloads\\Cozytrip-master\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_filtration.html.twig");
    }
}
