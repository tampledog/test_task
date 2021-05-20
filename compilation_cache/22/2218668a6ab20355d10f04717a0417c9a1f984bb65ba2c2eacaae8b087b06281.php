<?php

/* index.html */
class __TwigTemplate_0423301f27738f4e08d852afb12f5b284559abe9b3cd97ad38464d647b06984a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru-RU\">
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"../styles/styles.css\">
        <title>Учителя Школы</title>
        
    </head>
    <body>
        <table border=\"1\" style=\"width: 80%;\">
            <thead>
                <tr>
                    <td>Имя</td>
                    <td>Предмет</td>
                    <td>Возраст</td>
                    <td>Начал(а) работать</td>
                </tr>
            </thead>
            <tbody>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staff"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["staffer"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["staffer"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["staffer"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["staffer"], "age", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["staffer"], "date_register", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                    </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staffer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>

        <div class=\"container\">
            <div class=\"tabs\">
                <div class=\"tabs__top\">
                    <h2 class=\"tabs__title\">
                        Please select one font
                    </h2>
                    <div class=\"tabs__buttons\">
                        <button class=\"button js-tab-btn is-active\">My fonts</button>
                        <button class=\"button js-tab-btn\">Buy fonts</button>
                    </div>
                </div>
                <div class=\"tabs__bodies\">
                    <div class=\"tabs__content js-tab-content is-active\">
                        <div class=\"font-cards\">
                        
                        </div>
                    </div>
                    <div class=\"tabs__content js-tab-content\">
                        <div class=\"text-block\">
                            <p>
                            </p>
                        </div>
                    </div>

                </div>";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "type", array()), "html", null, true);
            // line 62
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "type", array()) == "cards")) {
                // line 64
                $this->loadTemplate("cards.html", "index.html", 64)->display($context);
            } else {
                // line 67
                echo "
                    <div class=\"TABA\">";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "content", array()), "html", null, true);
                echo "
                    </div>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
        </div>
    <footer>
        <script src=\"../scripts/scripts.js\"></script>
    </footer>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 73,  122 => 69,  119 => 67,  116 => 64,  114 => 62,  112 => 60,  95 => 59,  66 => 28,  58 => 25,  54 => 24,  50 => 23,  46 => 22,  43 => 21,  39 => 20,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "E:\\Programming\\Projects\\01_test\\templates\\index.html");
    }
}
