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

/* base.html.twig */
class __TwigTemplate_9461b25dc38235807656bfe2aadb3fcf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html class=\"h-full\" data-theme=\"true\" data-theme-mode=\"light\" dir=\"ltr\" lang=\"fr\">
<head>
    <title>BookMaster</title>
    <meta charset=\"utf-8\"/>
    <meta content=\"follow, index\" name=\"robots\"/>
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/icon.png"), "html", null, true);
        yield "\" rel=\"shortcut icon\"/>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/vendors/apexcharts/apexcharts.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/vendors/keenicons/styles.bundle.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 13
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
    <!-- Base -->
    <div class=\"flex grow\">
        <!-- Header -->
        ";
        // line 39
        yield from $this->loadTemplate("components/main/header.html.twig", "base.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "        <!-- End of Header -->

        <!-- Wrapper -->
        <div class=\"flex flex-col lg:flex-row grow pt-[--tw-header-height] lg:pt-0\">
            <!-- Sidebar -->
            ";
        // line 45
        yield from $this->loadTemplate("components/main/sidebar.html.twig", "base.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "            <!-- End of Sidebar -->

            <!-- Main -->
            <div class=\"flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] mt-0 lg:mt-5 m-5\">
                <div class=\"flex flex-col grow lg:scrollable-y-auto lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-5\"
                     id=\"scrollable_content\">
                    <main class=\"grow\" role=\"content\">
                        <!-- Toolbar -->
                        ";
        // line 54
        yield from $this->loadTemplate("components/main/toolbar.html.twig", "base.html.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "                        <!-- End of Toolbar -->
                        <!-- Container -->
                        <div class=\"container-fixed\">
                            ";
        // line 58
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 59
        yield "                        </div>
                        <!-- End of Container -->
                    </main>
                </div>
                <!-- Footer -->
                ";
        // line 64
        yield from $this->loadTemplate("components/main/footer.html.twig", "base.html.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "                <!-- End of Footer -->
            </div>
            <!-- End of Main -->
        </div>
        <!-- End of Wrapper -->
    </div>
    <!-- End of Base -->
    ";
        // line 72
        yield from $this->loadTemplate("modals/search.html.twig", "base.html.twig", 72)->unwrap()->yield($context);
        // line 73
        yield "    <!-- End of Page -->

    <!-- Scripts -->
    <script src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/js/core.bundle.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/vendors/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("metronic/js/widgets/general.js"), "html", null, true);
        yield "\"></script>
    <!-- End of Scripts -->
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 58
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
        return "base.html.twig";
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
        return array (  174 => 58,  161 => 78,  157 => 77,  153 => 76,  148 => 73,  146 => 72,  137 => 65,  135 => 64,  128 => 59,  126 => 58,  121 => 55,  119 => 54,  109 => 46,  107 => 45,  100 => 40,  98 => 39,  69 => 13,  65 => 12,  61 => 11,  56 => 9,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html class=\"h-full\" data-theme=\"true\" data-theme-mode=\"light\" dir=\"ltr\" lang=\"fr\">
<head>
    <title>BookMaster</title>
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
    <!-- Base -->
    <div class=\"flex grow\">
        <!-- Header -->
        {% include 'components/main/header.html.twig' %}
        <!-- End of Header -->

        <!-- Wrapper -->
        <div class=\"flex flex-col lg:flex-row grow pt-[--tw-header-height] lg:pt-0\">
            <!-- Sidebar -->
            {% include 'components/main/sidebar.html.twig' %}
            <!-- End of Sidebar -->

            <!-- Main -->
            <div class=\"flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] mt-0 lg:mt-5 m-5\">
                <div class=\"flex flex-col grow lg:scrollable-y-auto lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-5\"
                     id=\"scrollable_content\">
                    <main class=\"grow\" role=\"content\">
                        <!-- Toolbar -->
                        {% include 'components/main/toolbar.html.twig' %}
                        <!-- End of Toolbar -->
                        <!-- Container -->
                        <div class=\"container-fixed\">
                            {% block body %}{% endblock %}
                        </div>
                        <!-- End of Container -->
                    </main>
                </div>
                <!-- Footer -->
                {% include 'components/main/footer.html.twig' %}
                <!-- End of Footer -->
            </div>
            <!-- End of Main -->
        </div>
        <!-- End of Wrapper -->
    </div>
    <!-- End of Base -->
    {% include 'modals/search.html.twig' %}
    <!-- End of Page -->

    <!-- Scripts -->
    <script src=\"{{ asset('metronic/js/core.bundle.js') }}\"></script>
    <script src=\"{{ asset('metronic/vendors/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('metronic/js/widgets/general.js') }}\"></script>
    <!-- End of Scripts -->
</body>
</html>
", "base.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/base.html.twig");
    }
}
