<?php

/* @Recipe/Recipe/details.html.twig */
class __TwigTemplate_935acb39874dcff62fb4235140386412e76ac5c8f5f40a6577750ff08a11f183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Recipe/Recipe/details.html.twig", 1);
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
        $__internal_712fc96dc55500596e0737608c99478403a864f7b6c9a814df83f3b5567edc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712fc96dc55500596e0737608c99478403a864f7b6c9a814df83f3b5567edc86->enter($__internal_712fc96dc55500596e0737608c99478403a864f7b6c9a814df83f3b5567edc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Recipe/Recipe/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712fc96dc55500596e0737608c99478403a864f7b6c9a814df83f3b5567edc86->leave($__internal_712fc96dc55500596e0737608c99478403a864f7b6c9a814df83f3b5567edc86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8563ab164893c56d1e62d5436c0d2105d9882fdd149a1dcca75e200bd5dd0e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8563ab164893c56d1e62d5436c0d2105d9882fdd149a1dcca75e200bd5dd0e3f->enter($__internal_8563ab164893c56d1e62d5436c0d2105d9882fdd149a1dcca75e200bd5dd0e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3>Recipe : # ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id", array()), "html", null, true);
        echo "</h3>
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_list");
        echo "\" class=\"btn btn-info\">Return to the home page</a>
                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <tr>
                            <td>Name</td>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Aliments</td>
                            <td>
                                <ul>
                                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "aliments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 26
            echo "                                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                </ul>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8563ab164893c56d1e62d5436c0d2105d9882fdd149a1dcca75e200bd5dd0e3f->leave($__internal_8563ab164893c56d1e62d5436c0d2105d9882fdd149a1dcca75e200bd5dd0e3f_prof);

    }

    public function getTemplateName()
    {
        return "@Recipe/Recipe/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  79 => 26,  75 => 25,  66 => 19,  59 => 15,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
                    <h3>Recipe : # {{ recipe.id }}</h3>
                    <a href=\"{{ path('recipe_list') }}\" class=\"btn btn-info\">Return to the home page</a>
                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <tr>
                            <td>Name</td>
                            <td>{{ recipe.title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ recipe.description }}</td>
                        </tr>
                        <tr>
                            <td>Aliments</td>
                            <td>
                                <ul>
                                    {% for f in recipe.aliments %}
                                        <li>{{ f.name }}</li>
                                    {% endfor %}
                                </ul>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Recipe/Recipe/details.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\src\\RecipeBundle\\Resources\\views\\Recipe\\details.html.twig");
    }
}
