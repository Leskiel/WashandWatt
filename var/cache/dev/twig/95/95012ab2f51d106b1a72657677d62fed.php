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

\t\t\t<div class=\"text-mention\">
\t\t\t\t<h2>Définitions</h2>
\t\t\t\t<p>
\t\t\t\t\t<b>Client :</b>
\t\t\t\t\ttout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.<br>
\t\t\t\t\t<b>Prestations et Services :</b>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tmet à disposition des Clients :</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Contenu :</b>
\t\t\t\t\tEnsemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Informations clients :</b>
\t\t\t\t\tCi après dénommé « Information (s) » qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>


\t\t\t\t<p>
\t\t\t\t\t<b>Utilisateur :</b>
\t\t\t\t\tInternaute se connectant, utilisant le site susnommé.</p>
\t\t\t\t<p>
\t\t\t\t\t<b>Informations personnelles :</b>
\t\t\t\t\t« Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
\t\t\t\t<p>Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données sensibles » ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

\t\t\t\t<h2>1. Présentation du site internet.</h2>
\t\t\t\t<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tl'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Propriétaire</strong>
\t\t\t\t\t:  Entreprise individuelle Wash&amp;Watt   – 18 rue Ernest Guillier 24000 Périgueux 81500 Lavaur<br>

\t\t\t\t\t<strong>Responsable publication</strong>
\t\t\t\t\t: Pierre-Antoine Domenech – domenech.pa@gmail.com<br>
\t\t\t\t\tLe responsable publication est une personne physique ou une personne morale.<br>
\t\t\t\t\t<strong>Webmaster</strong>
\t\t\t\t\t: Pierre-Antoine Domenech – domenech.pa@gmail.com<br>
\t\t\t\t\t<strong>Hébergeur</strong>
\t\t\t\t\t: Platform.sh – https://platform.sh/ 75002 PARIS 01 56 40 22 22<br>
\t\t\t\t\t<strong>Délégué à la protection des données</strong>
\t\t\t\t\t: pierre antoine domenech – domenech.pa@gmail.com<br>
\t\t\t\t</p>

\t\t\t\t<div ng-bind-html=\"linkHTML\">
\t\t\t\t\t<p>Les mentions légales sont issues du modèle proposé par le
\t\t\t\t\t\t<a href=\"https://fr.orson.io/1371/generateur-mentions-legales\" title=\"générateur de mentions légales RGPD d\">générateur de mentions légales RGPD d'Orson.io</a>
\t\t\t\t\t</p>
\t\t\t\t</div>


\t\t\t\t<h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

\t\t\t\t<p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. 
\t\t\t\t\t\t\t\t\t                Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>

\t\t\t\t<p>L’utilisation du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\timplique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tsont donc invités à les consulter de manière régulière.</p>

\t\t\t\t<p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
\t\t\t\t\t\t\t\t\t\t\t                Le site web
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test mis à jour régulièrement par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tresponsable. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>

\t\t\t\t<h2>3. Description des services fournis.</h2>

\t\t\t\t<p>Le site internet
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ta pour objet de fournir une information concernant l’ensemble des activités de la société.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’efforce de fournir sur le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdes informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

\t\t\t\t<p>Toutes les informations indiquées sur le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tsont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

\t\t\t\t<h2>4. Limitations contractuelles sur les données techniques.</h2>

\t\t\t\t<p>Le site utilise la technologie JavaScript.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t                Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour
\t\t\t\t\t\t\t\t\t                Le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

\t\t\t\t<p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tet l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>

\t\t\t\t<h2>5. Propriété intellectuelle et contrefaçons.</h2>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.
\t\t\t\t\t\t\t\t\t                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de :
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>.</p>

\t\t\t\t<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

\t\t\t\t<h2>6. Limitations de responsabilité.</h2>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tagit en tant qu’éditeur du site.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test responsable de la qualité et de la véracité du Contenu qu’il publie.
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>.
\t\t\t\t\t\t\t\t\t\t\t                Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tse réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tse réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

\t\t\t\t<h2>7. Gestion des données personnelles.</h2>

\t\t\t\t<p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).
\t\t\t\t</p>

\t\t\t\t<h3>7.1 Responsables de la collecte des données personnelles</h3>

