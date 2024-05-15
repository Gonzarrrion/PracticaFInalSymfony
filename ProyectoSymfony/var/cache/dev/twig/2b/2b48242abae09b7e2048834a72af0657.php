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

/* listar_libros_bilioteca/index.html.twig */
class __TwigTemplate_5c81197e0a13f1b34d9cd6e5b6e88d28 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listar_libros_bilioteca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listar_libros_bilioteca/index.html.twig", 1);
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
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "nombre", [], "any", false, false, false, 10), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "        </select>
        <button type=\"submit\">Buscar</button>
    <h1>Listar Libros de la Biblioteca</h1>

    <ul>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 18
            yield "            <li>
                <h2>";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "titulo", [], "any", false, false, false, 19), "html", null, true);
            yield "</h2>
                <p>";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "autor", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            yield "            <li>No hay libros disponibles.</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "listar_libros_bilioteca/index.html.twig";
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
        return array (  131 => 25,  124 => 23,  116 => 20,  112 => 19,  109 => 18,  104 => 17,  97 => 12,  86 => 10,  82 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
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
                <option value=\"{{ biblioteca.id }}\">{{ biblioteca.nombre }}</option>
            {% endfor %}
        </select>
        <button type=\"submit\">Buscar</button>
    <h1>Listar Libros de la Biblioteca</h1>

    <ul>
        {% for libro in libros %}
            <li>
                <h2>{{ libro.titulo }}</h2>
                <p>{{ libro.autor }}</p>
            </li>
        {% else %}
            <li>No hay libros disponibles.</li>
        {% endfor %}
    </ul>
{% endblock %}
", "listar_libros_bilioteca/index.html.twig", "/Users/administrador/Desktop/git/PracticaFinalSymfony/ProyectoSymfony/templates/listar_libros_bilioteca/index.html.twig");
    }
}
