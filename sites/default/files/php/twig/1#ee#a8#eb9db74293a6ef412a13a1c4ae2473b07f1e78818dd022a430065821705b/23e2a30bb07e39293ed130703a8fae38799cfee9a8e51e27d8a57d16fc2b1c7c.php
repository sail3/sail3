<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_eea8eb9db74293a6ef412a13a1c4ae2473b07f1e78818dd022a430065821705b extends Twig_Template
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
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 30
            if (($context["type"] == "error")) {
                // line 31
                echo "      <div role=\"alert\">
    ";
            }
            // line 33
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 34
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 36
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 37
                echo "        <ul>
          ";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 39
                    echo "            <li>";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "        </ul>
      ";
            } else {
                // line 43
                echo "        ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true);
                echo "
      ";
            }
            // line 45
            echo "    ";
            if (($context["type"] == "error")) {
                // line 46
                echo "      </div>
    ";
            }
            // line 48
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 48,  77 => 46,  74 => 45,  68 => 43,  64 => 41,  55 => 39,  51 => 38,  48 => 37,  45 => 36,  39 => 34,  36 => 33,  32 => 31,  30 => 30,  23 => 29,  19 => 28,);
    }
}
