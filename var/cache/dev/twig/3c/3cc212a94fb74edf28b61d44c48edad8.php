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
class __TwigTemplate_eb5ca548a64fd2b93ca92ffde45dcd85 extends Template
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
            <h3 class=\"modal-title\">Ma lecture</h3>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <form>
                    <div class=\"flex flex-col gap-5 p-5\">
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Livre</label>
                            <select id=\"book\" class=\"select\">
                                <option>Livre 1</option>
                                <option>Livre 2</option>
                            </select>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"form-label font-normal text-gray-900\">Mes notes</label>
                            <div class=\"flex flex-col w-full gap-1\">
                            <textarea name=\"description\" class=\"textarea\"
                                      placeholder=\"Notez-ici les idées importantes de l'oeuvre.\"></textarea>
                            </div>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Note</label>
                            <select id=\"book\" class=\"select\" name=\"rating\">
                                <option>1</option>
                                <option>1.5</option>
                                <option>2</option>
                                <option>2.5</option>
                                <option>3</option>
                                <option>3.5</option>
                                <option>4</option>
                                <option>4.5</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"switch\">
                                <span class=\"switch-label font-normal text-gray-900\">Lecture terminée</span>
                                <input name=\"check\" type=\"checkbox\" value=\"0\"/>
                            </label>
                        </div>

                        <div class=\"flex\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>
                </form>
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
        return "modals/book.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"modal\" data-modal=\"true\" id=\"book_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <h3 class=\"modal-title\">Ma lecture</h3>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <form>
                    <div class=\"flex flex-col gap-5 p-5\">
                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Livre</label>
                            <select id=\"book\" class=\"select\">
                                <option>Livre 1</option>
                                <option>Livre 2</option>
                            </select>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"form-label font-normal text-gray-900\">Mes notes</label>
                            <div class=\"flex flex-col w-full gap-1\">
                            <textarea name=\"description\" class=\"textarea\"
                                      placeholder=\"Notez-ici les idées importantes de l'oeuvre.\"></textarea>
                            </div>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label for=\"book\" class=\"form-label font-normal text-gray-900\">Note</label>
                            <select id=\"book\" class=\"select\" name=\"rating\">
                                <option>1</option>
                                <option>1.5</option>
                                <option>2</option>
                                <option>2.5</option>
                                <option>3</option>
                                <option>3.5</option>
                                <option>4</option>
                                <option>4.5</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class=\"flex flex-col gap-1\">
                            <label class=\"switch\">
                                <span class=\"switch-label font-normal text-gray-900\">Lecture terminée</span>
                                <input name=\"check\" type=\"checkbox\" value=\"0\"/>
                            </label>
                        </div>

                        <div class=\"flex\">
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>", "modals/book.html.twig", "/Users/nathan/Desktop/ec_code/templates/modals/book.html.twig");
    }
}
