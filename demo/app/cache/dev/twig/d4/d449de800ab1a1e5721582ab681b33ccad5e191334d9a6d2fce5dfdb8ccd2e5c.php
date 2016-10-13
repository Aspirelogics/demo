<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e47738ad51dbd65b896e2bc2f27199ddcc99277ba7516278f1bdbf1374ce85fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea9ce09da1902a8379d971e75716f07ed6170c7291697bf1332fc5015cc756ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9ce09da1902a8379d971e75716f07ed6170c7291697bf1332fc5015cc756ac->enter($__internal_ea9ce09da1902a8379d971e75716f07ed6170c7291697bf1332fc5015cc756ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea9ce09da1902a8379d971e75716f07ed6170c7291697bf1332fc5015cc756ac->leave($__internal_ea9ce09da1902a8379d971e75716f07ed6170c7291697bf1332fc5015cc756ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d2ace4516d175adebc8938c1f10901647c5e9f87cd493d50e6771fc31d65277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2ace4516d175adebc8938c1f10901647c5e9f87cd493d50e6771fc31d65277->enter($__internal_3d2ace4516d175adebc8938c1f10901647c5e9f87cd493d50e6771fc31d65277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d2ace4516d175adebc8938c1f10901647c5e9f87cd493d50e6771fc31d65277->leave($__internal_3d2ace4516d175adebc8938c1f10901647c5e9f87cd493d50e6771fc31d65277_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d2dc2db362ec6c0c4358fc3289ea696c7460cbf63bb5ecf76ed55b2e13f0539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2dc2db362ec6c0c4358fc3289ea696c7460cbf63bb5ecf76ed55b2e13f0539->enter($__internal_4d2dc2db362ec6c0c4358fc3289ea696c7460cbf63bb5ecf76ed55b2e13f0539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d2dc2db362ec6c0c4358fc3289ea696c7460cbf63bb5ecf76ed55b2e13f0539->leave($__internal_4d2dc2db362ec6c0c4358fc3289ea696c7460cbf63bb5ecf76ed55b2e13f0539_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7dce054a2055fa93a3215a1dc73b4dde04bbb0ab6c10b820c4c08a1f354e2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7dce054a2055fa93a3215a1dc73b4dde04bbb0ab6c10b820c4c08a1f354e2f9->enter($__internal_c7dce054a2055fa93a3215a1dc73b4dde04bbb0ab6c10b820c4c08a1f354e2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7dce054a2055fa93a3215a1dc73b4dde04bbb0ab6c10b820c4c08a1f354e2f9->leave($__internal_c7dce054a2055fa93a3215a1dc73b4dde04bbb0ab6c10b820c4c08a1f354e2f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
