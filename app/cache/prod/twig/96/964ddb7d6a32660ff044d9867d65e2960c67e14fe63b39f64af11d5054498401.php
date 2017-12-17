<?php

/* @Recipe/Recipe/index.html.twig */
class __TwigTemplate_0ee2664457dc49e05ca4f62c0eef7d8ae13e79ad6f98507fdd939ab1ed6d0052 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3>Recipe List</h3>
                    <div class=\"button\">
                        <a href=\"#\" class=\"btn btn-success\"><span><i class=\"glyphicon glyphicon-plus\"></i></span>New Recipe</a>
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
                        <tr>
                            <td>1</td>
                            <td>Recipe1</td>
                            <td>Recipe1 description</td>
                            <td>
                                <ul>
                                    <li>Farine : </li>
                                    <li>Tomate : </li>
                                    <li>Beure : </li>
                                    <li>Oeuf : </li>
                                </ul>
                            </td>
                            <td>
                                <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => "1"));
        echo "\" class=\"btn btn-success\">View</a>
                                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => "1"));
        echo "\" class=\"btn btn-info\">Details</a>
                                <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_edit", array("id" => "1"));
        echo "\" class=\"btn btn-danger\">Delete</a>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                    <!-- Pagination -->
                    ";
        // line 55
        echo "
                </div>
            </div>
        </div>
    </div>
";
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
        return array (  85 => 55,  75 => 40,  71 => 39,  67 => 38,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Recipe/Recipe/index.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\src\\RecipeBundle\\Resources\\views\\Recipe\\index.html.twig");
    }
}
