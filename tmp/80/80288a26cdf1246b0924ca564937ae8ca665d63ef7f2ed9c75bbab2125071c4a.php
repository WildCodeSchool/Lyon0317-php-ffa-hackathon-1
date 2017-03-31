<?php

/* home.html.twig */
class __TwigTemplate_da06d88f794c21504831fb4d78730bd2dc7e5d40e57d07cb7933327ab01c8766 extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-xs-8 col-xs-offset-2\">

        <form action=\"\" method=\"post\" role=\"form\">
            <input type=\"hidden\" name=\"\" value=\"\">
            <legend>Look for a movie</legend>

            <div class=\"form-group col-xs-12 col-sm-4\">
            <label for=\"Title\"></label>
                <input type=\"text\" class=\"form-control\" name=\"Title\" id=\"Title\" placeholder=\"What do you want to see ?\" required=\"required\" value=\"\">
            </div>

            <div class=\"form-group col-xs-12 col-sm-4\">
            <select id=\"Type\" class=\"form-control\" name=\"Type\">
                    <option value=\"movie\">Movie</option>
                    <option value=\"series\">Serie</option>
                    <option value=\"episode\">Episode</option>
                </select>
            </div>

            <div class=\"form-group col-xs-12 col-sm-4\">
            <label for=\"Year\"></label>
                <input type=\"text\" class=\"form-control\" name=\"Year\" id=\"Year\" placeholder=\"What year ?\" value=\"\">
            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">Give me a movie</button>
        </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/var/www/html/Lyon0317-php-ffa-hackathon-1/view/home.html.twig");
    }
}
