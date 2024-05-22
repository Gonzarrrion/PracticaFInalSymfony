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

/* listar_bibliotecas/index.html.twig */
class __TwigTemplate_46b7bc6065987fdc54cfeacedf43ae34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listar_bibliotecas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "listar_bibliotecas/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
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
h2{
    margin-top: 40px
}
</style>

<div class=\"container\">
<h1>Listar Bibliotecas</h1>

<ul>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bibliotecas"]) || array_key_exists("bibliotecas", $context) ? $context["bibliotecas"] : (function () { throw new RuntimeError('Variable "bibliotecas" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["biblioteca"]) {
            // line 30
            yield "        <li>
            <h2>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "nombre", [], "any", false, false, false, 31), "html", null, true);
            yield "</h2>
            <p><b>Direccion: </b>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "direccion", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
            <form class=\"form\" action=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar_biblioteca", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["biblioteca"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" method=\"post\">
                <button class=\"btn-primary btn\"type=\"submit\" class=\"btn btn-danger\">Borrar</button>
            </form>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            yield "        <li>No hay bibliotecas disponibles.</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblioteca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "</ul>
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
        return "listar_bibliotecas/index.html.twig";
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
        return array (  121 => 40,  114 => 38,  104 => 33,  100 => 32,  96 => 31,  93 => 30,  88 => 29,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
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
h2{
    margin-top: 40px
}
</style>

<div class=\"container\">
<h1>Listar Bibliotecas</h1>

<ul>
    {% for biblioteca in bibliotecas %}
        <li>
            <h2>{{ biblioteca.nombre }}</h2>
            <p><b>Direccion: </b>{{ biblioteca.direccion }}</p>
            <form class=\"form\" action=\"{{ path('borrar_biblioteca', {'id': biblioteca.id}) }}\" method=\"post\">
                <button class=\"btn-primary btn\"type=\"submit\" class=\"btn btn-danger\">Borrar</button>
            </form>
        </li>
    {% else %}
        <li>No hay bibliotecas disponibles.</li>
    {% endfor %}
</ul>
</div>
{% endblock %}", "listar_bibliotecas/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/listar_bibliotecas/index.html.twig");
    }
}
