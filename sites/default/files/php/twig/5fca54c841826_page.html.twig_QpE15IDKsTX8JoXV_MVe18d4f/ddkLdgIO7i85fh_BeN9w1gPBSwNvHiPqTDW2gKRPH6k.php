<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/watkins/templates/page.html.twig */
class __TwigTemplate_8de6d826c64bcb36d3457eb7efd105a52b0d557defa876e2ea4c932d1e157c28 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "<section id=\"master-header\" class=\"inner-page\">
  <div class=\"container-big\">
    <div class=\"col-sm-4\">
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-8\">
      ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "masterMenu", [])), "html", null, true);
        echo "
    </div>
  </div>
  </section>
 <section class=\"page-callout-top\">
    ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pageCalloutTop", [])), "html", null, true);
        echo "
 </section> 
";
        // line 67
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 69
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 70
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 107
        echo "
";
        // line 109
        $this->displayBlock('main', $context, $blocks);
        // line 174
        echo "<section class=\"page-callout-bottom\">
    ";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pageCalloutBottom", [])), "html", null, true);
        echo "
 </section> 
<section class=\"footer-area\">
  <div class=\"container\">
    <div class=\"col-sm-6 text-left\">
      <p>&copy;  ";
        // line 180
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["post"] ?? null), "published_at", [])), "Y"), "html", null, true);
        echo " Watkins Site Development, Greensboro NC USA</p>
    </div>
    <div class=\"col-sm-6 text-right\">
      ";
        // line 183
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerLeft", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
";
    }

    // line 70
    public function block_navbar($context, array $blocks = [])
    {
        // line 71
        echo "    ";
        // line 72
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 74
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 75
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 78
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 79
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 80
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 82
        echo "      <div class=\"navbar-header\">
        ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 85
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 86
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 93
        echo "      </div>

      ";
        // line 96
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 97
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 101
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 102
            echo "        </div>
      ";
        }
        // line 104
        echo "    </header>
  ";
    }

    // line 109
    public function block_main($context, array $blocks = [])
    {
        // line 110
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 114
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 115
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 124
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "
      ";
        // line 132
        echo "      ";
        // line 133
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 137
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 140
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 143
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 144
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 151
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "      </section>

      ";
        // line 164
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 165
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 170
            echo "      ";
        }
        // line 171
        echo "    </div>
  </div>
";
    }

    // line 115
    public function block_header($context, array $blocks = [])
    {
        // line 116
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 124
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 125
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 144
    public function block_highlighted($context, array $blocks = [])
    {
        // line 145
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 151
    public function block_help($context, array $blocks = [])
    {
        // line 152
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 157
    public function block_content($context, array $blocks = [])
    {
        // line 158
        echo "          <a id=\"main-content\"></a>
          ";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 165
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 166
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 167
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/watkins/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 167,  330 => 166,  327 => 165,  321 => 159,  318 => 158,  315 => 157,  308 => 152,  305 => 151,  298 => 145,  295 => 144,  288 => 126,  285 => 125,  282 => 124,  275 => 117,  272 => 116,  269 => 115,  263 => 171,  260 => 170,  257 => 165,  254 => 164,  250 => 161,  247 => 157,  244 => 155,  241 => 154,  238 => 151,  235 => 150,  232 => 148,  229 => 147,  226 => 144,  223 => 143,  217 => 140,  215 => 137,  214 => 136,  213 => 135,  212 => 134,  211 => 133,  209 => 132,  206 => 130,  203 => 129,  200 => 124,  197 => 123,  194 => 121,  191 => 120,  188 => 115,  185 => 114,  178 => 110,  175 => 109,  170 => 104,  166 => 102,  163 => 101,  157 => 98,  154 => 97,  151 => 96,  147 => 93,  138 => 87,  135 => 86,  132 => 85,  128 => 83,  125 => 82,  119 => 80,  117 => 79,  112 => 78,  110 => 75,  109 => 74,  108 => 72,  106 => 71,  103 => 70,  94 => 183,  88 => 180,  80 => 175,  77 => 174,  75 => 109,  72 => 107,  68 => 70,  66 => 69,  64 => 67,  59 => 65,  51 => 60,  45 => 57,  40 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/watkins/templates/page.html.twig", "/home/watkinsmaster/watkinssitedevelopment.com/themes/watkins/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 67, "if" => 69, "block" => 70];
        static $filters = ["escape" => 57, "date" => 180, "clean_class" => 75, "t" => 87];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'date', 'clean_class', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
