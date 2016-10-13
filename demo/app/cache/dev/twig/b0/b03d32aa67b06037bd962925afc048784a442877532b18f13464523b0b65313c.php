<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b54fb64427d6c30cfb13dd06b64dcff82ab085c7bbd1ab09f990abacca532e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5550bf8f665539df4239203847dd85ce9478524862bc5cd2209232ac802f0d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5550bf8f665539df4239203847dd85ce9478524862bc5cd2209232ac802f0d05->enter($__internal_5550bf8f665539df4239203847dd85ce9478524862bc5cd2209232ac802f0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5550bf8f665539df4239203847dd85ce9478524862bc5cd2209232ac802f0d05->leave($__internal_5550bf8f665539df4239203847dd85ce9478524862bc5cd2209232ac802f0d05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46a61f808fe8750ef9d9e3cf72371e79c601cde3bc17a87ad1d204c06957e731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a61f808fe8750ef9d9e3cf72371e79c601cde3bc17a87ad1d204c06957e731->enter($__internal_46a61f808fe8750ef9d9e3cf72371e79c601cde3bc17a87ad1d204c06957e731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46a61f808fe8750ef9d9e3cf72371e79c601cde3bc17a87ad1d204c06957e731->leave($__internal_46a61f808fe8750ef9d9e3cf72371e79c601cde3bc17a87ad1d204c06957e731_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_896791e2a562c7aa033e270eb8e226d5d3d48657867b1b8b876330129d11c754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896791e2a562c7aa033e270eb8e226d5d3d48657867b1b8b876330129d11c754->enter($__internal_896791e2a562c7aa033e270eb8e226d5d3d48657867b1b8b876330129d11c754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_896791e2a562c7aa033e270eb8e226d5d3d48657867b1b8b876330129d11c754->leave($__internal_896791e2a562c7aa033e270eb8e226d5d3d48657867b1b8b876330129d11c754_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f718894be8332c0513d58b35e6bc6ef923edc0fe050bbd7c3ef64c962cbafb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f718894be8332c0513d58b35e6bc6ef923edc0fe050bbd7c3ef64c962cbafb28->enter($__internal_f718894be8332c0513d58b35e6bc6ef923edc0fe050bbd7c3ef64c962cbafb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f718894be8332c0513d58b35e6bc6ef923edc0fe050bbd7c3ef64c962cbafb28->leave($__internal_f718894be8332c0513d58b35e6bc6ef923edc0fe050bbd7c3ef64c962cbafb28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
