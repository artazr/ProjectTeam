<?php

/* AcmeCoreBundle:Default:description.html.twig */
class __TwigTemplate_a489184890735c51cd7a92a2417ffb5c8fa34102e907ec57a64f1be5317d6b80 extends Twig_Template
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
Voici la description de l'évènement de ProjectTeam <br />

";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["descriptions"]) ? $context["descriptions"] : $this->getContext($context, "descriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 8
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["description"], "content", array()));
            echo "
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:Default:description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
