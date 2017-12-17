<?php

/* @Recipe/Recipe/edit.html.twig */
class __TwigTemplate_871c5ee8d9c32b41fc13b461366cef2150a4e4dae16cf644b544437366c40d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Recipe/Recipe/edit.html.twig", 1);
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
        $__internal_f8b283c32d357e1f4a258a6f13ea108c28ae09c4987bb7a85a08531df62dd4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b283c32d357e1f4a258a6f13ea108c28ae09c4987bb7a85a08531df62dd4f5->enter($__internal_f8b283c32d357e1f4a258a6f13ea108c28ae09c4987bb7a85a08531df62dd4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Recipe/Recipe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b283c32d357e1f4a258a6f13ea108c28ae09c4987bb7a85a08531df62dd4f5->leave($__internal_f8b283c32d357e1f4a258a6f13ea108c28ae09c4987bb7a85a08531df62dd4f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14ed529145208f74812c73051d4ff02621ff74ad0655ca1129a7b2fc5804d49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ed529145208f74812c73051d4ff02621ff74ad0655ca1129a7b2fc5804d49a->enter($__internal_14ed529145208f74812c73051d4ff02621ff74ad0655ca1129a7b2fc5804d49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3>Recipe Edit</h3>
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
        
        $__internal_14ed529145208f74812c73051d4ff02621ff74ad0655ca1129a7b2fc5804d49a->leave($__internal_14ed529145208f74812c73051d4ff02621ff74ad0655ca1129a7b2fc5804d49a_prof);

    }

    public function getTemplateName()
    {
        return "@Recipe/Recipe/edit.html.twig";
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
                    <h3>Recipe Edit</h3>
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
", "@Recipe/Recipe/edit.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\src\\RecipeBundle\\Resources\\views\\Recipe\\edit.html.twig");
    }
}
