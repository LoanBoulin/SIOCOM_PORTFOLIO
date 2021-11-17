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

/* enseignant/home.html.twig */
class __TwigTemplate_c60ef51663f217dc631b3346142312f530f72c4d046036379d89dc51352430b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/home.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "enseignant/home.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignantHome");
        echo "\">Accueil </a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo twig_include($this->env, $context, "./promotion/listPromos.html.twig");
        echo "
</br>

   <div class=\"col-lg-12\">
      <div class=\"card\">
                    
        <div class=\"card-close\">
          <div class=\"dropdown\">
            <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
            <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
          </div>
        </div>\t 

        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"> Réalisations professionnelles à viser </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                      <tr>
                        <th>Etudiant</th>
                        <th>Source</th>
                        <th>Libellé</th>
                        <th>Nombre d'activités</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "enseignant", [], "any", false, false, false, 36), "rps", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["rp"]) {
            // line 37
            echo "                        ";
            // line 38
            echo "                          <tr>
                            <th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "etudiant", [], "any", false, false, false, 39), "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "etudiant", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo " </th>
                            <th scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "source", [], "any", false, false, false, 40), "libelle", [], "any", false, false, false, 40), "html", null, true);
            echo " </th>
                            <td><a class=\"text\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRp", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "libcourt", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "activites", [], "any", false, false, false, 42), "count", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "dateDebut", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "statut", [], "any", false, false, false, 44), "libelle", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>images action</td>
                          </tr>
                        ";
            // line 48
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


      <!!- tableau des stages--> 
  <div class=\"col-lg-12\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Stages suivis </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                      <tr>
                              <th>Etudiant</th>
                              <th>Année</th>
                              <th>Entreprise</th>
                              <th>Nom tuteur</th>
                              <th>Tel Tuteur</th>
                              <th>Mail Tuteur</th>
                            </tr>
                    </thead>
                    <tbody>
                      ";
        // line 77
        $context["enseignant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "enseignant", [], "any", false, false, false, 77);
        // line 78
        echo "                      ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 78, $this->source); })()), "stages", [], "any", false, false, false, 78), "count", [], "any", false, false, false, 78), 0))) {
            // line 79
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 79, $this->source); })()), "stages", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
                // line 80
                echo "                            <tr>
                              <th scope=\"row\">";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "etudiant", [], "any", false, false, false, 81), "prenom", [], "any", false, false, false, 81), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "etudiant", [], "any", false, false, false, 81), "nom", [], "any", false, false, false, 81), "html", null, true);
                echo " </th>
                              <td><a class=\"text\" href=\"";
                // line 82
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "etudiant", [], "any", false, false, false, 82), "niveau", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82), "html", null, true);
                echo "</a></td>
                              <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomEntreprise", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                              <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomTuteur", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                              <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "telTuteur", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                              <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "mailTuteur", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                      ";
        }
        // line 90
        echo "                    </tbody>
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
        return "enseignant/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 90,  244 => 89,  235 => 86,  231 => 85,  227 => 84,  223 => 83,  218 => 82,  212 => 81,  209 => 80,  204 => 79,  201 => 78,  199 => 77,  169 => 49,  163 => 48,  157 => 44,  153 => 43,  149 => 42,  143 => 41,  139 => 40,  133 => 39,  130 => 38,  128 => 37,  124 => 36,  90 => 5,  80 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}<a href=\"{{ path('enseignantHome')}}\">Accueil </a>{% endblock %}

{% block contenu%}
{{ include('./promotion/listPromos.html.twig') }}
</br>

   <div class=\"col-lg-12\">
      <div class=\"card\">
                    
        <div class=\"card-close\">
          <div class=\"dropdown\">
            <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
            <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
          </div>
        </div>\t 

        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"> Réalisations professionnelles à viser </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                      <tr>
                        <th>Etudiant</th>
                        <th>Source</th>
                        <th>Libellé</th>
                        <th>Nombre d'activités</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for rp in app.user.enseignant.rps%}
                        {#% if app.user.etudiant.rps[i] is defined %#}
                          <tr>
                            <th scope=\"row\">{{rp.etudiant.prenom}} {{rp.etudiant.nom}} </th>
                            <th scope=\"row\">{{rp.source.libelle}} </th>
                            <td><a class=\"text\" href=\"{{ path('showRp', { 'idRp': rp.id }) }}\">{{rp.libcourt}}</a></td>
                            <td>{{rp.activites.count}}</td>
                            <td>{{rp.dateDebut | date(\"d/m/Y\")}}</td>
                            <td>{{rp.statut.libelle}}</td>
                            <td>images action</td>
                          </tr>
                        {#% endif %#}
                      {% endfor %}
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


      <!!- tableau des stages--> 
  <div class=\"col-lg-12\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Stages suivis </h3>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">   
                <table class=\"table table-striped table-sm\">
                    <thead>
                      <tr>
                              <th>Etudiant</th>
                              <th>Année</th>
                              <th>Entreprise</th>
                              <th>Nom tuteur</th>
                              <th>Tel Tuteur</th>
                              <th>Mail Tuteur</th>
                            </tr>
                    </thead>
                    <tbody>
                      {% set enseignant = app.user.enseignant %}
                      {% if enseignant.stages.count > 0 %}
                        {% for stage in enseignant.stages  %}
                            <tr>
                              <th scope=\"row\">{{stage.etudiant.prenom}} {{stage.etudiant.nom}} </th>
                              <td><a class=\"text\" href=\"{#{ path('showRp', { 'idRp': rp.id }) }#}\">{{stage.etudiant.niveau.nom}}</a></td>
                              <td>{{stage.nomEntreprise}}</td>
                              <td>{{stage.nomTuteur }}</td>
                              <td>{{stage.telTuteur}}</td>
                              <td>{{stage.mailTuteur}}</td>
                            </tr>
                        {% endfor %}
                      {% endif %}
                    </tbody>
                </table>
            </div>
          </div>
    </div>
  </div>   

{% endblock %}", "enseignant/home.html.twig", "D:\\wamp64\\www\\portfolio\\templates\\enseignant\\home.html.twig");
    }
}
