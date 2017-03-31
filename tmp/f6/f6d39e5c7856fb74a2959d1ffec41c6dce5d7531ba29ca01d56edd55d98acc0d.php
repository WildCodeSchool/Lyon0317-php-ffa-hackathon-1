<?php

/* index.html.twig */
class __TwigTemplate_1bb8dce6134204b77d75920d6f960b1135e2f32c5243f7aba444d09a1968c4b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

";
        // line 4
        echo twig_include($this->env, $context, "partial/head.html.twig");
        echo "

<body>

<div class=\"container-fluid\">
    <header>
        ";
        // line 10
        echo twig_include($this->env, $context, "partial/header.html.twig");
        echo "
    </header>
    <main>
        ";
        // line 13
        echo twig_include($this->env, $context, "home.html.twig");
        echo "
    </main>
    <footer>
        ";
        // line 16
        echo twig_include($this->env, $context, "partial/footer.html.twig");
        echo "
    </footer>
</div>
";
        // line 19
        echo twig_include($this->env, $context, "partial/script.html.twig");
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 16,  39 => 13,  33 => 10,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/var/www/html/Lyon0317-php-ffa-hackathon-1/view/index.html.twig");
    }
}
