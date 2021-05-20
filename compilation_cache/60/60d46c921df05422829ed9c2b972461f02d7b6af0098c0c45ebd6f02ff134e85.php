<?php

/* font-cards.html */
class __TwigTemplate_4f35151f41ec8b165450f915c39e3eb6d9438872e2aa47570cf5ff1397fd0b72 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "font-cards.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  46 => 5,  42 => 4,  36 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "font-cards.html", "E:\\Programming\\Projects\\01_test\\templates\\font-cards.html");
    }
}
