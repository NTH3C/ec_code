<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/main/header.html.twig */
class __TwigTemplate_660db22184065e7b10687abab8bec644 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/main/header.html.twig"));

        // line 1
        yield "<header class=\"flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] h-[--tw-header-height]\"
        id=\"header\">
    <!-- Container -->
    <div class=\"container-fixed flex items-center justify-between flex-wrap gap-3\">
        <a href=\"/\">
            <img class=\"dark:hidden\" style=\"max-width: 30px;\" src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/icon.png"), "html", null, true);
        yield "\"/>
            <img class=\"hidden dark:block\" style=\"max-width: 30px;\" src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/icon-dark.png"), "html", null, true);
        yield "\"/>
        </a>
        <button class=\"btn btn-icon btn-light btn-clear btn-sm -me-1\" data-drawer-toggle=\"#sidebar\">
            <i class=\"ki-filled ki-menu\">
            </i>
        </button>
    </div>
    <!-- End of Container -->
</header>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/main/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] h-[--tw-header-height]\"
        id=\"header\">
    <!-- Container -->
    <div class=\"container-fixed flex items-center justify-between flex-wrap gap-3\">
        <a href=\"/\">
            <img class=\"dark:hidden\" style=\"max-width: 30px;\" src=\"{{ asset('media/icon.png') }}\"/>
            <img class=\"hidden dark:block\" style=\"max-width: 30px;\" src=\"{{ asset('media/icon-dark.png') }}\"/>
        </a>
        <button class=\"btn btn-icon btn-light btn-clear btn-sm -me-1\" data-drawer-toggle=\"#sidebar\">
            <i class=\"ki-filled ki-menu\">
            </i>
        </button>
    </div>
    <!-- End of Container -->
</header>", "components/main/header.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/components/main/header.html.twig");
    }
}
