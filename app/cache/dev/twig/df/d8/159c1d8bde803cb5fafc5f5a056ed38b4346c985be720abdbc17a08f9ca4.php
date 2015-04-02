<?php

/* AcmeCoreBundle:Default:contact.html.twig */
class __TwigTemplate_dfd8159c1d8bde803cb5fafc5f5a056ed38b4346c985be720abdbc17a08f9ca4 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
        echo "
 <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("acme_core_contactentreprise");
        echo "\">Contact pour les entreprises</a></li>
 <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("acme_core_feedback");
        echo "\">feedback des étudiants</a></li>
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("acme_core_inscription");
        echo "\">inscription pour les étudiants</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  46 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