\t\t\t\t<p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : Wash&amp;Watt.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>est représenté par Pierre-Antoine Domenech, son représentant légal</p>

\t\t\t\t<p>En tant que responsable du traitement des données qu’il collecte,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité.
\t\t\t\t\t\t\t\t\t                Chaque fois que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ttraite des Données Personnelles,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tprend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tles traite.</p>

\t\t\t\t<h3>7.2 Finalité des données collectées</h3>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test susceptible de traiter tout ou partie des données :
\t\t\t\t</p>

\t\t\t\t<ul>

\t\t\t\t\t<li>pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur : données de connexion et d’utilisation du Site, facturation, historique des commandes, etc.
\t\t\t\t\t</li>

\t\t\t\t\t<li>pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé)
\t\t\t\t\t</li>

\t\t\t\t\t<li>pour améliorer la navigation sur le Site : données de connexion et d’utilisation
\t\t\t\t\t</li>

\t\t\t\t\t<li>pour mener des enquêtes de satisfaction facultatives sur
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\t\t: adresse email
\t\t\t\t\t</li>
\t\t\t\t\t<li>pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email</li>


\t\t\t\t</ul>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>

\t\t\t\t<h3>7.3 Droit d’accès, de rectification et d’opposition</h3>

\t\t\t\t<p>
\t\t\t\t\tConformément à la réglementation européenne en vigueur, les Utilisateurs de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdisposent des droits suivants :
\t\t\t\t</p>
\t\t\t\t<ul>

\t\t\t\t\t<li>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit de retirer à tout moment un consentement (article 13-2c RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\t\tdevra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné</li>
\t\t\t\t</ul>

\t\t\t\t<p>Dès que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ta connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une obligation légale.</p>

\t\t\t\t<p>Si l’Utilisateur souhaite savoir comment
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tutilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpar écrit à l’adresse suivante :
\t\t\t\t</p>

\t\t\t\tWash&amp;Watt – DPO, pierre antoine domenech
\t\t\t\t<br>
\t\t\t\t18 rue Ernest Guillier 24000 Périgueux 81500 Lavaur.

\t\t\t\t<p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tcorrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport).
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tLes demandes de suppression de Données Personnelles seront soumises aux obligations qui sont imposées à
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpar la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpeuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).</p>

\t\t\t\t<h3>7.4 Non-communication des données personnelles</h3>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’interdit de traiter, héberger ou transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client. Pour autant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\treste libre du choix de ses sous-traitants techniques et commerciaux à la condition qu’il présentent les garanties suffisantes au regard des exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’engage à prendre toutes les précautions nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne soient pas communiquées à des personnes non autorisées. Cependant, si un incident impactant l’intégrité ou la confidentialité des Informations du Client est portée à la connaissance de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, celle-ci devra dans les meilleurs délais informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne collecte aucune « données sensibles ».</p>

\t\t\t\t<p>
\t\t\t\t\tLes Données Personnelles de l’Utilisateur peuvent être traitées par des filiales de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tet des sous-traitants (prestataires de services), exclusivement afin de réaliser les finalités de la présente politique.</p>
\t\t\t\t<p>
\t\t\t\t\tDans la limite de leurs attributions respectives et pour les finalités rappelées ci-dessus, les principales personnes susceptibles d’avoir accès aux données des Utilisateurs de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tsont principalement les agents de notre service client.</p>

\t\t\t\t<div ng-bind-html=\"rgpdHTML\">
\t\t\t\t\t<h3>7.5 Types de données collectées</h3>
\t\t\t\t\t<p>Concernant les utilisateurs d’un Site
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, nous collectons les données suivantes qui sont indispensables au fonctionnement du service&nbsp;, et qui seront conservées pendant une période maximale de 9 mois après la fin de la relation contractuelle:<br>email</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\t\tcollecte en outre des informations qui permettent d’améliorer l’expérience utilisateur et de proposer des conseils contextualisés&nbsp;:<br>aucun</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tCes &nbsp;données sont conservées pour une période maximale de 9 mois après la fin de la relation contractuelle</p>
\t\t\t\t</div>


\t\t\t\t<h2>8. Notification d’incident</h2>
\t\t\t\t<p>
\t\t\t\t\tQuels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue. 
\t\t\t\t\t\t\t\t\t                Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.</p>
\t\t\t\t<p>
\t\t\t\t\tAucune information personnelle de l'utilisateur du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tn'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tet de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>.</p>

