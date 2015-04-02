<?php

/* AcmeCoreBundle:BackOffice:modif.html.twig */
class __TwigTemplate_da70ddfac093a642bfb0d7e259f9b4fd3268b42d7bec2365bce2f595840418eb extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("acme_core_modif");
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
<script>
\tfunction changeValue(){
\t\tvar endroit = \$('#acme_corebundle_modif_endroit').val();
\t\tvar url = \"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("acme_core_modifResult", array("endroit" => "endroit"));
        echo "\";
\t\turl = url.replace(\"endroit\", endroit);

\t\t\$.ajax({
\t\t  url: url,
\t\t  success: function(reponse){
\t\t \t \$( '#acme_corebundle_modif_contenu' ).val( reponse );
\t\t  }
\t\t});
\t}
\tchangeValue();
\t\$('#acme_corebundle_modif_endroit').change(function(){
\t\tchangeValue();
\t})
</script>
";
    }

    public function getTemplateName()
    {
        return "AcmeCoreBundle:BackOffice:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  51 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
