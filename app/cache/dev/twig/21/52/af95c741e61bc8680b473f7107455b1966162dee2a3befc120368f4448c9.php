<?php

/* AcmeCoreBundle:BackOffice:inscrit.html.twig */
class __TwigTemplate_2152af95c741e61bc8680b473f7107455b1966162dee2a3befc120368f4448c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::baseb.html.twig");
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
        return "::baseb.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
Voici la liste des inscrits pour l'évènement :

<br />
<iframe src=\"https://docs.google.com/a/juniorisep.com/spreadsheets/d/1PxShYxgn4KUg-8zXEbwE2cPVBmh7Iq31xydwf3CqkU0/edit#gid=1792540645\" width=\"800\" height=\"600\" frameborder=\"0\"></iframe>

<br/>
";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:BackOffice:inscrit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
