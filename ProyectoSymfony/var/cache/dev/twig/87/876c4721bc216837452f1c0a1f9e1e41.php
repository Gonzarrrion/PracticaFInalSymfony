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

/* buscar_biblioteca_nombre/index.html.twig */
class __TwigTemplate_14d4b45efbbc336221e8cf987ebeb88f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscar_biblioteca_nombre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscar_biblioteca_nombre/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Buscar Biblioteca por Nombre ";
        
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
}
div {
    margin-bottom: 1em;
}
</style>
<div class=\"container\">
    <h1>Buscar Biblioteca por Nombre</h1>

    <form class=\"form\" action=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_biblioteca_nombre");
        yield "\" method=\"get\">
        <label class=\"labels\" for=\"nombre\">Nombre:</label>
        <input class=\"inputs\" type=\"text\" id=\"nombre\" name=\"nombre\" required>
        <button class=\"btn-prymary btn\" type=\"submit\">Buscar</button>
    </form>

    <ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bibliotecas"]) || array_key_exists("bibliotecas", $context) ? $context["bibliotecas"] : (function () { throw new RuntimeError('Variable "bibliotecas" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["biblioteca"]) {
            // line 31
            yield "            <li>
                <div>
                <h2>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "nombre", [], "any", false, false, false, 33), "html", null, true);
            yield "</h2>
                <b><label class=\"labels\"> Direccion:</label></b>
                <span>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "direccion", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                </div>
                <div>
                <b><label class=\"labels\"> Ciudad:</label></b>
                <span>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "ciudad", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>
                </div>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            yield "            <li>No hay bibliotecas disponibles.</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return "buscar_biblioteca_nombre/index.html.twig";
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
        return array (  141 => 45,  134 => 43,  125 => 39,  118 => 35,  113 => 33,  109 => 31,  104 => 30,  94 => 23,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Buscar Biblioteca por Nombre {% endblock %}

{% block body %}
<style>
ul {
    list-style-type: none;
    padding: 0;
}
             
li {
    list-style-type: none;
    padding: 0;
}
div {
    margin-bottom: 1em;
}
</style>
<div class=\"container\">
    <h1>Buscar Biblioteca por Nombre</h1>

    <form class=\"form\" action=\"{{ path('buscar_biblioteca_nombre') }}\" method=\"get\">
        <label class=\"labels\" for=\"nombre\">Nombre:</label>
        <input class=\"inputs\" type=\"text\" id=\"nombre\" name=\"nombre\" required>
        <button class=\"btn-prymary btn\" type=\"submit\">Buscar</button>
    </form>

    <ul>
        {% for biblioteca in bibliotecas %}
            <li>
                <div>
                <h2>{{ biblioteca.nombre }}</h2>
                <b><label class=\"labels\"> Direccion:</label></b>
                <span>{{ biblioteca.direccion }}</span>
                </div>
                <div>
                <b><label class=\"labels\"> Ciudad:</label></b>
                <span>{{ biblioteca.ciudad }}</span>
                </div>
            </li>
        {% else %}
            <li>No hay bibliotecas disponibles.</li>
        {% endfor %}
    </ul>
</div>
{% endblock %}", "buscar_biblioteca_nombre/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/buscar_biblioteca_nombre/index.html.twig");
    }
}
