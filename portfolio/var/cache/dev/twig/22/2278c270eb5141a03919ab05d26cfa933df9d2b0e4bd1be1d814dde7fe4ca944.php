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

/* rp/activiteAddEdit.html.twig */
class __TwigTemplate_478f05ed5d8fa13ebfb96d436f276b6bfeb43cd84f72c0d4af0d714558d2c8e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/activiteAddEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/activiteAddEdit.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/baseEtudiant.html.twig", "rp/activiteAddEdit.html.twig", 3);
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

        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantRps");
        echo "\">Réalisations professionnelles </a> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"alert alert-success\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
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
                            <li class=\"breadcrumb-item active\">Description</li>
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteList", ["idRp" => (isset($context["idRp"]) || array_key_exists("idRp", $context) ? $context["idRp"] : (function () { throw new RuntimeError('Variable "idRp" does not exist.', 28, $this->source); })())]), "html", null, true);
        echo "\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"index.html\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpCommentaireNotifierEnseignant", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">Commentaires</a></li>             
                            </ul>
                        </div>
                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>
                    <div class=\"card-body\">  
                        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "libcourt", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "besoin", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "localisation", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "source", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "cadre", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "niveauRP", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "dateDebut", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-6\">
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "dateFin", [], "any", false, false, false, 84), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "environnement", [], "any", false, false, false, 94), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-6\">
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "moyen", [], "any", false, false, false, 97), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_end');
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
        return "rp/activiteAddEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 109,  230 => 97,  224 => 94,  211 => 84,  205 => 81,  192 => 71,  186 => 68,  180 => 65,  174 => 62,  161 => 52,  148 => 42,  139 => 36,  130 => 30,  125 => 28,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  90 => 8,  80 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/rp/showEdit.html.twig #}

{% extends \"etudiant/baseEtudiant.html.twig\" %}

{% block titreContenu %}<a href=\"{{ path('etudiantRps')}}\">Réalisations professionnelles </a> {% endblock %}

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
                            <li class=\"breadcrumb-item active\">Description</li>
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('rpActiviteList', { 'idRp': idRp }) }}\">Activités</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"index.html\">Productions</a></li>  
                            <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpCommentaireNotifierEnseignant', { 'idRp': rp.id }) }}\">Commentaires</a></li>             
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
                                            {{ form_row(form.libcourt, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.besoin, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.localisation, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.source, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.cadre, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.niveauRP, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.dateDebut, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.dateFin, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.environnement, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.moyen, {'attr' : {'class' : 'form-control'}}) }} 
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

{% endblock %}", "rp/activiteAddEdit.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\rp\\activiteAddEdit.html.twig");
    }
}