\t\t\t\t<h3>Sécurité</h3>

\t\t\t\t<p>
\t\t\t\t\tPour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles de Santé,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tutilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe.
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tLors du traitement des Données Personnelles,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p>

\t\t\t\t<h2>9. Liens hypertextes « cookies » et balises (“tags”) internet</h2>
\t\t\t\t<p>
\t\t\t\t\tLe site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tcontient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>. Cependant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tn’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
\t\t\t\tSauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.
\t\t\t\t<p></p>

\t\t\t\t<h3>9.1. « COOKIES »</h3>
\t\t\t\t<p>
\t\t\t\t\tUn « cookie » est un petit fichier d’information envoyé sur le navigateur de l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et l’heure d’accès. Les Cookies ne risquent en aucun cas d’endommager le terminal de l’Utilisateur.</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test susceptible de traiter les informations de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les recherches effectuées. Ces informations permettent à
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\td’améliorer le contenu du Site, de la navigation de l’Utilisateur.</p>
\t\t\t\t<p>
\t\t\t\t\tLes Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être enregistré dans son terminal.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tinforme l’Utilisateur que, dans ce cas, il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.</p>
\t\t\t\t<p>
\t\t\t\t\tSi l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur est informé que sa navigation et son expérience sur le Site peuvent être limitées. Cela pourrait également être le cas lorsque
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal, les paramètres de langue et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.</p>
\t\t\t\t<p>
\t\t\t\t\tLe cas échéant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdécline toute responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services éventuellement proposés par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\td’enregistrer ou de consulter les Cookies nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de Cookies.</p>
\t\t\t\t<p>
\t\t\t\t\tÀ tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses souhaits en matière de Cookies.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpourra en outre faire appel aux services de prestataires externes pour l’aider à recueillir et traiter les informations décrites dans cette section.</p>
\t\t\t\t<p>
\t\t\t\t\tEnfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tou dans son application mobile et si l’Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation sur le Site Internet ou l’application mobile de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur vos terminaux (ordinateur, tablette, téléphone portable).</p>
\t\t\t\t<p>
\t\t\t\t\tCes types de cookies ne sont déposés sur vos terminaux qu’à condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l’application mobile de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>. À tout moment, l’Utilisateur peut néanmoins revenir sur son consentement à ce que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdépose ce type de cookies.</p>

\t\t\t\t<h3>Article 9.2. BALISES (“TAGS”) INTERNET</h3>


\t\t\t\t<p>

\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpeut employer occasionnellement des balises Internet (également appelées « tags », ou balises d’action, GIF à un pixel, GIF transparents, GIF invisibles et GIF un à un) et les déployer par l’intermédiaire d’un partenaire spécialiste d’analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l’adresse IP de l’Utilisateur) dans un pays étranger.</p>

\t\t\t\t<p>
\t\t\t\t\tCes balises sont placées à la fois dans les publicités en ligne permettant aux internautes d’accéder au Site, et sur les différentes pages de celui-ci.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCette technologie permet à
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\td’évaluer les réponses des visiteurs face au Site et l’efficacité de ses actions (par exemple, le nombre de fois où une page est ouverte et les informations consultées), ainsi que l’utilisation de ce Site par l’Utilisateur.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tLe prestataire externe pourra éventuellement recueillir des informations sur les visiteurs du Site et d’autres sites Internet grâce à ces balises, constituer des rapports sur l’activité du Site à l’attention de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, et fournir d’autres services relatifs à l’utilisation de celui-ci et d’Internet.</p>
\t\t\t\t<p></p>
\t\t\t\t<h2>10. Droit applicable et attribution de juridiction.</h2>
\t\t\t\t<p>
\t\t\t\t\tTout litige en relation avec l’utilisation du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test soumis au droit français. 
\t\t\t\t\t\t\t\t\t                En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Toulouse</p>
\t\t\t</div>

\t\t</main>

\t\t<footer>
\t\t\t";
        // line 410
        $this->loadTemplate("v_footer.html.twig", "v_legalNoticePage.html.twig", 410)->display($context);
        // line 411
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
        return array (  462 => 411,  460 => 410,  61 => 13,  59 => 12,  50 => 6,  43 => 1,);
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

