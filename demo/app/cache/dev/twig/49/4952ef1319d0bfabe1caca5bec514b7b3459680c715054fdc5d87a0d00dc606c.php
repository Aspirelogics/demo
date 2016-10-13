<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cea863a915e4049b65429b1e97328db1a42603884ead4a6c4de7223201462330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e014aef8827c53ba78c740bc8defae8c7f758bd20dc57dead5ac7671b4653298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e014aef8827c53ba78c740bc8defae8c7f758bd20dc57dead5ac7671b4653298->enter($__internal_e014aef8827c53ba78c740bc8defae8c7f758bd20dc57dead5ac7671b4653298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e014aef8827c53ba78c740bc8defae8c7f758bd20dc57dead5ac7671b4653298->leave($__internal_e014aef8827c53ba78c740bc8defae8c7f758bd20dc57dead5ac7671b4653298_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca14f62bb0e0fda30ee3dd7c97221b69bc9780558bccd3914dab00636c3f52d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca14f62bb0e0fda30ee3dd7c97221b69bc9780558bccd3914dab00636c3f52d8->enter($__internal_ca14f62bb0e0fda30ee3dd7c97221b69bc9780558bccd3914dab00636c3f52d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ca14f62bb0e0fda30ee3dd7c97221b69bc9780558bccd3914dab00636c3f52d8->leave($__internal_ca14f62bb0e0fda30ee3dd7c97221b69bc9780558bccd3914dab00636c3f52d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
