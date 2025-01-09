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
        yield "<div class=\"modal\" data-modal=\"true\" id=\"search_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <i class=\"ki-filled ki-magnifier text-gray-700 text-xl\">
            </i>
            <input class=\"input px-0 border-none bg-transparent shadow-none ms-2.5\" name=\"query\"
                   placeholder=\"Rechercher...\" type=\"text\" value=\"\"/>
            <button class=\"btn btn-sm btn-icon btn-light btn-clear shrink-0\" data-modal-dismiss=\"true\">
                <i class=\"ki-filled ki-cross\">
                </i>
            </button>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <div class=\"menu menu-default p-0 flex-col\">
                    <div class=\"grid gap-1\">
                        <div class=\"menu-item\">
                            <div class=\"menu-link flex justify-between gap-2\">
                                <div class=\"flex items-center gap-2.5\">
                                    <img alt=\"Cover\" class=\"rounded-full size-9 shrink-0\" src=\"\" />
                                    <div class=\"flex flex-col\">
                                        <a class=\"text-sm font-semibold text-gray-900 hover:text-primary-active mb-px\"
                                           href=\"#\">
                                            Le Moine qui vendit sa Ferrari
                                        </a>
                                        <span class=\"text-2sm font-normal text-gray-500\">
                                            Un conte sur la quête du bonheur et du succès intérieur.
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex items-center gap-2.5\">
                                    <div class=\"rating\">
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "modals/search.html.twig";
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
        return new Source("<div class=\"modal\" data-modal=\"true\" id=\"search_modal\">
    <div class=\"modal-content max-w-[600px] top-[15%]\">
        <div class=\"modal-header py-4 px-5\">
            <i class=\"ki-filled ki-magnifier text-gray-700 text-xl\">
            </i>
            <input class=\"input px-0 border-none bg-transparent shadow-none ms-2.5\" name=\"query\"
                   placeholder=\"Rechercher...\" type=\"text\" value=\"\"/>
            <button class=\"btn btn-sm btn-icon btn-light btn-clear shrink-0\" data-modal-dismiss=\"true\">
                <i class=\"ki-filled ki-cross\">
                </i>
            </button>
        </div>
        <div class=\"modal-body p-0 pb-5\">
            <div class=\"scrollable-y-auto\" data-scrollable=\"true\" data-scrollable-max-height=\"auto\"
                 data-scrollable-offset=\"300px\">
                <div class=\"menu menu-default p-0 flex-col\">
                    <div class=\"grid gap-1\">
                        <div class=\"menu-item\">
                            <div class=\"menu-link flex justify-between gap-2\">
                                <div class=\"flex items-center gap-2.5\">
                                    <img alt=\"Cover\" class=\"rounded-full size-9 shrink-0\" src=\"\" />
                                    <div class=\"flex flex-col\">
                                        <a class=\"text-sm font-semibold text-gray-900 hover:text-primary-active mb-px\"
                                           href=\"#\">
                                            Le Moine qui vendit sa Ferrari
                                        </a>
                                        <span class=\"text-2sm font-normal text-gray-500\">
                                            Un conte sur la quête du bonheur et du succès intérieur.
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex items-center gap-2.5\">
                                    <div class=\"rating\">
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                        <div class=\"rating-label checked\">
                                            <i class=\"rating-on ki-solid ki-star text-base leading-none\"></i>
                                            <i class=\"rating-off ki-outline ki-star text-base leading-none\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "modals/search.html.twig", "/Users/nathan/Desktop/ec_code/templates/modals/search.html.twig");
    }
}
