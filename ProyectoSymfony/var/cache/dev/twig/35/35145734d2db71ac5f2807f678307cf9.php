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

/* buscar_libro_titulo_disponibilidad/index.html.twig */
class __TwigTemplate_8879d30ba55bae323db6ee2e0bdc5e70 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscar_libro_titulo_disponibilidad/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscar_libro_titulo_disponibilidad/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Buscar libros";
        
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
    <h1>Buscar libros por Título y Disponibilidad</h1>

    <form class=\"form\" action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_titulo_disponibilidad");
        yield "\" method=\"post\">
        <label class=\"labels\" for=\"titulo\">Título del libro:</label>
        <input class=\"inputs\" type=\"text\" id=\"titulo\" name=\"titulo\" required>
        <input class=\"btn-primary btn\" type=\"submit\" value=\"Buscar\">
    </form>
    
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["titulo"] => $context["bibliotecas"]) {
            // line 34
            yield "        <h2>";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["titulo"], "html", null, true);
            yield "</h2>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["bibliotecas"]);
            foreach ($context['_seq'] as $context["nombreBiblioteca"] => $context["libro"]) {
                // line 36
                yield "            <b><p>Biblioteca:</b> ";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["nombreBiblioteca"], "html", null, true);
                yield "</p>
            <b><p>Número de ejemplares:</b> ";
                // line 37
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "num_ejemplares", [], "any", false, false, false, 37), "html", null, true);
                yield "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['nombreBiblioteca'], $context['libro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            yield "        <p>No se encontraron libros.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['titulo'], $context['bibliotecas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "buscar_libro_titulo_disponibilidad/index.html.twig";
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
        return array (  146 => 42,  139 => 40,  134 => 39,  126 => 37,  121 => 36,  117 => 35,  112 => 34,  107 => 33,  98 => 27,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Buscar libros{% endblock %}

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
    <h1>Buscar libros por Título y Disponibilidad</h1>

    <form class=\"form\" action=\"{{ path('buscar_libro_titulo_disponibilidad') }}\" method=\"post\">
        <label class=\"labels\" for=\"titulo\">Título del libro:</label>
        <input class=\"inputs\" type=\"text\" id=\"titulo\" name=\"titulo\" required>
        <input class=\"btn-primary btn\" type=\"submit\" value=\"Buscar\">
    </form>
    
    {% for titulo, bibliotecas in libros %}
        <h2>{{ titulo }}</h2>
        {% for nombreBiblioteca, libro in bibliotecas %}
            <b><p>Biblioteca:</b> {{ nombreBiblioteca }}</p>
            <b><p>Número de ejemplares:</b> {{ libro.num_ejemplares }}</p>
        {% endfor %}
    {% else %}
        <p>No se encontraron libros.</p>
    {% endfor %}
</div>
{% endblock %}", "buscar_libro_titulo_disponibilidad/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/buscar_libro_titulo_disponibilidad/index.html.twig");
    }
}
