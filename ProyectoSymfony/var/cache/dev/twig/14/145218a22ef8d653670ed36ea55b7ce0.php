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

/* base.html.twig */
class __TwigTemplate_2201fb3facf7d656dacf26871294574f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url('";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Imagenes/fondo.avif"), "html", null, true);
        yield "');
                background-size: cover;
                background-attachment: fixed;
                font-family: Arial, sans-serif;
            }

            .form{
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 1em;
            }

            .labels {
                font-size: 1.2em;
                margin-right: 1em;
            }

            .inputs {
                font-size: 1.2em;
                padding: 0.4em;
            }

            .container {
                max-height: 100vh; 
                overflow-y: auto; 
                margin-top: 125px;
                text-align: center;
                background-color: white;
                padding: 2em;
                border-radius: 10px;
            }
            
            .btn, .btn-secondary, .btn-primary, .btn-success {
            display: inline-block;
            margin: 1em;
            padding: 1em 2em;
            font-size: 1.2em;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            outline: none;
            }

            .btn-secondary {
                background-color: #6c757d;
            }
            .btn:hover, .btn-secondary:hover, .btn-primary:hover, .btn-success:hover {
                background-color: #0056b5; 
            }

            .h2 {
                font-family: Arial, sans-serif; 
                font-size: 18px; 
            }
            p {
                font-family: Arial, sans-serif; 
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        ";
        // line 73
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 74
        yield "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  131 => 73,  121 => 74,  119 => 73,  53 => 10,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url('{{ asset('Imagenes/fondo.avif') }}');
                background-size: cover;
                background-attachment: fixed;
                font-family: Arial, sans-serif;
            }

            .form{
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 1em;
            }

            .labels {
                font-size: 1.2em;
                margin-right: 1em;
            }

            .inputs {
                font-size: 1.2em;
                padding: 0.4em;
            }

            .container {
                max-height: 100vh; 
                overflow-y: auto; 
                margin-top: 125px;
                text-align: center;
                background-color: white;
                padding: 2em;
                border-radius: 10px;
            }
            
            .btn, .btn-secondary, .btn-primary, .btn-success {
            display: inline-block;
            margin: 1em;
            padding: 1em 2em;
            font-size: 1.2em;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 10px;
            cursor: pointer;
            outline: none;
            }

            .btn-secondary {
                background-color: #6c757d;
            }
            .btn:hover, .btn-secondary:hover, .btn-primary:hover, .btn-success:hover {
                background-color: #0056b5; 
            }

            .h2 {
                font-family: Arial, sans-serif; 
                font-size: 18px; 
            }
            p {
                font-family: Arial, sans-serif; 
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/administrador/Desktop/github/PracticaFinalSymfony/ProyectoSymfony/templates/base.html.twig");
    }
}
