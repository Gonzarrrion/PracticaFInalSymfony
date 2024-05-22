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

/* editar_libro/index.html.twig */
class __TwigTemplate_4dc69601b501bc09cf8a32473cdf5385 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editar_libro/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editar_libro/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Editar Libro";
        
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
    .form-group {
        display: flex;
        flex-direction: column;
        align-items: start;
        margin-bottom: 10px;
    }
    .error-message {
        color: red;
        font-size: 0.8em;
        margin-top: 5px;
    }
</style>
<div class=\"container\">
    <h1>Editar Libro</h1>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["error"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "        <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
    ";
        // line 26
        if (array_key_exists("form", $context)) {
            // line 27
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
            yield "
        
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 30
                yield "            <div class=\"form-group\">
                ";
                // line 31
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                yield "
                ";
                // line 32
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                ";
                // line 33
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 33), "errors", [], "any", false, false, false, 33)) {
                    // line 34
                    yield "                    <div class=\"error-message\">
                        ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 36
                        yield "                            ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 36), "html", null, true);
                        yield "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    yield "                    </div>
                ";
                }
                // line 40
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "        


        <button class=\"btn btn-primary\">Actualizar Libro</button>



        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["success"], "method", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 50
                yield "            <div class=\"alert alert-success\" style=\"margin-top: 20px;\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "
        ";
            // line 53
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
            yield "
    ";
        } else {
            // line 55
            yield "        <p>No existe un libro con el ID proporcionado.</p>
    ";
        }
        // line 57
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
        return "editar_libro/index.html.twig";
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
        return array (  195 => 57,  191 => 55,  186 => 53,  183 => 52,  174 => 50,  170 => 49,  161 => 42,  154 => 40,  150 => 38,  141 => 36,  137 => 35,  134 => 34,  132 => 33,  128 => 32,  124 => 31,  121 => 30,  117 => 29,  111 => 27,  109 => 26,  106 => 25,  97 => 23,  93 => 22,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar Libro{% endblock %}

{% block body %}
<style>
    .form-group {
        display: flex;
        flex-direction: column;
        align-items: start;
        margin-bottom: 10px;
    }
    .error-message {
        color: red;
        font-size: 0.8em;
        margin-top: 5px;
    }
</style>
<div class=\"container\">
    <h1>Editar Libro</h1>

    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}

    {% if form is defined %}
        {{ form_start(form, {'attr': {'class': 'form'}}) }}
        
        {% for child in form %}
            <div class=\"form-group\">
                {{ form_label(child) }}
                {{ form_widget(child, {'attr': {'class': 'form-control'}}) }}
                {% if child.vars.errors %}
                    <div class=\"error-message\">
                        {% for error in child.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        {% endfor %}
        


        <button class=\"btn btn-primary\">Actualizar Libro</button>



        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\" style=\"margin-top: 20px;\">{{ message }}</div>
        {% endfor %}

        {{ form_end(form) }}
    {% else %}
        <p>No existe un libro con el ID proporcionado.</p>
    {% endif %}
</div>
{% endblock %}
", "editar_libro/index.html.twig", "/Users/Gonzalo/Desktop/IngenieriaInformatica/CUARTO/SEGUNDO CUATRI/Arquitectura del Software/PracticaFinalSymfony/ProyectoSymfony/templates/editar_libro/index.html.twig");
    }
}
