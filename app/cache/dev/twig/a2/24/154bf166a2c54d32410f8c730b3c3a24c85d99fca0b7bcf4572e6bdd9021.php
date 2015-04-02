<?php

/* AcmeCoreBundle:Default:inscription.html.twig */
class __TwigTemplate_a224154bf166a2c54d32410f8c730b3c3a24c85d99fca0b7bcf4572e6bdd9021 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
Bienvenue Sur la page d'inscription d'équipes <br /><br />
Elle n'est pas encore ouverte pour l'instant<br />
<iframe src=\"https://docs.google.com/forms/d/1-m3hrZvTSqCiRnSSu2rVfaEEvlH3H10ZwTIjGUxiSuY/viewform?edit_requested=true\" width=\"800\" height=\"600\" frameborder=\"0\"></iframe>

";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:inscription.html.twig";
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
