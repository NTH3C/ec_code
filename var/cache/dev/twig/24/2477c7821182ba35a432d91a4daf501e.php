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

/* auth/login.html.twig */
class __TwigTemplate_dc78bfcdcc86bbd6304415fba1959cbc extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent = $this->loadTemplate("auth.html.twig", "auth/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"flex items-center justify-center grow bg-center bg-no-repeat page-bg\">
        <div class=\"card max-w-[370px] w-full\">
            <form class=\"card-body flex flex-col gap-5 p-10\" id=\"sign_in_form\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                <div class=\"text-center mb-2.5\">
                    <h3 class=\"text-lg font-medium text-gray-900 leading-none mb-2.5\">
                        Connexion
                    </h3>
                    <div class=\"flex items-center justify-center font-medium\">
                       <span class=\"text-2sm text-gray-700 me-1.5\">
                        Pas de compte ?
                       </span>
                        <a class=\"text-2sm link\" href=\"/register\">
                            Inscription
                        </a>
                    </div>
                </div>
                <div class=\"flex flex-col gap-1\">
                    <label for=\"email\" class=\"form-label font-normal text-gray-900\">Email</label>
                    <input id=\"email\" type=\"text\" name=\"_username\" class=\"input\" placeholder=\"Adresse email\" />
                </div>
                <div class=\"flex flex-col gap-1\">
                    <div class=\"flex items-center justify-between gap-1\">
                        <label class=\"form-label font-normal text-gray-900\">
                            Mot de passe
                        </label>
                    </div>
                    <div class=\"input\" data-toggle-password=\"true\">
                        <input name=\"_password\" placeholder=\"Mot de passe\" type=\"password\" value=\"\"/>
                        <button class=\"btn btn-icon\" data-toggle-password-trigger=\"true\" type=\"button\">
                            <i class=\"ki-filled ki-eye text-gray-500 toggle-password-active:hidden\">
                            </i>
                            <i class=\"ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block\">
                            </i>
                        </button>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary flex justify-center grow\">Connexion</button>
            </form>
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
        return "auth/login.html.twig";
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
        return array (  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'auth.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <div class=\"flex items-center justify-center grow bg-center bg-no-repeat page-bg\">
        <div class=\"card max-w-[370px] w-full\">
            <form class=\"card-body flex flex-col gap-5 p-10\" id=\"sign_in_form\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <div class=\"text-center mb-2.5\">
                    <h3 class=\"text-lg font-medium text-gray-900 leading-none mb-2.5\">
                        Connexion
                    </h3>
                    <div class=\"flex items-center justify-center font-medium\">
                       <span class=\"text-2sm text-gray-700 me-1.5\">
                        Pas de compte ?
                       </span>
                        <a class=\"text-2sm link\" href=\"/register\">
                            Inscription
                        </a>
                    </div>
                </div>
                <div class=\"flex flex-col gap-1\">
                    <label for=\"email\" class=\"form-label font-normal text-gray-900\">Email</label>
                    <input id=\"email\" type=\"text\" name=\"_username\" class=\"input\" placeholder=\"Adresse email\" />
                </div>
                <div class=\"flex flex-col gap-1\">
                    <div class=\"flex items-center justify-between gap-1\">
                        <label class=\"form-label font-normal text-gray-900\">
                            Mot de passe
                        </label>
                    </div>
                    <div class=\"input\" data-toggle-password=\"true\">
                        <input name=\"_password\" placeholder=\"Mot de passe\" type=\"password\" value=\"\"/>
                        <button class=\"btn btn-icon\" data-toggle-password-trigger=\"true\" type=\"button\">
                            <i class=\"ki-filled ki-eye text-gray-500 toggle-password-active:hidden\">
                            </i>
                            <i class=\"ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block\">
                            </i>
                        </button>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary flex justify-center grow\">Connexion</button>
            </form>
        </div>
    </div>
{% endblock %}
", "auth/login.html.twig", "/Users/nathan/Desktop/ec_code-1/templates/auth/login.html.twig");
    }
}
