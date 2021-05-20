<?php

/* cards.html */
class __TwigTemplate_c89644943fd18f38268df09c5c789dbc1f7146e9bab97787fa19129db52af39a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["tab"] ?? null), "content", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 2
            echo "  <label class=\"font-cards-item";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) ? (" font-cards-item--non-format") : (""));
            echo "\">
    <input type=\"radio\" name=\"font\">
    <i class=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "color", array()), "html", null, true);
            echo "\">
      <span class=\"font-cards-item__symbol\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "symbol", array()), "html", null, true);
            echo "</span>
    </i>
    <span class=\"font-cards-item__text\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["card"], "text", array()), "html", null, true);
            echo "</span>
  </label>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "cards.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  51 => 7,  46 => 5,  42 => 4,  36 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cards.html", "E:\\Programming\\Projects\\01_test\\templates\\cards.html");
    }
}
