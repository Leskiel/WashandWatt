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

/* v_becomePartnerPage.html.twig */
class __TwigTemplate_598aa5de855eee3110e17fe8f1b1ebe5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_becomePartnerPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_becomePartnerPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/becomePartnerPage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

\t\t<title>WashandWatt</title>
\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 12
        $this->loadTemplate("navBar.html.twig", "v_becomePartnerPage.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</header>

\t\t<main>
\t\t\t<h1>
\t\t\t\t<span class=\"title-partner\">Devenons Partenaires</span>
\t\t\t</h1>
\t\t\t<div class=\"bar-partner\"></div>
\t\t\t<div class=\"button\">
\t\t\t\t<div class=\"button2\">
\t\t\t\t\t<a href=\"#contact\">
\t\t\t\t\t\t<button class=\"become-partner\" type=\"button\">Devenir Partenaire</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<span class=\"text-description\">Bienvenue sur notre page devenir partenaire ! Nous sommes ravis que vous soyez intéressé par la possibilité de travailler avec nous.</span>
\t\t\t<h2 class=\"title-avantage\">
\t\t\t\t<span class=\"title-avantage\">Avantage</span>
\t\t\t</h2>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<img src=\"img/visibilite.png\" alt=\"Image 1\">
\t\t\t\t\t<div class=\"bar-partners\"></div>
\t\t\t\t\t<h3>La visibilité</h3>
\t\t\t\t\t<p>Une visibilité sur notre mur des partenaires dans la salle mais aussi sur notre site</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<img src=\"img/image-de-marque.png\" alt=\"Image 2\">
\t\t\t\t\t<div class=\"bar-partners\"></div>
\t\t\t\t\t<h3>Une image de marque</h3>
\t\t\t\t\t<p>Une reconnaissance et une valorisation de la marque
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<img src=\"img/etudiant.png\" alt=\"Image 3\">
\t\t\t\t\t<div class=\"bar-partners\"></div>
\t\t\t\t\t<h3>Les étudiants</h3>
\t\t\t\t\t<p>Les étudiants sont souvent très actifs sur les réseaux sociaux et peuvent fournir des feedbacks et des suggestions précieux pour améliorer les produits et services de l'entreprise</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"containers\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<h2>Pack 1</h2>
\t\t\t\t\t<p>mur des partenaires</p>
\t\t\t\t\t<p>participations aux soirées partenaires</p>
\t\t\t\t\t<p>actions R.H</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<h2>Pack 2</h2>
\t\t\t\t\t<p>mur des partenaires</p>
\t\t\t\t\t<p>accueil & participations aux soirées partenaires</p>
\t\t\t\t\t<p>actions R.H</p>
\t\t\t\t\t<p>opérations commerciales</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h2 class=\"title-avantage\"  id=\"contact\">
\t\t\t\t<span class=\"title-partners\">Devenez nos partenaires</span>
\t\t\t</h2>
\t\t\t<form method=\"post\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"text\" name=\"entreprise\" placeholder=\"Nom de l'entreprise\">
\t\t\t\t</label>

\t\t\t\t<label>
\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\">
\t\t\t\t</label>

\t\t\t\t<label>
\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\"></textarea>
\t\t\t\t</label>

\t\t\t\t<input type=\"submit\" value=\"Envoyer\">
\t\t\t\t<script></script>
\t\t\t</form>
\t\t</main>

\t\t<footer>
\t\t\t";
        // line 89
        $this->loadTemplate("v_fooTer.html.twig", "v_becomePartnerPage.html.twig", 89)->display($context);
        // line 90
        echo "\t\t</footer>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "v_becomePartnerPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 90,  139 => 89,  61 => 13,  59 => 12,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('style/becomePartnerPage.css') }}\" type=\"text/css\" rel=\"stylesheet\">

\t\t<title>WashandWatt</title>
\t</head>
\t<body>
\t\t<header>
\t\t\t{% include 'navBar.html.twig' %}
\t\t</header>

\t\t<main>
\t\t\t<h1>
\t\t\t\t<span class=\"title-partner\">Devenons Partenaires</span>
\t\t\t</h1>
\t\t\t<div class=\"bar-partner\"></div>
\t\t\t<div class=\"button\">
\t\t\t\t<div class=\"button2\">
\t\t\t\t\t<a href=\"#contact\">
\t\t\t\t\t\t<button class=\"become-partner\" type=\"button\">Devenir Partenaire</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<span class=\"text-description\">Bienvenue sur notre page devenir partenaire ! Nous sommes ravis que vous soyez intéressé par la possibilité de travailler avec nous.</span>
\t\t\t<h2 class=\"title-avantage\">
\t\t\t\t<span class=\"title-avantage\">Avantage</span>
\t\t\t</h2>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<img src=\"img/visibilite.png\" alt=\"Image 1\">
\t\t\t\t\t<div class=\"bar-partners\"></div>
\t\t\t\t\t<h3>La visibilité</h3>
\t\t\t\t\t<p>Une visibilité sur notre mur des partenaires dans la salle mais aussi sur notre site</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<img src=\"img/image-de-marque.png\" alt=\"Image 2\">
\t\t\t\t\t<div class=\"bar-partners\"></div>
\t\t\t\t\t<h3>Une image de marque</h3>
\t\t\t\t\t<p>Une reconnaissance et une valorisation de la marque
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<img src=\"img/etudiant.png\" alt=\"Image 3\">
\t\t\t\t\t<div class=\"bar-partners\"></div>
\t\t\t\t\t<h3>Les étudiants</h3>
\t\t\t\t\t<p>Les étudiants sont souvent très actifs sur les réseaux sociaux et peuvent fournir des feedbacks et des suggestions précieux pour améliorer les produits et services de l'entreprise</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"containers\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<h2>Pack 1</h2>
\t\t\t\t\t<p>mur des partenaires</p>
\t\t\t\t\t<p>participations aux soirées partenaires</p>
\t\t\t\t\t<p>actions R.H</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<h2>Pack 2</h2>
\t\t\t\t\t<p>mur des partenaires</p>
\t\t\t\t\t<p>accueil & participations aux soirées partenaires</p>
\t\t\t\t\t<p>actions R.H</p>
\t\t\t\t\t<p>opérations commerciales</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h2 class=\"title-avantage\"  id=\"contact\">
\t\t\t\t<span class=\"title-partners\">Devenez nos partenaires</span>
\t\t\t</h2>
\t\t\t<form method=\"post\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"text\" name=\"entreprise\" placeholder=\"Nom de l'entreprise\">
\t\t\t\t</label>

\t\t\t\t<label>
\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\">
\t\t\t\t</label>

\t\t\t\t<label>
\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\"></textarea>
\t\t\t\t</label>

\t\t\t\t<input type=\"submit\" value=\"Envoyer\">
\t\t\t\t<script></script>
\t\t\t</form>
\t\t</main>

\t\t<footer>
\t\t\t{% include 'v_fooTer.html.twig' %}
\t\t</footer>
\t</body>
</html>
", "v_becomePartnerPage.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_becomePartnerPage.html.twig");
    }
}
