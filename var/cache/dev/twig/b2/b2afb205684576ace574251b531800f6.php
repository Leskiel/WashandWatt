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

/* v_about.html.twig */
class __TwigTemplate_85a2b90e486d9b5051c48da80a2c543c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_about.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<metaname=\"viewport\" content=\"width=device-width, initial-scale=1.0\"></metaname>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/about.css"), "html", null, true);
        echo "\">
\t\t<script src=\"style/script.js\"></script>
\t\t<title>Wash&Watt</title>
\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 12
        $this->loadTemplate("navBar.html.twig", "v_about.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</header>

\t\t<main>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"img/facade.png\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h1 class=\"title\">À propos de notre entreprise</h1>
\t\t\t\t\t<p>En septembre 2021, Pierre-Antoine Domenech regardé l'émission \"Qui veut être mon associé ?\". Passionné de sport et d'écologie, il a eu l'idée de créer une laverie écologique et sportive, répondant aux besoins des jeunes touchés par les crises sanitaires et économiques. Après avoir effectué des recherches et partagé son projet avec son ami Dorian, un accord a été conclu pour s'associer et créer cette entreprise innovante. Le dossier a été proposé à l'incubateur H24 de Périgueux, qui a validé le projet. L'objectif est de s'implanter dans la région toulousaine et de devenir un acteur important dans les villes étudiantes françaises.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"staff\">
\t\t\t\t<h2 class=\"title2\">Notre équipe</h2>
\t\t\t\t<div class=\"cards-container\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"img/homme.png\" alt=\"Logo 1\">
\t\t\t\t\t\t<h3>Pierre Antoine Domenech</h3>
\t\t\t\t\t\t<p>Directeur</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"img/homme.png\" alt=\"Logo 2\">
\t\t\t\t\t\t<h3>Dorian Terrou</h3>
\t\t\t\t\t\t<p>Directeur</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"contact-staff\">
\t\t\t\t<h2>Contactez-nous</h2>
\t\t\t\t<strong>Téléphone :</strong>
\t\t\t\t01 23 45 67 89
\t\t\t\t<br><strong>Email :</strong>
\t\t\t\ttest@gmail.com
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div data-tf-widget=\"xOftVmM7\" data-tf-opacity=\"100\" data-tf-iframe-props=\"title=My typeform\" data-tf-transitive-search-params data-tf-medium=\"snippet\" style=\"width:100%;height:500px;\"></div>
\t\t\t\t\t<script src=\"//embed.typeform.com/next/embed.js\"></script>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h1 class=\"maps-title\">Localisation</h1>
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92457.00527520306!2d1.3628024736302882!3d43.600681870813204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb6fec7552ff%3A0x406f69c2f411030!2sToulouse!5e0!3m2!1sfr!2sfr!4v1678461546152!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<!--<div id=\"map\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t-->
\t\t</main>
\t\t<footer>";
        // line 65
        $this->loadTemplate("v_footer.html.twig", "v_about.html.twig", 65)->display($context);
        echo "</footer>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "v_about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 65,  61 => 13,  59 => 12,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<metaname=\"viewport\" content=\"width=device-width, initial-scale=1.0\"></metaname>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('style/about.css') }}\">
\t\t<script src=\"style/script.js\"></script>
\t\t<title>Wash&Watt</title>
\t</head>
\t<body>
\t\t<header>
\t\t\t{% include 'navBar.html.twig' %}
\t\t</header>

\t\t<main>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"img/facade.png\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h1 class=\"title\">À propos de notre entreprise</h1>
\t\t\t\t\t<p>En septembre 2021, Pierre-Antoine Domenech regardé l'émission \"Qui veut être mon associé ?\". Passionné de sport et d'écologie, il a eu l'idée de créer une laverie écologique et sportive, répondant aux besoins des jeunes touchés par les crises sanitaires et économiques. Après avoir effectué des recherches et partagé son projet avec son ami Dorian, un accord a été conclu pour s'associer et créer cette entreprise innovante. Le dossier a été proposé à l'incubateur H24 de Périgueux, qui a validé le projet. L'objectif est de s'implanter dans la région toulousaine et de devenir un acteur important dans les villes étudiantes françaises.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"staff\">
\t\t\t\t<h2 class=\"title2\">Notre équipe</h2>
\t\t\t\t<div class=\"cards-container\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"img/homme.png\" alt=\"Logo 1\">
\t\t\t\t\t\t<h3>Pierre Antoine Domenech</h3>
\t\t\t\t\t\t<p>Directeur</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"img/homme.png\" alt=\"Logo 2\">
\t\t\t\t\t\t<h3>Dorian Terrou</h3>
\t\t\t\t\t\t<p>Directeur</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"contact-staff\">
\t\t\t\t<h2>Contactez-nous</h2>
\t\t\t\t<strong>Téléphone :</strong>
\t\t\t\t01 23 45 67 89
\t\t\t\t<br><strong>Email :</strong>
\t\t\t\ttest@gmail.com
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div data-tf-widget=\"xOftVmM7\" data-tf-opacity=\"100\" data-tf-iframe-props=\"title=My typeform\" data-tf-transitive-search-params data-tf-medium=\"snippet\" style=\"width:100%;height:500px;\"></div>
\t\t\t\t\t<script src=\"//embed.typeform.com/next/embed.js\"></script>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h1 class=\"maps-title\">Localisation</h1>
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92457.00527520306!2d1.3628024736302882!3d43.600681870813204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb6fec7552ff%3A0x406f69c2f411030!2sToulouse!5e0!3m2!1sfr!2sfr!4v1678461546152!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<!--<div id=\"map\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t-->
\t\t</main>
\t\t<footer>{% include 'v_footer.html.twig' %}</footer>
\t</body>
</html>
", "v_about.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_about.html.twig");
    }
}
