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

/* navBar.html.twig */
class __TwigTemplate_1f5be6a4f803de16b80629ac55dd2dc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/navBar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">

<!DOCTYPE html>
<html lang=\"en\">
\t<header>
\t\t<div class=\"head\">
\t\t\t<img class=\"logo\" src=\"img/Logo.png\" alt=\"logo\">
\t\t\t<div class=\"nav-bar\">
\t\t\t\t<a href=\"/\" class=\"home\">Accueil</a>
\t\t\t\t<a href=\"/partenaires\" class=\"partner\">Nos Partenaires</a>
\t\t\t\t<a href=\"/apropos\" class=\"about\">À Propos</a>
\t\t\t\t<a href=\"/inscription\" class=\"register\">
\t\t\t\t\t<span class=\"register2\">Inscription</span>
\t\t\t\t</a>
\t\t\t\t<a href=\"/connexion\" class=\"login\">
\t\t\t\t\t<span class=\"login2\">Connexion</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</header>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navBar.html.twig";
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
        return new Source("<link href=\"{{ asset('style/navBar.css') }}\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">

<!DOCTYPE html>
<html lang=\"en\">
\t<header>
\t\t<div class=\"head\">
\t\t\t<img class=\"logo\" src=\"img/Logo.png\" alt=\"logo\">
\t\t\t<div class=\"nav-bar\">
\t\t\t\t<a href=\"/\" class=\"home\">Accueil</a>
\t\t\t\t<a href=\"/partenaires\" class=\"partner\">Nos Partenaires</a>
\t\t\t\t<a href=\"/apropos\" class=\"about\">À Propos</a>
\t\t\t\t<a href=\"/inscription\" class=\"register\">
\t\t\t\t\t<span class=\"register2\">Inscription</span>
\t\t\t\t</a>
\t\t\t\t<a href=\"/connexion\" class=\"login\">
\t\t\t\t\t<span class=\"login2\">Connexion</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</header>
</html>", "navBar.html.twig", "C:\\Web2\\WashandWatt\\templates\\navBar.html.twig");
    }
}
