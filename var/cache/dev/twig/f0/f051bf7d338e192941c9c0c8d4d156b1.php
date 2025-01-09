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
        yield "<form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_read");
        yield "\" method=\"POST\">
    <div>
        <label for=\"book_id\">Livre</label>
        <select name=\"book_id\" id=\"book_id\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 6
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 6), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "name", [], "any", false, false, false, 6), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "        </select>
    </div>

    <div>
        <label for=\"description\">Description</label>
        <textarea name=\"description\" id=\"description\" placeholder=\"Entrez une description\"></textarea>
    </div>

    <div>
        <label for=\"rating\">Note</label>
        <input type=\"number\" name=\"rating\" id=\"rating\" min=\"1\" max=\"5\" step=\"0.1\" placeholder=\"Donnez une note de 1 à 5\">
    </div>

    <div>
        <label for=\"is_read\">Livre lu ?</label>
        <input type=\"checkbox\" name=\"is_read\" id=\"is_read\" value=\"1\">
    </div>

    <button type=\"submit\">Enregistrer la lecture</button>
</form>
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
        return array (  68 => 8,  57 => 6,  53 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ path('book_read') }}\" method=\"POST\">
    <div>
        <label for=\"book_id\">Livre</label>
        <select name=\"book_id\" id=\"book_id\">
            {% for book in books %}
                <option value=\"{{ book.id }}\">{{ book.name }}</option>
            {% endfor %}
        </select>
    </div>

    <div>
        <label for=\"description\">Description</label>
        <textarea name=\"description\" id=\"description\" placeholder=\"Entrez une description\"></textarea>
    </div>

    <div>
        <label for=\"rating\">Note</label>
        <input type=\"number\" name=\"rating\" id=\"rating\" min=\"1\" max=\"5\" step=\"0.1\" placeholder=\"Donnez une note de 1 à 5\">
    </div>

    <div>
        <label for=\"is_read\">Livre lu ?</label>
        <input type=\"checkbox\" name=\"is_read\" id=\"is_read\" value=\"1\">
    </div>

    <button type=\"submit\">Enregistrer la lecture</button>
</form>
", "modals/book.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/modals/book.html.twig");
    }
}
