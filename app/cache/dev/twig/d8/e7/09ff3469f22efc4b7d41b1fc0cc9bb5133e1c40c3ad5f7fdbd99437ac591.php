<?php

/* ::base.html.twig */
class __TwigTemplate_d8e709ff3469f22efc4b7d41b1fc0cc9bb5133e1c40c3ad5f7fdbd99437ac591 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("acme_core_description");
        echo "\"><button>description</button></a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("acme_core_backoffice");
        echo "\"><button>backoffice</button></a>    
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("acme_core_faq");
        echo "\"><button>Foire Aux Questions</button></a>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("acme_core_contact");
        echo "\"><button>contact</button></a>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("acme_core_sponsor");
        echo "\"><button>Nos Sponsors</button></a>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("acme_core_inscription");
        echo "\"><button>inscription</button></a>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("acme_core_feedback");
        echo "\"><button>contact pour les étudiants</button></a>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("acme_core_contactentreprise");
        echo "\"><button>contact pour nos sponsors</button></a>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("acme_core_homepage");
        echo "\"><button>accueil</button></a> 
    <br />
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
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

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  110 => 23,  105 => 6,  99 => 5,  93 => 25,  90 => 24,  88 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
