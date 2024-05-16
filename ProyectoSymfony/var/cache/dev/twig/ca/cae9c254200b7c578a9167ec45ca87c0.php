<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* listar_libros_biblioteca/index.html.twig */
class __TwigTemplate_79237ec7b7d417d2f898d9377f688a29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listar_libros_biblioteca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listar_libros_biblioteca/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Listar Libros de la Biblioteca";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listar_libros_biblioteca");
        yield "\" method=\"get\">
        <label for=\"biblioteca\">Biblioteca:</label>
        <select id=\"biblioteca\" name=\"biblioteca\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bibliotecas"]) || array_key_exists("bibliotecas", $context) ? $context["bibliotecas"] : (function () { throw new RuntimeError('Variable "bibliotecas" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["biblioteca"]) {
            // line 10
            yield "                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "id", [], "any", false, false, false, 10), "html", null, true);
            yield "\" ";
            if (($context["biblioteca"] && (CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "id", [], "any", false, false, false, 10) == CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "id", [], "any", false, false, false, 10)))) {
                yield "selected";
            }
            yield ">
                    ";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "nombre", [], "any", false, false, false, 11), "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "            
        </select>
        <button type=\"submit\">Buscar</button>
    </form>





    ";
        // line 23
        if ((isset($context["biblioteca"]) || array_key_exists("biblioteca", $context) ? $context["biblioteca"] : (function () { throw new RuntimeError('Variable "biblioteca" does not exist.', 23, $this->source); })())) {
            // line 24
            yield "        <h1>Listar Libros de la ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["biblioteca"]) || array_key_exists("biblioteca", $context) ? $context["biblioteca"] : (function () { throw new RuntimeError('Variable "biblioteca" does not exist.', 24, $this->source); })()), "nombre", [], "any", false, false, false, 24), "html", null, true);
            yield "</h1>
        <ul>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 26, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
                // line 27
                yield "                <li>
                    <h2>";
                // line 28
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "titulo", [], "any", false, false, false, 28), "html", null, true);
                yield "</h2>
                    <p>";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "autor", [], "any", false, false, false, 29), "html", null, true);
                yield "</p>
                    <form action=\"";
                // line 30
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar_libro", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" method=\"post\">
                        <input type=\"hidden\" name=\"biblioteca_id\" value=\"";
                // line 31
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["biblioteca"]) || array_key_exists("biblioteca", $context) ? $context["biblioteca"] : (function () { throw new RuntimeError('Variable "biblioteca" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Borrar</button>
                    </form>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                yield "                <li>No hay libros disponibles.</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "listar_libros_biblioteca/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  160 => 38,  153 => 36,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  128 => 27,  123 => 26,  117 => 24,  115 => 23,  104 => 14,  95 => 11,  86 => 10,  82 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listar Libros de la Biblioteca{% endblock %}

{% block body %}
    <form action=\"{{ path('listar_libros_biblioteca') }}\" method=\"get\">
        <label for=\"biblioteca\">Biblioteca:</label>
        <select id=\"biblioteca\" name=\"biblioteca\">
            {% for biblioteca in bibliotecas %}
                <option value=\"{{ biblioteca.id }}\" {% if biblioteca and biblioteca.id == biblioteca.id %}selected{% endif %}>
                    {{ biblioteca.nombre }}
                </option>
            {% endfor %}
            
        </select>
        <button type=\"submit\">Buscar</button>
    </form>





    {% if biblioteca %}
        <h1>Listar Libros de la {{ biblioteca.nombre }}</h1>
        <ul>
            {% for libro in libros %}
                <li>
                    <h2>{{ libro.titulo }}</h2>
                    <p>{{ libro.autor }}</p>
                    <form action=\"{{ path('borrar_libro', {'id': libro.id}) }}\" method=\"post\">
                        <input type=\"hidden\" name=\"biblioteca_id\" value=\"{{ biblioteca.id }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Borrar</button>
                    </form>
                </li>
            {% else %}
                <li>No hay libros disponibles.</li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}
", "listar_libros_biblioteca/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/listar_libros_biblioteca/index.html.twig");
    }
}
