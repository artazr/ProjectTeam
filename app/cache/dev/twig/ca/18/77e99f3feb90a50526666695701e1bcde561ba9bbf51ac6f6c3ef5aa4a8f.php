<?php

/* ::baseb.html.twig */
class __TwigTemplate_ca1877e99f3feb90a50526666695701e1bcde561ba9bbf51ac6f6c3ef5aa4a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/bootstrap.css"), "html", null, true);
        echo "\" />
        <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("acme_core_backoffice");
        echo "\"><button>accueil du backoffice</button></a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("acme_core_modif");
        echo "\"><button>page de modification</button></a>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("acme_core_entreprise");
        echo "\"><button>Voir les entreprises inscrites</button></a>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("acme_core_inscrit");
        echo "\"><button>voir les utilisateurs inscrits</button></a>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("acme_core_feedbackuser");
        echo "\"><button>Voir les feedback des utilisateurs</button></a>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("acme_core_faqmodif");
        echo "\"><button>modifier la Foire Aux Questions</button></a>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("acme_core_logout");
        echo "\"><button>se déconnecter</button></a> 
    <br />
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::baseb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  102 => 21,  97 => 6,  91 => 5,  85 => 23,  82 => 22,  80 => 21,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
