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
class __TwigTemplate_e3309ed460d59153757fb16b42db443f extends Template
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
\t\t<title>Wash</title>

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

\t\t<header>
\t\t\t";
        // line 22
        $this->loadTemplate("navBar.html.twig", "v_homePage.html.twig", 22)->display($context);
        // line 23
        echo "\t\t</header>

\t\t<h1 class=\"text-center\">
\t\t\t<span class=\"home-title\">Lessivez, rencontrez et pédalez</span>
\t\t</h1>
\t\t<div class=\"image-home\">
\t\t\t<img class=\"personnage\" src=\"img/personnage.png\" alt=\"personnage\">
\t\t\t<img class=\"washmachine\" src=\"img/washmachine.png\" alt=\"washmachine\">
\t\t</div>


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

\t\t<!--
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3\">
\t\t\t\t\t\t<img src=\"img/etudiant_diplome_1.png\" class=\"image-icon img-fluid\" alt=\"Etudiant diplome\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3\">
\t\t\t\t\t\t<img src=\"img/horloge_murale_1.png\" class=\"image-icon img-fluid\" alt=\"Horloge murale\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3\">
\t\t\t\t\t\t<img src=\"img/laverie_2_1.png\" class=\"image-icon img-fluid\" alt=\"Laverie\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t-->
\t\t<section class=\"inscription\">
\t\t\t<div class=\"containers\">
\t\t\t\t<ol>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">1</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Créez un compte</h3>
\t\t\t\t\t\t\t\t<p>Cliquez sur le bouton \"Inscription\" en haut à droite de la page et remplissez le formulaire d'inscription en indiquant votre nom, votre adresse e-mail et votre mot de passe.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">2</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Vérifiez votre adresse e-mail</h3>
\t\t\t\t\t\t\t\t<p>Nous vous enverrons un e-mail de vérification. Cliquez sur le lien dans l'e-mail pour activer votre compte.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">3</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Connectez-vous</h3>
\t\t\t\t\t\t\t\t<p>Entrez votre adresse e-mail et votre mot de passe sur la page de connexion pour accéder à votre compte.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">4</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Complétez votre profil</h3>
\t\t\t\t\t\t\t\t<p>Une fois connecté, complétez votre profil en ajoutant des informations sur vous-même, votre entreprise ou vos centres d'intérêt.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</section>

\t\t<div class=\"bandeau2 row\">
\t\t\t<h1 class=\"col-12\">Avantages</h1>
\t\t\t<div class=\"image1 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/social.png\" class=\"img\">
\t\t\t\t<h3>Sociale</h3>
\t\t\t\t<p>Possibilité de faire des rencontres
\t\t\t\t\t<br>
\t\t\t\t\tParticipation à des activités étudiant</p>
\t\t\t</div>
\t\t\t<div class=\"image2 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/securite.png\" class=\"img\">
\t\t\t\t<h3>Sécurisé</h3>
\t\t\t\t<p>Seul les membres peuvent y accéder grâce à une carte magnétique. De plus la laverie possède plusieurs caméras de surveillance.</p>
\t\t\t</div>
\t\t\t<div class=\"image3 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/equipement.png\" class=\"img\">
\t\t\t\t<h3>Équipement</h3>
\t\t\t\t<p>machines à café, snacks et boissons dédiés à la pratique sportive ainsi que la mise à disposition de casiers individuels de rangement</p>
\t\t\t</div>
\t\t\t<div class=\"image4 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/free.png\" class=\"img\">
\t\t\t\t<h3>Gratuit</h3>
\t\t\t\t<p>Aucuns frais juste l’obligation de pratiquer 30 minutes de sport par semaine et de participer aux évènements proposés par les partenaires Wash&Watt</p>
\t\t\t</div>
\t\t\t<div class=\"image5 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/localisation.png\" class=\"img\">
\t\t\t\t<h3>Géocalisation</h3>
\t\t\t\t<p>Situé en plein centre de Toulouse.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"image6 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/environnement.png\" class=\"img\">
\t\t\t\t<h3>Écologie</h3>
\t\t\t\t<p>Les vélos électriques alimentent la laverie, pour réduire notre impact énergétique sur la planète</p>
\t\t\t</div>
\t\t</div>


