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

/* admin/validerComptes.html.twig */
class __TwigTemplate_b28975d0bf4d281daced3350ee050dd47178bc32d9d0c2a9f3ddc8523f4449d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/validerComptes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/validerComptes.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/validerComptes.html.twig", 1);
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
        <div class=\"card\">         \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des comptes à valider </h3>
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
                              <th>crée le</th>
                              <th>Valider</th>
                              <th>Supprimer</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 26
            echo "                            <tr>
                              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                              <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 29), "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                              <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "etudiant", [], "any", false, false, false, 30), "datenaiss", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "createdAt", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo "</td>                
                              <td>images action</td>
                              <td>images supp</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return "admin/validerComptes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  95 => 26,  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block contenu%}
</br>
    <div class=\"col-lg-10\">
        <div class=\"card\">         \t\t
                    <div class=\"card-header d-flex align-items-center\">
                        <h3 class=\"h4\"><h3 class=\"h4\"> Liste des comptes à valider </h3>
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
                              <th>crée le</th>
                              <th>Valider</th>
                              <th>Supprimer</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for u in users %}
                            <tr>
                              <td>{{u.email}}</td>
                              <td>{{u.etudiant.nom}}</td>
                              <td>{{u.etudiant.prenom}}</td>
                              <td>{{u.etudiant.datenaiss |date(\"d/m/Y\")}}</td>
                              <td>{{u.createdAt |date(\"d/m/Y\")}}</td>                
                              <td>images action</td>
                              <td>images supp</td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>         
        </div>
    </div>      
{% endblock %}
   ", "admin/validerComptes.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\admin\\validerComptes.html.twig");
    }
}
