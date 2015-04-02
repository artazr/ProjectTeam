<?php

/* AcmeCoreBundle:BackOffice:entreprise.html.twig */
class __TwigTemplate_0ddd335f1d3f3dfe23297a1210ea9052d9a1f78d47fa9937eba0a33922ceb9ee extends Twig_Template
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

<br />

";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprises"]) ? $context["entreprises"] : $this->getContext($context, "entreprises")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 9
            echo "<tr>
\t<td>
 \t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "nom", array()));
            echo "
 \t</td>
 \t<td>
 \t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entreprise"], "remarque", array()));
            echo "
 \t</td>
 </tr>
 <br /><br />
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<br/>
";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:BackOffice:entreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  59 => 14,  53 => 11,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
