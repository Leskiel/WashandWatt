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

/* v_partnerPage.html.twig */
class __TwigTemplate_45b7e5d7b1f681eb652137a1a3863560 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_partnerPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_partnerPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/partnerPage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t";
        // line 7
        $this->loadTemplate("navBar.html.twig", "v_partnerPage.html.twig", 7)->display($context);
        // line 8
        echo "\t\t";
        $this->loadTemplate("fooTer.html.twig", "v_partnerPage.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<title>WashandWatt</title>
\t</head>
\t<body>
\t\t<main>
\t\t\t<h1>
\t\t\t\t<span class=\"title-partner\">Nos Partenaires</span>
\t\t\t</h1>
\t\t\t<div class=\"bar-partner\"></div>
\t\t\t<div class=\"button\">
\t\t\t\t<div class=\"button2\">
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t<button class=\"become-partner\" type=\"button\">Devenons Partenaire</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<span class=\"text-description\">Nous sommes reconnaissants pour le soutien de nos partenaires qui nous permettent de continuer dans cette aventure</span>
\t\t\t<div class=\"cards2\"></div>
\t\t\t<div class=\"cards-container\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 1\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 2\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 3\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 4\">
\t\t\t\t\t<h3>Instagram 4</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 5\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 6\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "v_partnerPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link href=\"{{ asset('style/partnerPage.css') }}\" type=\"text/css\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t{% include 'navBar.html.twig' %}
\t\t{% include 'fooTer.html.twig' %}
\t\t<title>WashandWatt</title>
\t</head>
\t<body>
\t\t<main>
\t\t\t<h1>
\t\t\t\t<span class=\"title-partner\">Nos Partenaires</span>
\t\t\t</h1>
\t\t\t<div class=\"bar-partner\"></div>
\t\t\t<div class=\"button\">
\t\t\t\t<div class=\"button2\">
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t<button class=\"become-partner\" type=\"button\">Devenons Partenaire</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<span class=\"text-description\">Nous sommes reconnaissants pour le soutien de nos partenaires qui nous permettent de continuer dans cette aventure</span>
\t\t\t<div class=\"cards2\"></div>
\t\t\t<div class=\"cards-container\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 1\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 2\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 3\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 4\">
\t\t\t\t\t<h3>Instagram 4</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 5\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<img src=\"img/instagram.png\" alt=\"Logo 6\">
\t\t\t\t\t<h3>Instagram</h3>
\t\t\t\t\t<p>🌐\tInstagram.com</p>
\t\t\t\t\t<p>📞\t0606060606</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t</body>
</html>
", "v_partnerPage.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_partnerPage.html.twig");
    }
}
