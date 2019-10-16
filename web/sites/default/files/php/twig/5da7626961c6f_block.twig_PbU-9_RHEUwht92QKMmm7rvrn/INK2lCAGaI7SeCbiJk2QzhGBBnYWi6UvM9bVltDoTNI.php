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

/* @components/block/block.twig */
class __TwigTemplate_99edbacb4a6b383871939dd758c6c49f5ca7925ea19d26b7ad3b07b4cd124b0e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 11, "block" => 29];
        $filters = ["escape" => 16];
        $functions = ["add_attributes" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        $context["additional_attributes"] = ["class" => [0 => "block"]];
        // line 4
        $context["additional_title_attributes"] = ["class" => [0 => "block__title"]];
        // line 7
        $context["additional_content_attributes"] = ["class" => [0 => "block__content"]];
        // line 10
        echo "
";
        // line 11
        if ( !($context["hide_wrapper"] ?? null)) {
            // line 12
            echo "  <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["additional_attributes"] ?? null))]));
            echo ">
";
        }
        // line 14
        echo "
  ";
        // line 15
        if (($context["has_constrain"] ?? null)) {
            // line 16
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["constrain_classes"] ?? null)) ? (($context["constrain_classes"] ?? null)) : ("l-constrain")), "html", null, true);
            echo "\">
  ";
        }
        // line 18
        echo "
  ";
        // line 19
        if (($context["label"] ?? null)) {
            // line 20
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
    <";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["label_element"] ?? null)) ? (($context["label_element"] ?? null)) : ("h2")), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["additional_title_attributes"] ?? null)), "title_attributes"]));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((($context["label_element"] ?? null)) ? (($context["label_element"] ?? null)) : ("h2")), "html", null, true);
            echo ">
    ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if ( !($context["hide_content_wrapper"] ?? null)) {
            // line 26
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["additional_content_attributes"] ?? null)), "content_attributes"]));
            echo ">
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
  ";
        // line 33
        if ( !($context["hide_content_wrapper"] ?? null)) {
            // line 34
            echo "    </div>
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if (($context["has_constrain"] ?? null)) {
            // line 38
            echo "    </div>
  ";
        }
        // line 40
        echo "
";
        // line 41
        if ( !($context["hide_wrapper"] ?? null)) {
            // line 42
            echo "  </div>
";
        }
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@components/block/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 30,  154 => 29,  148 => 42,  146 => 41,  143 => 40,  139 => 38,  137 => 37,  134 => 36,  130 => 34,  128 => 33,  125 => 32,  123 => 29,  120 => 28,  114 => 26,  112 => 25,  109 => 24,  104 => 22,  94 => 21,  89 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  62 => 10,  60 => 7,  58 => 4,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@components/block/block.twig", "/app/web/themes/contrib/gesso/source/_patterns/03-components/block/block.twig");
    }
}
