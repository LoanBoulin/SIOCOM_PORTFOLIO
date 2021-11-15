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

/* semaine_stage/show2.html.twig */
class __TwigTemplate_0fbcc677cc063541ca323fb1d0d1fed7cc0a2d2aae5bfc15d9ee7a4a4aa71d6e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "semaine_stage/show2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "semaine_stage/show2.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "semaine_stage/show2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        echo "Liste des promos";
        
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
        echo "</br>
<div class=\"col-lg-12\">
                  <div class=\"card\">
                               \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 15
        echo "\">Info</a></li>
                                ";
        // line 16
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 16, $this->source); })()), "duree", [], "any", false, false, false, 16), 0))) {
            echo "          
                                    ";
            // line 17
            $context["nbSem"] = twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 17, $this->source); })()), "duree", [], "any", false, false, false, 17);
            // line 18
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbSem"]) || array_key_exists("nbSem", $context) ? $context["nbSem"] : (function () { throw new RuntimeError('Variable "nbSem" does not exist.', 18, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "                                        <li class=\"breadcrumb-item\"><a href=\"";
                echo "\"> Semaine ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </a></li>                         
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                                ";
        }
        // line 22
        echo "                            </ul>
                        </div>




                    </div>
                  </div>
                </div>    


<!-- Updates Section                                                -->
          <section class=\"updates no-padding-top\">
            <div class=\"container-fluid\">
              <div class=\"row\">

\t";
        // line 38
        $context["idJour"] =  -1;
        echo "\t\t  
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["semaineStage"]) || array_key_exists("semaineStage", $context) ? $context["semaineStage"] : (function () { throw new RuntimeError('Variable "semaineStage" does not exist.', 39, $this->source); })()), "tachesemaines", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 40
            echo "
";
            // line 41
            if ((0 !== twig_compare((isset($context["idJour"]) || array_key_exists("idJour", $context) ? $context["idJour"] : (function () { throw new RuntimeError('Variable "idJour" does not exist.', 41, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tache"], "jour", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)))) {
                // line 42
                echo "                <!-- Liste des tâches-->
             
                <div class=\"col-lg-8\">
                  <div class=\"recent-updates card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard6\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard6\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class=\"card-header\">
                      <h3 class=\"h4\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tache"], "jour", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
                echo "</h3>
                    </div>
                      ";
            }
            // line 56
            echo "                    <div class=\"card-body no-padding\">
                
 

                      <!-- Item-->
                      <div class=\"item d-flex justify-content-between\">
                        <div class=\"info d-flex\">
                          <div class=\"icon\"><i class=\"icon-rss-feed\"></i></div>
                          <div class=\"title\">
                            <h5>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tache"], "domaineTache", [], "any", false, false, false, 65), "libelle", [], "any", false, false, false, 65), "html", null, true);
            echo "</h5>
                            <p>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                          </div>
                        </div>
                        <div class=\"date text-right\"><strong>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tache"], "jour", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
            echo "</strong><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "duree", [], "any", false, false, false, 69), "html", null, true);
            echo "</span></div>
                      </div>
                                          
           
                 
\t\t\t\t\t  
                    </div>
                  </div>
                </div>

 ";
            // line 79
            $context["idJour"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tache"], "jour", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79);
            // line 80
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    
        </div> <!-- class row-->
    </div>
</section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "semaine_stage/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 81,  214 => 80,  212 => 79,  197 => 69,  191 => 66,  187 => 65,  176 => 56,  170 => 53,  157 => 42,  155 => 41,  152 => 40,  148 => 39,  144 => 38,  126 => 22,  123 => 21,  113 => 19,  108 => 18,  106 => 17,  102 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}Liste des promos{% endblock %}


{% block contenu%}
</br>
<div class=\"col-lg-12\">
                  <div class=\"card\">
                               \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                                <li class=\"breadcrumb-item active\"><a href=\"{#{ path('rpShowEditAdd', {'idRp': idRp }) }#}\">Info</a></li>
                                {% if stage.duree > 0 %}          
                                    {% set nbSem = stage.duree %}
                                    {% for i in 1..nbSem %}
                                        <li class=\"breadcrumb-item\"><a href=\"{#{ path('rpActiviteList', { 'idRp': idRp }) }#}\"> Semaine {{ i }} </a></li>                         
                                    {% endfor %}
                                {% endif %}
                            </ul>
                        </div>




                    </div>
                  </div>
                </div>    


<!-- Updates Section                                                -->
          <section class=\"updates no-padding-top\">
            <div class=\"container-fluid\">
              <div class=\"row\">

\t{% set idJour = -1%}\t\t  
        {% for tache in semaineStage.tachesemaines%}

{% if idJour != tache.jour.id%}
                <!-- Liste des tâches-->
             
                <div class=\"col-lg-8\">
                  <div class=\"recent-updates card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard6\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard6\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class=\"card-header\">
                      <h3 class=\"h4\">{{tache.jour.nom}}</h3>
                    </div>
                      {%endif%}
                    <div class=\"card-body no-padding\">
                
 

                      <!-- Item-->
                      <div class=\"item d-flex justify-content-between\">
                        <div class=\"info d-flex\">
                          <div class=\"icon\"><i class=\"icon-rss-feed\"></i></div>
                          <div class=\"title\">
                            <h5>{{tache.domaineTache.libelle}}</h5>
                            <p>{{tache.description}}</p>
                          </div>
                        </div>
                        <div class=\"date text-right\"><strong>{{tache.jour.nom}}</strong><span>{{tache.duree}}</span></div>
                      </div>
                                          
           
                 
\t\t\t\t\t  
                    </div>
                  </div>
                </div>

 {% set idJour = tache.jour.id %}
 {% endfor %}
    
        </div> <!-- class row-->
    </div>
</section>



{% endblock %}
", "semaine_stage/show2.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\semaine_stage\\show2.html.twig");
    }
}
