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

/* listar_libros_biblioteca/index.html.twig */
class __TwigTemplate_79237ec7b7d417d2f898d9377f688a29 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listar_libros_biblioteca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listar_libros_biblioteca/index.html.twig", 1);
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
    <form class=\"form\" action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listar_libros_biblioteca");
        yield "\" method=\"get\">
        <label class=\"labels\" for=\"biblioteca\">Biblioteca:</label>
        <select class=\"inputs\" id=\"biblioteca\" name=\"biblioteca\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bibliotecas"]) || array_key_exists("bibliotecas", $context) ? $context["bibliotecas"] : (function () { throw new RuntimeError('Variable "bibliotecas" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["biblioteca"]) {
            // line 30
            yield "                <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "nombre", [], "any", false, false, false, 30), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        </select>
        <button class=\"btn-primary btn\" type=\"submit\">Buscar</button>
    </form>

    ";
        // line 36
        if ( !(null === (isset($context["biblioteca"]) || array_key_exists("biblioteca", $context) ? $context["biblioteca"] : (function () { throw new RuntimeError('Variable "biblioteca" does not exist.', 36, $this->source); })()))) {
            // line 37
            yield "        <h1>Libros de la biblioteca ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["biblioteca"]) || array_key_exists("biblioteca", $context) ? $context["biblioteca"] : (function () { throw new RuntimeError('Variable "biblioteca" does not exist.', 37, $this->source); })()), "nombre", [], "any", false, false, false, 37), "html", null, true);
            yield "</h1>
    ";
        } else {
            // line 39
            yield "        <h1>No se ha seleccionado ninguna biblioteca</h1>
    ";
        }
        // line 41
        yield "
    <ul>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["libros"]) || array_key_exists("libros", $context) ? $context["libros"] : (function () { throw new RuntimeError('Variable "libros" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 44
            yield "            <li>
                <h2><b>Titulo: </b>";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "titulo", [], "any", false, false, false, 45), "html", null, true);
            yield "</h2>
                <p><b>Autor: </b>";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "autor", [], "any", false, false, false, 46), "html", null, true);
            yield "</p>
                <form action=\"";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar_libro", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["libro"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" method=\"post\">
                        <input type=\"hidden\" name=\"biblioteca_id\" value=\"";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["biblioteca"]) || array_key_exists("biblioteca", $context) ? $context["biblioteca"] : (function () { throw new RuntimeError('Variable "biblioteca" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Borrar</button>
                    </form>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            yield "            <li>No hay libros disponibles.</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "listar_libros_biblioteca/index.html.twig";
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
        return array (  177 => 55,  170 => 53,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  145 => 44,  140 => 43,  136 => 41,  132 => 39,  126 => 37,  124 => 36,  118 => 32,  107 => 30,  103 => 29,  97 => 26,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listar Libros de la Biblioteca{% endblock %}

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
    <form class=\"form\" action=\"{{ path('listar_libros_biblioteca') }}\" method=\"get\">
        <label class=\"labels\" for=\"biblioteca\">Biblioteca:</label>
        <select class=\"inputs\" id=\"biblioteca\" name=\"biblioteca\">
            {% for biblioteca in bibliotecas %}
                <option value=\"{{ biblioteca.id }}\">{{ biblioteca.nombre }}</option>
            {% endfor %}
        </select>
        <button class=\"btn-primary btn\" type=\"submit\">Buscar</button>
    </form>

    {% if biblioteca is not null %}
        <h1>Libros de la biblioteca {{biblioteca.nombre}}</h1>
    {% else %}
        <h1>No se ha seleccionado ninguna biblioteca</h1>
    {% endif %}

    <ul>
        {% for libro in libros %}
            <li>
                <h2><b>Titulo: </b>{{ libro.titulo }}</h2>
                <p><b>Autor: </b>{{ libro.autor }}</p>
                <form action=\"{{ path('borrar_libro', {'id': libro.id}) }}\" method=\"post\">
                        <input type=\"hidden\" name=\"biblioteca_id\" value=\"{{ biblioteca.id }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Borrar</button>
                    </form>
            </li>
        {% else %}
            <li>No hay libros disponibles.</li>
        {% endfor %}
    </ul>
</div>
{% endblock %}
", "listar_libros_biblioteca/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/listar_libros_biblioteca/index.html.twig");
    }
}
