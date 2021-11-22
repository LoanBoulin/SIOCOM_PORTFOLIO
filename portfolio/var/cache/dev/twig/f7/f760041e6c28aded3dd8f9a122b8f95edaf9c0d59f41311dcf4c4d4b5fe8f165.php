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

/* enseignant/stage/listeStagesSuivis.html.twig */
class __TwigTemplate_93a87ff2cfba0dfcfca50c6606fc401f59cc171396de09ad3667b9c058519bf0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/stage/listeStagesSuivis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/stage/listeStagesSuivis.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "enseignant/stage/listeStagesSuivis.html.twig", 1);
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

        echo "Liste des stages";
        
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
";
        // line 7
        echo twig_include($this->env, $context, "./promotion/listPromos.html.twig");
        echo "
</br>
     <div class=\"col-lg-12\">
                  <div class=\"card\">
                               \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des stages ";
        // line 13
        echo " ";
        echo " </h3>
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 29, $this->source); })()), "stages", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 30
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "etudiant", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            echo " </th>
                              <td><a class=\"text\" href=\"";
            // line 32
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stage"], "etudiant", [], "any", false, false, false, 32), "promotion", [], "any", false, false, false, 32), "annee", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomEntreprise", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                              <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "dateDebut", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nomTuteur", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                              <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "telTuteur", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return "enseignant/stage/listeStagesSuivis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 39,  147 => 36,  143 => 35,  139 => 34,  135 => 33,  130 => 32,  126 => 31,  123 => 30,  119 => 29,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}Liste des stages{% endblock %}


{% block contenu%}

{{ include('./promotion/listPromos.html.twig') }}
</br>
     <div class=\"col-lg-12\">
                  <div class=\"card\">
                               \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des stages {#{ etudiant.prenom}#} {#{ etudiant.nom}#} </h3>
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
                          {% for stage in enseignant.stages  %}
                            <tr>
                              <th scope=\"row\">{{stage.etudiant.nom}} </th>
                              <td><a class=\"text\" href=\"{#{ path('showRp', { 'idRp': rp.id }) }#}\">{{stage.etudiant.promotion.annee}}</a></td>
                              <td>{{stage.nomEntreprise}}</td>
                              <td>{{stage.dateDebut | date(\"d/m/Y\")}}</td>
                              <td>{{stage.nomTuteur}}</td>
                              <td>{{stage.telTuteur}}</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
{% endblock %}
", "enseignant/stage/listeStagesSuivis.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\enseignant\\stage\\listeStagesSuivis.html.twig");
    }
}
