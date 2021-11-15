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

/* etudiant/showEdit.html.twig */
class __TwigTemplate_e6033c4d7a6013072d5e695f4df30c7800e0f75275ab2afc56e5afad0aea6b5f extends Template
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
        return $this->loadTemplate((isset($context["templateTwigParent"]) || array_key_exists("templateTwigParent", $context) ? $context["templateTwigParent"] : (function () { throw new RuntimeError('Variable "templateTwigParent" does not exist.', 3, $this->source); })()), "etudiant/showEdit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/showEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/showEdit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Mon compte ";
        
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
</br>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">
                      <h3 class=\"h4\">Mes informations</h3>
                    </div>
                    <div class=\"card-body\">  

                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "

                            <!-- 1ère ligne de formulaire mail-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">                                               
                                            <div class=\"col-md-5\">
                                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2ème ligne de formulaire classe-->
                            <div class=\"form-group row\">    
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "etudiant", [], "any", false, false, false, 45), "promotion", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div> 
                                        <div class=\"col-md-4\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "etudiant", [], "any", false, false, false, 48), "niveau", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "etudiant", [], "any", false, false, false, 51), "specialite", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3ème ligne de formulaire identité -->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "etudiant", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "etudiant", [], "any", false, false, false, 65), "prenom", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "etudiant", [], "any", false, false, false, 68), "dateNaiss", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"line\"> </div>

                            <!-- 4ème ligne de formulaire adresse -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "etudiant", [], "any", false, false, false, 81), "rue", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "etudiant", [], "any", false, false, false, 84), "copos", [], "any", false, false, false, 84), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-5\">
                                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "etudiant", [], "any", false, false, false, 87), "ville", [], "any", false, false, false, 87), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"line\"></div>

                            <!-- 5ème ligne de formulaire photo-->
                            <div class=\"form-group row\"> 
                                <div class=\"col-sm-5\">
                                    <!--input id=\"upload_file\" name=\"upload_file\" type=\"file\" class=\"form-control-file-->
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "upload_file", [], "any", false, false, false, 99), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                </div>
                            </div>
 
                            <div class=\"line\"></div>
\t\t\t\t\t\t
                        <!-- 6ème ligne de formulaire boutons-->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-4 offset-sm-3\">
                                <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>

                    ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
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
        return "etudiant/showEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 113,  226 => 99,  211 => 87,  205 => 84,  199 => 81,  183 => 68,  177 => 65,  171 => 62,  157 => 51,  151 => 48,  145 => 45,  131 => 34,  121 => 27,  107 => 15,  98 => 12,  95 => 11,  91 => 10,  87 => 8,  77 => 7,  58 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("
{#% extends \"etudiant/baseEtudiant.html.twig\" %#}
{% extends templateTwigParent %}

{% block titreContenu %}Mon compte {% endblock %}

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
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">
                      <h3 class=\"h4\">Mes informations</h3>
                    </div>
                    <div class=\"card-body\">  

                        {{ form_start(form)}}

                            <!-- 1ère ligne de formulaire mail-->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">                                               
                                            <div class=\"col-md-5\">
                                            {{ form_row(form.email, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2ème ligne de formulaire classe-->
                            <div class=\"form-group row\">    
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            {{ form_row(form.etudiant.promotion, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div> 
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.etudiant.niveau, {'attr' : {'class' : 'form-control'}}) }}
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.etudiant.specialite, {'attr' : {'class' : 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3ème ligne de formulaire identité -->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            {{ form_row(form.etudiant.nom, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.etudiant.prenom, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.etudiant.dateNaiss, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"line\"> </div>

                            <!-- 4ème ligne de formulaire adresse -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            {{ form_row(form.etudiant.rue, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.etudiant.copos, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-5\">
                                            {{ form_row(form.etudiant.ville, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"line\"></div>

                            <!-- 5ème ligne de formulaire photo-->
                            <div class=\"form-group row\"> 
                                <div class=\"col-sm-5\">
                                    <!--input id=\"upload_file\" name=\"upload_file\" type=\"file\" class=\"form-control-file-->
                                    {{ form_row(form.upload_file, {'attr' : {'class' : 'form-control'}}) }} 
                                </div>
                            </div>
 
                            <div class=\"line\"></div>
\t\t\t\t\t\t
                        <!-- 6ème ligne de formulaire boutons-->
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

{% endblock %}", "etudiant/showEdit.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\etudiant\\showEdit.html.twig");
    }
}