\t\t\t<div class=\"text-mention\">
\t\t\t\t<h2>Définitions</h2>
\t\t\t\t<p>
\t\t\t\t\t<b>Client :</b>
\t\t\t\t\ttout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.<br>
\t\t\t\t\t<b>Prestations et Services :</b>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tmet à disposition des Clients :</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Contenu :</b>
\t\t\t\t\tEnsemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Informations clients :</b>
\t\t\t\t\tCi après dénommé « Information (s) » qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>


\t\t\t\t<p>
\t\t\t\t\t<b>Utilisateur :</b>
\t\t\t\t\tInternaute se connectant, utilisant le site susnommé.</p>
\t\t\t\t<p>
\t\t\t\t\t<b>Informations personnelles :</b>
\t\t\t\t\t« Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
\t\t\t\t<p>Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données sensibles » ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

\t\t\t\t<h2>1. Présentation du site internet.</h2>
\t\t\t\t<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tl'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Propriétaire</strong>
\t\t\t\t\t:  Entreprise individuelle Wash&amp;Watt   – 18 rue Ernest Guillier 24000 Périgueux 81500 Lavaur<br>

\t\t\t\t\t<strong>Responsable publication</strong>
\t\t\t\t\t: Pierre-Antoine Domenech – domenech.pa@gmail.com<br>
\t\t\t\t\tLe responsable publication est une personne physique ou une personne morale.<br>
\t\t\t\t\t<strong>Webmaster</strong>
\t\t\t\t\t: Pierre-Antoine Domenech – domenech.pa@gmail.com<br>
\t\t\t\t\t<strong>Hébergeur</strong>
\t\t\t\t\t: Platform.sh – https://platform.sh/ 75002 PARIS 01 56 40 22 22<br>
\t\t\t\t\t<strong>Délégué à la protection des données</strong>
\t\t\t\t\t: pierre antoine domenech – domenech.pa@gmail.com<br>
\t\t\t\t</p>

\t\t\t\t<div ng-bind-html=\"linkHTML\">
\t\t\t\t\t<p>Les mentions légales sont issues du modèle proposé par le
\t\t\t\t\t\t<a href=\"https://fr.orson.io/1371/generateur-mentions-legales\" title=\"générateur de mentions légales RGPD d\">générateur de mentions légales RGPD d'Orson.io</a>
\t\t\t\t\t</p>
\t\t\t\t</div>


\t\t\t\t<h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

\t\t\t\t<p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. 
\t\t\t\t\t\t\t\t\t                Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>

\t\t\t\t<p>L’utilisation du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\timplique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tsont donc invités à les consulter de manière régulière.</p>

\t\t\t\t<p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
\t\t\t\t\t\t\t\t\t\t\t                Le site web
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test mis à jour régulièrement par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tresponsable. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>

\t\t\t\t<h2>3. Description des services fournis.</h2>

\t\t\t\t<p>Le site internet
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ta pour objet de fournir une information concernant l’ensemble des activités de la société.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’efforce de fournir sur le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdes informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

\t\t\t\t<p>Toutes les informations indiquées sur le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tsont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

\t\t\t\t<h2>4. Limitations contractuelles sur les données techniques.</h2>

\t\t\t\t<p>Le site utilise la technologie JavaScript.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t                Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour
\t\t\t\t\t\t\t\t\t                Le site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

\t\t\t\t<p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tet l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>

\t\t\t\t<h2>5. Propriété intellectuelle et contrefaçons.</h2>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.
\t\t\t\t\t\t\t\t\t                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de :
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>.</p>

\t\t\t\t<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

\t\t\t\t<h2>6. Limitations de responsabilité.</h2>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tagit en tant qu’éditeur du site.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test responsable de la qualité et de la véracité du Contenu qu’il publie.
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>.
\t\t\t\t\t\t\t\t\t\t\t                Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tse réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tse réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

\t\t\t\t<h2>7. Gestion des données personnelles.</h2>

\t\t\t\t<p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).
\t\t\t\t</p>

\t\t\t\t<h3>7.1 Responsables de la collecte des données personnelles</h3>

