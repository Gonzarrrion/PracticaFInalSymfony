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

/* buscar_libro_editorial_biblioteca/index.html.twig */
class __TwigTemplate_670285e0d227df84b23e8933d314b5d5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscar_libro_editorial_biblioteca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscar_libro_editorial_biblioteca/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Buscar Libro por Editorial y Biblioteca";
        
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
</style>
<div class=\"container\">
<h1>Buscar Libro por Editorial y Biblioteca</h1>

<form class=\"form\" method=\"get\" action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_editorial_biblioteca");
        yield "\">
    <label class=\"labels\" for=\"editorial\">Editorial:</label>
    <input class=\"inputs\" type=\"text\" id=\"editorial\" name=\"editorial\" required>

    <label class=\"labels\" for=\"nombreBiblioteca\">Biblioteca:</label>
    <input class=\"inputs\" type=\"text\" id=\"nombreBiblioteca\" name=\"nombreBiblioteca\" required>

    <button class=\"btn-primary btn\" type=\"submit\">Buscar</button>
</form>

";
        // line 37
        if (array_key_exists("libros", $context)) {
            // line 38
            yield "    <h2>Resultados:</h2>
    <ul>
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 40, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
                // line 41
                yield "            <li>Hay existencias de <b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "titulo", [], "any", false, false, false, 41), "html", null, true);
                yield "</b> de la editorial <b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "editorial", [], "any", false, false, false, 41), "html", null, true);
                yield "</b> en la biblioteca <b>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "biblioteca", [], "any", false, false, false, 41), "nombre", [], "any", false, false, false, 41), "html", null, true);
                yield "</b></li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 43
                yield "            <li>No hay libros disponibles.</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "    </ul>
";
        }
        // line 47
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscar_libro_editorial_biblioteca/index.html.twig";
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
        return array (  145 => 47,  141 => 45,  134 => 43,  122 => 41,  117 => 40,  113 => 38,  111 => 37,  98 => 27,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Buscar Libro por Editorial y Biblioteca{% endblock %}

{% block body %}
<style>
ul {
    list-style-type: none;
    padding: 0;
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
</style>
<div class=\"container\">
<h1>Buscar Libro por Editorial y Biblioteca</h1>

<form class=\"form\" method=\"get\" action=\"{{ path('buscar_libro_editorial_biblioteca') }}\">
    <label class=\"labels\" for=\"editorial\">Editorial:</label>
    <input class=\"inputs\" type=\"text\" id=\"editorial\" name=\"editorial\" required>

    <label class=\"labels\" for=\"nombreBiblioteca\">Biblioteca:</label>
    <input class=\"inputs\" type=\"text\" id=\"nombreBiblioteca\" name=\"nombreBiblioteca\" required>

    <button class=\"btn-primary btn\" type=\"submit\">Buscar</button>
</form>

{% if libros is defined %}
    <h2>Resultados:</h2>
    <ul>
        {% for libro in libros %}
            <li>Hay existencias de <b>{{ libro.titulo }}</b> de la editorial <b>{{ libro.editorial }}</b> en la biblioteca <b>{{ libro.biblioteca.nombre }}</b></li>
        {% else %}
            <li>No hay libros disponibles.</li>
        {% endfor %}
    </ul>
{% endif %}
</div>
{% endblock %}", "buscar_libro_editorial_biblioteca/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/buscar_libro_editorial_biblioteca/index.html.twig");
    }
}
