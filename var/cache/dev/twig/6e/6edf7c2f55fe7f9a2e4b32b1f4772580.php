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

/* components/main/footer.html.twig */
class __TwigTemplate_aebd8bddd6212622ec5e8b6a89746e70 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/main/footer.html.twig"));

        // line 1
        yield "<footer class=\"footer\">
    <!-- Container -->
    <div class=\"container-fixed\">
        <div class=\"flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5\">
            <div class=\"flex order-2 md:order-1 gap-2 font-normal text-2sm\">
                <span class=\"text-gray-500\">2024©</span>
                <a class=\"text-gray-600 hover:text-primary\" href=\"#\">
                    BookMaster
                </a>
            </div>
            <nav class=\"flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600\">
                <a class=\"hover:text-primary\" href=\"#\">FAQ</a>
                <a class=\"hover:text-primary\" href=\"#\">Support</a>
            </nav>
        </div>
    </div>
    <!-- End of Container -->
</footer>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/main/footer.html.twig";
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
        return new Source("<footer class=\"footer\">
    <!-- Container -->
    <div class=\"container-fixed\">
        <div class=\"flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5\">
            <div class=\"flex order-2 md:order-1 gap-2 font-normal text-2sm\">
                <span class=\"text-gray-500\">2024©</span>
                <a class=\"text-gray-600 hover:text-primary\" href=\"#\">
                    BookMaster
                </a>
            </div>
            <nav class=\"flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600\">
                <a class=\"hover:text-primary\" href=\"#\">FAQ</a>
                <a class=\"hover:text-primary\" href=\"#\">Support</a>
            </nav>
        </div>
    </div>
    <!-- End of Container -->
</footer>", "components/main/footer.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/components/main/footer.html.twig");
    }
}
