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

/* headerRpEtudiant.html */
class __TwigTemplate_691686f9fe5d47b888360d566610ff4ddf067bcb1f451720c7f2758afce3ddd3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerRpEtudiant.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerRpEtudiant.html"));

        // line 1
        echo "<!-- Breadcrumb--> 
                 
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item active\">Description</li>
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteList", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 6, $this->source); })())]), "html", null, true);
        echo "\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpProductionList", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 7, $this->source); })())]), "html", null, true);
        echo "\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpCommentaireNotifierEnseignant", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 8, $this->source); })())]), "html", null, true);
        echo "\">Commentaires</a></li>             
                            </ul>
                        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "headerRpEtudiant.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Breadcrumb--> 
                 
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item active\">Description</li>
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('rpActiviteList', { 'idRp': idRp }) }}\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a  href=\"{{ path('rpProductionList', { 'idRp': idRp }) }}\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpCommentaireNotifierEnseignant', { 'idRp': idRp }) }}\">Commentaires</a></li>             
                            </ul>
                        </div>", "headerRpEtudiant.html", "C:\\wamp64\\www\\portfolio\\templates\\headerRpEtudiant.html");
    }
}
