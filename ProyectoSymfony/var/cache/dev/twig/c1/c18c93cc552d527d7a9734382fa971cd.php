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

/* metodos_busqueda/index.html.twig */
class __TwigTemplate_75f17a31592c0adb83221c3423984f37 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metodos_busqueda/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metodos_busqueda/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Métodos de Búsqueda";
        
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
        yield "

<style>
    .btn-container {
        display: flex;
        flex-direction: column;
        align-items: start; 
        gap: 10px; 
        margin-top: 20px;
    }

</style>



<h1>Métodos de Búsqueda</h1>
<div class=\"btn-container\">
    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_biblioteca_ciudad");
        yield "\" class=\"btn btn-primary\">Buscar Biblioteca por Ciudad</a>
    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_biblioteca_nombre");
        yield "\" class=\"btn btn-primary\">Buscar Biblioteca por Nombre</a>
    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_autor_biblioteca");
        yield "\" class=\"btn btn-primary\">Buscar Libro por Autor en Biblioteca</a>
    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_editorial_biblioteca");
        yield "\" class=\"btn btn-primary\">Buscar Libro por Editorial en Biblioteca</a>
    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_titulo_biblioteca");
        yield "\" class=\"btn btn-primary\">Buscar Libro por Título en Biblioteca</a>
    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_titulo");
        yield "\" class=\"btn btn-primary\">Buscar Libro por Título</a>
    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_libro_titulo_disponibilidad");
        yield "\" class=\"btn btn-primary\">Buscar Libro por Título y Disponibilidad</a>
    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listar_bibliotecas");
        yield "\" class=\"btn btn-info\">Listar Todas las Bibliotecas</a>
    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listar_libros_biblioteca");
        yield "\" class=\"btn btn-info\">Listar Libros en Biblioteca</a>
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
        return "metodos_busqueda/index.html.twig";
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
        return array (  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Métodos de Búsqueda{% endblock %}

{% block body %}


<style>
    .btn-container {
        display: flex;
        flex-direction: column;
        align-items: start; 
        gap: 10px; 
        margin-top: 20px;
    }

</style>



<h1>Métodos de Búsqueda</h1>
<div class=\"btn-container\">
    <a href=\"{{ path('buscar_biblioteca_ciudad') }}\" class=\"btn btn-primary\">Buscar Biblioteca por Ciudad</a>
    <a href=\"{{ path('buscar_biblioteca_nombre') }}\" class=\"btn btn-primary\">Buscar Biblioteca por Nombre</a>
    <a href=\"{{ path('buscar_libro_autor_biblioteca') }}\" class=\"btn btn-primary\">Buscar Libro por Autor en Biblioteca</a>
    <a href=\"{{ path('buscar_libro_editorial_biblioteca') }}\" class=\"btn btn-primary\">Buscar Libro por Editorial en Biblioteca</a>
    <a href=\"{{ path('buscar_libro_titulo_biblioteca') }}\" class=\"btn btn-primary\">Buscar Libro por Título en Biblioteca</a>
    <a href=\"{{ path('buscar_libro_titulo') }}\" class=\"btn btn-primary\">Buscar Libro por Título</a>
    <a href=\"{{ path('buscar_libro_titulo_disponibilidad') }}\" class=\"btn btn-primary\">Buscar Libro por Título y Disponibilidad</a>
    <a href=\"{{ path('listar_bibliotecas') }}\" class=\"btn btn-info\">Listar Todas las Bibliotecas</a>
    <a href=\"{{ path('listar_libros_biblioteca') }}\" class=\"btn btn-info\">Listar Libros en Biblioteca</a>
</div>
{% endblock %}
", "metodos_busqueda/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/metodos_busqueda/index.html.twig");
    }
}
