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

/* auth.html.twig */
class __TwigTemplate_f2c8cbdf94589dc138950fe6c7b4bacd extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html class=\"h-full\" data-theme=\"true\" data-theme-mode=\"light\" dir=\"ltr\" lang=\"en\">
<head>
    <base href=\"../../\">
    <title>Metronic - Tailwind CSS</title>
    <meta charset=\"utf-8\"/>
    <meta content=\"follow, index\" name=\"robots\"/>
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/icon.png"), "html", null, true);
        yield "\" rel=\"shortcut icon\"/>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/vendors/apexcharts/apexcharts.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/vendors/keenicons/styles.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
</head>
<body class=\"antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#F6F6F9] [--tw-page-bg-dark:var(--tw-coal-200)]
        [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-content-scrollbar-color:#e8e8e8]
        [--tw-header-height:60px] [--tw-sidebar-width:90px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]\">
<!-- Theme Mode -->
<script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;
        if ( document.documentElement ) {
                if ( localStorage.getItem('theme') ) {
                        themeMode = localStorage.getItem('theme');
                } else if ( document.documentElement.hasAttribute('data-theme-mode') ) {
                        themeMode = document.documentElement.getAttribute('data-theme-mode');
                } else {themeMode = defaultThemeMode;}

                if ( themeMode === 'system' ) {themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';}
                document.documentElement.classList.add(themeMode);
        }
</script>
<!-- End of Theme Mode -->

<!-- Page -->
<style>
    .page-bg {
        background-image: url(";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/media/images/2600x1200/bg-10.png"), "html", null, true);
        yield ");
    }
    .dark .page-bg {
        background-image: url(";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/media/images/2600x1200/bg-10-dark.png"), "html", null, true);
        yield ");
    }
</style>

";
        // line 46
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 47
        yield "<!-- End of Page -->

<!-- Scripts -->
<script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/js/core.bundle.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/vendors/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/js/widgets/general.js"), "html", null, true);
        yield "\"></script>
<!-- End of Scripts -->
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth.html.twig";
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
        return array (  139 => 46,  126 => 52,  122 => 51,  118 => 50,  113 => 47,  111 => 46,  104 => 42,  98 => 39,  70 => 14,  66 => 13,  62 => 12,  57 => 10,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html class=\"h-full\" data-theme=\"true\" data-theme-mode=\"light\" dir=\"ltr\" lang=\"en\">
<head>
    <base href=\"../../\">
    <title>Metronic - Tailwind CSS</title>
    <meta charset=\"utf-8\"/>
    <meta content=\"follow, index\" name=\"robots\"/>
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <link href=\"{{ asset('media/icon.png') }}\" rel=\"shortcut icon\"/>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('metronic/vendors/apexcharts/apexcharts.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('metronic/vendors/keenicons/styles.bundle.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('metronic/css/styles.css') }}\" rel=\"stylesheet\"/>
</head>
<body class=\"antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#F6F6F9] [--tw-page-bg-dark:var(--tw-coal-200)]
        [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-content-scrollbar-color:#e8e8e8]
        [--tw-header-height:60px] [--tw-sidebar-width:90px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]\">
<!-- Theme Mode -->
<script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;
        if ( document.documentElement ) {
                if ( localStorage.getItem('theme') ) {
                        themeMode = localStorage.getItem('theme');
                } else if ( document.documentElement.hasAttribute('data-theme-mode') ) {
                        themeMode = document.documentElement.getAttribute('data-theme-mode');
                } else {themeMode = defaultThemeMode;}

                if ( themeMode === 'system' ) {themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';}
                document.documentElement.classList.add(themeMode);
        }
</script>
<!-- End of Theme Mode -->

<!-- Page -->
<style>
    .page-bg {
        background-image: url({{ asset('metronic/media/images/2600x1200/bg-10.png')}});
    }
    .dark .page-bg {
        background-image: url({{ asset('metronic/media/images/2600x1200/bg-10-dark.png')}});
    }
</style>

{% block body %}{% endblock %}
<!-- End of Page -->

<!-- Scripts -->
<script src=\"{{ asset('metronic/js/core.bundle.js') }}\"></script>
<script src=\"{{ asset('metronic/vendors/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('metronic/js/widgets/general.js') }}\"></script>
<!-- End of Scripts -->
</body>
</html>
", "auth.html.twig", "/Users/nathan/Desktop/ec_code/templates/auth.html.twig");
    }
}
