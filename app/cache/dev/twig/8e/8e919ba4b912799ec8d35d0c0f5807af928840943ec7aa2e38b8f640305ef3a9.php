<?php

/* @Recipe/Recipe/create.html.twig */
class __TwigTemplate_f03c1380671b9f53cb7f91d272f41fa1f99145878e15ab2c3ed13489e55723d7 extends Twig_Template
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
        $__internal_44f71e563212e857fe32761170eff3df85ffd2085e7327dd245957d29302dad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f71e563212e857fe32761170eff3df85ffd2085e7327dd245957d29302dad6->enter($__internal_44f71e563212e857fe32761170eff3df85ffd2085e7327dd245957d29302dad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Recipe/Recipe/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f71e563212e857fe32761170eff3df85ffd2085e7327dd245957d29302dad6->leave($__internal_44f71e563212e857fe32761170eff3df85ffd2085e7327dd245957d29302dad6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7ba816d783d05642e308abc1e32c19de7e936006e69088104bb1b2fba90433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7ba816d783d05642e308abc1e32c19de7e936006e69088104bb1b2fba90433->enter($__internal_ec7ba816d783d05642e308abc1e32c19de7e936006e69088104bb1b2fba90433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec7ba816d783d05642e308abc1e32c19de7e936006e69088104bb1b2fba90433->leave($__internal_ec7ba816d783d05642e308abc1e32c19de7e936006e69088104bb1b2fba90433_prof);

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
