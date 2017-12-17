<?php

/* @Recipe/Recipe/create.html.twig */
class __TwigTemplate_aeee14a1a07797309635916800742ad93a728c16503cac5abebe6b09f233dd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Recipe/Recipe/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2630b9b42973e205e9ab899baf9336681f1913119bc764553552911b9f1aedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2630b9b42973e205e9ab899baf9336681f1913119bc764553552911b9f1aedd->enter($__internal_c2630b9b42973e205e9ab899baf9336681f1913119bc764553552911b9f1aedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Recipe/Recipe/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2630b9b42973e205e9ab899baf9336681f1913119bc764553552911b9f1aedd->leave($__internal_c2630b9b42973e205e9ab899baf9336681f1913119bc764553552911b9f1aedd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bd7580d21ec50385921cbb50beb2d344f3846970644373bdd7119c1d016d75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd7580d21ec50385921cbb50beb2d344f3846970644373bdd7119c1d016d75a->enter($__internal_1bd7580d21ec50385921cbb50beb2d344f3846970644373bdd7119c1d016d75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3>Create New Recipe</h3>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_list");
        echo "\" class=\"btn btn-info\">Return to the home page</a>
            </div>
            <div class=\"panel-body\">
                ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_1bd7580d21ec50385921cbb50beb2d344f3846970644373bdd7119c1d016d75a->leave($__internal_1bd7580d21ec50385921cbb50beb2d344f3846970644373bdd7119c1d016d75a_prof);

    }

    public function getTemplateName()
    {
        return "@Recipe/Recipe/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3>Create New Recipe</h3>
                <a href=\"{{ path('recipe_list') }}\" class=\"btn btn-info\">Return to the home page</a>
            </div>
            <div class=\"panel-body\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "@Recipe/Recipe/create.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\src\\RecipeBundle\\Resources\\views\\Recipe\\create.html.twig");
    }
}
