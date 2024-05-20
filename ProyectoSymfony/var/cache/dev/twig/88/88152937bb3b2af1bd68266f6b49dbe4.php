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

/* buscar_biblioteca_ciudad/index.html.twig */
class __TwigTemplate_ddf0e7647b96ed5d0a62d9cd9da353a2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscar_biblioteca_ciudad/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscar_biblioteca_ciudad/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Buscar Biblioteca por Ciudad ";
        
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
        yield "    <h1>Buscar Biblioteca por Ciudad</h1>

    <form action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar_biblioteca_ciudad");
        yield "\" method=\"get\">
        <label for=\"ciudad\">Ciudad:</label>
        <input type=\"text\" id=\"ciudad\" name=\"ciudad\" required>
        <button type=\"submit\">Buscar</button>
    </form>

    <ul>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bibliotecas"]) || array_key_exists("bibliotecas", $context) ? $context["bibliotecas"] : (function () { throw new RuntimeError('Variable "bibliotecas" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["biblioteca"]) {
            // line 16
            yield "            <li>
                <h2>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "nombre", [], "any", false, false, false, 17), "html", null, true);
            yield "</h2>
                <p>";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "direccion", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                <p>";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "ciudad", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "            <li>No hay bibliotecas disponibles.</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return "buscar_biblioteca_ciudad/index.html.twig";
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
        return array (  120 => 24,  113 => 22,  105 => 19,  101 => 18,  97 => 17,  94 => 16,  89 => 15,  79 => 8,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Buscar Biblioteca por Ciudad {% endblock %}

{% block body %}
    <h1>Buscar Biblioteca por Ciudad</h1>

    <form action=\"{{ path('buscar_biblioteca_ciudad') }}\" method=\"get\">
        <label for=\"ciudad\">Ciudad:</label>
        <input type=\"text\" id=\"ciudad\" name=\"ciudad\" required>
        <button type=\"submit\">Buscar</button>
    </form>

    <ul>
        {% for biblioteca in bibliotecas %}
            <li>
                <h2>{{ biblioteca.nombre }}</h2>
                <p>{{ biblioteca.direccion }}</p>
                <p>{{ biblioteca.ciudad }}</p>
            </li>
        {% else %}
            <li>No hay bibliotecas disponibles.</li>
        {% endfor %}
    </ul>
{% endblock %}", "buscar_biblioteca_ciudad/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/buscar_biblioteca_ciudad/index.html.twig");
    }
}
