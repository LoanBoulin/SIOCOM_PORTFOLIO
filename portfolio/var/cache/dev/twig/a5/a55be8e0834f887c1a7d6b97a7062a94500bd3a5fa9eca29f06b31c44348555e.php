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

/* etudiant/listeStagesByEtudiant.html.twig */
class __TwigTemplate_15fe4a72a98546050a369c1d6fa30e772c5774a6c0a623dd5fbc6d62546283bd extends Template
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
        return "baseEtudiant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/listeStagesByEtudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/listeStagesByEtudiant.html.twig"));

        $this->parent = $this->loadTemplate("baseEtudiant.html.twig", "etudiant/listeStagesByEtudiant.html.twig", 1);
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

        echo "<a href=\"";
        echo "\">Mes stages </a>";
        
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
        echo "</br>
     <div class=\"col-lg-10\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>\t

                    \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste  </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>nom entreprise</th>
                              <th>Sujet </th>
                              <th>nom tuteur </th>
                              <th>date début</th>
                              <th>date fin</th>
                                <th>Suivi</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 39, $this->source); })()), "stages", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 40
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomEntreprise", [], "any", false, false, false, 41), "html", null, true);
            echo " </th>
                              <td><a class=\"text\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stageAddEdit", ["idStage" => twig_get_attribute($this->env, $this->source, $context["stage"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "sujet", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomTuteur", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                              <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "dateDebut", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "dateFin", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 46
            if ((null === twig_get_attribute($this->env, $this->source, $context["stage"], "enseignant", [], "any", false, false, false, 46))) {
                echo " A définir ";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "enseignant", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "enseignant", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
            }
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/listeStagesByEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 49,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  146 => 42,  142 => 41,  139 => 40,  135 => 39,  105 => 11,  96 => 8,  93 => 7,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEtudiant.html.twig\" %}
{% block titreContenu %}<a href=\"{#{ path('etudiantRps')}#}\">Mes stages </a>{% endblock %}


{% block contenu%}
{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}
</br>
     <div class=\"col-lg-10\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>\t

                    \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste  </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>nom entreprise</th>
                              <th>Sujet </th>
                              <th>nom tuteur </th>
                              <th>date début</th>
                              <th>date fin</th>
                                <th>Suivi</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for stage in etudiant.stages  %}
                            <tr>
                              <th scope=\"row\">{{stage.nomEntreprise}} </th>
                              <td><a class=\"text\" href=\"{{ path('stageAddEdit', { 'idStage': stage.id }) }}\">{{stage.sujet}}</a></td>
                              <td>{{stage.nomTuteur}}</td>
                              <td>{{stage.dateDebut | date(\"d/m/Y\")}}</td>
                              <td>{{stage.dateFin| date(\"d/m/Y\")}}</td>
                              <td>{% if stage.enseignant is null%} A définir {% else %}{{stage.enseignant.prenom}} {{stage.enseignant.nom}}{% endif %}</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
{% endblock %}
", "etudiant/listeStagesByEtudiant.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\etudiant\\listeStagesByEtudiant.html.twig");
    }
}
