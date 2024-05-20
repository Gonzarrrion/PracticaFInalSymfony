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

/* funcionalidades/index.html.twig */
class __TwigTemplate_a4906af284c37a204eef512c6ef7672d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funcionalidades/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "funcionalidades/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Funcionalidades";
        
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
        yield "<h1>Funcionalidades</h1>

<div>
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir_nuevo_libro");
        yield "\" class=\"btn btn-success\">Añadir nuevo Libro</a>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insertar_biblioteca");
        yield "\" class=\"btn btn-success\">Añadir nueva Biblioteca</a>
</div>




<h2>Editar Libro</h2>
<form action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_libro", ["id" => "placeholder"]);
        yield "\" method=\"GET\" onsubmit=\"return setAction(this, 'libro')\">
    <label for=\"libroId\">ID del Libro:</label>
    <input type=\"text\" id=\"libroId\" name=\"id\" required>
    <button type=\"submit\" class=\"btn btn-primary\">Editar Libro</button>
</form>



<h2>Editar Biblioteca</h2>
<form action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_biblioteca", ["id" => "placeholder"]);
        yield "\" method=\"GET\" onsubmit=\"return setAction(this, 'biblioteca')\">
    <label for=\"bibliotecaId\">ID de la Biblioteca:</label>
    <input type=\"text\" id=\"bibliotecaId\" name=\"id\" required>
    <button type=\"submit\" class=\"btn btn-primary\">Editar Biblioteca</button>
</form>




<script>
function setAction(form, type) {
    const id = form.querySelector('input[name=\"id\"]').value;
    form.action = form.action.replace('placeholder', id);
    return true;
}
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "funcionalidades/index.html.twig";
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
        return array (  106 => 26,  94 => 17,  84 => 10,  80 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Funcionalidades{% endblock %}

{% block body %}
<h1>Funcionalidades</h1>

<div>
    <a href=\"{{ path('anadir_nuevo_libro') }}\" class=\"btn btn-success\">Añadir nuevo Libro</a>
    <a href=\"{{ path('insertar_biblioteca') }}\" class=\"btn btn-success\">Añadir nueva Biblioteca</a>
</div>




<h2>Editar Libro</h2>
<form action=\"{{ path('editar_libro', {'id': 'placeholder'}) }}\" method=\"GET\" onsubmit=\"return setAction(this, 'libro')\">
    <label for=\"libroId\">ID del Libro:</label>
    <input type=\"text\" id=\"libroId\" name=\"id\" required>
    <button type=\"submit\" class=\"btn btn-primary\">Editar Libro</button>
</form>



<h2>Editar Biblioteca</h2>
<form action=\"{{ path('editar_biblioteca', {'id': 'placeholder'}) }}\" method=\"GET\" onsubmit=\"return setAction(this, 'biblioteca')\">
    <label for=\"bibliotecaId\">ID de la Biblioteca:</label>
    <input type=\"text\" id=\"bibliotecaId\" name=\"id\" required>
    <button type=\"submit\" class=\"btn btn-primary\">Editar Biblioteca</button>
</form>




<script>
function setAction(form, type) {
    const id = form.querySelector('input[name=\"id\"]').value;
    form.action = form.action.replace('placeholder', id);
    return true;
}
</script>

{% endblock %}
", "funcionalidades/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/funcionalidades/index.html.twig");
    }
}
