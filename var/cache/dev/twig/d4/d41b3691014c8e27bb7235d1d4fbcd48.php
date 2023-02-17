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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/homePage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">

<!DOCTYPE html>
<html lang=\"en\">

<div class=\"e101_1461\">
  <a href=\"/\" class=\"e101_1471\">Accueil</a>
  <a href=\"/partenaires\" class=\"e101_1473\">Nos Partenaires</a>
  <a href=\"/apropos\" class=\"e101_1474\">À Propos</a>
  <a href=\"/inscription\" class=\"e101_1479\"><span class=\"e101_1480\">Inscription</span></a>
  <a href=\"/connexion\" class=\"e101_1477\"><span class=\"e101_1478\">Connexion</span></a>
</div>


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
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('style/homePage.css') }}\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">

<!DOCTYPE html>
<html lang=\"en\">

<div class=\"e101_1461\">
  <a href=\"/\" class=\"e101_1471\">Accueil</a>
  <a href=\"/partenaires\" class=\"e101_1473\">Nos Partenaires</a>
  <a href=\"/apropos\" class=\"e101_1474\">À Propos</a>
  <a href=\"/inscription\" class=\"e101_1479\"><span class=\"e101_1480\">Inscription</span></a>
  <a href=\"/connexion\" class=\"e101_1477\"><span class=\"e101_1478\">Connexion</span></a>
</div>


</html>
", "v_homePage.html.twig", "/Users/mathis/Document/STAGE/WashandWatt/templates/v_homePage.html.twig");
    }
}
