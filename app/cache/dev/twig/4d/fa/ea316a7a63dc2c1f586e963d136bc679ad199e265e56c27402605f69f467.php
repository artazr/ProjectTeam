<?php

/* AcmeCoreBundle:Default:description.html.twig */
class __TwigTemplate_4dfaea316a7a63dc2c1f586e963d136bc679ad199e265e56c27402605f69f467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Description ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t<!-- Main -->
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"container\" id=\"main\">
\t\t\t\t\t<div class=\"row 150%\">
\t\t\t\t\t\t<div class=\"4u 12u(narrower)\">

\t\t\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t\t\t\t<section id=\"sidebar\">
\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h3>Trailer de l'evenement</h3>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p>Integrer une video youtube ici</p>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h3>Evenement facebook - Page facebook</h3>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<p> <a href=\"https://facebook.com/JuniorISEP.PARIS\" target ='_blank'>lien Facebook</a></p> <br />
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"8u 12u(narrower) important(narrower)\">

\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<article id=\"content\">
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<h2>Description</h2>
\t\t\t\t\t\t\t\t\t\t<p>PROJECTeam est le premier évenement inter-ecole organisé par la JuniorISEP dans ses nouveaux locaux à Issy-les-moulineaux</p>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row features\">
\t\t\t\t\t\t<section class=\"4u 12u(narrower) feature\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h3>Inscrivez-Vous</h3>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p>Vous êtes intéréssés ? Participez !!</p>
\t\t\t\t\t\t\t<ul class=\"actions\">
                            <li class=\"break\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("acme_core_contact");
        echo "\" class=\"button\">Participer</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"4u 12u(narrower) feature\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h3>Nos Sponsors</h3>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p>Découvrez nos partenaires de ses évements et quelques lots à gagner.
\t\t\t\t\t\t\tDes lots d'une valeur de 50 à 250€ à gagner</p>
\t\t\t\t\t\t\t<ul class=\"actions\">
                            <li class=\"break\"><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("acme_core_sponsor");
        echo "\" class=\"button\">Nos SPonsors</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"4u 12u(narrower) feature\">

\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h3>Partagez</h3>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p>Have fun. Plus on est de fou, plus on rit. N'hésitez pas à partager l'evenement ! Et nous suivre sur facebook pour avoir des nouvelles sur l'evenement </p>
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Like and share</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 64,  98 => 53,  82 => 40,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
