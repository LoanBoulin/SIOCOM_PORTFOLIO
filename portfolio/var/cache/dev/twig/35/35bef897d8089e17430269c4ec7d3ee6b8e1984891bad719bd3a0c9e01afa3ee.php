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

/* rp/activite/addEdit.html.twig */
class __TwigTemplate_ec0851a715a24c96d0244152cd538f6ef8a0bd133bedac4776cf922413f7bf80 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titreContenu' => [$this, 'block_titreContenu'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "etudiant/baseEtudiant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/activite/addEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/activite/addEdit.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/baseEtudiant.html.twig", "rp/activite/addEdit.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "././titreRp.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "            <div class=\"alert alert-success\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</br>

 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">

                    <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "\">Description</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteList", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpProductionList", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo "\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpCommentaireNotifierEnseignant", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 32, $this->source); })())]), "html", null, true);
        echo "\">Commentaires</a></li>             
                            </ul>
                        </div>
                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>
                    <div class=\"card-body\">  
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "activite", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "commentaire", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <!--  ligne de  boutons-->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-4 offset-sm-4\">
                                <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rp/activite/addEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 67,  169 => 54,  156 => 44,  147 => 38,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  111 => 16,  102 => 13,  99 => 12,  95 => 11,  92 => 10,  82 => 9,  69 => 6,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/rp/showEdit.html.twig #}

{% extends \"etudiant/baseEtudiant.html.twig\" %}

{% block titreContenu %}
    {{ include('././titreRp.html.twig') }}
{% endblock %}

{% block contenu%}

{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}
</br>

 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">

                    <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpShowEditAdd', {'idRp': idRp }) }}\">Description</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('rpActiviteList', { 'idRp': idRp }) }}\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpProductionList', { 'idRp': idRp }) }}\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpCommentaireNotifierEnseignant', { 'idRp': idRp }) }}\">Commentaires</a></li>             
                            </ul>
                        </div>
                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>
                    <div class=\"card-body\">  
                        {{ form_start(form)}}

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.activite, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.commentaire, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <!--  ligne de  boutons-->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-4 offset-sm-4\">
                                <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                        {{ form_end(form) }}
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

{% endblock %}", "rp/activite/addEdit.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\rp\\activite\\addEdit.html.twig");
    }
}
