<?php

/* base.html.twig */
class __TwigTemplate_30936be108184f9159c9b166fc3f66dd353d95317e454f6b20a7d72d51dab12a extends Twig_Template
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
        $__internal_2e309d1962a315ff2b8b618491d12fe536b250e87646bc8bdacff2a8179949fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e309d1962a315ff2b8b618491d12fe536b250e87646bc8bdacff2a8179949fa->enter($__internal_2e309d1962a315ff2b8b618491d12fe536b250e87646bc8bdacff2a8179949fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    <title>DÉJÀ LU</title>

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/css/bootstrap-social.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/css/responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/fonts/font-awesome.min.css"), "html", null, true);
        echo "\">


    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/favicon.ico"), "html", null, true);
        echo "\">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
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
            <a class=\"navbar-brand pull-left\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipe_list");
        echo "\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/logotype-blanc.png"), "html", null, true);
        echo "\">
            </a>
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
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "                </div>
            </div>
        </div>
    </section>
</main>
<!-- ============================================================= SECTION – RECIPE : END ============================================================= -->


<!-- ============================================================= SECTION – FOOTER ============================================================= -->
<footer>
    <div class=\"container-fluid row\">
        <div class=\"bottom-links-icons\">
            <ul>
                <li><a href=\"#\"><img title=\"FAQ\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/icons/icon-faq.svg"), "html", null, true);
        echo "\"/></a></li>
                <li><a href=\"#\"><img title=\"CGU\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/icons/icon-cgu.svg"), "html", null, true);
        echo "\"/></a></li>
                <li><a href=\"#\"><img title=\"Nous contacter\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/recipe/img/icons/icon-contact.svg"), "html", null, true);
        echo "\"/></a></li>
            </ul>
        </div>
        <div class=\"bottom-links\">
            <ul>
                <li><a href=\"#\">Faq</a></li><li><a href=\"#\">CGU</a></li><li><a href=\"#\">Nous contacter</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END ============================================================= -->
<!-- JavaScripts placed at the end of the document so the pages load faster -->

";
        // line 84
        echo "</body>
</html>";
        
        $__internal_2e309d1962a315ff2b8b618491d12fe536b250e87646bc8bdacff2a8179949fa->leave($__internal_2e309d1962a315ff2b8b618491d12fe536b250e87646bc8bdacff2a8179949fa_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_926d364d93c516d659a6034e0a2d3b2494a0a7aa7bd0f1479ed9ab2a18a6901d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926d364d93c516d659a6034e0a2d3b2494a0a7aa7bd0f1479ed9ab2a18a6901d->enter($__internal_926d364d93c516d659a6034e0a2d3b2494a0a7aa7bd0f1479ed9ab2a18a6901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_926d364d93c516d659a6034e0a2d3b2494a0a7aa7bd0f1479ed9ab2a18a6901d->leave($__internal_926d364d93c516d659a6034e0a2d3b2494a0a7aa7bd0f1479ed9ab2a18a6901d_prof);

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
        return array (  155 => 52,  147 => 84,  131 => 68,  127 => 67,  123 => 66,  108 => 53,  106 => 52,  89 => 38,  85 => 37,  72 => 27,  68 => 26,  61 => 22,  54 => 18,  50 => 17,  46 => 16,  42 => 15,  38 => 14,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"fr\">
<head>
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"Découvrez, Trouvez et Partagez des livres avec Déjà Lu, site collaboratif de partage et de recommandation dédié aux lecteurs. Notre objectif : relancer l'Amour de la lecture. Avis, notes, discussions : vous pouvez échanger avant, pendant et après vos lectures ! Ensemble, diffusons notre amour de la lecture\">
    <meta name=\"author\" content=\"Me\">

    <title>DÉJÀ LU</title>

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/recipe/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/recipe/css/bootstrap-social.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/recipe/css/responsive.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/recipe/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/recipe/fonts/font-awesome.min.css') }}\">


    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/recipe/img/favicon.ico') }}\">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('bundles/recipe/js/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('bundles/recipe/js/respond.min.js') }}\"></script>
    <![endif]-->

</head>
<body>
<!-- ============================================================= HEADER ============================================================= -->
<header>
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <a class=\"navbar-brand pull-left\" href=\"{{ path('recipe_list') }}\">
                <img src=\"{{ asset('bundles/recipe/img/logotype-blanc.png') }}\">
            </a>
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
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
    </section>
</main>
<!-- ============================================================= SECTION – RECIPE : END ============================================================= -->


<!-- ============================================================= SECTION – FOOTER ============================================================= -->
<footer>
    <div class=\"container-fluid row\">
        <div class=\"bottom-links-icons\">
            <ul>
                <li><a href=\"#\"><img title=\"FAQ\" src=\"{{ asset('bundles/recipe/img/icons/icon-faq.svg') }}\"/></a></li>
                <li><a href=\"#\"><img title=\"CGU\" src=\"{{ asset('bundles/recipe/img/icons/icon-cgu.svg') }}\"/></a></li>
                <li><a href=\"#\"><img title=\"Nous contacter\" src=\"{{ asset('bundles/recipe/img/icons/icon-contact.svg') }}\"/></a></li>
            </ul>
        </div>
        <div class=\"bottom-links\">
            <ul>
                <li><a href=\"#\">Faq</a></li><li><a href=\"#\">CGU</a></li><li><a href=\"#\">Nous contacter</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END ============================================================= -->
<!-- JavaScripts placed at the end of the document so the pages load faster -->

{#<script src=\"{{ asset('bundles/recipe/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('bundles/recipe/js/bootstrap.min.js') }}\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>#}
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\SymfonyProjects\\DejaLuu\\app\\Resources\\views\\base.html.twig");
    }
}
