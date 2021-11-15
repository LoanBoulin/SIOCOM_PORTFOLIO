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

/* rp/commentaire/addCommentaire.html.twig */
class __TwigTemplate_476b299d155fbaecb3ea220c4c125b5434493f251eace7cf0582927d3b858fd2 extends Template
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
        // line 1
        return "baseEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/commentaire/addCommentaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/commentaire/addCommentaire.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "rp/commentaire/addCommentaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "././titreRp.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "        ";
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
                      <h3 class=\"h4\"> Intitulé  : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 24, $this->source); })()), "libcourt", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>                     
                        </div>
                    </div>

                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">            
                        
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                              <li class=\"breadcrumb-item active\"><a  ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENSEIGNANT")) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRp", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" ";
        } else {
            echo "  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" ";
        }
        echo ">Description</a></li>
                              <li class=\"breadcrumb-item active\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpActiviteList", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Activités</a></li>
                              <li class=\"breadcrumb-item active\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpProductionList", ["idRp" => twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">Productions</a></li>                                
                              <li class=\"breadcrumb-item \">Commentaires</li>
                           </ul>                
                        </div>                                    
                       
                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>

                    <div class=\"card-body\"> 
                   
                          ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start');
        echo "
 
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-8\">
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "commentaire", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-sm-4\">
                                          <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>          
                        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

                         <div class=\"line\"></div>

                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Commentaires</th>
                              <th>date</th>
                              <th>Enseignant</th>                             
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["rp"]) || array_key_exists("rp", $context) ? $context["rp"] : (function () { throw new RuntimeError('Variable "rp" does not exist.', 74, $this->source); })()), "commentaires", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 75
            echo "                            <tr>
                              <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "commentaire", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                              <td >";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "dateCommentaire", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
            echo " </td>
                              <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "enseignant", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "enseignant", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>       
                            </tr>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                         </tbody>
                        </table>

                      </div>
                                    
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
        return "rp/commentaire/addCommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 81,  215 => 78,  211 => 77,  207 => 76,  204 => 75,  200 => 74,  183 => 60,  172 => 52,  163 => 46,  150 => 36,  146 => 35,  134 => 34,  121 => 24,  109 => 14,  100 => 11,  97 => 10,  92 => 9,  82 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}

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
                      <h3 class=\"h4\"> Intitulé  : {{rp.libcourt}}</h3>                     
                        </div>
                    </div>

                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">            
                        
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                              <li class=\"breadcrumb-item active\"><a  {% if is_granted('ROLE_ENSEIGNANT') %} href=\"{{ path('showRp', { 'idRp': rp.id  }) }}\" {% else %}  href=\"{{ path('rpShowEditAdd', { 'idRp': rp.id }) }}\" {% endif %}>Description</a></li>
                              <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpActiviteList', { 'idRp': rp.id }) }}\">Activités</a></li>
                              <li class=\"breadcrumb-item active\"><a href=\"{{ path('rpProductionList', { 'idRp': rp.id }) }}\">Productions</a></li>                                
                              <li class=\"breadcrumb-item \">Commentaires</li>
                           </ul>                
                        </div>                                    
                       
                    <!--h3 class=\"h4\">Ajouter ou modifier</h3-->                
                    </div>

                    <div class=\"card-body\"> 
                   
                          {{ form_start(form)}}
 
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-8\">
                                            {{ form_row(form.commentaire, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-sm-4\">
                                          <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>          
                        {{ form_end(form) }}

                         <div class=\"line\"></div>

                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Commentaires</th>
                              <th>date</th>
                              <th>Enseignant</th>                             
                            </tr>
                          </thead>
                          <tbody>
                          {% for com in rp.commentaires  %}
                            <tr>
                              <td>{{com.commentaire}}</td>
                              <td >{{com.dateCommentaire | date(\"d/m/Y\")}} </td>
                              <td>{{com.enseignant.prenom}} {{com.enseignant.nom}}</td>       
                            </tr>
                           {% endfor %}
                         </tbody>
                        </table>

                      </div>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

{% endblock %}", "rp/commentaire/addCommentaire.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\rp\\commentaire\\addCommentaire.html.twig");
    }
}
