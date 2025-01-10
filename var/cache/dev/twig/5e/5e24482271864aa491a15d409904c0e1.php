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
        <h3 class=\"card-title\">Répartition de mes lectures</h3>
    </div>
    <div class=\"card-body flex flex-col gap-5\">
        <div id=\"radarChart\"></div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", () => {
        // Données des catégories et des livres lus par catégorie
        const categories = ";
        // line 14
        yield json_encode((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })()));
        yield ";
        const booksReadCountByCategory = ";
        // line 15
        yield json_encode((isset($context["booksReadCountByCategory"]) || array_key_exists("booksReadCountByCategory", $context) ? $context["booksReadCountByCategory"] : (function () { throw new RuntimeError('Variable "booksReadCountByCategory" does not exist.', 15, $this->source); })()));
        yield ";

        // Configuration du graphique radar
        var options = {
            chart: {
                type: 'radar',
                height: 350,
            },
            series: [{
                name: 'Books Read',
                data: booksReadCountByCategory
            }],
            labels: categories, // Les catégories seront utilisées comme labels
            title: {
                text: 'Books Read by Category'
            },
            stroke: {
                width: 2
            },
            fill: {
                opacity: 0.4
            },
            markers: {
                size: 4
            }
        };

        var chart = new ApexCharts(document.querySelector(\"#radarChart\"), options);
        chart.render();
    });
</script>
";
        
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
        return array (  64 => 15,  60 => 14,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card h-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">Répartition de mes lectures</h3>
    </div>
    <div class=\"card-body flex flex-col gap-5\">
        <div id=\"radarChart\"></div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", () => {
        // Données des catégories et des livres lus par catégorie
        const categories = {{ categories|json_encode|raw }};
        const booksReadCountByCategory = {{ booksReadCountByCategory|json_encode|raw }};

        // Configuration du graphique radar
        var options = {
            chart: {
                type: 'radar',
                height: 350,
            },
            series: [{
                name: 'Books Read',
                data: booksReadCountByCategory
            }],
            labels: categories, // Les catégories seront utilisées comme labels
            title: {
                text: 'Books Read by Category'
            },
            stroke: {
                width: 2
            },
            fill: {
                opacity: 0.4
            },
            markers: {
                size: 4
            }
        };

        var chart = new ApexCharts(document.querySelector(\"#radarChart\"), options);
        chart.render();
    });
</script>
", "components/home/radarChart.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/components/home/radarChart.html.twig");
    }
}
