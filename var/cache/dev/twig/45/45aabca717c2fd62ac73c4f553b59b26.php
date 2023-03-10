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
\t\t<title>Wash&Watt</title>

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
        // line 23
        $this->loadTemplate("navBar.html.twig", "v_homePage.html.twig", 23)->display($context);
        // line 24
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
\t\t<section class=\"inscription\">
\t\t\t<div class=\"containers\">
\t\t\t\t<ol>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">1</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Inscription à la newsletter</h3>
\t\t\t\t\t\t\t\t<p>Pour commencer, inscrivez-vous à notre newsletter. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">2</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Questionnaire d'éligibilité</h3>
\t\t\t\t\t\t\t\t<p>Vous recevrez ensuite un questionnaire pour déterminer si vous êtes éligible à notre service. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">3</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Création de compte</h3>
\t\t\t\t\t\t\t\t<p>Vous pourez créer votre compte pour accéder à notre laverie et vous recevrez un QR code pour accèder à notre laverie.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">4</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Choix des horaires</h3>
\t\t\t\t\t\t\t\t<p>Enfin, vous pouvez choisir les horaires qui vous conviennent pour utiliser notre laverie. Nous avons des créneaux disponibles tout au long de la semaine, du matin au soir.</p>
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
\t\t<h1>
\t\t\t<span class=\"open\">Ouverture</span>
\t\t</h1>
\t\t<div class=\"countdown-wrapper\">
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"months\"></span>
\t\t\t\t<span class=\"countdown-label\">Mois</span>
\t\t\t</div>
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"days\"></span>
\t\t\t\t<span class=\"countdown-label\">Jours</span>
\t\t\t</div>
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"hours\"></span>
\t\t\t\t<span class=\"countdown-label\">Heures</span>
\t\t\t</div>
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"minutes\"></span>
\t\t\t\t<span class=\"countdown-label\">Minutes</span>
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tconst countdownDate = new Date('2023-12-31T23:59:59');
const monthsEl = document.getElementById('months');
const daysEl = document.getElementById('days');
const hoursEl = document.getElementById('hours');
const minutesEl = document.getElementById('minutes');

function updateCountdown() {
const now = new Date();
const diff = countdownDate - now;

const months = Math.floor(diff / (1000 * 60 * 60 * 24 * 30));
const days = Math.floor(diff / (1000 * 60 * 60 * 24)) % 30;
const hours = Math.floor(diff / (1000 * 60 * 60)) % 24;
const minutes = Math.floor(diff / (1000 * 60)) % 60;

monthsEl.textContent = months < 10 ? '0' + months : months;
daysEl.textContent = days < 10 ? '0' + days : days;
hoursEl.textContent = hours < 10 ? '0' + hours : hours;
minutesEl.textContent = minutes < 10 ? '0' + minutes : minutes;
}

updateCountdown();
setInterval(updateCountdown, 1000);
\t\t</script>

\t\t<footer>
\t\t\t";
        // line 183
        $this->loadTemplate("v_footer.html.twig", "v_homePage.html.twig", 183)->display($context);
        // line 184
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
        return array (  235 => 184,  233 => 183,  72 => 24,  70 => 23,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Wash&Watt</title>

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
\t\t<section class=\"inscription\">
\t\t\t<div class=\"containers\">
\t\t\t\t<ol>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">1</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Inscription à la newsletter</h3>
\t\t\t\t\t\t\t\t<p>Pour commencer, inscrivez-vous à notre newsletter. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">2</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Questionnaire d'éligibilité</h3>
\t\t\t\t\t\t\t\t<p>Vous recevrez ensuite un questionnaire pour déterminer si vous êtes éligible à notre service. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">3</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Création de compte</h3>
\t\t\t\t\t\t\t\t<p>Vous pourez créer votre compte pour accéder à notre laverie et vous recevrez un QR code pour accèder à notre laverie.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-number\">4</div>
\t\t\t\t\t\t\t<div class=\"step-description\">
\t\t\t\t\t\t\t\t<h3>Choix des horaires</h3>
\t\t\t\t\t\t\t\t<p>Enfin, vous pouvez choisir les horaires qui vous conviennent pour utiliser notre laverie. Nous avons des créneaux disponibles tout au long de la semaine, du matin au soir.</p>
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
\t\t<h1>
\t\t\t<span class=\"open\">Ouverture</span>
\t\t</h1>
\t\t<div class=\"countdown-wrapper\">
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"months\"></span>
\t\t\t\t<span class=\"countdown-label\">Mois</span>
\t\t\t</div>
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"days\"></span>
\t\t\t\t<span class=\"countdown-label\">Jours</span>
\t\t\t</div>
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"hours\"></span>
\t\t\t\t<span class=\"countdown-label\">Heures</span>
\t\t\t</div>
\t\t\t<div class=\"countdown-item\">
\t\t\t\t<span class=\"countdown-value\" id=\"minutes\"></span>
\t\t\t\t<span class=\"countdown-label\">Minutes</span>
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tconst countdownDate = new Date('2023-12-31T23:59:59');
const monthsEl = document.getElementById('months');
const daysEl = document.getElementById('days');
const hoursEl = document.getElementById('hours');
const minutesEl = document.getElementById('minutes');

function updateCountdown() {
const now = new Date();
const diff = countdownDate - now;

const months = Math.floor(diff / (1000 * 60 * 60 * 24 * 30));
const days = Math.floor(diff / (1000 * 60 * 60 * 24)) % 30;
const hours = Math.floor(diff / (1000 * 60 * 60)) % 24;
const minutes = Math.floor(diff / (1000 * 60)) % 60;

monthsEl.textContent = months < 10 ? '0' + months : months;
daysEl.textContent = days < 10 ? '0' + days : days;
hoursEl.textContent = hours < 10 ? '0' + hours : hours;
minutesEl.textContent = minutes < 10 ? '0' + minutes : minutes;
}

updateCountdown();
setInterval(updateCountdown, 1000);
\t\t</script>

\t\t<footer>
\t\t\t{% include 'v_footer.html.twig' %}
\t\t</footer>

\t</body>
</html>
", "v_homePage.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_homePage.html.twig");
    }
}
