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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/partnerPage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
";
        // line 4
        $this->loadTemplate("navBar.html.twig", "v_partnerPage.html.twig", 4)->display($context);
        // line 5
        $this->loadTemplate("fooTer.html.twig", "v_partnerPage.html.twig", 5)->display($context);
        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<body>

\t\t<h1>
\t\t\t<span class=\"title-partner\">Nos Partenaires</span>
\t\t</h1>
\t\t<div class=\"bar-partner\"></div>
\t\t<div class=\"button\">
\t\t\t<div class=\"button2\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<button class=\"become-partner\" type=\"button\">Devenons Partenaire</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<span class=\"text-description\">Nous sommes reconnaissants pour le soutien de nos partenaires qui nous permettent de continuer dans cette aventure</span>


\t\t<!-- <div class=\"cards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cards2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-->
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
        return array (  54 => 6,  52 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('style/partnerPage.css') }}\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
{% include 'navBar.html.twig' %}
{% include 'fooTer.html.twig' %}
<!DOCTYPE html>
<html lang=\"en\">
\t<body>

\t\t<h1>
\t\t\t<span class=\"title-partner\">Nos Partenaires</span>
\t\t</h1>
\t\t<div class=\"bar-partner\"></div>
\t\t<div class=\"button\">
\t\t\t<div class=\"button2\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<button class=\"become-partner\" type=\"button\">Devenons Partenaire</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<span class=\"text-description\">Nous sommes reconnaissants pour le soutien de nos partenaires qui nous permettent de continuer dans cette aventure</span>


\t\t<!-- <div class=\"cards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cards2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-->
\t</body>

</html>
", "v_partnerPage.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_partnerPage.html.twig");
    }
}
