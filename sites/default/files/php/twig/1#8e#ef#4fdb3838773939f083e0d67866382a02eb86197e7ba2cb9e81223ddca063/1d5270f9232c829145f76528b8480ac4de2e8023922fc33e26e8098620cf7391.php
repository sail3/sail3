<?php

/* core/modules/system/templates/page.html.twig */
class __TwigTemplate_8eef4fdb3838773939f083e0d67866382a02eb86197e7ba2cb9e81223ddca063 extends Twig_Template
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
        // line 62
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 65
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 66
            echo "      <a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 67
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 72
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 75
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 76
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 77
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 80
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 81
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 86
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</div>
        ";
            }
            // line 88
            echo "      </div>";
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
  </header>

  ";
        // line 94
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
  ";
        // line 95
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "

  ";
        // line 97
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "

  ";
        // line 99
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

  ";
        // line 101
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 105
        echo "
    <div class=\"layout-content\">

      ";
        // line 108
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 109
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 110
            echo "        <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 112
        echo "      ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

      ";
        // line 114
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
        echo "

      ";
        // line 116
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 117
            echo "        <nav class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</nav>
      ";
        }
        // line 119
        echo "
      ";
        // line 120
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </div>";
        // line 122
        echo "
    ";
        // line 123
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 124
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 125
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 128
        echo "
    ";
        // line 129
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 130
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 131
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 134
        echo "
  </main>

  ";
        // line 137
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 138
            echo "    <footer role=\"contentinfo\">
      ";
            // line 139
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 142
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 142,  210 => 139,  207 => 138,  205 => 137,  200 => 134,  194 => 131,  191 => 130,  189 => 129,  186 => 128,  180 => 125,  177 => 124,  175 => 123,  172 => 122,  168 => 120,  165 => 119,  159 => 117,  157 => 116,  152 => 114,  146 => 112,  140 => 110,  138 => 109,  134 => 108,  129 => 105,  123 => 101,  118 => 99,  113 => 97,  108 => 95,  104 => 94,  98 => 91,  95 => 90,  92 => 89,  90 => 88,  84 => 86,  82 => 85,  79 => 84,  69 => 81,  66 => 80,  56 => 77,  53 => 76,  50 => 75,  46 => 72,  44 => 71,  41 => 70,  33 => 67,  26 => 66,  24 => 65,  19 => 62,);
    }
}