\t\t\t\t<p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : Wash&amp;Watt.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>est représenté par Pierre-Antoine Domenech, son représentant légal</p>

\t\t\t\t<p>En tant que responsable du traitement des données qu’il collecte,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité.
\t\t\t\t\t\t\t\t\t                Chaque fois que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ttraite des Données Personnelles,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tprend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tles traite.</p>

\t\t\t\t<h3>7.2 Finalité des données collectées</h3>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test susceptible de traiter tout ou partie des données :
\t\t\t\t</p>

\t\t\t\t<ul>

\t\t\t\t\t<li>pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur : données de connexion et d’utilisation du Site, facturation, historique des commandes, etc.
\t\t\t\t\t</li>

\t\t\t\t\t<li>pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé)
\t\t\t\t\t</li>

\t\t\t\t\t<li>pour améliorer la navigation sur le Site : données de connexion et d’utilisation
\t\t\t\t\t</li>

\t\t\t\t\t<li>pour mener des enquêtes de satisfaction facultatives sur
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\t\t: adresse email
\t\t\t\t\t</li>
\t\t\t\t\t<li>pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email</li>


\t\t\t\t</ul>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>

\t\t\t\t<h3>7.3 Droit d’accès, de rectification et d’opposition</h3>

\t\t\t\t<p>
\t\t\t\t\tConformément à la réglementation européenne en vigueur, les Utilisateurs de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdisposent des droits suivants :
\t\t\t\t</p>
\t\t\t\t<ul>

\t\t\t\t\t<li>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit de retirer à tout moment un consentement (article 13-2c RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)
\t\t\t\t\t</li>

\t\t\t\t\t<li>droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\t\tdevra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné</li>
\t\t\t\t</ul>

\t\t\t\t<p>Dès que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ta connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une obligation légale.</p>

\t\t\t\t<p>Si l’Utilisateur souhaite savoir comment
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tutilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpar écrit à l’adresse suivante :
\t\t\t\t</p>

\t\t\t\tWash&amp;Watt – DPO, pierre antoine domenech
\t\t\t\t<br>
\t\t\t\t18 rue Ernest Guillier 24000 Périgueux 81500 Lavaur.

\t\t\t\t<p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tcorrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport).
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tLes demandes de suppression de Données Personnelles seront soumises aux obligations qui sont imposées à
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpar la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpeuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).</p>

\t\t\t\t<h3>7.4 Non-communication des données personnelles</h3>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’interdit de traiter, héberger ou transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client. Pour autant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\treste libre du choix de ses sous-traitants techniques et commerciaux à la condition qu’il présentent les garanties suffisantes au regard des exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\ts’engage à prendre toutes les précautions nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne soient pas communiquées à des personnes non autorisées. Cependant, si un incident impactant l’intégrité ou la confidentialité des Informations du Client est portée à la connaissance de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, celle-ci devra dans les meilleurs délais informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tne collecte aucune « données sensibles ».</p>

\t\t\t\t<p>
\t\t\t\t\tLes Données Personnelles de l’Utilisateur peuvent être traitées par des filiales de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tet des sous-traitants (prestataires de services), exclusivement afin de réaliser les finalités de la présente politique.</p>
\t\t\t\t<p>
\t\t\t\t\tDans la limite de leurs attributions respectives et pour les finalités rappelées ci-dessus, les principales personnes susceptibles d’avoir accès aux données des Utilisateurs de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tsont principalement les agents de notre service client.</p>

\t\t\t\t<div ng-bind-html=\"rgpdHTML\">
\t\t\t\t\t<h3>7.5 Types de données collectées</h3>
\t\t\t\t\t<p>Concernant les utilisateurs d’un Site
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, nous collectons les données suivantes qui sont indispensables au fonctionnement du service&nbsp;, et qui seront conservées pendant une période maximale de 9 mois après la fin de la relation contractuelle:<br>email</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\t\tcollecte en outre des informations qui permettent d’améliorer l’expérience utilisateur et de proposer des conseils contextualisés&nbsp;:<br>aucun</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tCes &nbsp;données sont conservées pour une période maximale de 9 mois après la fin de la relation contractuelle</p>
\t\t\t\t</div>


