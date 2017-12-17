<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_541a7b8c9252af37f8ce0d3140868287dae6c67f56c591b5209a0f07716b3b69 extends Twig_Template
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
        $__internal_c5b9892d39814bba84993b6b64533e4e17b08d632705d8f0a7b97fd7297281c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b9892d39814bba84993b6b64533e4e17b08d632705d8f0a7b97fd7297281c0->enter($__internal_c5b9892d39814bba84993b6b64533e4e17b08d632705d8f0a7b97fd7297281c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b9892d39814bba84993b6b64533e4e17b08d632705d8f0a7b97fd7297281c0->leave($__internal_c5b9892d39814bba84993b6b64533e4e17b08d632705d8f0a7b97fd7297281c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ed0eb939207db512e8ed94207c53181cfe9d9d5d4f92a4de420e22f16f573f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed0eb939207db512e8ed94207c53181cfe9d9d5d4f92a4de420e22f16f573f8->enter($__internal_7ed0eb939207db512e8ed94207c53181cfe9d9d5d4f92a4de420e22f16f573f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ed0eb939207db512e8ed94207c53181cfe9d9d5d4f92a4de420e22f16f573f8->leave($__internal_7ed0eb939207db512e8ed94207c53181cfe9d9d5d4f92a4de420e22f16f573f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e9bd9a73b0842a03664b81d161b64527ad8b009f112c74722ed82b54f65ba08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9bd9a73b0842a03664b81d161b64527ad8b009f112c74722ed82b54f65ba08->enter($__internal_5e9bd9a73b0842a03664b81d161b64527ad8b009f112c74722ed82b54f65ba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5e9bd9a73b0842a03664b81d161b64527ad8b009f112c74722ed82b54f65ba08->leave($__internal_5e9bd9a73b0842a03664b81d161b64527ad8b009f112c74722ed82b54f65ba08_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c107ec61df7d2e15cf3d77a02e8bacc24aaa5ea130912b85934fa77724de20e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c107ec61df7d2e15cf3d77a02e8bacc24aaa5ea130912b85934fa77724de20e7->enter($__internal_c107ec61df7d2e15cf3d77a02e8bacc24aaa5ea130912b85934fa77724de20e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c107ec61df7d2e15cf3d77a02e8bacc24aaa5ea130912b85934fa77724de20e7->leave($__internal_c107ec61df7d2e15cf3d77a02e8bacc24aaa5ea130912b85934fa77724de20e7_prof);

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
