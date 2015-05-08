<?php

/* ::base.html.twig */
class __TwigTemplate_2e6260d9eeafe1cc29b1978711bcb2b1e7227c6859d7fbf38ca0c19ad9accd0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - SchemaViz</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 15
        $this->displayBlock('navigation', $context, $blocks);
        // line 22
        echo "                </div>
            </header>
            <aside class=\"sidebar\">
                ";
        // line 25
        $this->displayBlock('sidebar', $context, $blocks);
        // line 26
        echo "            </aside>
            <section class=\"main-col\">
                ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "            </section>
            <div id=\"footer\">
                ";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "            </div>
        </section>
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "schemaviz";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        // line 16
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("VizBundle_dashboard");
        echo "\">Dashboard</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "                    schema visualizer tool - created by <a href=\"https://github.com/acleitner\">acleitner</a>
                ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  125 => 32,  122 => 31,  117 => 28,  112 => 25,  104 => 18,  100 => 16,  97 => 15,  90 => 7,  87 => 6,  81 => 5,  75 => 37,  73 => 36,  69 => 34,  67 => 31,  63 => 29,  61 => 28,  57 => 26,  55 => 25,  50 => 22,  48 => 15,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
