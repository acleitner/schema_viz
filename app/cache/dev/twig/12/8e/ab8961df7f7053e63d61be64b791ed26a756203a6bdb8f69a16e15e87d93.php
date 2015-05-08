<?php

/* VizBundle:Dashboard:index.html.twig */
class __TwigTemplate_128eab8961df7f7053e63d61be64b791ed26a756203a6bdb8f69a16e15e87d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("VizBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <ul>
  </ul>
  <a href=\" ";
        // line 7
        echo $this->env->getExtension('routing')->getPath("VizBundle_new_viz");
        echo " \">Add Schema</a>
";
    }

    public function getTemplateName()
    {
        return "VizBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 5,  36 => 4,  11 => 2,);
    }
}
