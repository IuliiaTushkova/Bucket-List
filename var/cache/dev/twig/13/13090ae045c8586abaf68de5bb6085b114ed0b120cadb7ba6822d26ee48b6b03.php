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

/* idea/list.html.twig */
class __TwigTemplate_a22f4bddd438d27919741f121f1cbddf0a1c6554d23c99ae12fabc4e4001e42e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "idea/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "idea/list.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "idea/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " width-100 font-size-text\" role=\"alert\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <ul class=\"padding-top font-size-text\">
       ";
        // line 23
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "ideas", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["idea"]) {
                // line 25
                echo "                <li class=\"list-ideas\">
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("idea_details", ["id" => twig_get_attribute($this->env, $this->source, $context["idea"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["idea"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_one", ["id" => twig_get_attribute($this->env, $this->source, $context["idea"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" class=\"btn-delete\">Supprimer</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idea'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "ideas", [], "any", false, false, false, 32) == null)) {
            // line 33
            echo "            <div class=\"padding-top width-100 font-size-text\">
                <p>La liste des idées est vide!</p>
                <p>Tu peux clicker sur \"Ajouter une idée\" en bas de la page si tu souhaites commencer ta liste!</p>
            </div>
        ";
        }
        // line 38
        echo "    </ul>
    ";
        // line 40
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "ideas", [], "any", false, false, false, 40)) {
            // line 41
            echo "    <div class=\"width-100 padding-top\">
        <button type=\"button\" id=\"delete\" class=\"btn btn-outline-danger\">
            <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_all");
            echo "\">Supprimer tout</a>
        </button>
        <button type=\"button\" id=\"sort\" class=\"btn btn-info\">
            <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sort_by_category");
            echo "\">Trier par catégorie</a>
        </button>
    </div>

    ";
        }
        // line 51
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "idea/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  161 => 46,  155 => 43,  151 => 41,  148 => 40,  145 => 38,  138 => 33,  135 => 32,  133 => 31,  130 => 30,  121 => 27,  115 => 26,  112 => 25,  107 => 24,  104 => 23,  100 => 12,  94 => 11,  85 => 8,  80 => 7,  75 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
    {# --------------- Add flush -------------------- #}
    {% for label, messages in app.flashes('success') %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} width-100 font-size-text\" role=\"alert\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <ul class=\"padding-top font-size-text\">
       {#
        {% for idea in ideas %}
                <li class=\"list-ideas\">
                    <a href=\"{{ path('idea_details', {'id': idea.id}) }}\">{{idea.title}}</a>
                    <a href=\"{{ path('remove_one', {'id': idea.id}) }}\" class=\"btn-delete\">Supprimer</a>
                </li>

        {% endfor %}
       #}
        {% if app.user %}
            {% for idea in app.user.ideas %}
                <li class=\"list-ideas\">
                    <a href=\"{{ path('idea_details', {'id': idea.id}) }}\">{{idea.title}}</a>
                    <a href=\"{{ path('remove_one', {'id': idea.id}) }}\" class=\"btn-delete\">Supprimer</a>
                </li>
            {% endfor %}
        {% endif %}
        {# -------------------------  Si la liste des idées est vide  -------------------------------- #}
        {% if app.user.ideas == null %}
            <div class=\"padding-top width-100 font-size-text\">
                <p>La liste des idées est vide!</p>
                <p>Tu peux clicker sur \"Ajouter une idée\" en bas de la page si tu souhaites commencer ta liste!</p>
            </div>
        {% endif %}
    </ul>
    {# -------------------------  Btn suppression | Btn sort by categorie  -------------------------------- #}
    {% if app.user.ideas %}
    <div class=\"width-100 padding-top\">
        <button type=\"button\" id=\"delete\" class=\"btn btn-outline-danger\">
            <a href=\"{{ path('remove_all') }}\">Supprimer tout</a>
        </button>
        <button type=\"button\" id=\"sort\" class=\"btn btn-info\">
            <a href=\"{{ path('sort_by_category') }}\">Trier par catégorie</a>
        </button>
    </div>

    {% endif %}


{% endblock %}


", "idea/list.html.twig", "C:\\wamp64\\www\\TP\\templates\\idea\\list.html.twig");
    }
}
