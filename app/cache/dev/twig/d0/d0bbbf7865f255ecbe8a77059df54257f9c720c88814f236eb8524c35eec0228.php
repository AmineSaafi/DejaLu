<?php

/* @Recipe/Recipe/index.html.twig */
class __TwigTemplate_e9b83eacb8b9e8778ccca7a764495d8b402eee8a085cb3cd14ee7d5ebd6ce9a2 extends Twig_Template
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
        $__internal_ba42cba67f21033e1a94a7e6fa7424fabe2b301f09303289379498292a3902f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba42cba67f21033e1a94a7e6fa7424fabe2b301f09303289379498292a3902f9->enter($__internal_ba42cba67f21033e1a94a7e6fa7424fabe2b301f09303289379498292a3902f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Recipe/Recipe/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba42cba67f21033e1a94a7e6fa7424fabe2b301f09303289379498292a3902f9->leave($__internal_ba42cba67f21033e1a94a7e6fa7424fabe2b301f09303289379498292a3902f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a5d60d8f5de2588a86189e5fe969d34b9e68e2dc911c2ea921338cf66f321f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a5d60d8f5de2588a86189e5fe969d34b9e68e2dc911c2ea921338cf66f321f->enter($__internal_75a5d60d8f5de2588a86189e5fe969d34b9e68e2dc911c2ea921338cf66f321f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Recipe Name</th>
                            <th>Recipe Description</th>
                            <th>Aliments</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 26
            echo "                        <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recipe"], "aliments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 33
                echo "                                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                </ul>
                            </td>
                            <td>
                                <a href=\"details/";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-info\">Details</a>
                                <a href=\"edit/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edit</a>
                                <a href=\"delete/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "id", array()), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure?');\" class=\"btn btn-danger\">Delete</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                    </table>
                    <!-- Pagination -->
                    ";
        // line 55
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_75a5d60d8f5de2588a86189e5fe969d34b9e68e2dc911c2ea921338cf66f321f->leave($__internal_75a5d60d8f5de2588a86189e5fe969d34b9e68e2dc911c2ea921338cf66f321f_prof);

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
        return array (  128 => 55,  123 => 44,  113 => 40,  109 => 39,  105 => 38,  100 => 35,  91 => 33,  87 => 32,  81 => 29,  77 => 28,  73 => 27,  70 => 26,  66 => 25,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Recipe Name</th>
                            <th>Recipe Description</th>
                            <th>Aliments</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for recipe in recipes %}
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
                    {#<div class=\"container\">
                        <?php foreach (\$films as \$film): ?>
                        <?php echo \$film->name; ?>
                        <?php endforeach; ?>
                    </div>

                    <?php echo \$films->render(); ?>
                    <!-- End Pagination -->#}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@Recipe/Recipe/index.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\src\\RecipeBundle\\Resources\\views\\Recipe\\index.html.twig");
    }
}
