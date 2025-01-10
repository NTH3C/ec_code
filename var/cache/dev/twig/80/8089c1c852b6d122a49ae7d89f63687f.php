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

/* components/home/booksRead.html.twig */
class __TwigTemplate_5a0f63ce360ed9288ce33eb7b618072a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/home/booksRead.html.twig"));

        // line 1
        yield "<div class=\"card card-grid h-full min-w-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Mes lectures terminées
        </h3>
        <div class=\"input input-sm max-w-48\">
            <i class=\"ki-filled ki-magnifier\">
            </i>
            <input data-datatable-search=\"#read-books-table\" placeholder=\"Rechercher\" type=\"text\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div id=\"read-books-table\" data-datatable=\"true\" data-datatable-page-size=\"5\">
            <div class=\"scrollable-x-auto\">
                <table class=\"table table-border\" data-datatable-table=\"true\">
                    <thead>
                    <tr>
                        <th class=\"min-w-[280px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Livre</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Catégorie</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Note</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["booksRead"]) || array_key_exists("booksRead", $context) ? $context["booksRead"] : (function () { throw new RuntimeError('Variable "booksRead" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bookRead"]) {
            // line 40
            yield "                    <tr>
                        <td>
                            <div class=\"flex flex-col gap-2\">
                                <a class=\"leading-none font-medium text-sm text-gray-900 hover:text-primary\"
                                   href=\"#\">
                                    <div>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bookRead"], "book", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "</div>
                                </a>
                                <span class=\"text-2sm text-gray-700 font-normal leading-3\">
                                    <div>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookRead"], "description", [], "any", false, false, false, 48), "html", null, true);
            yield "</div>
                                </span>
                            </div>
                        </td>
                        <td>
                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                yield "                                        <div class=\"rating-label ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["bookRead"], "rating", [], "any", false, false, false, 54))) {
                    yield "checked";
                }
                yield "\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bookRead'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium\">
                <div class=\"flex items-center gap-2 order-2 md:order-1\">
                    Show
                    <select class=\"select select-sm w-16\"
                            data-datatable-size=\"true\" name=\"perpage\">
                    </select>
                    per page
                </div>
                <div class=\"flex items-center gap-4 order-1 md:order-2\">
                    <span data-datatable-info=\"true\"></span>
                    <div class=\"pagination\" data-datatable-pagination=\"true\">
                    </div>
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
        return "components/home/booksRead.html.twig";
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
        return array (  137 => 63,  128 => 59,  114 => 54,  110 => 53,  102 => 48,  96 => 45,  89 => 40,  85 => 39,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card card-grid h-full min-w-full\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            Mes lectures terminées
        </h3>
        <div class=\"input input-sm max-w-48\">
            <i class=\"ki-filled ki-magnifier\">
            </i>
            <input data-datatable-search=\"#read-books-table\" placeholder=\"Rechercher\" type=\"text\"/>
        </div>
    </div>
    <div class=\"card-body\">
        <div id=\"read-books-table\" data-datatable=\"true\" data-datatable-page-size=\"5\">
            <div class=\"scrollable-x-auto\">
                <table class=\"table table-border\" data-datatable-table=\"true\">
                    <thead>
                    <tr>
                        <th class=\"min-w-[280px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Livre</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Catégorie</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                        <th class=\"min-w-[135px]\">
                            <span class=\"sort asc\">
                                <span class=\"sort-label\">Note</span>
                                <span class=\"sort-icon\"></span>
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for bookRead in booksRead %}
                    <tr>
                        <td>
                            <div class=\"flex flex-col gap-2\">
                                <a class=\"leading-none font-medium text-sm text-gray-900 hover:text-primary\"
                                   href=\"#\">
                                    <div>{{ bookRead.book.name }}</div>
                                </a>
                                <span class=\"text-2sm text-gray-700 font-normal leading-3\">
                                    <div>{{ bookRead.description }}</div>
                                </span>
                            </div>
                        </td>
                        <td>
                            {% for i in 1..5 %}
                                        <div class=\"rating-label {% if i <= bookRead.rating %}checked{% endif %}\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                    {% endfor %}
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium\">
                <div class=\"flex items-center gap-2 order-2 md:order-1\">
                    Show
                    <select class=\"select select-sm w-16\"
                            data-datatable-size=\"true\" name=\"perpage\">
                    </select>
                    per page
                </div>
                <div class=\"flex items-center gap-4 order-1 md:order-2\">
                    <span data-datatable-info=\"true\"></span>
                    <div class=\"pagination\" data-datatable-pagination=\"true\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "components/home/booksRead.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/components/home/booksRead.html.twig");
    }
}
