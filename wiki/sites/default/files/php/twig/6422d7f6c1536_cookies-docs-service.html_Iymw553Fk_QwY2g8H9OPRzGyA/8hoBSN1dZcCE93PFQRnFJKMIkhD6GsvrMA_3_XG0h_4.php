<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/cookies/templates/cookies-docs-service.html.twig */
class __TwigTemplate_1beabc2bd0f65375eb3b3cd35e69c3f943ce792fa2b1aa57f7f76c70e5affc59 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = [0 => "cookies-docs-service"];
        // line 2
        $context["HideProcessorDetails"] = (((((twig_test_empty(($context["processor"] ?? null)) && twig_test_empty(($context["processorContact"] ?? null))) && twig_test_empty(($context["processorContact"] ?? null))) && twig_test_empty(($context["processorUrl"] ?? null))) && twig_test_empty(($context["processorPrivacyPolicyUrl"] ?? null))) && twig_test_empty(($context["processorCookiePolicyUrl"] ?? null)));
        // line 3
        echo "
<article";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 4), 4, $this->source), "html", null, true);
        echo ">
  <h3>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 5, $this->source), "html", null, true);
        echo "</h3>
  ";
        // line 6
        if (($context["processorCookiePolicyUrl"] ?? null)) {
            // line 7
            echo "    <div class=\"cookies-docs-service__website\"></div>
  ";
        }
        // line 9
        echo "  <div class=\"cookies-docs-service__info\">
    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info"] ?? null), 10, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 12
        if ( !($context["HideProcessorDetails"] ?? null)) {
            // line 13
            echo "    <h4 class=\"cookies-docs-service__processor-details-header\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "processorDetailsLabel", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</h4>
    <div class=\"cookies-docs-service__processor-details\">
      <dl>
        ";
            // line 16
            if (($context["processor"] ?? null)) {
                // line 17
                echo "          <div class=\"cookies-docs-service__processor-company\">
            <dt><strong>";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "processorLabel", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</strong></dt>
            <dd>
              ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processor"] ?? null), 20, $this->source), "html", null, true);
                echo "
            </dd>
          </div>
        ";
            }
            // line 24
            echo "        ";
            if (($context["processorUrl"] ?? null)) {
                // line 25
                echo "          <div class=\"cookies-docs-service__processor-website\">
            <dt><strong>";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "processorWebsiteUrlLabel", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "</strong></dt>
            <dd>
              <a href=";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorUrl"] ?? null), 28, $this->source), "html", null, true);
                echo " target=\"_blank\" rel=\"nofollow noreferrer\" class=\"cookies-docs-service__processor-website-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorUrl"] ?? null), 28, $this->source), "html", null, true);
                echo "</a>
            </dd>
          </div>
        ";
            }
            // line 32
            echo "        ";
            if (($context["processorPrivacyPolicyUrl"] ?? null)) {
                // line 33
                echo "          <div class=\"cookies-docs-service__processor-privacy-policy\">
            <dt><strong>";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "processorPrivacyPolicyUrlLabel", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "</strong></dt>
            <dd>
              <a href=";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorPrivacyPolicyUrl"] ?? null), 36, $this->source), "html", null, true);
                echo " target=\"_blank\" rel=\"nofollow noreferrer\" class=\"cookies-docs-service__processor-privacy-policy-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorPrivacyPolicyUrl"] ?? null), 36, $this->source), "html", null, true);
                echo "</a>
            </dd>
          </div>
        ";
            }
            // line 40
            echo "        ";
            if (($context["processorCookiePolicyUrl"] ?? null)) {
                // line 41
                echo "          <div class=\"cookies-docs-service__processor-cookie-policy\">
            <dt><strong>";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "processorCookiePolicyUrlLabel", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</strong></dt>
            <dd>
              <a href=";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorCookiePolicyUrl"] ?? null), 44, $this->source), "html", null, true);
                echo " target=\"_blank\" rel=\"nofollow noreferrer\" class=\"cookies-docs-service__processor-cookie-policy-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorCookiePolicyUrl"] ?? null), 44, $this->source), "html", null, true);
                echo "</a>
            </dd>
          </div>
        ";
            }
            // line 48
            echo "        ";
            if (($context["processorContact"] ?? null)) {
                // line 49
                echo "          <div class=\"cookies-docs-service__processor-contact\">
            <dt>
              <strong>";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "processorContactLabel", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</strong></dt>
            <dd>
              ";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["processorContact"] ?? null), 53, $this->source), "html", null, true);
                echo "
            </dd>
          </div>
        ";
            }
            // line 57
            echo "      </dl>
    </div>
  ";
        }
        // line 60
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cookies/templates/cookies-docs-service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  173 => 57,  166 => 53,  161 => 51,  157 => 49,  154 => 48,  145 => 44,  140 => 42,  137 => 41,  134 => 40,  125 => 36,  120 => 34,  117 => 33,  114 => 32,  105 => 28,  100 => 26,  97 => 25,  94 => 24,  87 => 20,  82 => 18,  79 => 17,  77 => 16,  70 => 13,  68 => 12,  63 => 10,  60 => 9,  56 => 7,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/cookies/templates/cookies-docs-service.html.twig", "/var/www/vhosts/esnsevilla.org/public_html/modules/contrib/cookies/templates/cookies-docs-service.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
