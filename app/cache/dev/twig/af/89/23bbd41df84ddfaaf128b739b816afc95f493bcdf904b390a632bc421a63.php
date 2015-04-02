<?php

/* AcmeCoreBundle:BackOffice:faqmodif.html.twig */
class __TwigTemplate_af8923bbd41df84ddfaaf128b739b816afc95f493bcdf904b390a632bc421a63 extends Twig_Template
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
Page de modif

<br />
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("acme_core_faqmodif");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <button type=\"button\" class=\"btn btn-default\">Cancel</button>
    </div>
</form>

<br />

<br/>
";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:BackOffice:faqmodif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
