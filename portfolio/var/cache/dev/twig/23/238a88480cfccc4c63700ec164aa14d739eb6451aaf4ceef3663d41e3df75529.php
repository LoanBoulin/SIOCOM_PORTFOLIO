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

/* promotion/listEtudiants.html.twig */
class __TwigTemplate_112011f81e0ac54e80f6cc87cdabbc4caa3c35bce2e99e78861a2caa1962d41c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/listEtudiants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/listEtudiants.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "promotion/listEtudiants.html.twig", 1);
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
        echo "\">Accueil </a> ";
        
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
";
        // line 7
        if ((isset($context["etudiants"]) || array_key_exists("etudiants", $context))) {
            // line 8
            echo "</br>
 <div class=\"container-fluid\">
    <div class=\"col-lg-12\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>\t

                    \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\">";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["etudiants"] ?? null), 0, [], "array", true, true, false, 21)) {
                echo " Promotion ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "promotion", [], "any", false, false, false, 21), "annee", [], "any", false, false, false, 21), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "specialite", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
                echo " Année ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "niveau", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
                echo " ";
            }
            echo "</h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\"> 

                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Rp</th>
                                <th>Stages</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 37
                echo "                            <tr>
                              <th scope=\"row\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 38), "html", null, true);
                echo " </th>
                              <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prenom", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                              <td> <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listRpParEtudiant", ["idEtudiant" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "rps", [], "any", false, false, false, 40), "count", [], "any", false, false, false, 40), "html", null, true);
                echo "</a></td>
                            
                             <td>";
                // line 42
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                         </tbody>
                        </table>
                     </div>
                    </div>
                  </div>
                </div>      
         </div>   

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "promotion/listEtudiants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  160 => 42,  153 => 40,  149 => 39,  145 => 38,  142 => 37,  138 => 36,  112 => 21,  97 => 8,  95 => 7,  90 => 5,  80 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}<a href=\"{{ path('enseignantHome')}}\">Accueil </a> {% endblock %}

{% block contenu%}
{{ include('./promotion/listPromos.html.twig') }}
</br>
{% if etudiants is defined %}
</br>
 <div class=\"container-fluid\">
    <div class=\"col-lg-12\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">
                        <button type=\"button\" id=\"closeCard3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                        <div aria-labelledby=\"closeCard3\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                      </div>
                    </div>\t

                    \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\">{% if etudiants[0] is defined %} Promotion {{etudiants[0].promotion.annee}}  {{etudiants[0].specialite.nom}} Année {{etudiants[0].niveau.id}} {% endif %}</h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\"> 

                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Rp</th>
                                <th>Stages</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for e in etudiants  %}
                            <tr>
                              <th scope=\"row\">{{e.nom}} </th>
                              <td>{{e.prenom}}</td>
                              <td> <a href=\"{{ path('listRpParEtudiant', {'idEtudiant': e.id  }) }}\">{{e.rps.count}}</a></td>
                            
                             <td>{#{e.stages.count}#}</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                     </div>
                    </div>
                  </div>
                </div>      
         </div>   

{% endif %}
{% endblock %}", "promotion/listEtudiants.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\promotion\\listEtudiants.html.twig");
    }
}
