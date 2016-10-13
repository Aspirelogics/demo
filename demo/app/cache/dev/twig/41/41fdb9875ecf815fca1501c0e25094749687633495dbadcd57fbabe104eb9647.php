<?php

/* default/index.html.twig */
class __TwigTemplate_f7ef75814d822f543e9ba77d07242e272206de5fac0db50c16807b6aac18881c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8c417378344ed74c97581aa0ec219089fffab70d15b6b3f641c699b447f81b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c417378344ed74c97581aa0ec219089fffab70d15b6b3f641c699b447f81b4->enter($__internal_a8c417378344ed74c97581aa0ec219089fffab70d15b6b3f641c699b447f81b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c417378344ed74c97581aa0ec219089fffab70d15b6b3f641c699b447f81b4->leave($__internal_a8c417378344ed74c97581aa0ec219089fffab70d15b6b3f641c699b447f81b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_868f0c694039abe67a861a3eb00f163f260925f1095dfb95c0206d740d6ee33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868f0c694039abe67a861a3eb00f163f260925f1095dfb95c0206d740d6ee33d->enter($__internal_868f0c694039abe67a861a3eb00f163f260925f1095dfb95c0206d740d6ee33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">
\t<div id=\"container\">
\t\t<div id=\"welcome\">
\t\t\t<h1>
\t\t\t\t<span>Welcome to</span> Symfony
\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "
\t\t\t</h1>
\t\t</div>

\t\t<div id=\"status\">
\t\t\t<p>
\t\t\t\t<svg id=\"icon-status\" width=\"1792\" height=\"1792\"
\t\t\t\t\tviewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path
\t\t\t\t\t\td=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\"
\t\t\t\t\t\tfill=\"#759E1A\" /></svg>

\t\t\t\tYour application is now ready. You can start working on it at:
\t\t\t\t<!--  <code>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        echo "</code> -->
\t\t\t</p>
\t\t</div>

\t\t<div id=\"next\">
\t\t\t<h2>What's next?</h2>
\t\t\t<p>

\t\t\t\t<a href=\"login\">Login </a><br>
\t\t\t\t<a href=\"register\">Register </a>

\t\t\t</p>
\t\t</div>

\t</div>
</div>
";
        
        $__internal_868f0c694039abe67a861a3eb00f163f260925f1095dfb95c0206d740d6ee33d->leave($__internal_868f0c694039abe67a861a3eb00f163f260925f1095dfb95c0206d740d6ee33d_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7c97683a514153a9a6de9f83cb324772f01f139cd2f53f88d16374606a5e04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c97683a514153a9a6de9f83cb324772f01f139cd2f53f88d16374606a5e04e->enter($__internal_c7c97683a514153a9a6de9f83cb324772f01f139cd2f53f88d16374606a5e04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "<style>
body {
\tbackground: #F5F5F5;
\tfont: 18px/1.5 sans-serif;
}

h1, h2 {
\tline-height: 1.2;
\tmargin: 0 0 .5em;
}

h1 {
\tfont-size: 36px;
}

h2 {
\tfont-size: 21px;
\tmargin-bottom: 1em;
}

p {
\tmargin: 0 0 1em 0;
}

a {
\tcolor: #0000F0;
}

a:hover {
\ttext-decoration: none;
}

code {
\tbackground: #F5F5F5;
\tmax-width: 100px;
\tpadding: 2px 6px;
\tword-wrap: break-word;
}

#wrapper {
\tbackground: #FFF;
\tmargin: 1em auto;
\tmax-width: 800px;
\twidth: 95%;
}

#container {
\tpadding: 2em;
}

#welcome, #status {
\tmargin-bottom: 2em;
}

#welcome h1 span {
\tdisplay: block;
\tfont-size: 75%;
}

#icon-status, #icon-book {
\tfloat: left;
\theight: 64px;
\tmargin-right: 1em;
\tmargin-top: -4px;
\twidth: 64px;
}

#icon-book {
\tdisplay: none;
}

