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

/* components/home/radarChart.html.twig */
class __TwigTemplate_dd0655e45edc2e797261cf02a27f07d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/home/radarChart.html.twig"));

        // line 1
        yield "<div class=\"card h-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Répartition de mes lectures
        </h3>
    </div>
    <div class=\"card-body flex flex-col gap-5\">
        <figure>
            <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/charts/Radar_Sample.png"), "html", null, true);
        yield "\" alt=\"Radar Sample\"/>
        </figure>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/home/radarChart.html.twig";
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
        return array (  55 => 9,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card h-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Répartition de mes lectures
        </h3>
    </div>
    <div class=\"card-body flex flex-col gap-5\">
        <figure>
            <img src=\"{{  asset('media/charts/Radar_Sample.png') }}\" alt=\"Radar Sample\"/>
        </figure>
    </div>
</div>", "components/home/radarChart.html.twig", "/Users/nathan/Desktop/ec_code/templates/components/home/radarChart.html.twig");
    }
}
