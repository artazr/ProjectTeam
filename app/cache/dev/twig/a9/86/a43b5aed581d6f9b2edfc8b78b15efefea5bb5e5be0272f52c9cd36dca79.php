<?php

/* AcmeCoreBundle:BackOffice:feedbackuser.html.twig */
class __TwigTemplate_a986a43b5aed581d6f9b2edfc8b78b15efefea5bb5e5be0272f52c9cd36dca79 extends Twig_Template
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
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feedbackusers"]) ? $context["feedbackusers"] : $this->getContext($context, "feedbackusers")));
        foreach ($context['_seq'] as $context["_key"] => $context["feedbackuser"]) {
            // line 6
            echo " <tr>
\t<td>
 \t\tNom    :    ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["feedbackuser"], "nom", array()));
            echo "
 \t</td>
\t\t    => Remarque    :    
 \t<td>
 \t\t";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["feedbackuser"], "remarque", array()));
            echo "
 \t</td>
 </tr>
 <br /><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedbackuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:BackOffice:feedbackuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  57 => 12,  50 => 8,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
