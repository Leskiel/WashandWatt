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

/* base.html.twig */
class __TwigTemplate_c23238c4c61be44d4dbd3d70075c70cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

<!DOCTYPE html>
<nav class=\"e101_1461\">
\t<ul class=\"navbar-nav\">
\t\t<li class=\"e101_1471\">
\t\t\t<a class=\"nav-link\" href=\"#\">Accueil</a>
\t\t</li>
\t\t<li class=\"e101_1473\">
\t\t\t<a class=\"nav-link\" href=\"#\">Nos Partenaires</a>
\t\t</li>
\t\t<li class=\"e101_1474\">
\t\t\t<a class=\"nav-link\" href=\"#\">À Propos</a>
\t\t</li>
\t\t<li class=\"e101_1477\">
\t\t\t<a class=\"nav-link\" href=\"#\">Connexion</a>
\t\t</li>
\t\t<li class=\"e101_1479\">
\t\t\t<a class=\"nav-link\" href=\"#\">Inscription</a>
\t\t</li>
\t</ul>
</nav>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
        return new Source("<link href=\"{{ asset('css/homepage.css') }}\" type=\"text/css\" rel=\"stylesheet\">

<!DOCTYPE html>
<nav class=\"e101_1461\">
\t<ul class=\"navbar-nav\">
\t\t<li class=\"e101_1471\">
\t\t\t<a class=\"nav-link\" href=\"#\">Accueil</a>
\t\t</li>
\t\t<li class=\"e101_1473\">
\t\t\t<a class=\"nav-link\" href=\"#\">Nos Partenaires</a>
\t\t</li>
\t\t<li class=\"e101_1474\">
\t\t\t<a class=\"nav-link\" href=\"#\">À Propos</a>
\t\t</li>
\t\t<li class=\"e101_1477\">
\t\t\t<a class=\"nav-link\" href=\"#\">Connexion</a>
\t\t</li>
\t\t<li class=\"e101_1479\">
\t\t\t<a class=\"nav-link\" href=\"#\">Inscription</a>
\t\t</li>
\t</ul>
</nav>


", "base.html.twig", "C:\\WEB\\washandwatt\\templates\\base.html.twig");
    }
}
