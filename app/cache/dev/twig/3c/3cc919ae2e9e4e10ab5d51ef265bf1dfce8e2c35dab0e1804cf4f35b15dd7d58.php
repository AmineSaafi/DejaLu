<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d4b5570a541b339a9bfb66135900837a5fe3ecff3ac2d42b64c13d59739fa0da extends Twig_Template
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
        $__internal_549a4da7b586e0a589b34fbf8d72c76ffa4ed7bd002c4c59d9c9f0cfe30327f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549a4da7b586e0a589b34fbf8d72c76ffa4ed7bd002c4c59d9c9f0cfe30327f8->enter($__internal_549a4da7b586e0a589b34fbf8d72c76ffa4ed7bd002c4c59d9c9f0cfe30327f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549a4da7b586e0a589b34fbf8d72c76ffa4ed7bd002c4c59d9c9f0cfe30327f8->leave($__internal_549a4da7b586e0a589b34fbf8d72c76ffa4ed7bd002c4c59d9c9f0cfe30327f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_328d9678ce19c45399c9470db1c8d95b62759e563236b0bd8e403a94ad8e65a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328d9678ce19c45399c9470db1c8d95b62759e563236b0bd8e403a94ad8e65a3->enter($__internal_328d9678ce19c45399c9470db1c8d95b62759e563236b0bd8e403a94ad8e65a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_328d9678ce19c45399c9470db1c8d95b62759e563236b0bd8e403a94ad8e65a3->leave($__internal_328d9678ce19c45399c9470db1c8d95b62759e563236b0bd8e403a94ad8e65a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dca65462795d0b81700d0c8a05ac76b9d7b8c8328d75987b8600bcece4d312ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca65462795d0b81700d0c8a05ac76b9d7b8c8328d75987b8600bcece4d312ea->enter($__internal_dca65462795d0b81700d0c8a05ac76b9d7b8c8328d75987b8600bcece4d312ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dca65462795d0b81700d0c8a05ac76b9d7b8c8328d75987b8600bcece4d312ea->leave($__internal_dca65462795d0b81700d0c8a05ac76b9d7b8c8328d75987b8600bcece4d312ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2eb3e4eb1523c035cfeedc217e21777351b6e071ae5a61004f968d32fde31cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb3e4eb1523c035cfeedc217e21777351b6e071ae5a61004f968d32fde31cae->enter($__internal_2eb3e4eb1523c035cfeedc217e21777351b6e071ae5a61004f968d32fde31cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2eb3e4eb1523c035cfeedc217e21777351b6e071ae5a61004f968d32fde31cae->leave($__internal_2eb3e4eb1523c035cfeedc217e21777351b6e071ae5a61004f968d32fde31cae_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