\t\t<footer>
\t\t\t";
        // line 150
        $this->loadTemplate("v_footer.html.twig", "v_homePage.html.twig", 150)->display($context);
        // line 151
        echo "\t\t</footer>
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
        return array (  202 => 151,  200 => 150,  71 => 23,  69 => 22,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Wash</title>

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

\t\t<header>
\t\t\t{% include 'navBar.html.twig' %}
\t\t</header>

\t\t<h1 class=\"text-center\">
\t\t\t<span class=\"home-title\">Lessivez, rencontrez et pédalez</span>
\t\t</h1>
\t\t<div class=\"image-home\">
\t\t\t<img class=\"personnage\" src=\"img/personnage.png\" alt=\"personnage\">
\t\t\t<img class=\"washmachine\" src=\"img/washmachine.png\" alt=\"washmachine\">
\t\t</div>


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

\t\t<!--
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3\">
\t\t\t\t\t\t<img src=\"img/etudiant_diplome_1.png\" class=\"image-icon img-fluid\" alt=\"Etudiant diplome\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3\">
\t\t\t\t\t\t<img src=\"img/horloge_murale_1.png\" class=\"image-icon img-fluid\" alt=\"Horloge murale\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 mb-3\">
\t\t\t\t\t\t<img src=\"img/laverie_2_1.png\" class=\"image-icon img-fluid\" alt=\"Laverie\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t-->
\t\t<section class=\"inscription\">
\t\t\t<div class=\"containers\">
\t\t\t\t<ol>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">1</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Créez un compte</h3>
\t\t\t\t\t\t\t\t<p>Cliquez sur le bouton \"Inscription\" en haut à droite de la page et remplissez le formulaire d'inscription en indiquant votre nom, votre adresse e-mail et votre mot de passe.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">2</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Vérifiez votre adresse e-mail</h3>
\t\t\t\t\t\t\t\t<p>Nous vous enverrons un e-mail de vérification. Cliquez sur le lien dans l'e-mail pour activer votre compte.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">3</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Connectez-vous</h3>
\t\t\t\t\t\t\t\t<p>Entrez votre adresse e-mail et votre mot de passe sur la page de connexion pour accéder à votre compte.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">4</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Complétez votre profil</h3>
\t\t\t\t\t\t\t\t<p>Une fois connecté, complétez votre profil en ajoutant des informations sur vous-même, votre entreprise ou vos centres d'intérêt.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</section>

\t\t<div class=\"bandeau2 row\">
\t\t\t<h1 class=\"col-12\">Avantages</h1>
\t\t\t<div class=\"image1 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/social.png\" class=\"img\">
\t\t\t\t<h3>Sociale</h3>
\t\t\t\t<p>Possibilité de faire des rencontres
\t\t\t\t\t<br>
\t\t\t\t\tParticipation à des activités étudiant</p>
\t\t\t</div>
\t\t\t<div class=\"image2 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/securite.png\" class=\"img\">
\t\t\t\t<h3>Sécurisé</h3>
\t\t\t\t<p>Seul les membres peuvent y accéder grâce à une carte magnétique. De plus la laverie possède plusieurs caméras de surveillance.</p>
\t\t\t</div>
\t\t\t<div class=\"image3 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/equipement.png\" class=\"img\">
\t\t\t\t<h3>Équipement</h3>
\t\t\t\t<p>machines à café, snacks et boissons dédiés à la pratique sportive ainsi que la mise à disposition de casiers individuels de rangement</p>
\t\t\t</div>
\t\t\t<div class=\"image4 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/free.png\" class=\"img\">
\t\t\t\t<h3>Gratuit</h3>
\t\t\t\t<p>Aucuns frais juste l’obligation de pratiquer 30 minutes de sport par semaine et de participer aux évènements proposés par les partenaires Wash&Watt</p>
\t\t\t</div>
\t\t\t<div class=\"image5 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/localisation.png\" class=\"img\">
\t\t\t\t<h3>Géocalisation</h3>
\t\t\t\t<p>Situé en plein centre de Toulouse.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"image6 col-md-4 col-sm-6\">
\t\t\t\t<img src=\"img/environnement.png\" class=\"img\">
\t\t\t\t<h3>Écologie</h3>
\t\t\t\t<p>Les vélos électriques alimentent la laverie, pour réduire notre impact énergétique sur la planète</p>
\t\t\t</div>
\t\t</div>


\t\t<footer>
\t\t\t{% include 'v_footer.html.twig' %}
\t\t</footer>
\t</body>
</html>
", "v_homePage.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_homePage.html.twig");
    }
}
