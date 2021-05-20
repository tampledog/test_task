<?php

/* tab.html */
class __TwigTemplate_2ac7b4a688f5e355bf7fc76597939b537bafc13fc00a7c7dd0fab8935fc68daf extends Twig_Template
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
        echo "<div>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["tab"] ?? null), "content", array()), "html", null, true);
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tab"] ?? null), "content", array()), 2, array(), "array"), "cards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 6
            echo "    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "text", array()), "html", null, true);
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "tab.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  27 => 6,  23 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tab.html", "E:\\Programming\\Projects\\01_test\\templates\\tab.html");
    }
}
