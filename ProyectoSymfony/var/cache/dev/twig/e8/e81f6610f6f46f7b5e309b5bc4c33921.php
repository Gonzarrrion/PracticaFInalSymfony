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

/* buscar_libro_titulo/index.html.twig */
class __TwigTemplate_504a82c8f58be70785ec5f3e5cfee72c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscar_libro_titulo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscar_libro_titulo/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Buscar Libro por Título";
        
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
        yield "<style>
ul {
    list-style-type: none;
    padding: 0;
}
.container{
    overflow-y: auto;
}
li {
    list-style-type: none;
    padding: 0;
    margin-bottom: 1em;
}
div {
    margin-bottom: 1em;
}
.inputs{
    margin-right: 20px;
}
h2{
    margin-top: 40px
}
</style>

<div class=\"container\">
    <h1>Buscar Libro por Título</h1>

    <form class=\"form\" action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_titulo");
        yield "\" method=\"post\">
        <label class=\"labels\" for=\"titulo\">Título:</label>
        <input class=\"inputs\" type=\"text\" id=\"titulo\" name=\"titulo\" required>
        <button class=\"btn-primary btn\" type=\"submit\">Buscar</button>
    </form>

    <ul>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 41
            yield "            <li>
                <h2>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "titulo", [], "any", false, false, false, 42), "html", null, true);
            yield "</h2>
                <p><b>Autor:</b> ";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "autor", [], "any", false, false, false, 43), "html", null, true);
            yield "</p>
                <p><b>ISBN:</b> ";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "isbn", [], "any", false, false, false, 44), "html", null, true);
            yield "</p>
                <p><b>Biblioteca:</b> ";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "biblioteca", [], "any", false, false, false, 45), "nombre", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            yield "            <li><p>No hay libros disponibles.</p></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscar_libro_titulo/index.html.twig";
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
        return array (  149 => 50,  142 => 48,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  119 => 41,  114 => 40,  104 => 33,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Buscar Libro por Título{% endblock %}

{% block body %}
<style>
ul {
    list-style-type: none;
    padding: 0;
}
.container{
    overflow-y: auto;
}
li {
    list-style-type: none;
    padding: 0;
    margin-bottom: 1em;
}
div {
    margin-bottom: 1em;
}
.inputs{
    margin-right: 20px;
}
h2{
    margin-top: 40px
}
</style>

<div class=\"container\">
    <h1>Buscar Libro por Título</h1>

    <form class=\"form\" action=\"{{ path('buscar_libro_titulo') }}\" method=\"post\">
        <label class=\"labels\" for=\"titulo\">Título:</label>
        <input class=\"inputs\" type=\"text\" id=\"titulo\" name=\"titulo\" required>
        <button class=\"btn-primary btn\" type=\"submit\">Buscar</button>
    </form>

    <ul>
        {% for libro in libros %}
            <li>
                <h2>{{ libro.titulo }}</h2>
                <p><b>Autor:</b> {{ libro.autor }}</p>
                <p><b>ISBN:</b> {{ libro.isbn }}</p>
                <p><b>Biblioteca:</b> {{ libro.biblioteca.nombre }}</p>
            </li>
        {% else %}
            <li><p>No hay libros disponibles.</p></li>
        {% endfor %}
    </ul>
</div>
{% endblock %}", "buscar_libro_titulo/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/buscar_libro_titulo/index.html.twig");
    }
}
