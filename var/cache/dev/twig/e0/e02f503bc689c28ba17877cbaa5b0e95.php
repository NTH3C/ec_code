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

/* modals/search.html.twig */
class __TwigTemplate_b35c8c1646c47aad9433904fab440ec3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/search.html.twig"));

        // line 1
        yield "<!-- Modal for search -->
<div class=\"modal\" data-modal=\"true\" id=\"search_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <i class=\"ki-filled ki-magnifier text-gray-700 text-xl\"></i>
            <input id=\"search-input\" class=\"input px-0 border-none bg-transparent shadow-none ms-2.5\" name=\"query\"
                   placeholder=\"Rechercher...\" type=\"text\" value=\"\"/>
            <button class=\"btn btn-sm btn-icon btn-light btn-clear shrink-0\" data-modal-dismiss=\"true\">
                <i class=\"ki-filled ki-cross\"></i>
            </button>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <div class=\"menu menu-default p-0 flex-col\">
                    <div class=\"grid gap-1\" id=\"books-list\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 18
            yield "                            <div class=\"menu-item book-item\">
                                <div class=\"menu-link flex justify-between gap-2\">
                                    <div class=\"flex items-center gap-2.5\">
                                        <div class=\"flex flex-col\">
                                            <a class=\"text-sm font-semibold text-gray-900 hover:text-primary-active mb-px\"
                                               href=\"#\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, false, 23), "html", null, true);
            yield "</a>
                                            <span class=\"text-2sm font-normal text-gray-500\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.querySelector('#search-input');
        const booksList = document.querySelector('#books-list');
        const bookItems = Array.from(booksList.querySelectorAll('.book-item'));

        // Fonction pour filtrer les livres
        function handleSearchInput(event) {
            const query = event.target.value.toLowerCase();

            bookItems.forEach(item => {
                const title = item.querySelector('a').textContent.toLowerCase();
                const description = item.querySelector('span').textContent.toLowerCase();

                // Afficher ou cacher les éléments en fonction de la recherche
                if (title.includes(query) || description.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Ajouter l'événement de saisie
        searchInput.addEventListener('input', handleSearchInput);
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
        return "modals/search.html.twig";
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
        return array (  90 => 30,  78 => 24,  74 => 23,  67 => 18,  63 => 17,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Modal for search -->
<div class=\"modal\" data-modal=\"true\" id=\"search_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <i class=\"ki-filled ki-magnifier text-gray-700 text-xl\"></i>
            <input id=\"search-input\" class=\"input px-0 border-none bg-transparent shadow-none ms-2.5\" name=\"query\"
                   placeholder=\"Rechercher...\" type=\"text\" value=\"\"/>
            <button class=\"btn btn-sm btn-icon btn-light btn-clear shrink-0\" data-modal-dismiss=\"true\">
                <i class=\"ki-filled ki-cross\"></i>
            </button>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <div class=\"menu menu-default p-0 flex-col\">
                    <div class=\"grid gap-1\" id=\"books-list\">
                        {% for book in books %}
                            <div class=\"menu-item book-item\">
                                <div class=\"menu-link flex justify-between gap-2\">
                                    <div class=\"flex items-center gap-2.5\">
                                        <div class=\"flex flex-col\">
                                            <a class=\"text-sm font-semibold text-gray-900 hover:text-primary-active mb-px\"
                                               href=\"#\">{{ book.name }}</a>
                                            <span class=\"text-2sm font-normal text-gray-500\">{{ book.description }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.querySelector('#search-input');
        const booksList = document.querySelector('#books-list');
        const bookItems = Array.from(booksList.querySelectorAll('.book-item'));

        // Fonction pour filtrer les livres
        function handleSearchInput(event) {
            const query = event.target.value.toLowerCase();

            bookItems.forEach(item => {
                const title = item.querySelector('a').textContent.toLowerCase();
                const description = item.querySelector('span').textContent.toLowerCase();

                // Afficher ou cacher les éléments en fonction de la recherche
                if (title.includes(query) || description.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Ajouter l'événement de saisie
        searchInput.addEventListener('input', handleSearchInput);
    });
</script>
", "modals/search.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/modals/search.html.twig");
    }
}
