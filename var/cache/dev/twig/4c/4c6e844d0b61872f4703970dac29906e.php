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

/* navbar.html.twig */
class __TwigTemplate_0383c2614899288aee92c12ec1ced16d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/navbar.css"), "html", null, true);
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
        return "navbar.html.twig";
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
        return new Source("<link href=\"{{ asset('style/navbar.css') }}\" type=\"text/css\" rel=\"stylesheet\">
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
</html>", "navbar.html.twig", "C:\\Web2\\WashandWatt\\templates\\navbar.html.twig");
    }
}
