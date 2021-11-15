<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* register/registration.html.twig */
class __TwigTemplate_cce37bd6acbfed530e3598006bc5872d84d5366c0f5f0f5a395d146ec2b1d98b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenuPublic' => [$this, 'block_contenuPublic'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basePublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/registration.html.twig"));

        $this->parent = $this->loadTemplate("basePublic.html.twig", "register/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenuPublic($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPublic"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPublic"));

        // line 4
        echo "                  
\t\t\t        \t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

                  <div class=\"form-group\">
\t\t\t\t\t\t      ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "input-material"]]);
        echo "  
                  </div>

                  <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "password", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "input-material"]]);
        echo " 
                  </div>

\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "input-material"]]);
        echo "
                  </div>

\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "input-material"]]);
        echo "
                  </div>

                  <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateNaiss", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "input-material"]]);
        echo "
                  </div>

                  <div class=\"form-group terms-conditions\">
                  <input id=\"register-agree\" name=\"registerAgree\" type=\"checkbox\" required value=\"1\" data-msg=\"Your agreement is required\" class=\"checkbox-template\">
                  <label for=\"register-agree\">J'accepte la charte informatique du lycée</label>
                  </div>

                  <div class=\"form-group\">
                  <button id=\"register\" type=\"submit\" name=\"registerSubmit\" class=\"btn btn-primary\">Enregistrer</button>
                  </div>
                  
                  <small>Vous avez déjà un compte ? </small><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"signup\">Login</a>
\t\t\t\t        
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "\t\t   
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  120 => 36,  105 => 24,  98 => 20,  91 => 16,  84 => 12,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basePublic.html.twig' %}

 {% block contenuPublic %}
                  
\t\t\t        \t{{ form_start(form) }}

                  <div class=\"form-group\">
\t\t\t\t\t\t      {{ form_row(form.email, {'attr' : {'class' : 'input-material'}}) }}  
                  </div>

                  <div class=\"form-group\">
\t\t\t\t\t        {{ form_row(form.password, {'attr' : {'class' : 'input-material'}}) }} 
                  </div>

\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t        {{ form_row(form.nom, {'attr' : {'class' : 'input-material'}}) }}
                  </div>

\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t        {{ form_row(form.prenom, {'attr' : {'class' : 'input-material'}}) }}
                  </div>

                  <div class=\"form-group\">
\t\t\t\t\t        {{ form_row(form.dateNaiss, {'attr' : {'class' : 'input-material'}}) }}
                  </div>

                  <div class=\"form-group terms-conditions\">
                  <input id=\"register-agree\" name=\"registerAgree\" type=\"checkbox\" required value=\"1\" data-msg=\"Your agreement is required\" class=\"checkbox-template\">
                  <label for=\"register-agree\">J'accepte la charte informatique du lycée</label>
                  </div>

                  <div class=\"form-group\">
                  <button id=\"register\" type=\"submit\" name=\"registerSubmit\" class=\"btn btn-primary\">Enregistrer</button>
                  </div>
                  
                  <small>Vous avez déjà un compte ? </small><a href=\"{{ path('app_login') }}\" class=\"signup\">Login</a>
\t\t\t\t        
                {{ form_end(form) }}\t\t   
          {% endblock %}
   ", "register/registration.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\register\\registration.html.twig");
    }
}
