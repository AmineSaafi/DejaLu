<?php

/* base.html.twig */
class __TwigTemplate_41d568b62d1d62d9eca3fa70992cca1ee4b9db61c620527295ef50d7463f8532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">
<head>
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"Découvrez, Trouvez et Partagez des livres avec Déjà Lu, site collaboratif de partage et de recommandation dédié aux lecteurs. Notre objectif : relancer l'Amour de la lecture. Avis, notes, discussions : vous pouvez échanger avant, pendant et après vos lectures ! Ensemble, diffusons notre amour de la lecture\">
    <meta name=\"author\" content=\"Me\">

    <title>DÉJÀ Mangé</title>

    ";
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/css/bootstrap.css"), "html", null, true);
        echo "s\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <!-- Favicon -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

</head>
<body>
<!-- ============================================================= HEADER ============================================================= -->
<header>
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle pull-right\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/icons/navbar-icon.svg"), "html", null, true);
        echo "\">
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_list");
        echo "\">
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/logotype-blanc.png"), "html", null, true);
        echo "\">
            </a>
        </div>
        <div id=\"main_navbar\">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-static-top public_menu\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"#\" id=\"book_search_button\" ><i class=\"dl-icon icon-recherche\"></i><span class=\"sr-only\">Rechercher</span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<!-- ============================================================= HEADER : END ============================================================= -->



<!-- ============================================================= SECTION – RECIPE ============================================================= -->
<main>
    <section>
        <div class=\"container-fluid content-fullheight\">
            <div class=\"container h100\" >
                <div class=\"col-md-12 pos-r h100\">
                    ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "                </div>
            </div>
        </div>
    </section>
</main>
<!-- ============================================================= SECTION – RECIPE : END ============================================================= -->


<div class=\"modal fade\" id=\"bookSearchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"bookSearchModalLabel\">
    <div class=\"vertical-alignment-helper\">
        <div class=\"modal-dialog vertical-align-center modal-lg\" role=\"document\">
            <div class=\"modal-content modalHeight\">
                <!-- Onglet recherche de livre -->
                <div id=\"bookSearch\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\">Rechercher un livre</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-group row\">
                            <div class=\"col-md-12\">
                                <button type=\"submit\" class=\"responsiveSearchButton searchIconStatic\">
                                    <span class=\"sr-only\">Rechercher</span>
                                </button>
                                <span class=\"responsiveSearchBarSpan\"><input id=\"txtBookSearch\" type=\"text\" class=\"form-control responsiveSearch\" placeholder=\"Recherche par titre, auteur ou ISBN\"></span>
                                <input name=\"search_option\" type=\"hidden\">
                            </div>
                        </form>
                        <div id=\"listBookResults\" class=\"searchResultContainer\">
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<footer>
    <div class=\"container-fluid row\">
        <div class=\"bottom-links-icons\">
            <ul>
                <li><a href=\"#\"><img title=\"FAQ\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/icons/icon-faq.svg"), "html", null, true);
        echo "\"/></a></li>
                ";
        // line 116
        echo "                <li><a href=\"#\"><img title=\"Nous contacter\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/icons/icon-contact.svg"), "html", null, true);
        echo "\"/></a></li>
            </ul>
        </div>
        <div class=\"bottom-links\">
            <ul>
                <li><a href=\"/faq\">Faq</a></li><li><a href=\"/cgu\">CGU</a></li><li><a href=\"/contact/\">Nous contacter</a></li>
            </ul>
        </div>
        <!--  -->
        <div class=\"social-links\">
            <ul>
                <li><a href=\"https://www.facebook.com/DejaLu.fr/\" target=\"_blank\"><i class=\"dl-icon icon-fb\"></i></a></li>
                <li><a href=\"https://twitter.com/DejaLu_fr\" target=\"_blank\"><i class=\"dl-icon icon-tw\"></i></a></li>
                <li><a href=\"https://www.instagram.com/dejalu.fr/\" target=\"_blank\"><i class=\"dl-icon icon-insta\"></i></a></li>
                <li><a href=\"https://plus.google.com/+DejaluFr\" target=\"_blank\"><i class=\"dl-icon icon-gp\"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END ============================================================= -->
<!-- JavaScripts placed at the end of the document so the pages load faster -->

<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
</body>
</html>";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 71,  190 => 139,  186 => 138,  160 => 116,  156 => 114,  112 => 72,  110 => 71,  81 => 45,  77 => 44,  72 => 42,  57 => 30,  53 => 29,  46 => 25,  40 => 22,  35 => 21,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\app\\Resources\\views\\base.html.twig");
    }
}
