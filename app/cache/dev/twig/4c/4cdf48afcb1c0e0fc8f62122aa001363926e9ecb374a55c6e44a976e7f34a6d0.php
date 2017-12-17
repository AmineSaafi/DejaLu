<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_73b0a9c9dfc7f509330423aba980feca56866d6974881ddb3b65fc96d74c4567 extends Twig_Template
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
        $__internal_c7681b19f88cd004691c4aa6912a68f06ea8ecd434bb255331cf5abcdfde4c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7681b19f88cd004691c4aa6912a68f06ea8ecd434bb255331cf5abcdfde4c22->enter($__internal_c7681b19f88cd004691c4aa6912a68f06ea8ecd434bb255331cf5abcdfde4c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7681b19f88cd004691c4aa6912a68f06ea8ecd434bb255331cf5abcdfde4c22->leave($__internal_c7681b19f88cd004691c4aa6912a68f06ea8ecd434bb255331cf5abcdfde4c22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43c2abaefb0bd14c6c3804ed0a29509e018503e41248cf175af0b35a46e389d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c2abaefb0bd14c6c3804ed0a29509e018503e41248cf175af0b35a46e389d8->enter($__internal_43c2abaefb0bd14c6c3804ed0a29509e018503e41248cf175af0b35a46e389d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43c2abaefb0bd14c6c3804ed0a29509e018503e41248cf175af0b35a46e389d8->leave($__internal_43c2abaefb0bd14c6c3804ed0a29509e018503e41248cf175af0b35a46e389d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb62a18f16b948330f92ce4f9bb6642696c0d13b47429f74e59256469c88673e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb62a18f16b948330f92ce4f9bb6642696c0d13b47429f74e59256469c88673e->enter($__internal_eb62a18f16b948330f92ce4f9bb6642696c0d13b47429f74e59256469c88673e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb62a18f16b948330f92ce4f9bb6642696c0d13b47429f74e59256469c88673e->leave($__internal_eb62a18f16b948330f92ce4f9bb6642696c0d13b47429f74e59256469c88673e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7d4468ebe8270ac5f80eda2106bc8e012603cdcd73b3261c2c6d6dea53bd74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d4468ebe8270ac5f80eda2106bc8e012603cdcd73b3261c2c6d6dea53bd74c->enter($__internal_f7d4468ebe8270ac5f80eda2106bc8e012603cdcd73b3261c2c6d6dea53bd74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7d4468ebe8270ac5f80eda2106bc8e012603cdcd73b3261c2c6d6dea53bd74c->leave($__internal_f7d4468ebe8270ac5f80eda2106bc8e012603cdcd73b3261c2c6d6dea53bd74c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
