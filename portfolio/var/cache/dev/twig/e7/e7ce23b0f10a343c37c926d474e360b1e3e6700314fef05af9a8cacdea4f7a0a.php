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

/* admin/listPromoEtudiants.html.twig */
class __TwigTemplate_128375584043d27b21f5c2964672077006a5b452164c36e3b55ac2c9b703c573 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listPromoEtudiants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listPromoEtudiants.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listPromoEtudiants.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "</br>
    <div class=\"col-lg-10\">
        <div class=\"card\">

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "                    <div class=\"card-close\">
                      <div class=\"dropdown\">   
                          <button class=\"btn btn-primary\" type=\"submit\"  onclick=\"window.location.href='";
            // line 11
            echo "\">Nouvel ??</button>
                          </br>
                      </div>
                    </div>\t
                \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "annee", [], "any", false, false, false, 17), "html", null, true);
            echo " </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Nombre de rp</th>
                              <th>Date de naissance</th>
                              <th>Spécialité</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "etudiants", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 34
                echo "                            <tr>
                              <td><a class=\"text\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEditEtudiantAdmin", ["idEtudiant" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></td>
                              <td><a class=\"text\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEditEtudiantAdmin", ["idEtudiant" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prenom", [], "any", false, false, false, 36), "html", null, true);
                echo "</a> </td>
                              <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "rps", [], "any", false, false, false, 37), "count", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                              <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "datenaiss", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                echo "</td>
                              <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "specialite", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>                
                              <td>images action</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                         </tbody>
                        </table>
                      </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>      
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listPromoEtudiants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  146 => 43,  136 => 39,  132 => 38,  128 => 37,  122 => 36,  116 => 35,  113 => 34,  109 => 33,  90 => 17,  82 => 11,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block contenu%}
</br>
    <div class=\"col-lg-10\">
        <div class=\"card\">

            {% for p in promos %}
                    <div class=\"card-close\">
                      <div class=\"dropdown\">   
                          <button class=\"btn btn-primary\" type=\"submit\"  onclick=\"window.location.href='{#{path('adduserEnseignant')}#}\">Nouvel ??</button>
                          </br>
                      </div>
                    </div>\t
                \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> {{p.annee}} </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Nombre de rp</th>
                              <th>Date de naissance</th>
                              <th>Spécialité</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for e in p.etudiants %}
                            <tr>
                              <td><a class=\"text\" href=\"{{ path('showEditEtudiantAdmin', {'idEtudiant': e.id }) }}\">{{e.nom}}</a></td>
                              <td><a class=\"text\" href=\"{{ path('showEditEtudiantAdmin', {'idEtudiant': e.id }) }}\">{{e.prenom}}</a> </td>
                              <td>{{e.rps.count}}</td>
                              <td>{{e.datenaiss |date(\"d/m/Y\")}}</td>
                              <td>{{e.specialite.nom}}</td>                
                              <td>images action</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
            {% endfor %}
        </div>
    </div>      
{% endblock %}
   ", "admin/listPromoEtudiants.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\admin\\listPromoEtudiants.html.twig");
    }
}
