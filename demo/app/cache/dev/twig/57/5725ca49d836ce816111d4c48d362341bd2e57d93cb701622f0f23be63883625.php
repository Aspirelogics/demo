<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6d1cac5ec0b2c8b79ded13204c01fd98736f7c56676626f4195db892864643e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95e50aaf120e8766f6ab7ce53e229c4c8eb84d7f985903a3364b639e2db5f571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e50aaf120e8766f6ab7ce53e229c4c8eb84d7f985903a3364b639e2db5f571->enter($__internal_95e50aaf120e8766f6ab7ce53e229c4c8eb84d7f985903a3364b639e2db5f571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e50aaf120e8766f6ab7ce53e229c4c8eb84d7f985903a3364b639e2db5f571->leave($__internal_95e50aaf120e8766f6ab7ce53e229c4c8eb84d7f985903a3364b639e2db5f571_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d60bde64380a1f462a82972956af6641b5424ed586cad131327e18a0b50fa0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d60bde64380a1f462a82972956af6641b5424ed586cad131327e18a0b50fa0c->enter($__internal_4d60bde64380a1f462a82972956af6641b5424ed586cad131327e18a0b50fa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4d60bde64380a1f462a82972956af6641b5424ed586cad131327e18a0b50fa0c->leave($__internal_4d60bde64380a1f462a82972956af6641b5424ed586cad131327e18a0b50fa0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
