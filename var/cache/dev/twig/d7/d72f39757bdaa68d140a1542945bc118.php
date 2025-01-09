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

/* components/main/toolbar.html.twig */
class __TwigTemplate_d0f6d3048cfe2727af442647960e5777 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/main/toolbar.html.twig"));

        // line 1
        yield "<div class=\"pb-5\">
    <!-- Container -->
    <div class=\"container-fixed flex items-center justify-between flex-wrap gap-3\">
        <div class=\"flex items-center flex-wrap gap-1 lg:gap-5\">
            <h1 class=\"font-medium text-base text-gray-900\"></h1>
            <div class=\"flex items-center flex-wrap gap-1 text-sm\">
                <a class=\"text-gray-700 hover:text-primary\" href=\"#\">
                    Accueil
                </a>
            </div>
        </div>
        <div class=\"flex items-center flex-wrap gap-1.5 lg:gap-2.5\">
            <button class=\"btn btn-icon btn-icon-lg size-8 rounded-md hover:bg-gray-200 dropdown-open:bg-gray-200 hover:text-primary text-gray-600\"
                    data-modal-toggle=\"#search_modal\">
                <i class=\"ki-filled ki-magnifier !text-base\">
                </i>
            </button>
        </div>
    </div>
    <!-- End of Container -->
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/main/toolbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"pb-5\">
    <!-- Container -->
    <div class=\"container-fixed flex items-center justify-between flex-wrap gap-3\">
        <div class=\"flex items-center flex-wrap gap-1 lg:gap-5\">
            <h1 class=\"font-medium text-base text-gray-900\"></h1>
            <div class=\"flex items-center flex-wrap gap-1 text-sm\">
                <a class=\"text-gray-700 hover:text-primary\" href=\"#\">
                    Accueil
                </a>
            </div>
        </div>
        <div class=\"flex items-center flex-wrap gap-1.5 lg:gap-2.5\">
            <button class=\"btn btn-icon btn-icon-lg size-8 rounded-md hover:bg-gray-200 dropdown-open:bg-gray-200 hover:text-primary text-gray-600\"
                    data-modal-toggle=\"#search_modal\">
                <i class=\"ki-filled ki-magnifier !text-base\">
                </i>
            </button>
        </div>
    </div>
    <!-- End of Container -->
</div>", "components/main/toolbar.html.twig", "/Users/nathan/Desktop/ec_code/templates/components/main/toolbar.html.twig");
    }
}
