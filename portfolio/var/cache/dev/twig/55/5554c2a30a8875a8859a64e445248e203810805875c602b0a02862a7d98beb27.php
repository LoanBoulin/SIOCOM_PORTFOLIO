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

/* register/emailConfirmation.html.twig */
class __TwigTemplate_1fba8478eea96f6552f3dd71fd01ec8cc48fb16c8e7597d405f03746fb7d9f15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/emailConfirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/emailConfirmation.html.twig"));

        // line 1
        echo "

<h1>Bienvenue sur le portfolio ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "etudiant", [], "any", false, false, false, 3), "prenom", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "etudiant", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        echo " !</h1>

<p>
   Tu t'es enregistré avec l'email suivant : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "email", [], "any", false, false, false, 6), "html", null, true);
        echo "
</p>
<p>
Pour confirmer ton inscription, il faut cliquer ici : 
    <a href = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("confirmMail", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "token", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">clic ici pour confirmer ce compte</a>
</p> 


<p>
    Ce mail est automatique, veuillez ne pas répondre .
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "register/emailConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  55 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<h1>Bienvenue sur le portfolio {{ user.etudiant.prenom }} {{ user.etudiant.nom }} !</h1>

<p>
   Tu t'es enregistré avec l'email suivant : {{ user.email }}
</p>
<p>
Pour confirmer ton inscription, il faut cliquer ici : 
    <a href = \"{{url('confirmMail',{\"token\":user.token})}}\">clic ici pour confirmer ce compte</a>
</p> 


<p>
    Ce mail est automatique, veuillez ne pas répondre .
</p>
", "register/emailConfirmation.html.twig", "D:\\wamp64\\www\\portfolio\\templates\\register\\emailConfirmation.html.twig");
    }
}
