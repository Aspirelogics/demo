<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b05186875e15b0140efe28d9bf672d26b7e71c931192ffed5a94d0118e9dc109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3f89e50284a5f20c46e3c9a29be6c4a30299c37bd668669f4a2e5b5fcd8ad7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f89e50284a5f20c46e3c9a29be6c4a30299c37bd668669f4a2e5b5fcd8ad7be->enter($__internal_3f89e50284a5f20c46e3c9a29be6c4a30299c37bd668669f4a2e5b5fcd8ad7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f89e50284a5f20c46e3c9a29be6c4a30299c37bd668669f4a2e5b5fcd8ad7be->leave($__internal_3f89e50284a5f20c46e3c9a29be6c4a30299c37bd668669f4a2e5b5fcd8ad7be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d76a67df770c3d4990074f8c2f900718378c5e2e2f8387130634915ee3ce5163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76a67df770c3d4990074f8c2f900718378c5e2e2f8387130634915ee3ce5163->enter($__internal_d76a67df770c3d4990074f8c2f900718378c5e2e2f8387130634915ee3ce5163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d76a67df770c3d4990074f8c2f900718378c5e2e2f8387130634915ee3ce5163->leave($__internal_d76a67df770c3d4990074f8c2f900718378c5e2e2f8387130634915ee3ce5163_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
