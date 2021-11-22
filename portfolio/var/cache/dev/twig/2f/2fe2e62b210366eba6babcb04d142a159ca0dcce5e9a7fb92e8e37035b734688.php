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

/* admin/etudiant/showEdit.html.twig */
class __TwigTemplate_add4a6009ef2ea27074395f029c8e9ecbc521a79c2e7b1ec60187997a1a02798 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titreContenu' => [$this, 'block_titreContenu'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/etudiant/showEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/etudiant/showEdit.html.twig"));

        // line 1
        $this->displayBlock('titreContenu', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('contenu', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        echo "gestion compte étudiant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "
</br>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <div class=\"alert alert-success\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
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
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "

                            <!-- 1ère ligne de formulaire mail-->
                            <div class=\"form-group row\">    
                                <div class=\"col-sm-11\">
                                    <div class=\"row\">
                                        <div class=\"col-md-11\">
                                             ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "etudiant", [], "any", false, false, false, 41), "promotion", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div> 
                                        <div class=\"col-md-4\">
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "etudiant", [], "any", false, false, false, 44), "niveau", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "etudiant", [], "any", false, false, false, 47), "specialite", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "etudiant", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "etudiant", [], "any", false, false, false, 61), "prenom", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "etudiant", [], "any", false, false, false, 64), "dateNaiss", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "etudiant", [], "any", false, false, false, 77), "rue", [], "any", false, false, false, 77), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "etudiant", [], "any", false, false, false, 80), "copos", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-5\">
                                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "etudiant", [], "any", false, false, false, 83), "ville", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "upload_file", [], "any", false, false, false, 95), 'row', ["attr" => ["class" => "form-control"]]);
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
        return "admin/etudiant/showEdit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  245 => 109,  228 => 95,  213 => 83,  207 => 80,  201 => 77,  185 => 64,  179 => 61,  173 => 58,  159 => 47,  153 => 44,  147 => 41,  133 => 30,  123 => 23,  109 => 11,  100 => 8,  97 => 7,  93 => 6,  89 => 4,  79 => 3,  60 => 1,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block titreContenu %}gestion compte étudiant{% endblock %}

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
                                        <div class=\"col-md-11\">
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

{% endblock %}", "admin/etudiant/showEdit.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\admin\\etudiant\\showEdit.html.twig");
    }
}
