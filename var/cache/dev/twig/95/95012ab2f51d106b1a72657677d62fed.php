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

/* v_legalNoticePage.html.twig */
class __TwigTemplate_ec4427b6d8cfbd8c261af9a060c569df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_legalNoticePage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v_legalNoticePage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/legalNoticePage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

\t\t<title>Wash&Watt</title>
\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 12
        $this->loadTemplate("navBar.html.twig", "v_legalNoticePage.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</header>

\t\t<main>
\t\t\t<h1>
\t\t\t\t<span class=\"title-mention\">Mention Légales</span>
\t\t\t</h1>
\t\t\t<div class=\"bar-mention\"></div>
\t\t\t<div class=\"lipsum\">
\t\t\t\t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. In vel nisl odio. Etiam ut placerat lorem. Vestibulum imperdiet at quam sit amet mollis. Morbi dignissim posuere convallis. Donec iaculis quam auctor felis pharetra, nec tempus nibh vestibulum. Quisque vel justo eget urna pharetra congue sit amet in mauris. Mauris eros ante, consequat quis nulla id, consectetur commodo nisi. Integer id urna at nunc ultrices interdum non id erat. Quisque blandit blandit nunc. Pellentesque nec est accumsan, varius enim non, egestas diam.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tSed ultricies faucibus egestas. Praesent sit amet pharetra nisi, et tincidunt lorem. Sed ligula arcu, pharetra quis tellus eu, sollicitudin efficitur massa. Curabitur eu sem eget nisi auctor sollicitudin. Nam posuere hendrerit eros, sit amet aliquam sapien venenatis sit amet. Praesent eu est ante. Integer fermentum suscipit dignissim. Phasellus tincidunt turpis in nulla luctus lacinia. Proin molestie, ante sed lacinia semper, risus nulla bibendum ligula, eu dictum ante massa a neque. Phasellus nec tellus ante. Aliquam hendrerit quam eros, dapibus tempor turpis blandit in. Nulla at sapien id tortor ultrices varius at eu lacus. Vestibulum orci metus, fermentum in metus sed, suscipit tempus dolor. Nulla convallis sem leo, vel suscipit elit luctus eget. Nam nisi enim, pretium sit amet sodales id, feugiat ut ipsum.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tMaecenas pellentesque mattis semper. Aliquam erat volutpat. Proin porttitor, quam ac maximus sollicitudin, nibh quam bibendum arcu, vel dignissim neque nulla id purus. Nulla mi erat, fermentum eu accumsan tempor, aliquet eget massa. Aliquam id arcu et felis sodales gravida ac vel enim. Ut tempor vel ex sed congue. Sed placerat eros purus, tincidunt tempus ligula lacinia in. Maecenas sit amet condimentum risus. Nulla massa ligula, sollicitudin tristique ex vitae, pretium pulvinar lectus. Suspendisse dignissim velit id purus vehicula congue.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tMauris auctor efficitur sapien, id lacinia velit laoreet at. In mattis metus sed malesuada rutrum. Quisque magna sapien, dignissim ut feugiat vitae, pretium vitae nulla. Vivamus at scelerisque velit. Integer mattis, neque pharetra ultrices varius, ex libero molestie tortor, et porta lectus leo laoreet ligula. Fusce posuere efficitur facilisis. Integer ornare tincidunt ligula. Curabitur elementum nunc ut massa pulvinar, sit amet imperdiet magna congue. Etiam maximus eleifend lectus, hendrerit lacinia quam sagittis quis. Praesent sapien metus, sodales placerat lorem id, ullamcorper sagittis sem. Duis lacinia lacinia consectetur. In hac habitasse platea dictumst.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tMorbi id augue elementum, sagittis sapien sit amet, tristique turpis. Donec justo diam, cursus et dictum finibus, pharetra sit amet quam. Cras eget magna varius, porta orci in, tempor magna. Praesent eget nisi ligula. Mauris porta porttitor neque, sit amet porttitor turpis vehicula eget. Etiam tempor mauris non varius convallis. Vestibulum nec enim eget arcu pretium porta ac maximus erat. Sed quis orci at turpis mollis vehicula id porttitor ipsum. Curabitur pellentesque neque a sem commodo mattis. Nullam efficitur lacus sed lorem scelerisque bibendum. Maecenas vitae neque sit amet nunc interdum facilisis. Etiam tortor quam, varius sed tellus id, tempor auctor libero. Aliquam cursus nibh eget lacus blandit, quis semper odio vehicula. Fusce a volutpat mi. Sed at convallis nibh, a blandit nibh. Fusce pretium non purus a semper.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tEtiam vestibulum finibus nibh, sit amet lacinia elit eleifend et. Aenean lacus lorem, facilisis ac tincidunt sed, dictum ac lorem. Sed mattis, elit sit amet consequat pulvinar, elit diam eleifend justo, quis luctus nisi ex sit amet elit. Vestibulum elementum dolor et arcu consequat rutrum. Praesent diam est, iaculis in laoreet in, semper nec tortor. Maecenas nisl diam, lacinia at dapibus quis, varius nec ligula. Nullam iaculis eros nibh, at facilisis est ultricies a. Etiam arcu ex, placerat et aliquam in, porttitor vitae orci. Aenean elementum vel lacus ac consequat.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tAliquam porta pretium velit, vitae suscipit dui mattis quis. Mauris mollis mi at diam scelerisque luctus. Morbi quis quam id orci euismod ultricies. Nullam pharetra leo justo, ac vestibulum elit malesuada et. Nam pellentesque dui libero, non rhoncus diam commodo sed. Quisque malesuada maximus nulla, ut pharetra purus ornare non. Curabitur in vestibulum tellus. Aliquam erat volutpat. Nam libero leo, consequat nec neque vitae, viverra gravida purus. Cras vitae diam vitae quam luctus condimentum. Suspendisse molestie bibendum risus quis ornare. Ut ornare quis orci nec dapibus. Integer pharetra bibendum diam id luctus. Mauris sed sem eleifend turpis tristique sollicitudin. Proin in varius leo.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tSuspendisse euismod tortor vel scelerisque varius. Maecenas et erat et neque pharetra ultricies. Sed at dignissim velit. Sed imperdiet, velit at luctus mollis, lorem nulla eleifend purus, id laoreet nibh libero sit amet est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ut augue tempor, mollis sapien nec, bibendum magna. Vestibulum a aliquet diam, sit amet volutpat tortor. Etiam aliquam sem urna, eget pretium enim tempor eget. Sed vel tincidunt nisl. Ut auctor erat ante, nec vehicula turpis venenatis vel. Aenean sollicitudin ex ante, non placerat purus cursus eget. Quisque blandit turpis vehicula lorem convallis placerat. Aliquam velit erat, tincidunt volutpat varius vitae, viverra vitae sapien.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tPellentesque in ultrices diam. Quisque ligula massa, placerat et felis eu, elementum ultrices dolor. Aenean vulputate, eros vel ullamcorper molestie, massa est malesuada elit, vel laoreet massa purus nec felis. Mauris ac est augue. Nullam eu sodales erat, nec aliquam urna. Morbi nec ultrices augue, in laoreet mauris. Donec nec sodales nulla, sit amet viverra ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ut nisl dictum, vestibulum urna nec, facilisis dui. Sed ligula metus, faucibus sed pretium vel, elementum id elit. Integer varius finibus massa at ultricies. Nam vitae porttitor sapien. Curabitur sit amet massa sed magna cursus auctor. Mauris sed suscipit tellus. In vitae nibh eros. Praesent interdum iaculis mattis.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tIn ligula risus, tristique et laoreet at, pellentesque eget sapien. Aliquam eget orci eros. Pellentesque tristique dapibus tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam tristique, tortor sit amet convallis placerat, odio elit faucibus urna, vitae viverra sapien ligula eget ipsum. Nullam nec facilisis libero. Maecenas venenatis faucibus arcu, ut feugiat arcu dapibus eget. Duis imperdiet ex efficitur, pellentesque orci nec, facilisis arcu. In nec nisl nec eros pharetra varius a quis tellus. Vivamus tempor commodo ipsum at scelerisque. Ut suscipit facilisis tincidunt. Sed at massa nulla. Ut pretium maximus diam nec ultricies.
\t\t\t\t</p>
\t\t\t</div>
\t\t</main>

\t\t<footer>
\t\t\t";
        // line 55
        $this->loadTemplate("v_footer.html.twig", "v_legalNoticePage.html.twig", 55)->display($context);
        // line 56
        echo "\t\t</footer>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "v_legalNoticePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 56,  105 => 55,  61 => 13,  59 => 12,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rubik&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('style/legalNoticePage.css') }}\" type=\"text/css\" rel=\"stylesheet\">

