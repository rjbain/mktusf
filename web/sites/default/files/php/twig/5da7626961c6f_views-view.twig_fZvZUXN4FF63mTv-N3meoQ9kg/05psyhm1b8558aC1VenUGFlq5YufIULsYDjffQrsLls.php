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

/* @components/views/views-view/views-view.twig */
class __TwigTemplate_e111a3002a31f3e14c1c91d97625d93a88050f6a73d866cb539b449a328741a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 8];
        $filters = ["escape" => 5];
        $functions = ["add_attributes" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['add_attributes']
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["additional_attributes"] = ["class" => [0 => "view"]];
        // line 4
        echo "
<";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["element"] ?? null)) ? (($context["element"] ?? null)) : ("div")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["additional_attributes"] ?? null))]));
        echo ">

  ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 8
        if (($context["title"] ?? null)) {
            // line 9
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 13
        if (($context["header"] ?? null)) {
            // line 14
            echo "    <div class=\"view__header\">
      ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 18
        echo "
  ";
        // line 19
        if (($context["exposed"] ?? null)) {
            // line 20
            echo "    <div class=\"view__filters\">
      ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if (($context["attachment_before"] ?? null)) {
            // line 26
            echo "    <div class=\"attachment attachment--before\">
      ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if (($context["rows"] ?? null)) {
            // line 32
            echo "    <div class=\"view__content\">
      ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 35
($context["empty"] ?? null)) {
            // line 36
            echo "    <div class=\"view__empty\">
      ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        if (($context["pager"] ?? null)) {
            // line 42
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if (($context["attachment_after"] ?? null)) {
            // line 46
            echo "    <div class=\"attachment attachment--after\">
      ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if (($context["more"] ?? null)) {
            // line 52
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if (($context["footer"] ?? null)) {
            // line 56
            echo "    <div class=\"view__footer\">
      ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (($context["feed_icons"] ?? null)) {
            // line 62
            echo "    <div class=\"feed-icons\">
      ";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 66
        echo "
</";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["element"] ?? null)) ? (($context["element"] ?? null)) : ("div")), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@components/views/views-view/views-view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 67,  212 => 66,  206 => 63,  203 => 62,  201 => 61,  198 => 60,  192 => 57,  189 => 56,  187 => 55,  184 => 54,  178 => 52,  176 => 51,  173 => 50,  167 => 47,  164 => 46,  162 => 45,  159 => 44,  153 => 42,  151 => 41,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  132 => 33,  129 => 32,  127 => 31,  124 => 30,  118 => 27,  115 => 26,  113 => 25,  110 => 24,  104 => 21,  101 => 20,  99 => 19,  96 => 18,  90 => 15,  87 => 14,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  67 => 7,  60 => 5,  57 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@components/views/views-view/views-view.twig", "/app/web/themes/contrib/gesso/source/_patterns/03-components/views/views-view/views-view.twig");
    }
}
