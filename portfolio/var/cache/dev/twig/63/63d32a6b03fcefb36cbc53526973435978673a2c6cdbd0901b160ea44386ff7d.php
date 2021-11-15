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

/* enseignant/home2.html.twig */
class __TwigTemplate_ab55765c2af2a1a2c4ca1ab3fb07d3c6b25e1ee1dd6ee5db7906427924ff964b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/home2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/home2.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "enseignant/home2.html.twig", 1);
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

        echo "Accueil ";
        
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
                        <th>Entreprise</th>
                        <th>Réferent</th>
                        <th>Mission</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
          
                      ";
        // line 77
        echo "                          <tr>
                            <th scope=\"row\"></th>
                            <td><a class=\"text\" href=\"\"></a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                      ";
        // line 86
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
        return "enseignant/home2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 86,  196 => 77,  167 => 49,  161 => 48,  155 => 44,  151 => 43,  147 => 42,  141 => 41,  137 => 40,  131 => 39,  128 => 38,  126 => 37,  122 => 36,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}Accueil {% endblock %}

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
                        <th>Entreprise</th>
                        <th>Réferent</th>
                        <th>Mission</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
          
                      {#% for stage in app.user.etudiant.stages %\"#}
                          <tr>
                            <th scope=\"row\"></th>
                            <td><a class=\"text\" href=\"\"></a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                      {#% endfor %#}
                    </tbody>
                </table>
            </div>
          </div>
    </div>
  </div>   

{% endblock %}", "enseignant/home2.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\enseignant\\home2.html.twig");
    }
}
