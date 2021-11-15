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

/* etudiant/listRPs.html.twig */
class __TwigTemplate_5583ccaa5aea7d89256e1bf99401f579dec7923e883ab185d6ba4c109ba9a237 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/listRPs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/listRPs.html.twig"));

        $this->parent = $this->loadTemplate("baseEtudiant.html.twig", "etudiant/listRPs.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantRps");
        echo "\">Réalisations professionnelles </a>";
        
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesRps"]) || array_key_exists("lesRps", $context) ? $context["lesRps"] : (function () { throw new RuntimeError('Variable "lesRps" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rp"]) {
            // line 40
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "source", [], "any", false, false, false, 41), "libelle", [], "any", false, false, false, 41), "html", null, true);
            echo " </th>
                              <td><a class=\"text\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "libcourt", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "activites", [], "any", false, false, false, 43), "count", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                              <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rp"], "dateDebut", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</td>
                              <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "statut", [], "any", false, false, false, 45), "libelle", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "statut", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), 2))) {
                echo " de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "enseignant", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rp"], "enseignant", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
                echo " ";
            }
            echo "</td>
                              <td>";
            // line 46
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rp"], "archivage", [], "any", false, false, false, 46), 0))) {
                echo "<a class=\"text\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpArchiver", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">archiver ";
            } else {
                echo "<a class=\"text\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpDesarchiver", ["idRp" => twig_get_attribute($this->env, $this->source, $context["rp"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">désarchiver";
            }
            echo "</a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rp'], $context['_parent'], $context['loop']);
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
        return "etudiant/listRPs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 49,  173 => 46,  161 => 45,  157 => 44,  153 => 43,  147 => 42,  143 => 41,  140 => 40,  136 => 39,  106 => 11,  97 => 8,  94 => 7,  90 => 6,  80 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEtudiant.html.twig\" %}
{% block titreContenu %}<a href=\"{{ path('etudiantRps')}}\">Réalisations professionnelles </a>{% endblock %}


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
                              <th>Source</th>
                              <th>Libellé</th>
                              <th>Nombre d'activités</th>
                              <th>Date</th>
                              <th>Statut</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for rp in lesRps  %}
                            <tr>
                              <th scope=\"row\">{{rp.source.libelle}} </th>
                              <td><a class=\"text\" href=\"{{ path('rpShowEditAdd', { 'idRp': rp.id }) }}\">{{rp.libcourt}}</a></td>
                              <td>{{rp.activites.count}}</td>
                              <td>{{rp.dateDebut | date(\"d/m/Y\")}}</td>
                              <td>{{rp.statut.libelle}} {% if rp.statut.id == 2%} de {{rp.enseignant.prenom}} {{rp.enseignant.nom}} {% endif %}</td>
                              <td>{% if rp.archivage == 0 %}<a class=\"text\" href=\"{{ path('rpArchiver', { 'idRp': rp.id }) }}\">archiver {% else %}<a class=\"text\" href=\"{{ path('rpDesarchiver', { 'idRp': rp.id }) }}\">désarchiver{% endif %}</a></td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
{% endblock %}
", "etudiant/listRPs.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\etudiant\\listRPs.html.twig");
    }
}
