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
        yield "<div class=\"container\">
    <h1>Funcionalidades</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "        <div class=\"alert alert-success\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    <div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir_nuevo_libro");
        yield "\" class=\"btn btn-success\">Añadir nuevo Libro</a>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insertar_biblioteca");
        yield "\" class=\"btn btn-success\">Añadir nueva Biblioteca</a>
    </div>

    <h2>Editar Libro</h2>
    <form class=\"form\" id=\"editarLibroForm\" onsubmit=\"event.preventDefault(); editar('libro');\">
        <label class=\"labels\" for=\"libroId\">ID del libro:</label>
        <input class=\"inputs\" type=\"number\" id=\"libroId\" name=\"id\" placeholder=\"ID del libro\" required min=\"1\">
        <button type=\"submit\" class=\"btn btn-primary\">Editar</button>
    </form>

    <h2>Editar Biblioteca</h2>
    <form class=\"form\" id=\"editarBibliotecaForm\" onsubmit=\"event.preventDefault(); editar('biblioteca');\">
        <label class=\"labels\" for=\"bibliotecaId\">ID de la biblioteca:</label>
        <input class=\"inputs\" type=\"number\" id=\"bibliotecaId\" name=\"id\" placeholder=\"ID de la biblioteca\" required min=\"1\">
        <button type=\"submit\" class=\"btn btn-primary\">Editar</button>
    </form>
</div>
<script>
function editar(tipo) {
    var id = document.getElementById(tipo + 'Id').value;
    if (id <= 0 || isNaN(id)) {
        alert('Por favor, introduce un número entero positivo.');
        return;
    }
    window.location.href = '/editar/' + tipo + '/' + id;
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
        return array (  99 => 13,  95 => 12,  92 => 11,  83 => 9,  79 => 8,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Funcionalidades{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Funcionalidades</h1>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">{{ message }}</div>
    {% endfor %}
    <div>
        <a href=\"{{ path('anadir_nuevo_libro') }}\" class=\"btn btn-success\">Añadir nuevo Libro</a>
        <a href=\"{{ path('insertar_biblioteca') }}\" class=\"btn btn-success\">Añadir nueva Biblioteca</a>
    </div>

    <h2>Editar Libro</h2>
    <form class=\"form\" id=\"editarLibroForm\" onsubmit=\"event.preventDefault(); editar('libro');\">
        <label class=\"labels\" for=\"libroId\">ID del libro:</label>
        <input class=\"inputs\" type=\"number\" id=\"libroId\" name=\"id\" placeholder=\"ID del libro\" required min=\"1\">
        <button type=\"submit\" class=\"btn btn-primary\">Editar</button>
    </form>

    <h2>Editar Biblioteca</h2>
    <form class=\"form\" id=\"editarBibliotecaForm\" onsubmit=\"event.preventDefault(); editar('biblioteca');\">
        <label class=\"labels\" for=\"bibliotecaId\">ID de la biblioteca:</label>
        <input class=\"inputs\" type=\"number\" id=\"bibliotecaId\" name=\"id\" placeholder=\"ID de la biblioteca\" required min=\"1\">
        <button type=\"submit\" class=\"btn btn-primary\">Editar</button>
    </form>
</div>
<script>
function editar(tipo) {
    var id = document.getElementById(tipo + 'Id').value;
    if (id <= 0 || isNaN(id)) {
        alert('Por favor, introduce un número entero positivo.');
        return;
    }
    window.location.href = '/editar/' + tipo + '/' + id;
}
</script>
{% endblock %}
", "funcionalidades/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/funcionalidades/index.html.twig");
    }
}
