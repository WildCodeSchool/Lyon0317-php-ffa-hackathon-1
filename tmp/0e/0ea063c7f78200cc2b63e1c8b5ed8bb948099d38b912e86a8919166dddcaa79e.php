<?php

/* home.html.twig */
class __TwigTemplate_7528638affded1e4b3860c16f249ec1c00a6bc17a3a22d29c52a9d12f3d5bd00 extends Twig_Template
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
                <label for=\"Type\"></label>
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
            <div class=\"col-xs-4 col-xs-offset-4 text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Give me a movie</button>
            </div>
        </form>
    </div>
</div>

<div class=\"container outerpadding\">
    <div class=\"row\">
        <form action=\"\" method=\"POST\" id=\"formList\" name=\"formList\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["json"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 36
            echo "            <div class=\"col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0 col-md-4 col-lg-3\">
                <div class=\"panel\">
                    <div class=\"panel-heading text-center\"><strong>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Title", array()), "html", null, true);
            echo "</strong></div>
                    <div class=\"panel-body\">

                        <div class=\"boximg\">
                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Poster", array()), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"affiche du film\">
                            <span class=\"label label-danger date\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Year", array()), "html", null, true);
            echo "</span>
                        </div>
                        <br>
                        <p class=\"pull-left\">imdbID : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "imdbID", array()), "html", null, true);
            echo "</p><br>
                        <p class=\"pull-right\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Type", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 52,  84 => 47,  80 => 46,  74 => 43,  70 => 42,  63 => 38,  59 => 36,  55 => 35,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/Users/Alex/Desktop/Lyon0317-php-ffa-hackathon-1/view/home.html.twig");
    }
}
