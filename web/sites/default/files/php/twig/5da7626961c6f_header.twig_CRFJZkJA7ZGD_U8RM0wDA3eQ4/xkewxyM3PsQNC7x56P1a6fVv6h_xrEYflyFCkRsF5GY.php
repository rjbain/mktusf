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

/* @layouts/regions/header/header.twig */
class __TwigTemplate_619843e1df55c9f87df8ce77a0def9897c6b36ef02dfb09e5d71f617b2191890 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 3, "include" => 4];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include'],
                [],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header class=\"l-header\" role=\"banner\">
  <div class=\"l-constrain\">
    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "  </div>
</header>
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "      ";
        $this->loadTemplate("@components/site-name/site-name.twig", "@layouts/regions/header/header.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@layouts/regions/header/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 5,  71 => 4,  68 => 3,  62 => 6,  60 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/regions/header/header.twig", "/app/web/themes/contrib/gesso/source/_patterns/02-layouts/regions/header/header.twig");
    }
}
