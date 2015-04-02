<?php

/* AcmeCoreBundle:Default:index.html.twig */
class __TwigTemplate_f20cd4fe3ff6a82a6a753667d98f0a0468bdb9a0086dd14a459504a3de2ac41f extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
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
        echo " Accueil ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "
<style>
\t\t.square{
\t\t\tfloat : left;
\t\t\tposition: relative;
\t\t\twidth: 50%;
\t\t\theight:190px;
\t\t\tpadding-bottom: 1%;
\t\t\tmargin:auto;
\t\t\tbackground-position: center center;
\t\t\tbackground-repeat: no-repeat;
\t\t\tbackground-size:cover;
\t\t\t/*border: 1px solid black;*/
\t\t}
\t\t.square:hover{
\t\t\tborder: 2px solid black;

\t\t}
\t\t#img1{
\t\t\tbackground-color: #6f5499;
\t\t}
\t\t#img2{
\t\t\tbackground-color: #707676;
\t\t}
\t\t#img3{
\t\t\tbackground-color: #4d8a85;
\t\t}
\t\t#img4{
\t\t\tbackground-color: #fcfd00;
\t\t}
\t\t.w{
\t\t\ttext-align: center;
\t\t\tcolor:white;
\t\t\tfont-size: 30px;
\t\t\tfont-family: Arial;
\t\t}

\t\t#img4 #b{
\t\t\tcolor:black;
\t\t}
\t\th4{
\t\t\ttext-align: center;
\t\t\tcolor:white;
\t\t\tfont-size: 20px;
\t\t\tfont-style: italic;
\t\t}
\t\t#img4 h4{
\t\t\tcolor:black;
\t\t}
\t\t
\t\t#madeby{
\t\t\t

\t\t}

\t\t#willbe{


\t\t}

\t\t


\t</style>

";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
        echo "
<br />
\t\t\t<div id=\"wrapper-grid\">
\t\t\t\t<div class=\"square hvr-bounce-to-right\" id=\"img1\" >
\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("acme_core_description");
        echo "\" title=\"Description\">
\t\t\t\t\t\t<h2 class=\"w\">Description</h2>
\t\t\t\t\t\t<h4>Principe, but et récompense</h4>
\t\t\t\t\t</a>
\t\t\t\t</div>
                
                <div class=\"square hvr-bounce-to-right\" id=\"img2\">
\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("acme_core_sponsor");
        echo "\" title=\"Description\">
\t\t\t\t\t\t<h2 class=\"w\">Sponsors</h2>
\t\t\t\t\t\t<h4>Partenaires de l'évenement</h4>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t</div>
                
                <div class=\"square hvr-bounce-to-right\" id=\"img3\">
\t\t\t\t\t<a href=\"http://www.juniorisep.com\" title=\"Junior ISEP\">
\t\t\t\t\t\t<h2 class=\"w\">Qui sommes nous ?</h2>
\t\t\t\t\t\t<h4>Junior ISEP</h4>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t</div>

                <div class=\"square hvr-bounce-to-right\" id=\"img4\">
\t\t\t\t\t<a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("acme_core_contact");
        echo "\" title=\"Contact\">
\t\t\t\t\t\t<h2 id=\"b\" class=\"w\">Contact</h2>
\t\t\t\t\t\t<h4>Etudiant | Entreprise</h4>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t




 ";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 102,  136 => 86,  126 => 79,  119 => 75,  116 => 74,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
