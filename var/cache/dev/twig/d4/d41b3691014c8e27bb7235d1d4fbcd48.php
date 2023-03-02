<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* v_homePage.html.twig */
class __TwigTemplate_3ebf76ab4db573b4ba114e7f66719f11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_homePage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_homePage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Accueil</title>

\t\t<!-- Inclure les fichiers CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/homePage.css"), "html", null, true);
        echo "\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

\t\t<!-- Inclure les scripts JavaScript -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t</head>
\t<body>

\t\t";
        // line 21
        $this->loadTemplate("navBar.html.twig", "v_homePage.html.twig", 21)->display($context);
        // line 22
        echo "
\t\t<h1 class=\"home-title\">
\t\t\tLessivez, rencontrez et pédalez
\t\t</h1>

\t\t<img class=\"personnage\" src=\"img/personnage.png\" alt=\"personnage\">
\t\t<img class=\"washmachine\" src=\"img/washmachine.png\" alt=\"washmachine\">

\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center\">Notre laverie</h1>
\t\t\t<p class=\"text-center\">La première laverie réservée aux étudiants pour se rencontrer, contribuer au développement durable, et faire du sport. Laver, pédaler, et créer de l’énergie dans un lieu inédit favorisant les interactions sociales.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<img src=\"img/washmachine2.png\" class=\"img-fluid\" alt=\"washmachine2\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<img src=\"img/washmachine3.png\" class=\"img-fluid\" alt=\"washmachine3\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<img src=\"img/washmachine4.png\" class=\"img-fluid\" alt=\"washmachine4\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bandeau\">
\t\t\t<h1>Un lieu de vie pour les étudiants</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image1.jpg\" alt=\"Image 1\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image2.jpg\" alt=\"Image 2\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image3.jpg\" alt=\"Image 3\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image4.jpg\" alt=\"Image 4\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"bandeau2\">
\t\t\t<h1>Avantages</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image1.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Sociale</h3>
\t\t\t\t\t<p>Possibilité de faire des rencontres 
Participation à des activités étudiants 
</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image2.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Sécurisé</h3>
\t\t\t\t\t<p>Seul les membres peuvent y accéder grâce à une carte magnétique. De plus;la laverie possède plusieurs caméras de surveillance.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image3.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Équipement</h3>
\t\t\t\t\t<p>machines à café, snacks et boissons dédiés à la pratique sportive ainsi que la mise à disposition de casiers individuels de rangement</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image4.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Gratuit</h3>
\t\t\t\t\t<p>Aucuns frais juste l’obligation de pratiquer 30 minutes de sport par semaine et de participer aux évènements proposés par les partenaires Wash&Watt</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image5.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Géocalisation</h3>
\t\t\t\t\t<p>Situé en plein centre de Toulouse. </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image6.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Écologie</h3>
\t\t\t\t\t<p>Les vélos électriques alimentent la laverie, pour réduire notre impact énergétique sur la planète</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<h2 class=\"text-center\">Titre sous le bandeau</h2>
\t\t\t<p class=\"text-center\">Description du titre sous le bandeau</p>
\t\t</div>

\t</body>



</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "v_homePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  68 => 21,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Accueil</title>

\t\t<!-- Inclure les fichiers CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('style/homePage.css') }}\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

\t\t<!-- Inclure les scripts JavaScript -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t</head>
\t<body>

\t\t{% include 'navBar.html.twig' %}

\t\t<h1 class=\"home-title\">
\t\t\tLessivez, rencontrez et pédalez
\t\t</h1>

\t\t<img class=\"personnage\" src=\"img/personnage.png\" alt=\"personnage\">
\t\t<img class=\"washmachine\" src=\"img/washmachine.png\" alt=\"washmachine\">

\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center\">Notre laverie</h1>
\t\t\t<p class=\"text-center\">La première laverie réservée aux étudiants pour se rencontrer, contribuer au développement durable, et faire du sport. Laver, pédaler, et créer de l’énergie dans un lieu inédit favorisant les interactions sociales.</p>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<img src=\"img/washmachine2.png\" class=\"img-fluid\" alt=\"washmachine2\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<img src=\"img/washmachine3.png\" class=\"img-fluid\" alt=\"washmachine3\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<img src=\"img/washmachine4.png\" class=\"img-fluid\" alt=\"washmachine4\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bandeau\">
\t\t\t<h1>Un lieu de vie pour les étudiants</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image1.jpg\" alt=\"Image 1\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image2.jpg\" alt=\"Image 2\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image3.jpg\" alt=\"Image 3\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"chemin/vers/image4.jpg\" alt=\"Image 4\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"bandeau2\">
\t\t\t<h1>Avantages</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image1.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Sociale</h3>
\t\t\t\t\t<p>Possibilité de faire des rencontres 
Participation à des activités étudiants 
</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image2.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Sécurisé</h3>
\t\t\t\t\t<p>Seul les membres peuvent y accéder grâce à une carte magnétique. De plus;la laverie possède plusieurs caméras de surveillance.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image3.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Équipement</h3>
\t\t\t\t\t<p>machines à café, snacks et boissons dédiés à la pratique sportive ainsi que la mise à disposition de casiers individuels de rangement</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image4.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Gratuit</h3>
\t\t\t\t\t<p>Aucuns frais juste l’obligation de pratiquer 30 minutes de sport par semaine et de participer aux évènements proposés par les partenaires Wash&Watt</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image5.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Géocalisation</h3>
\t\t\t\t\t<p>Situé en plein centre de Toulouse. </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<img src=\"image6.jpg\" class=\"img-fluid\">
\t\t\t\t\t<h3>Écologie</h3>
\t\t\t\t\t<p>Les vélos électriques alimentent la laverie, pour réduire notre impact énergétique sur la planète</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<h2 class=\"text-center\">Titre sous le bandeau</h2>
\t\t\t<p class=\"text-center\">Description du titre sous le bandeau</p>
\t\t</div>

\t</body>



</html>
", "v_homePage.html.twig", "/Users/mathis/Document/STAGE/WashandWatt/templates/v_homePage.html.twig");
    }
}
