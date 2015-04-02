<?php

/* AcmeCoreBundle:BackOffice:resultatContenu.html.twig */
class __TwigTemplate_fceb3871fc799e7eda3778eef5b95959a1d1aaadf1b0f54fb47d51deda3f167c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:BackOffice:resultatContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
