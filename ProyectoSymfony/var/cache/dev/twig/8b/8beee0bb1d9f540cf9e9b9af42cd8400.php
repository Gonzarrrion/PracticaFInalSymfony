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

/* insertar_biblioteca/index.html.twig */
class __TwigTemplate_3311ac0d60315e2acd8c247761b36852 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "insertar_biblioteca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "insertar_biblioteca/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Añadir Nueva Biblioteca";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<style>
    .form-group {
        display: flex;
        flex-direction: column;  
        align-items: start;
        margin-bottom: 15px;
    }
    .form-group .inputs {
        margin-top: 5px;
    }
    .error-message {
        color: red;
        font-size: 0.8em;
        margin-top: 5px; 
    }
</style>
<div class=\"container\">
    <h1>Añadir una nueva Biblioteca</h1>
    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            yield "        <div class=\"form-group\">
            ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            yield "
            <div class=\"inputs\">";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-control"]]);
            yield "</div>
            ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) {
                // line 31
                yield "                <div class=\"error-message\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 33
                    yield "                        ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33), "html", null, true);
                    yield "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "                </div>
            ";
            }
            // line 37
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    <button class=\"btn btn-primary\">Guardar Biblioteca</button>
    ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
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
        return "insertar_biblioteca/index.html.twig";
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
        return array (  146 => 40,  143 => 39,  136 => 37,  132 => 35,  123 => 33,  119 => 32,  116 => 31,  114 => 30,  110 => 29,  106 => 28,  103 => 27,  99 => 26,  95 => 25,  75 => 7,  68 => 6,  54 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Añadir Nueva Biblioteca{% endblock %}

{% block body %}
<style>
    .form-group {
        display: flex;
        flex-direction: column;  
        align-items: start;
        margin-bottom: 15px;
    }
    .form-group .inputs {
        margin-top: 5px;
    }
    .error-message {
        color: red;
        font-size: 0.8em;
        margin-top: 5px; 
    }
</style>
<div class=\"container\">
    <h1>Añadir una nueva Biblioteca</h1>
    {{ form_start(form, {'attr': {'class': 'form'}}) }}
    {% for child in form %}
        <div class=\"form-group\">
            {{ form_label(child) }}
            <div class=\"inputs\">{{ form_widget(child, {'attr': {'class': 'form-control'}}) }}</div>
            {% if child.vars.errors %}
                <div class=\"error-message\">
                    {% for error in child.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    {% endfor %}
    <button class=\"btn btn-primary\">Guardar Biblioteca</button>
    {{ form_end(form) }}
</div>
{% endblock %}", "insertar_biblioteca/index.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/insertar_biblioteca/index.html.twig");
    }
}
