<?php

/* AcmeCoreBundle:Default:contactetudiant1.html.twig */
class __TwigTemplate_a4f219e304c926635c63bc0cedb5d00c4b59b701e446b36e37d753e5efd10b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("acme_core_contactetudiant1");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <button type=\"button\" class=\"btn btn-default\">Cancel</button>
    </div>
</form>

    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("acme_core_description");
        echo "\"><button>description</button></a>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("acme_core_backoffice");
        echo "\"><button>backoffice</button></a>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("acme_core_contact");
        echo "\"><button>contact</button></a>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("acme_core_sponsor");
        echo "\"><button>Nos Sponsors</button></a>
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("acme_core_inscription");
        echo "\"><button>inscription</button></a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("acme_core_contactetudiant1");
        echo "\"><button>contact pour les étudiants</button></a>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("acme_core_contactentreprise");
        echo "\"><button>contact pour nos sponsors</button></a>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("acme_core_homepage");
        echo "\"><button>accueil</button></a>



";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:contactetudiant1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  26 => 2,  19 => 1,);
    }
}
