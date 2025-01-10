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

/* modals/book.html.twig */
class __TwigTemplate_31fb8d710cfbababd7aa790085ff7620 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/book.html.twig"));

        // line 1
        yield "<div class=\"modal\" data-modal=\"true\" id=\"book_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <h3 class=\"modal-title\">Ajouter une lecture</h3>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_read");
        yield "\" method=\"POST\">
                    <div class=\"flex flex-col gap-5 p-5\">
                        <!-- Livre -->
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Livre</label>
                            <select id=\"book\" name=\"book_id\" class=\"select\" required>
                                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 16
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                            </select>
                        </div>

                        <!-- Notes -->
                        <div class=\"flex flex-col gap-1\">
                            <label class=\"form-label font-normal text-gray-900\">Mes notes</label>
                            <div class=\"flex flex-col w-full gap-1\">
                                <textarea name=\"description\" class=\"textarea\"
                                          placeholder=\"Notez ici les idées importantes de l'œuvre.\"
                                          required></textarea>
                            </div>
                        </div>

                        <!-- Note -->
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"rating\" class=\"form-label font-normal text-gray-900\">Note</label>
                            <select id=\"rating\" class=\"select\" name=\"rating\" required>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5]);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                            </select>
                        </div>

                        <!-- Lecture terminée -->
                        <div class=\"flex flex-col gap-1\">
                            <label class=\"switch\">
                                <span class=\"switch-label font-normal text-gray-900\">Lecture terminée</span>
                                <input name=\"is_read\" type=\"checkbox\" value=\"1\"/>
                            </label>
                        </div>

                        <!-- Bouton Enregistrer -->
                        <div class=\"flex\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
        return "modals/book.html.twig";
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
        return array (  113 => 38,  102 => 36,  98 => 35,  79 => 18,  68 => 16,  64 => 15,  55 => 9,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"modal\" data-modal=\"true\" id=\"book_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <h3 class=\"modal-title\">Ajouter une lecture</h3>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <form action=\"{{ path('book_read') }}\" method=\"POST\">
                    <div class=\"flex flex-col gap-5 p-5\">
                        <!-- Livre -->
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Livre</label>
                            <select id=\"book\" name=\"book_id\" class=\"select\" required>
                                {% for book in books %}
                                    <option value=\"{{ book.id }}\">{{ book.name }}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <!-- Notes -->
                        <div class=\"flex flex-col gap-1\">
                            <label class=\"form-label font-normal text-gray-900\">Mes notes</label>
                            <div class=\"flex flex-col w-full gap-1\">
                                <textarea name=\"description\" class=\"textarea\"
                                          placeholder=\"Notez ici les idées importantes de l'œuvre.\"
                                          required></textarea>
                            </div>
                        </div>

                        <!-- Note -->
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"rating\" class=\"form-label font-normal text-gray-900\">Note</label>
                            <select id=\"rating\" class=\"select\" name=\"rating\" required>
                                {% for i in [1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5] %}
                                    <option value=\"{{ i }}\">{{ i }}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <!-- Lecture terminée -->
                        <div class=\"flex flex-col gap-1\">
                            <label class=\"switch\">
                                <span class=\"switch-label font-normal text-gray-900\">Lecture terminée</span>
                                <input name=\"is_read\" type=\"checkbox\" value=\"1\"/>
                            </label>
                        </div>

                        <!-- Bouton Enregistrer -->
                        <div class=\"flex\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
", "modals/book.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/modals/book.html.twig");
    }
}
