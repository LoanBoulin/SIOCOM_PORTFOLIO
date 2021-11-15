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

/* enseignant/registerEnseignant.html.twig */
class __TwigTemplate_4241e5d61f5c18b8c1e4284685c03dbf39dc02d596ec9397b506bb54b9af250a extends Template
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
        // line 2
        return $this->loadTemplate((isset($context["templateTwigParent"]) || array_key_exists("templateTwigParent", $context) ? $context["templateTwigParent"] : (function () { throw new RuntimeError('Variable "templateTwigParent" does not exist.', 2, $this->source); })()), "enseignant/registerEnseignant.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/registerEnseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/registerEnseignant.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        echo "Gestion des comptes ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
</br>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "            <div class=\"alert alert-success\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
                <div class=\"card\">

                    <div class=\"card-header d-flex align-items-center\">
                      <h3 class=\"h4\">Compte enseignant</h3>
                    </div>

                    <div class=\"card-body\">  

                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "

                            <!-- 1ère ligne de formulaire mail-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>                                                                       
                                    </div>
                                </div>
                            </div>

\t\t                    <!-- ligne nom prénom -->
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "enseignant", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                            </div>
                                            <div class=\"col-md-6\">
                                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "enseignant", [], "any", false, false, false, 48), "prenom", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                            </div>              
                                        </div>
                                    </div>
                                </div>

                            <!-- ligne niveau et matière -->
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "enseignant", [], "any", false, false, false, 59), "niveau", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                            </div>
                                            <div class=\"col-md-6\">
                                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "enseignant", [], "any", false, false, false, 62), "matiere", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--  ligne de formulaire photo-->
                                <div class=\"form-group row\"> 
                                    <div class=\"col-sm-8\">
                                        <!--input id=\"upload_file\" name=\"upload_file\" type=\"file\" class=\"form-control-file-->
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "upload_file", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                    </div>
                                </div>
    
                                <div class=\"line\"></div>
\t\t\t\t\t\t
                            <!-- ligne de formulaire boutons-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-4 offset-sm-3\">
                                    <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                             </div>

                        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
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
        return "enseignant/registerEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 86,  186 => 72,  173 => 62,  167 => 59,  153 => 48,  147 => 45,  133 => 34,  123 => 27,  107 => 13,  98 => 10,  95 => 9,  91 => 8,  87 => 6,  77 => 5,  58 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends templateTwigParent %}
{% block titreContenu %}Gestion des comptes {% endblock %}

{% block contenu%}

</br>
{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}

 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
                <div class=\"card\">

                    <div class=\"card-header d-flex align-items-center\">
                      <h3 class=\"h4\">Compte enseignant</h3>
                    </div>

                    <div class=\"card-body\">  

                        {{ form_start(form)}}

                            <!-- 1ère ligne de formulaire mail-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.email, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>                                                                       
                                    </div>
                                </div>
                            </div>

\t\t                    <!-- ligne nom prénom -->
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                {{ form_row(form.enseignant.nom, {'attr' : {'class' : 'form-control'}}) }} 
                                            </div>
                                            <div class=\"col-md-6\">
                                                {{ form_row(form.enseignant.prenom, {'attr' : {'class' : 'form-control'}}) }} 
                                            </div>              
                                        </div>
                                    </div>
                                </div>

                            <!-- ligne niveau et matière -->
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                {{ form_row(form.enseignant.niveau, {'attr' : {'class' : 'form-control'}}) }} 
                                            </div>
                                            <div class=\"col-md-6\">
                                                {{ form_row(form.enseignant.matiere, {'attr' : {'class' : 'form-control'}}) }} 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--  ligne de formulaire photo-->
                                <div class=\"form-group row\"> 
                                    <div class=\"col-sm-8\">
                                        <!--input id=\"upload_file\" name=\"upload_file\" type=\"file\" class=\"form-control-file-->
                                        {{ form_row(form.upload_file, {'attr' : {'class' : 'form-control'}}) }} 
                                    </div>
                                </div>
    
                                <div class=\"line\"></div>
\t\t\t\t\t\t
                            <!-- ligne de formulaire boutons-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-4 offset-sm-3\">
                                    <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                             </div>

                        {{ form_end(form) }}
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

{% endblock %}



", "enseignant/registerEnseignant.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\enseignant\\registerEnseignant.html.twig");
    }
}
