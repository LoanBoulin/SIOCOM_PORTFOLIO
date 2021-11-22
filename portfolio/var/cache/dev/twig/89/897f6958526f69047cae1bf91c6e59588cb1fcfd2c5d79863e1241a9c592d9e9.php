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

/* admin/listComptesNonActifs.html.twig */
class __TwigTemplate_2a8012411b96eab3c26790d128f4a076d21a471d246b764b75998b0e385af75a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listComptesNonActifs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listComptesNonActifs.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listComptesNonActifs.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "            <div class=\"alert alert-success\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</br>
    <div class=\"col-lg-10\">
        <div class=\"card\">         \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des comptes à valider ou supprimer</h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>mail</th>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Date de naissance</th>
                              <th>Créé le</th>
                              <th>Action</th>
                              <th>Supprimer</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 31
            echo "                            <tr>
                              ";
            // line 32
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 32), null))) {
                // line 33
                echo "                              <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                              <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                              <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                              <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 36), "datenaiss", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
                echo "</td>
                              <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "createdAt", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                echo "</td>                
                              <td>";
                // line 38
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["u"], "token", [], "any", false, false, false, 38), null))) {
                    echo " <a class=\"text\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validerCompte", ["email" => twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\">valider";
                } else {
                    echo " En attente ";
                }
                echo "</a></td>
                              <td><a class=\"text\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerCompte", ["email" => twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">supprimer</a></td>
                              ";
            }
            // line 41
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "admin/listComptesNonActifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  152 => 41,  147 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  116 => 33,  114 => 32,  111 => 31,  107 => 30,  84 => 9,  75 => 6,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block contenu%}
{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}
</br>
    <div class=\"col-lg-10\">
        <div class=\"card\">         \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des comptes à valider ou supprimer</h3>
                    </div>
                    <div class=\"card-body\">
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\">
                          <thead>
                            <tr>
                              <th>mail</th>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Date de naissance</th>
                              <th>Créé le</th>
                              <th>Action</th>
                              <th>Supprimer</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for u in users %}
                            <tr>
                              {% if u.etudiant != null %}
                              <td>{{u.email}}</td>
                              <td>{{u.etudiant.nom}}</td>
                              <td>{{u.etudiant.prenom}}</td>
                              <td>{{u.etudiant.datenaiss |date(\"d/m/Y\")}}</td>
                              <td>{{u.createdAt |date(\"d/m/Y\")}}</td>                
                              <td>{% if u.token == null %} <a class=\"text\" href=\"{{ path('validerCompte', {'email': u.email }) }}\">valider{% else %} En attente {% endif %}</a></td>
                              <td><a class=\"text\" href=\"{{ path('supprimerCompte', {'email': u.email }) }}\">supprimer</a></td>
                              {% endif %}
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>         
        </div>
    </div>      
{% endblock %}
   ", "admin/listComptesNonActifs.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\admin\\listComptesNonActifs.html.twig");
    }
}
