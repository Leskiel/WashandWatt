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

/* fooTer.html.twig */
class __TwigTemplate_61cf85c0ad8b23efcdf7c8c8a64112f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fooTer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fooTer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- importer la bibliothèque Bootstrap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
\t\t<!-- importer la bibliothèque jQuery -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t<!-- importer la bibliothèque Popper.js -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t\t<!-- importer la bibliothèque Bootstrap -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/fooTer.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
\t</head>

\t<footer class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img class=\"logo2\" src=\"img/Logo.png\" alt=\"logo\">
\t\t\t\t<span class=\"slogan\">Lessivez, rencontrez, et pédalez</span>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<span class=\"title-news\">Venez suivre nos aventures</span>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Saisissez votre e-mail\" required>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<span class=\"service\">Service</span>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"about-foot\" href=\"/\">À Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"contactt\" href=\"/\">Nous contacter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"private\" href=\"/\">Thermes et Conditions</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t<span class=\"label-social\">Suivez nous sur</span>
\t\t\t\t\t<img class=\"logo3\" src=\"img/instagram.png\" alt=\"logo\">
\t\t\t\t\t<img class=\"logo4\" src=\"img/facebook.png\" alt=\"logo\">
\t\t\t\t\t<img class=\"logo5\" src=\"img/linkedin.png\" alt=\"logo\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "fooTer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- importer la bibliothèque Bootstrap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
\t\t<!-- importer la bibliothèque jQuery -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t<!-- importer la bibliothèque Popper.js -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
\t\t<!-- importer la bibliothèque Bootstrap -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
\t\t<link href=\"{{ asset('style/fooTer.css') }}\" type=\"text/css\" rel=\"stylesheet\">
\t</head>

\t<footer class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img class=\"logo2\" src=\"img/Logo.png\" alt=\"logo\">
\t\t\t\t<span class=\"slogan\">Lessivez, rencontrez, et pédalez</span>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<span class=\"title-news\">Venez suivre nos aventures</span>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Saisissez votre e-mail\" required>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<span class=\"service\">Service</span>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"about-foot\" href=\"/\">À Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"contactt\" href=\"/\">Nous contacter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"private\" href=\"/\">Thermes et Conditions</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t<span class=\"label-social\">Suivez nous sur</span>
\t\t\t\t\t<img class=\"logo3\" src=\"img/instagram.png\" alt=\"logo\">
\t\t\t\t\t<img class=\"logo4\" src=\"img/facebook.png\" alt=\"logo\">
\t\t\t\t\t<img class=\"logo5\" src=\"img/linkedin.png\" alt=\"logo\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
</html>
", "fooTer.html.twig", "C:\\Web2\\WashandWatt\\templates\\fooTer.html.twig");
    }
}
