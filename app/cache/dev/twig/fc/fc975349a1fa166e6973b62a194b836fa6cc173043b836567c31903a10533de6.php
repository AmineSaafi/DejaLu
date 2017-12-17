<?php

/* @Recipe/Recipe/index.html.twig */
class __TwigTemplate_e5c2aa98b04e1640cf252817c3c867dffd0e6ea3ca97af046cac0ed332592de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Recipe/Recipe/index.html.twig", 1);
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
        $__internal_a59921309e2c87d7f63ae80991c417dfd429418c8e14d401d1c28b6601dc114f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59921309e2c87d7f63ae80991c417dfd429418c8e14d401d1c28b6601dc114f->enter($__internal_a59921309e2c87d7f63ae80991c417dfd429418c8e14d401d1c28b6601dc114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Recipe/Recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59921309e2c87d7f63ae80991c417dfd429418c8e14d401d1c28b6601dc114f->leave($__internal_a59921309e2c87d7f63ae80991c417dfd429418c8e14d401d1c28b6601dc114f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9deffab5d35440bd087aa852dfa4b1d2809ec3c2bf703194d397f66646ab2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9deffab5d35440bd087aa852dfa4b1d2809ec3c2bf703194d397f66646ab2c6->enter($__internal_d9deffab5d35440bd087aa852dfa4b1d2809ec3c2bf703194d397f66646ab2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3>Recipe List</h3>
                    <div class=\"button\">
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_create");
        echo "\" class=\"btn btn-success\">New Recipe</a>
                    </div>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 17
        echo "                    <table class=\"table\">
                        <thead>
                        <tr>
                            ";
        // line 21
        echo "                            <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
                            <th";
        // line 22
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
                            <th>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Decription", "a.description");
        echo "</th>
                            <th>Aliments</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 30
            echo "                        <tr>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recipe"], "aliments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 37
                echo "                                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                                </ul>
                            </td>
                            <td>
                                <a href=\"details/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-info\">Details</a>
                                <a href=\"edit/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edit</a>
                                <a href=\"delete/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?');\" class=\"btn btn-danger\">Delete</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class=\"navigation text-center\">
                        ";
        // line 52
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d9deffab5d35440bd087aa852dfa4b1d2809ec3c2bf703194d397f66646ab2c6->leave($__internal_d9deffab5d35440bd087aa852dfa4b1d2809ec3c2bf703194d397f66646ab2c6_prof);

    }

    public function getTemplateName()
    {
        return "@Recipe/Recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  139 => 48,  129 => 44,  125 => 43,  121 => 42,  116 => 39,  107 => 37,  103 => 36,  97 => 33,  93 => 32,  89 => 31,  86 => 30,  82 => 29,  73 => 23,  65 => 22,  60 => 21,  55 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
                    <h3>Recipe List</h3>
                    <div class=\"button\">
                        <a href=\"{{ path('recipe_create') }}\" class=\"btn btn-success\">New Recipe</a>
                    </div>
                </div>
                <div class=\"panel-body\">
                    {#<div class=\"count\">
                        {{ pagination.getTotalItemCount }}
                    </div>#}
                    <table class=\"table\">
                        <thead>
                        <tr>
                            {# sorting of properties based on query components #}
                            <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
                            <th{% if pagination.isSorted('a.title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Decription', 'a.description') }}</th>
                            <th>Aliments</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for recipe in pagination %}
                        <tr>
                            <td>{{ recipe.id }}</td>
                            <td>{{ recipe.title }}</td>
                            <td>{{ recipe.description }}</td>
                            <td>
                                <ul>
                                    {% for f in recipe.aliments %}
                                            <li>{{ f.name }}</li>
                                    {% endfor %}
                                </ul>
                            </td>
                            <td>
                                <a href=\"details/{{ recipe.id }}\" class=\"btn btn-info\">Details</a>
                                <a href=\"edit/{{ recipe.id }}\" class=\"btn btn-warning\">Edit</a>
                                <a href=\"delete/{{ recipe.id }}\" onclick=\"return confirm('Are you sure?');\" class=\"btn btn-danger\">Delete</a>
                            </td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class=\"navigation text-center\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Recipe/Recipe/index.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\src\\RecipeBundle\\Resources\\views\\Recipe\\index.html.twig");
    }
}
