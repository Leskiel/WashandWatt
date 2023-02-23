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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/fooTer.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

<!DOCTYPE html>
<html lang=\"en\">
\t<footer>
\t\t<img class=\"logo2\" src=\"img/Logo.png\" alt=\"logo\">
\t\t<span class=\"slogan\">
\t\t\tLessivez, rencontrez, et pédalez</span>
\t\t<span class=\"title-news\">
\t\t\tVenez suivre nos aventures</span>
\t\t<div class=\"newsletter\">
\t\t\t<input type=\"text\" placeholder=\"Saisissez votre e-mail\" class=\"mail\" required>
\t\t\t<button class=\"send-news\" type=\"button\">Envoyer</button>
\t\t</div>

\t\t<div class=\"Service-zone\">
\t\t\t<span class=\"service\">Service</span>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"about-foot\">À Propos</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"contact\">Nous contacter</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"private\">Thermes et Conditions</span>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"social-network\">
\t\t\t<span class=\"label-social\">Suivez nous sur
\t\t\t</span>
\t\t\t<img class=\"logo3\" src=\"img/instagram.png\" alt=\"logo\">
\t\t\t<img class=\"logo4\" src=\"img/facebook.png\" alt=\"logo\">
\t\t\t<img class=\"logo5\" src=\"img/linkedin.png\" alt=\"logo\">
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
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('style/fooTer.css') }}\" type=\"text/css\" rel=\"stylesheet\">

<!DOCTYPE html>
<html lang=\"en\">
\t<footer>
\t\t<img class=\"logo2\" src=\"img/Logo.png\" alt=\"logo\">
\t\t<span class=\"slogan\">
\t\t\tLessivez, rencontrez, et pédalez</span>
\t\t<span class=\"title-news\">
\t\t\tVenez suivre nos aventures</span>
\t\t<div class=\"newsletter\">
\t\t\t<input type=\"text\" placeholder=\"Saisissez votre e-mail\" class=\"mail\" required>
\t\t\t<button class=\"send-news\" type=\"button\">Envoyer</button>
\t\t</div>

\t\t<div class=\"Service-zone\">
\t\t\t<span class=\"service\">Service</span>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"about-foot\">À Propos</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"contact\">Nous contacter</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"private\">Thermes et Conditions</span>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"social-network\">
\t\t\t<span class=\"label-social\">Suivez nous sur
\t\t\t</span>
\t\t\t<img class=\"logo3\" src=\"img/instagram.png\" alt=\"logo\">
\t\t\t<img class=\"logo4\" src=\"img/facebook.png\" alt=\"logo\">
\t\t\t<img class=\"logo5\" src=\"img/linkedin.png\" alt=\"logo\">
\t\t</div>
\t</footer>
</html>
", "fooTer.html.twig", "C:\\Web2\\WashandWatt\\templates\\fooTer.html.twig");
    }
}
