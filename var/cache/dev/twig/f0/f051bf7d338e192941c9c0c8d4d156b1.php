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

        // line 2
        yield "
<div class=\"modal\" data-modal=\"true\" id=\"book_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <h3 class=\"modal-title\">Ma lecture</h3>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["BookReadForm"]) || array_key_exists("BookReadForm", $context) ? $context["BookReadForm"] : (function () { throw new RuntimeError('Variable "BookReadForm" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                    <div class=\"flex flex-col gap-5 p-5\">
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Livre</label>
                            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["BookReadForm"]) || array_key_exists("BookReadForm", $context) ? $context["BookReadForm"] : (function () { throw new RuntimeError('Variable "BookReadForm" does not exist.', 15, $this->source); })()), "book_id", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "select"]]);
        yield "
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"form-label font-normal text-gray-900\">Mes notes</label>
                            <div class=\"flex flex-col w-full gap-1\">
                                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["BookReadForm"]) || array_key_exists("BookReadForm", $context) ? $context["BookReadForm"] : (function () { throw new RuntimeError('Variable "BookReadForm" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "textarea", "placeholder" => "Notez-ici les idées importantes de l'oeuvre."]]);
        yield "
                            </div>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label for=\"rating\" class=\"form-label font-normal text-gray-900\">Note</label>
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["BookReadForm"]) || array_key_exists("BookReadForm", $context) ? $context["BookReadForm"] : (function () { throw new RuntimeError('Variable "BookReadForm" does not exist.', 27, $this->source); })()), "rating", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "select"]]);
        yield "
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"switch\">
                                <span class=\"switch-label font-normal text-gray-900\">Lecture terminée</span>
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["BookReadForm"]) || array_key_exists("BookReadForm", $context) ? $context["BookReadForm"] : (function () { throw new RuntimeError('Variable "BookReadForm" does not exist.', 33, $this->source); })()), "is_read", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "switch-input"]]);
        yield "
                            </label>
                        </div>

                        <div class=\"flex\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>
                ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["BookReadForm"]) || array_key_exists("BookReadForm", $context) ? $context["BookReadForm"] : (function () { throw new RuntimeError('Variable "BookReadForm" does not exist.', 41, $this->source); })()), 'form_end');
        yield "
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
        return array (  101 => 41,  90 => 33,  81 => 27,  72 => 21,  63 => 15,  56 => 11,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/book/save.html.twig #}

<div class=\"modal\" data-modal=\"true\" id=\"book_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <h3 class=\"modal-title\">Ma lecture</h3>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                {{ form_start(BookReadForm) }}
                    <div class=\"flex flex-col gap-5 p-5\">
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Livre</label>
                            {{ form_row(BookReadForm.book_id, {'attr': {'class': 'select'}}) }}
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"form-label font-normal text-gray-900\">Mes notes</label>
                            <div class=\"flex flex-col w-full gap-1\">
                                {{ form_row(BookReadForm.description, {'attr': {'class': 'textarea', 'placeholder': 'Notez-ici les idées importantes de l\\'oeuvre.'}}) }}
                            </div>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label for=\"rating\" class=\"form-label font-normal text-gray-900\">Note</label>
                            {{ form_row(BookReadForm.rating, {'attr': {'class': 'select'}}) }}
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"switch\">
                                <span class=\"switch-label font-normal text-gray-900\">Lecture terminée</span>
                                {{ form_row(BookReadForm.is_read, {'attr': {'class': 'switch-input'}}) }}
                            </label>
                        </div>

                        <div class=\"flex\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>
                {{ form_end(BookReadForm) }}
            </div>
        </div>
    </div>
</div>
", "modals/book.html.twig", "/Users/nathan/Desktop/ec_code/templates/modals/book.html.twig");
    }
}
