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

/* buscar_libro_autor_biblioteca/index.html.twig */
class __TwigTemplate_09bd1c94082f388a2e572f547aa81a18 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscar_libro_autor_biblioteca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscar_libro_autor_biblioteca/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Buscar Libro por Autor y Biblioteca";
        
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
        yield "<h1>Buscar Libro por Autor y Biblioteca</h1>

<form method=\"get\" action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_autor_biblioteca");
        yield "\">
    <label for=\"autor\">Autor:</label>
    <input type=\"text\" id=\"autor\" name=\"autor\" required>

    <label for=\"nombreBiblioteca\">Biblioteca:</label>
    <input type=\"text\" id=\"nombreBiblioteca\" name=\"nombreBiblioteca\" required>

    <button type=\"submit\">Buscar</button>
</form>

";
        // line 18
        if (array_key_exists("libros", $context)) {
            // line 19
            yield "    <h2>Resultados:</h2>
    <ul>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 21, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
                // line 22
                yield "            <li>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "titulo", [], "any", false, false, false, 22), "html", null, true);
                yield " por ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "autor", [], "any", false, false, false, 22), "html", null, true);
                yield " en ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "biblioteca", [], "any", false, false, false, 22), "nombre", [], "any", false, false, false, 22), "html", null, true);
                yield "</li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 24
                yield "            <li>No hay libros disponibles.</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "    </ul>
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
        return "buscar_libro_autor_biblioteca/index.html.twig";
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
        return array (  122 => 26,  115 => 24,  103 => 22,  98 => 21,  94 => 19,  92 => 18,  79 => 8,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Buscar Libro por Autor y Biblioteca{% endblock %}

{% block body %}
<h1>Buscar Libro por Autor y Biblioteca</h1>

<form method=\"get\" action=\"{{ path('buscar_libro_autor_biblioteca') }}\">
    <label for=\"autor\">Autor:</label>
    <input type=\"text\" id=\"autor\" name=\"autor\" required>

    <label for=\"nombreBiblioteca\">Biblioteca:</label>
    <input type=\"text\" id=\"nombreBiblioteca\" name=\"nombreBiblioteca\" required>

    <button type=\"submit\">Buscar</button>
</form>

{% if libros is defined %}
    <h2>Resultados:</h2>
    <ul>
        {% for libro in libros %}
            <li>{{ libro.titulo }} por {{ libro.autor }} en {{ libro.biblioteca.nombre }}</li>
        {% else %}
            <li>No hay libros disponibles.</li>
        {% endfor %}
    </ul>
{% endif %}
{% endblock %}", "buscar_libro_autor_biblioteca/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/buscar_libro_autor_biblioteca/index.html.twig");
    }
}
