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

/* pages/home.html.twig */
class __TwigTemplate_14873932afc163653e8ae9ecb2e01b8f extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    Child Page Title ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <div class=\"grid gap-5 lg:gap-7.5\">
        <!-- begin: grid -->
        <div class=\"grid lg:grid-cols-5 gap-5 lg:gap-7.5 items-stretch\">
            <div class=\"lg:col-span-2\">
                <div class=\"card h-full bg-success-light\">
                    <div class=\"card-body flex flex-col place-content-center gap-5\">
                        <div class=\"flex justify-center\">
                            <img alt=\"image\" class=\"dark:hidden max-h-[180px]\"
                                 src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/media/illustrations/32.svg"), "html", null, true);
        yield "\"/>
                            <img alt=\"image\" class=\"light:hidden max-h-[180px]\"
                                 src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/media/illustrations/32-dark.svg"), "html", null, true);
        yield "\"/>
                        </div>
                        <div class=\"flex flex-col gap-4\">
                            <div class=\"flex flex-col gap-3 text-center\">
                                <h2 class=\"text-1.5xl font-semibold text-gray-900\">
                                    Partagez vos connaissances
                                </h2>
                                <p class=\"text-sm font-medium text-gray-700\">
                                    Vous venez de commencer ou de terminer une lecture ?
                                    <br/>
                                    Faites découvrir les points essentiels à la communauté !
                                </p>
                            </div>
                            <div class=\"flex justify-center\">
                                <a class=\"btn btn-dark\" href=\"#\" data-modal-toggle=\"#book_modal\">
                                    Ajouter une lecture
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"lg:col-span-3\">
                ";
        // line 41
        yield from $this->loadTemplate("components/home/booksReading.html.twig", "pages/home.html.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "            </div>
        </div>
        <!-- end: grid -->
        <!-- begin: grid -->
        <div class=\"grid lg:grid-cols-5 gap-5 lg:gap-7.5 items-stretch\">
            <div class=\"lg:col-span-3\">
                <div class=\"grid\">
                    ";
        // line 49
        yield from $this->loadTemplate("components/home/booksRead.html.twig", "pages/home.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "                </div>
            </div>
            <div class=\"lg:col-span-2\">
                ";
        // line 53
        yield from $this->loadTemplate("components/home/radarChart.html.twig", "pages/home.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "            </div>
        </div>
        <!-- end: grid -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/home.html.twig";
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
        return array (  150 => 54,  148 => 53,  143 => 50,  141 => 49,  132 => 42,  130 => 41,  104 => 18,  99 => 16,  89 => 8,  79 => 7,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Child Page Title {{ name }}
{% endblock %}

{% block body %}
    <div class=\"grid gap-5 lg:gap-7.5\">
        <!-- begin: grid -->
        <div class=\"grid lg:grid-cols-5 gap-5 lg:gap-7.5 items-stretch\">
            <div class=\"lg:col-span-2\">
                <div class=\"card h-full bg-success-light\">
                    <div class=\"card-body flex flex-col place-content-center gap-5\">
                        <div class=\"flex justify-center\">
                            <img alt=\"image\" class=\"dark:hidden max-h-[180px]\"
                                 src=\"{{ asset('metronic/media/illustrations/32.svg') }}\"/>
                            <img alt=\"image\" class=\"light:hidden max-h-[180px]\"
                                 src=\"{{ asset('metronic/media/illustrations/32-dark.svg') }}\"/>
                        </div>
                        <div class=\"flex flex-col gap-4\">
                            <div class=\"flex flex-col gap-3 text-center\">
                                <h2 class=\"text-1.5xl font-semibold text-gray-900\">
                                    Partagez vos connaissances
                                </h2>
                                <p class=\"text-sm font-medium text-gray-700\">
                                    Vous venez de commencer ou de terminer une lecture ?
                                    <br/>
                                    Faites découvrir les points essentiels à la communauté !
                                </p>
                            </div>
                            <div class=\"flex justify-center\">
                                <a class=\"btn btn-dark\" href=\"#\" data-modal-toggle=\"#book_modal\">
                                    Ajouter une lecture
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"lg:col-span-3\">
                {% include 'components/home/booksReading.html.twig' %}
            </div>
        </div>
        <!-- end: grid -->
        <!-- begin: grid -->
        <div class=\"grid lg:grid-cols-5 gap-5 lg:gap-7.5 items-stretch\">
            <div class=\"lg:col-span-3\">
                <div class=\"grid\">
                    {% include 'components/home/booksRead.html.twig' %}
                </div>
            </div>
            <div class=\"lg:col-span-2\">
                {% include 'components/home/radarChart.html.twig' %}
            </div>
        </div>
        <!-- end: grid -->
    </div>
{% endblock %}", "pages/home.html.twig", "/Users/nathan/Desktop/ec_code/templates/pages/home.html.twig");
    }
}
