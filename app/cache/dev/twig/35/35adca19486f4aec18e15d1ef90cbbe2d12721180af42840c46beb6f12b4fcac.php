<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3c8b77020f1b7b955936a7c1e98293256be907a0bf7c95153b915a37138c7463 extends Twig_Template
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
        $__internal_cc9bf63eb0be1f19ad0c4df1115d6a5d8b6d992c89bebcd607a0d2ab12d7257e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9bf63eb0be1f19ad0c4df1115d6a5d8b6d992c89bebcd607a0d2ab12d7257e->enter($__internal_cc9bf63eb0be1f19ad0c4df1115d6a5d8b6d992c89bebcd607a0d2ab12d7257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9bf63eb0be1f19ad0c4df1115d6a5d8b6d992c89bebcd607a0d2ab12d7257e->leave($__internal_cc9bf63eb0be1f19ad0c4df1115d6a5d8b6d992c89bebcd607a0d2ab12d7257e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00ff9adb5c986854ab23d46c5060dc4071257090842192d938d84cbdab1b0efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ff9adb5c986854ab23d46c5060dc4071257090842192d938d84cbdab1b0efe->enter($__internal_00ff9adb5c986854ab23d46c5060dc4071257090842192d938d84cbdab1b0efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00ff9adb5c986854ab23d46c5060dc4071257090842192d938d84cbdab1b0efe->leave($__internal_00ff9adb5c986854ab23d46c5060dc4071257090842192d938d84cbdab1b0efe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_367e797cf1a737fd5378172c83cd72d31893ef286a9a84de70fa6bcf14ce5f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367e797cf1a737fd5378172c83cd72d31893ef286a9a84de70fa6bcf14ce5f73->enter($__internal_367e797cf1a737fd5378172c83cd72d31893ef286a9a84de70fa6bcf14ce5f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_367e797cf1a737fd5378172c83cd72d31893ef286a9a84de70fa6bcf14ce5f73->leave($__internal_367e797cf1a737fd5378172c83cd72d31893ef286a9a84de70fa6bcf14ce5f73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_258f5e86996d2b1f9cc3dcaefe8def43034b42f14aaf3ee09842e86444fba9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258f5e86996d2b1f9cc3dcaefe8def43034b42f14aaf3ee09842e86444fba9cc->enter($__internal_258f5e86996d2b1f9cc3dcaefe8def43034b42f14aaf3ee09842e86444fba9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_258f5e86996d2b1f9cc3dcaefe8def43034b42f14aaf3ee09842e86444fba9cc->leave($__internal_258f5e86996d2b1f9cc3dcaefe8def43034b42f14aaf3ee09842e86444fba9cc_prof);

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
