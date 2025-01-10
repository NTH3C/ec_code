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

/* components/home/booksReading.html.twig */
class __TwigTemplate_53030699772ed5656ed287e451e465a4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/home/booksReading.html.twig"));

        // line 1
        yield "<div class=\"card card-grid h-full min-w-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Mes lectures en cours
        </h3>
        <div class=\"input input-sm max-w-48\">
            <i class=\"ki-filled ki-magnifier\">
            </i>
            <input data-datatable-search=\"#current-books-table\" placeholder=\"Rechercher\" type=\"text\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div id=\"current-books-table\" data-datatable=\"true\" data-datatable-page-size=\"5\">
            <div class=\"scrollable-x-auto\">
                <table  class=\"table table-border\" data-datatable-table=\"true\">
                    <thead>
                    <tr>
                        <th class=\"min-w-[280px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Livre</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"max-w-[135px] text-end\">
                            <span class=\"sort\">
                                <span class=\"sort-label\">Modifié le</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["booksReading"]) || array_key_exists("booksReading", $context) ? $context["booksReading"] : (function () { throw new RuntimeError('Variable "booksReading" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bookReading"]) {
            // line 34
            yield "                        <tr>
                            <td>
                                <div class=\"flex flex-col gap-2\">
                                    <a class=\"leading-none font-medium text-sm text-gray-900 hover:text-primary\"
                                       href=\"#\" data-modal-toggle=\"#book_modal\">
                                        <div>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bookReading"], "book", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>
                                    </a>
                                    <span class=\"text-2sm text-gray-700 font-normal leading-3\">
                                    <div>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookReading"], "description", [], "any", false, false, false, 42), "html", null, true);
            yield "</div>
                                </span>
                                </div>
                            </td>
                            <td class=\"text-end\">
                                ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bookReading"], "updatedAt", [], "any", false, false, false, 47), "d/m/Y à H:i"), "html", null, true);
            yield "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bookReading'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium\">
                <div class=\"flex items-center gap-4 order-1 md:order-2\">
                    <span data-datatable-info=\"true\"></span>
                    <div class=\"pagination\" data-datatable-pagination=\"true\"></div>
                </div>
            </div>
        </div>
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
        return "components/home/booksReading.html.twig";
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
        return array (  114 => 51,  104 => 47,  96 => 42,  90 => 39,  83 => 34,  79 => 33,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card card-grid h-full min-w-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Mes lectures en cours
        </h3>
        <div class=\"input input-sm max-w-48\">
            <i class=\"ki-filled ki-magnifier\">
            </i>
            <input data-datatable-search=\"#current-books-table\" placeholder=\"Rechercher\" type=\"text\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div id=\"current-books-table\" data-datatable=\"true\" data-datatable-page-size=\"5\">
            <div class=\"scrollable-x-auto\">
                <table  class=\"table table-border\" data-datatable-table=\"true\">
                    <thead>
                    <tr>
                        <th class=\"min-w-[280px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Livre</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"max-w-[135px] text-end\">
                            <span class=\"sort\">
                                <span class=\"sort-label\">Modifié le</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for bookReading in booksReading %}
                        <tr>
                            <td>
                                <div class=\"flex flex-col gap-2\">
                                    <a class=\"leading-none font-medium text-sm text-gray-900 hover:text-primary\"
                                       href=\"#\" data-modal-toggle=\"#book_modal\">
                                        <div>{{ bookReading.book.name }}</div>
                                    </a>
                                    <span class=\"text-2sm text-gray-700 font-normal leading-3\">
                                    <div>{{ bookReading.description }}</div>
                                </span>
                                </div>
                            </td>
                            <td class=\"text-end\">
                                {{ bookReading.updatedAt|date('d/m/Y à H:i') }}
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium\">
                <div class=\"flex items-center gap-4 order-1 md:order-2\">
                    <span data-datatable-info=\"true\"></span>
                    <div class=\"pagination\" data-datatable-pagination=\"true\"></div>
                </div>
            </div>
        </div>
    </div>
</div>", "components/home/booksReading.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/components/home/booksReading.html.twig");
    }
}
