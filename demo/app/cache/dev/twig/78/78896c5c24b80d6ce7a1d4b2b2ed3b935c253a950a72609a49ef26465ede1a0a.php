<?php

/* base.html.twig */
class __TwigTemplate_48c2863428fa9fc0f09deeedb0b0a7c7d799f3348122df325900367006f0c321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af3e92dd775fc80803fdbde9d6f6d9506b0442ba912c2a50b9be858e0a6adc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3e92dd775fc80803fdbde9d6f6d9506b0442ba912c2a50b9be858e0a6adc45->enter($__internal_af3e92dd775fc80803fdbde9d6f6d9506b0442ba912c2a50b9be858e0a6adc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_af3e92dd775fc80803fdbde9d6f6d9506b0442ba912c2a50b9be858e0a6adc45->leave($__internal_af3e92dd775fc80803fdbde9d6f6d9506b0442ba912c2a50b9be858e0a6adc45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dad54118ee2a494fa8b2de3f022da1ba1f409421184646b0ab3442a6e978aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dad54118ee2a494fa8b2de3f022da1ba1f409421184646b0ab3442a6e978aab->enter($__internal_4dad54118ee2a494fa8b2de3f022da1ba1f409421184646b0ab3442a6e978aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4dad54118ee2a494fa8b2de3f022da1ba1f409421184646b0ab3442a6e978aab->leave($__internal_4dad54118ee2a494fa8b2de3f022da1ba1f409421184646b0ab3442a6e978aab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdc50bec063d85b2f7c62751c646b3dcd753b42323c7de902b9893e0ba05656e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc50bec063d85b2f7c62751c646b3dcd753b42323c7de902b9893e0ba05656e->enter($__internal_fdc50bec063d85b2f7c62751c646b3dcd753b42323c7de902b9893e0ba05656e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fdc50bec063d85b2f7c62751c646b3dcd753b42323c7de902b9893e0ba05656e->leave($__internal_fdc50bec063d85b2f7c62751c646b3dcd753b42323c7de902b9893e0ba05656e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_222c86b9fd039a01ad82e9a7a498728f38fb57dad261256339037326708e316c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222c86b9fd039a01ad82e9a7a498728f38fb57dad261256339037326708e316c->enter($__internal_222c86b9fd039a01ad82e9a7a498728f38fb57dad261256339037326708e316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_222c86b9fd039a01ad82e9a7a498728f38fb57dad261256339037326708e316c->leave($__internal_222c86b9fd039a01ad82e9a7a498728f38fb57dad261256339037326708e316c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bba9af0c43ad3532f3ff81c1cafec08fad00003964285a70cf114cb32654a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bba9af0c43ad3532f3ff81c1cafec08fad00003964285a70cf114cb32654a83->enter($__internal_9bba9af0c43ad3532f3ff81c1cafec08fad00003964285a70cf114cb32654a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9bba9af0c43ad3532f3ff81c1cafec08fad00003964285a70cf114cb32654a83->leave($__internal_9bba9af0c43ad3532f3ff81c1cafec08fad00003964285a70cf114cb32654a83_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
