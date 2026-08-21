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

/* modules/office_hours/templates/office-hours.html.twig */
class __TwigTemplate_a3a5a71105be026c80079a4e6e1082f8 extends \Twig\Template
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
        echo "<div class=\"office-hours\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    <div class=\"office-hours__item\">
      ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 4)) {
                // line 5
                echo "        <span class=\"office-hours__item-label\" style=\"width: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["label_length"] ?? null) * 0.6), "html", null, true);
                echo "em;\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 7
            echo "      ";
            if ( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "slots", [], "any", false, false, true, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null))) {
                // line 8
                echo "        <span class=\"office-hours__item-slots\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slots", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 10
            echo "      ";
            if ( !twig_test_empty((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "comments", [], "any", false, false, true, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null))) {
                // line 11
                echo "        <span class=\"office-hours__item-comments\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "comments", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 13
            echo "      <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["item_separator"] ?? null), 13, $this->source));
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  ";
        if (($context["schema"] ?? null)) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schema"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
                // line 18
                echo "      <meta property=\"openingHours\" content=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["meta"], "label", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["meta"], "slots", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/office_hours/templates/office-hours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 21,  105 => 20,  95 => 18,  90 => 17,  87 => 16,  77 => 13,  71 => 11,  68 => 10,  62 => 8,  59 => 7,  51 => 5,  49 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/office_hours/templates/office-hours.html.twig", "/var/www/vhosts/esnsevilla.org/public_html/modules/office_hours/templates/office-hours.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "if" => 4);
        static $filters = array("escape" => 5, "raw" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'raw'],
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