@media ( min-width : 768px) {
\t#wrapper {
\t\twidth: 80%;
\t\tmargin: 2em auto;
\t}
\t#icon-book {
\t\tdisplay: inline-block;
\t}
\t#status a, #next a {
\t\tdisplay: block;
\t}
\t@
\t-webkit-keyframes fade-in { 0% {
\t\topacity: 0;
\t}
\t100%
\t{
\topacity
\t:
\t 
\t1;
}

}
@
keyframes fade-in { 0% {
\topacity: 0;
}

100%
{
opacity
:
 
1;
}
}
.sf-toolbar {
\topacity: 0;
\t-webkit-animation: fade-in 1s .2s forwards;
\tanimation: fade-in 1s .2s forwards;
}
}
</style>
";
        
        $__internal_c7c97683a514153a9a6de9f83cb324772f01f139cd2f53f88d16374606a5e04e->leave($__internal_c7c97683a514153a9a6de9f83cb324772f01f139cd2f53f88d16374606a5e04e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  88 => 40,  64 => 22,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
<div id=\"wrapper\">
\t<div id=\"container\">
\t\t<div id=\"welcome\">
\t\t\t<h1>
\t\t\t\t<span>Welcome to</span> Symfony
\t\t\t\t{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}
\t\t\t</h1>
\t\t</div>

\t\t<div id=\"status\">
\t\t\t<p>
\t\t\t\t<svg id=\"icon-status\" width=\"1792\" height=\"1792\"
\t\t\t\t\tviewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path
\t\t\t\t\t\td=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\"
\t\t\t\t\t\tfill=\"#759E1A\" /></svg>

\t\t\t\tYour application is now ready. You can start working on it at:
\t\t\t\t<!--  <code>{{ base_dir }}</code> -->
\t\t\t</p>
\t\t</div>

\t\t<div id=\"next\">
\t\t\t<h2>What's next?</h2>
\t\t\t<p>

\t\t\t\t<a href=\"login\">Login </a><br>
\t\t\t\t<a href=\"register\">Register </a>

\t\t\t</p>
\t\t</div>

\t</div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
body {
\tbackground: #F5F5F5;
\tfont: 18px/1.5 sans-serif;
}

h1, h2 {
\tline-height: 1.2;
\tmargin: 0 0 .5em;
}

h1 {
\tfont-size: 36px;
}

h2 {
\tfont-size: 21px;
\tmargin-bottom: 1em;
}

p {
\tmargin: 0 0 1em 0;
}

a {
\tcolor: #0000F0;
}

a:hover {
\ttext-decoration: none;
}

code {
\tbackground: #F5F5F5;
\tmax-width: 100px;
\tpadding: 2px 6px;
\tword-wrap: break-word;
}

#wrapper {
\tbackground: #FFF;
\tmargin: 1em auto;
\tmax-width: 800px;
\twidth: 95%;
}

#container {
\tpadding: 2em;
}

#welcome, #status {
\tmargin-bottom: 2em;
}

#welcome h1 span {
\tdisplay: block;
\tfont-size: 75%;
}

#icon-status, #icon-book {
\tfloat: left;
\theight: 64px;
\tmargin-right: 1em;
\tmargin-top: -4px;
\twidth: 64px;
}

#icon-book {
\tdisplay: none;
}

@media ( min-width : 768px) {
\t#wrapper {
\t\twidth: 80%;
\t\tmargin: 2em auto;
\t}
\t#icon-book {
\t\tdisplay: inline-block;
\t}
\t#status a, #next a {
\t\tdisplay: block;
\t}
\t@
\t-webkit-keyframes fade-in { 0% {
\t\topacity: 0;
\t}
\t100%
\t{
\topacity
\t:
\t 
\t1;
}

}
@
keyframes fade-in { 0% {
\topacity: 0;
}

100%
{
opacity
:
 
1;
}
}
.sf-toolbar {
\topacity: 0;
\t-webkit-animation: fade-in 1s .2s forwards;
\tanimation: fade-in 1s .2s forwards;
}
}
</style>
{% endblock %}
";
    }
}