\t\t<title>Wash&Watt</title>
\t</head>
\t<body>
\t\t<header>
\t\t\t{% include 'navBar.html.twig' %}
\t\t</header>

\t\t<main>
\t\t\t<h1>
\t\t\t\t<span class=\"title-mention\">Mention Légales</span>
\t\t\t</h1>
\t\t\t<div class=\"bar-mention\"></div>
\t\t\t<div class=\"lipsum\">
\t\t\t\t<p>
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. In vel nisl odio. Etiam ut placerat lorem. Vestibulum imperdiet at quam sit amet mollis. Morbi dignissim posuere convallis. Donec iaculis quam auctor felis pharetra, nec tempus nibh vestibulum. Quisque vel justo eget urna pharetra congue sit amet in mauris. Mauris eros ante, consequat quis nulla id, consectetur commodo nisi. Integer id urna at nunc ultrices interdum non id erat. Quisque blandit blandit nunc. Pellentesque nec est accumsan, varius enim non, egestas diam.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tSed ultricies faucibus egestas. Praesent sit amet pharetra nisi, et tincidunt lorem. Sed ligula arcu, pharetra quis tellus eu, sollicitudin efficitur massa. Curabitur eu sem eget nisi auctor sollicitudin. Nam posuere hendrerit eros, sit amet aliquam sapien venenatis sit amet. Praesent eu est ante. Integer fermentum suscipit dignissim. Phasellus tincidunt turpis in nulla luctus lacinia. Proin molestie, ante sed lacinia semper, risus nulla bibendum ligula, eu dictum ante massa a neque. Phasellus nec tellus ante. Aliquam hendrerit quam eros, dapibus tempor turpis blandit in. Nulla at sapien id tortor ultrices varius at eu lacus. Vestibulum orci metus, fermentum in metus sed, suscipit tempus dolor. Nulla convallis sem leo, vel suscipit elit luctus eget. Nam nisi enim, pretium sit amet sodales id, feugiat ut ipsum.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tMaecenas pellentesque mattis semper. Aliquam erat volutpat. Proin porttitor, quam ac maximus sollicitudin, nibh quam bibendum arcu, vel dignissim neque nulla id purus. Nulla mi erat, fermentum eu accumsan tempor, aliquet eget massa. Aliquam id arcu et felis sodales gravida ac vel enim. Ut tempor vel ex sed congue. Sed placerat eros purus, tincidunt tempus ligula lacinia in. Maecenas sit amet condimentum risus. Nulla massa ligula, sollicitudin tristique ex vitae, pretium pulvinar lectus. Suspendisse dignissim velit id purus vehicula congue.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tMauris auctor efficitur sapien, id lacinia velit laoreet at. In mattis metus sed malesuada rutrum. Quisque magna sapien, dignissim ut feugiat vitae, pretium vitae nulla. Vivamus at scelerisque velit. Integer mattis, neque pharetra ultrices varius, ex libero molestie tortor, et porta lectus leo laoreet ligula. Fusce posuere efficitur facilisis. Integer ornare tincidunt ligula. Curabitur elementum nunc ut massa pulvinar, sit amet imperdiet magna congue. Etiam maximus eleifend lectus, hendrerit lacinia quam sagittis quis. Praesent sapien metus, sodales placerat lorem id, ullamcorper sagittis sem. Duis lacinia lacinia consectetur. In hac habitasse platea dictumst.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tMorbi id augue elementum, sagittis sapien sit amet, tristique turpis. Donec justo diam, cursus et dictum finibus, pharetra sit amet quam. Cras eget magna varius, porta orci in, tempor magna. Praesent eget nisi ligula. Mauris porta porttitor neque, sit amet porttitor turpis vehicula eget. Etiam tempor mauris non varius convallis. Vestibulum nec enim eget arcu pretium porta ac maximus erat. Sed quis orci at turpis mollis vehicula id porttitor ipsum. Curabitur pellentesque neque a sem commodo mattis. Nullam efficitur lacus sed lorem scelerisque bibendum. Maecenas vitae neque sit amet nunc interdum facilisis. Etiam tortor quam, varius sed tellus id, tempor auctor libero. Aliquam cursus nibh eget lacus blandit, quis semper odio vehicula. Fusce a volutpat mi. Sed at convallis nibh, a blandit nibh. Fusce pretium non purus a semper.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tEtiam vestibulum finibus nibh, sit amet lacinia elit eleifend et. Aenean lacus lorem, facilisis ac tincidunt sed, dictum ac lorem. Sed mattis, elit sit amet consequat pulvinar, elit diam eleifend justo, quis luctus nisi ex sit amet elit. Vestibulum elementum dolor et arcu consequat rutrum. Praesent diam est, iaculis in laoreet in, semper nec tortor. Maecenas nisl diam, lacinia at dapibus quis, varius nec ligula. Nullam iaculis eros nibh, at facilisis est ultricies a. Etiam arcu ex, placerat et aliquam in, porttitor vitae orci. Aenean elementum vel lacus ac consequat.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tAliquam porta pretium velit, vitae suscipit dui mattis quis. Mauris mollis mi at diam scelerisque luctus. Morbi quis quam id orci euismod ultricies. Nullam pharetra leo justo, ac vestibulum elit malesuada et. Nam pellentesque dui libero, non rhoncus diam commodo sed. Quisque malesuada maximus nulla, ut pharetra purus ornare non. Curabitur in vestibulum tellus. Aliquam erat volutpat. Nam libero leo, consequat nec neque vitae, viverra gravida purus. Cras vitae diam vitae quam luctus condimentum. Suspendisse molestie bibendum risus quis ornare. Ut ornare quis orci nec dapibus. Integer pharetra bibendum diam id luctus. Mauris sed sem eleifend turpis tristique sollicitudin. Proin in varius leo.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tSuspendisse euismod tortor vel scelerisque varius. Maecenas et erat et neque pharetra ultricies. Sed at dignissim velit. Sed imperdiet, velit at luctus mollis, lorem nulla eleifend purus, id laoreet nibh libero sit amet est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ut augue tempor, mollis sapien nec, bibendum magna. Vestibulum a aliquet diam, sit amet volutpat tortor. Etiam aliquam sem urna, eget pretium enim tempor eget. Sed vel tincidunt nisl. Ut auctor erat ante, nec vehicula turpis venenatis vel. Aenean sollicitudin ex ante, non placerat purus cursus eget. Quisque blandit turpis vehicula lorem convallis placerat. Aliquam velit erat, tincidunt volutpat varius vitae, viverra vitae sapien.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tPellentesque in ultrices diam. Quisque ligula massa, placerat et felis eu, elementum ultrices dolor. Aenean vulputate, eros vel ullamcorper molestie, massa est malesuada elit, vel laoreet massa purus nec felis. Mauris ac est augue. Nullam eu sodales erat, nec aliquam urna. Morbi nec ultrices augue, in laoreet mauris. Donec nec sodales nulla, sit amet viverra ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ut nisl dictum, vestibulum urna nec, facilisis dui. Sed ligula metus, faucibus sed pretium vel, elementum id elit. Integer varius finibus massa at ultricies. Nam vitae porttitor sapien. Curabitur sit amet massa sed magna cursus auctor. Mauris sed suscipit tellus. In vitae nibh eros. Praesent interdum iaculis mattis.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tIn ligula risus, tristique et laoreet at, pellentesque eget sapien. Aliquam eget orci eros. Pellentesque tristique dapibus tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam tristique, tortor sit amet convallis placerat, odio elit faucibus urna, vitae viverra sapien ligula eget ipsum. Nullam nec facilisis libero. Maecenas venenatis faucibus arcu, ut feugiat arcu dapibus eget. Duis imperdiet ex efficitur, pellentesque orci nec, facilisis arcu. In nec nisl nec eros pharetra varius a quis tellus. Vivamus tempor commodo ipsum at scelerisque. Ut suscipit facilisis tincidunt. Sed at massa nulla. Ut pretium maximus diam nec ultricies.
\t\t\t\t</p>
\t\t\t</div>
\t\t</main>

\t\t<footer>
\t\t\t{% include 'v_footer.html.twig' %}
\t\t</footer>
\t</body>
</html>
", "v_legalNoticePage.html.twig", "C:\\Web2\\WashandWatt\\templates\\v_legalNoticePage.html.twig");
    }
}
