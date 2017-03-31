<?php

/* home.html.twig */
class __TwigTemplate_097cf3b07f8c83928402390d6d5666e3c5e359be014df0a5c3ec56b1dda45bba extends Twig_Template
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
    <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\"></div>
    <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8 \">
        <form action=\"\" method=\"post\" role=\"form\">
            <input type=\"hidden\" name=\"\" value=\"\">
            <legend>Look for a movie</legend>

            <div class=\"form-group\">
                <label for=\"Title\"></label>
                <input type=\"text\" class=\"form-control\" name=\"Title\" id=\"Title\" placeholder=\"What do you want to see ?\" required=\"required\" value=\"\">
            </div>

            <div class=\"form-group\">
                <label for=\"Type\"></label>
                <input type=\"text\" class=\"form-control\" name=\"Type\" id=\"Type\" placeholder=\"A movie ? A tv show ? something else ?\" value=\"\">
            </div>

            <div class=\"form-group\">
                <label for=\"Year\"></label>
                <input type=\"text\" class=\"form-control\" name=\"Year\" id=\"Year\" placeholder=\"What year ?\" value=\"\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Give me a movie</button>
        </form>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-8 col-xs-offset-2\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Liste des contacts</div>
            <form action=\"\" method=\"post\" id=\"formList\" name=\"formList\">
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"\">
                <table class=\"table\">
                    <tr>
                        <th class=\"text-center\">Movie title</th>
                        <th class=\"text-center\">ImdbID</th>
                        <th class=\"text-center\">Year</th>
                        <th class=\"text-center\">Type</th>
                        <th class=\"text-center\">Poster</th>
                    </tr>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["json"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 42
            echo "                    <tr>
                        <td class=\"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "imdbID", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Title", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Year", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Type", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\"><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "Poster", array()), "html", null, true);
            echo "\"></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </table>
            </form>
        </div>
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
        return array (  93 => 50,  84 => 47,  80 => 46,  76 => 45,  72 => 44,  68 => 43,  65 => 42,  61 => 41,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/Users/Alex/Desktop/Hackaton/Lyon0317-php-ffa-hackathon-1/view/home.html.twig");
    }
}
