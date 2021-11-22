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

/* admin/listEnseignants.html.twig */
class __TwigTemplate_12a8c20ef20c442bc8825ef41c75e7c67a93255a51801cf37bcfab1f8811b3b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listEnseignants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listEnseignants.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listEnseignants.html.twig", 1);
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
                    <div class=\"card-close\">
                      <div class=\"dropdown\">   
                          <button class=\"btn btn-primary\" type=\"submit\"  onclick=\"window.location.href='";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adduserEnseignant");
        echo "'\">Nouvel enseignant</button>
                          </br>
                      </div>
                    </div>\t
                \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des enseignants  </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Email</th>
                              <th>Niveau</th>
                              <th>Matière</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["ue"]);
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 32
            echo "                            <tr>
                              <td><a class=\"text\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEditEnseignantAdmin", ["idUser" => twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ue"], "enseignant", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></td>
                              <td><a class=\"text\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEditEnseignantAdmin", ["idUser" => twig_get_attribute($this->env, $this->source, $context["ue"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ue"], "enseignant", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</a> </td>
                              <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                              <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ue"], "enseignant", [], "any", false, false, false, 36), "niveau", [], "any", false, false, false, 36), "nomlong", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                              <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ue"], "enseignant", [], "any", false, false, false, 37), "matiere", [], "any", false, false, false, 37), "libelle", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>                
                              <td>images action</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "admin/listEnseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  127 => 37,  123 => 36,  119 => 35,  113 => 34,  107 => 33,  104 => 32,  100 => 31,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block contenu%}
</br>
     <div class=\"col-lg-10\">
                  <div class=\"card\">
                    <div class=\"card-close\">
                      <div class=\"dropdown\">   
                          <button class=\"btn btn-primary\" type=\"submit\"  onclick=\"window.location.href='{{path('adduserEnseignant')}}'\">Nouvel enseignant</button>
                          </br>
                      </div>
                    </div>\t
                \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des enseignants  </h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Email</th>
                              <th>Niveau</th>
                              <th>Matière</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for ue in ue  %}
                            <tr>
                              <td><a class=\"text\" href=\"{{ path('showEditEnseignantAdmin', {'idUser': ue.id }) }}\">{{ue.enseignant.nom}}</a></td>
                              <td><a class=\"text\" href=\"{{ path('showEditEnseignantAdmin', {'idUser': ue.id }) }}\">{{ue.enseignant.prenom}}</a> </td>
                              <td>{{ue.email}}</td>
                              <td>{{ue.enseignant.niveau.nomlong}}</td>
                              <td>{{ue.enseignant.matiere.libelle}}</td>                
                              <td>images action</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
{% endblock %}
   ", "admin/listEnseignants.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\admin\\listEnseignants.html.twig");
    }
}