\t\t\t\t<h2>8. Notification d’incident</h2>
\t\t\t\t<p>
\t\t\t\t\tQuels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue. 
\t\t\t\t\t\t\t\t\t                Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.</p>
\t\t\t\t<p>
\t\t\t\t\tAucune information personnelle de l'utilisateur du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tn'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tet de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>.</p>

\t\t\t\t<h3>Sécurité</h3>

\t\t\t\t<p>
\t\t\t\t\tPour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles de Santé,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tutilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe.
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tLors du traitement des Données Personnelles,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p>

\t\t\t\t<h2>9. Liens hypertextes « cookies » et balises (“tags”) internet</h2>
\t\t\t\t<p>
\t\t\t\t\tLe site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tcontient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>. Cependant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tn’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
\t\t\t\tSauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.
\t\t\t\t<p></p>

\t\t\t\t<h3>9.1. « COOKIES »</h3>
\t\t\t\t<p>
\t\t\t\t\tUn « cookie » est un petit fichier d’information envoyé sur le navigateur de l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et l’heure d’accès. Les Cookies ne risquent en aucun cas d’endommager le terminal de l’Utilisateur.</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test susceptible de traiter les informations de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les recherches effectuées. Ces informations permettent à
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\td’améliorer le contenu du Site, de la navigation de l’Utilisateur.</p>
\t\t\t\t<p>
\t\t\t\t\tLes Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être enregistré dans son terminal.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tinforme l’Utilisateur que, dans ce cas, il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.</p>
\t\t\t\t<p>
\t\t\t\t\tSi l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur est informé que sa navigation et son expérience sur le Site peuvent être limitées. Cela pourrait également être le cas lorsque
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal, les paramètres de langue et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.</p>
\t\t\t\t<p>
\t\t\t\t\tLe cas échéant,
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdécline toute responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services éventuellement proposés par
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\td’enregistrer ou de consulter les Cookies nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de Cookies.</p>
\t\t\t\t<p>
\t\t\t\t\tÀ tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses souhaits en matière de Cookies.
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpourra en outre faire appel aux services de prestataires externes pour l’aider à recueillir et traiter les informations décrites dans cette section.</p>
\t\t\t\t<p>
\t\t\t\t\tEnfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tou dans son application mobile et si l’Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation sur le Site Internet ou l’application mobile de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur vos terminaux (ordinateur, tablette, téléphone portable).</p>
\t\t\t\t<p>
\t\t\t\t\tCes types de cookies ne sont déposés sur vos terminaux qu’à condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l’application mobile de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>. À tout moment, l’Utilisateur peut néanmoins revenir sur son consentement à ce que
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tdépose ce type de cookies.</p>

\t\t\t\t<h3>Article 9.2. BALISES (“TAGS”) INTERNET</h3>


\t\t\t\t<p>

\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\tpeut employer occasionnellement des balises Internet (également appelées « tags », ou balises d’action, GIF à un pixel, GIF transparents, GIF invisibles et GIF un à un) et les déployer par l’intermédiaire d’un partenaire spécialiste d’analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l’adresse IP de l’Utilisateur) dans un pays étranger.</p>

\t\t\t\t<p>
\t\t\t\t\tCes balises sont placées à la fois dans les publicités en ligne permettant aux internautes d’accéder au Site, et sur les différentes pages de celui-ci.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCette technologie permet à
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\td’évaluer les réponses des visiteurs face au Site et l’efficacité de ses actions (par exemple, le nombre de fois où une page est ouverte et les informations consultées), ainsi que l’utilisation de ce Site par l’Utilisateur.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tLe prestataire externe pourra éventuellement recueillir des informations sur les visiteurs du Site et d’autres sites Internet grâce à ces balises, constituer des rapports sur l’activité du Site à l’attention de
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>, et fournir d’autres services relatifs à l’utilisation de celui-ci et d’Internet.</p>
\t\t\t\t<p></p>
\t\t\t\t<h2>10. Droit applicable et attribution de juridiction.</h2>
\t\t\t\t<p>
\t\t\t\t\tTout litige en relation avec l’utilisation du site
\t\t\t\t\t<a href=\"https://washandwatt.fr/\">https://washandwatt.fr/</a>
\t\t\t\t\test soumis au droit français. 
\t\t\t\t\t\t\t\t\t                En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Toulouse</p>
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
