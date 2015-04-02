<?php

/* AcmeCoreBundle:Default:faq.html.twig */
class __TwigTemplate_3b67302fc8be0f28ccbe3a697aac8c9dba714753211aa6dc48473a98105df1e1 extends Twig_Template
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
Voici la Foire Aux Questions <br /><br />
<br />


";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 10
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "question", array()));
            echo "<br />
 ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "answer", array()));
            echo "<br /><br />
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  55 => 11,  50 => 10,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
