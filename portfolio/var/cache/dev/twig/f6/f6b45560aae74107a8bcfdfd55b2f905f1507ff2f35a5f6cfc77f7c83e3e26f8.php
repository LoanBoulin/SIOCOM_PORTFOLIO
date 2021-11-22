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

/* etudiant/home.html.twig */
class __TwigTemplate_3b9903f919981210e2a4ae2367e931053b945581dfe974963d806fbca537c04a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/home.html.twig"));

        $this->parent = $this->loadTemplate("baseEtudiant.html.twig", "etudiant/home.html.twig", 1);
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
        echo "</br>
   <div class=\"col-lg-10\">
      <div class=\"card\">


        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes dernières réalisations professionnelles </h3>
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
                      <!-- on n'affiche que 7 rp -->
                      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "etudiant", [], "any", false, true, false, 29), "rps", [], "any", false, true, false, 29), $context["i"], [], "array", true, true, false, 29)) {
                // line 30
                echo "                          <tr>
                            <th scope=\"row\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "etudiant", [], "any", false, false, false, 31), "rps", [], "any", false, false, false, 31), $context["i"], [], "array", false, false, false, 31), "source", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
                echo " </th>
                            <td><a class=\"text\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd", ["idRp" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "etudiant", [], "any", false, false, false, 32), "rps", [], "any", false, false, false, 32), $context["i"], [], "array", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "etudiant", [], "any", false, false, false, 32), "rps", [], "any", false, false, false, 32), $context["i"], [], "array", false, false, false, 32), "libcourt", [], "any", false, false, false, 32), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "etudiant", [], "any", false, false, false, 33), "rps", [], "any", false, false, false, 33), $context["i"], [], "array", false, false, false, 33), "activites", [], "any", false, false, false, 33), "count", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "etudiant", [], "any", false, false, false, 34), "rps", [], "any", false, false, false, 34), $context["i"], [], "array", false, false, false, 34), "dateDebut", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "statut", [], "any", false, false, false, 35), "libelle", [], "any", false, false, false, 35), "html", null, true);
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "statut", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), 2))) {
                    echo " de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "enseignant", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "etudiant", [], "any", false, false, false, 35), "rps", [], "any", false, false, false, 35), $context["i"], [], "array", false, false, false, 35), "enseignant", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
                    echo " ";
                }
                echo "</td>
                            <td>images action</td>
                          </tr>
                        ";
            }
            // line 39
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


  <!-- tableau des stages --> 
  <div class=\"col-lg-10\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes stages </h3>
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
        echo "                    </tbody>
                </table>
            </div>
          </div>
    </div>
  </div>   




  <!-- Fil d'actualité --> 
  <div class=\"col-lg 10\">
                  <div class=\"card mb-0\">
                    <div class=\"card-header position-relative\">
                      <div class=\"card-close\">
                        <div class=\"dropdown\">
                          <button class=\"dropdown-toggle text-sm\" type=\"button\" id=\"closeCard1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-ellipsis-v\"></i></button>
                          <div class=\"dropdown-menu dropdown-menu-end shadow-sm\" aria-labelledby=\"closeCard1\"><a class=\"dropdown-item py-1 px-3 remove\" href=\"#\"> <i class=\"fas fa-times\"></i>Close</a><a class=\"dropdown-item py-1 px-3 edit\" href=\"#\"> <i class=\"fas fa-cog\"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class=\"h4 mb-0\">Fil d'actualité général</h3>
                    </div>
                    <div class=\"card-body p-0\">

                      ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "groupes", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 102
            echo "                          <tr>
                            <td>g.libelle</td>
                          </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                      <!-- Item-->
                      <div class=\"p-3\">
                        <div class=\"d-flex justify-content-between\">
                          <div class=\"d-flex\"><a class=\"flex-shrink-0\" href=\"#\"><img class=\"img-fluid rounded-circle\" src=\"GROUPE_fichiers/avatar-3.jpg\" alt=\"person\" width=\"50\"></a>
                            <div class=\"ms-3\">
                              <h5>Ashley Wood</h5>
                              <p class=\"mb-0 text-xs text-gray-600 lh-1\">Posted a new blog</p><small class=\"text-gray-600 fw-light\">Today 5:60 pm - 12.06.2014</small>
                            </div>
                          </div>
                          <div class=\"text-right\"><small class=\"text-gray-500\">5min ago</small></div>
                        </div>
                        <div class=\"mt-3 ms-5 ps-3\">
                          <div class=\"bg-light p-3 shadow-sm\"><small class=\"text-gray-600\">Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 
                            1500s. Over the years.</small></div>
                          <div class=\"text-end mt-1\"><a class=\"btn btn-sm btn-secondary py-1\" href=\"#\"><i class=\"fas fa-thumbs-up me-1\"></i>Like</a></div>
                        </div>
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
        return "etudiant/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 106,  221 => 102,  217 => 101,  191 => 77,  162 => 40,  156 => 39,  141 => 35,  137 => 34,  133 => 33,  127 => 32,  123 => 31,  120 => 30,  117 => 29,  113 => 28,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEtudiant.html.twig\" %}
{% block titreContenu %}Accueil {% endblock %}

{% block contenu%}
</br>
   <div class=\"col-lg-10\">
      <div class=\"card\">


        <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes dernières réalisations professionnelles </h3>
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
                      <!-- on n'affiche que 7 rp -->
                      {% for i in 0..7 %}
                        {% if app.user.etudiant.rps[i] is defined %}
                          <tr>
                            <th scope=\"row\">{{app.user.etudiant.rps[i].source.libelle}} </th>
                            <td><a class=\"text\" href=\"{{ path('rpShowEditAdd', { 'idRp': app.user.etudiant.rps[i].id }) }}\">{{app.user.etudiant.rps[i].libcourt}}</a></td>
                            <td>{{app.user.etudiant.rps[i].activites.count}}</td>
                            <td>{{app.user.etudiant.rps[i].dateDebut | date(\"d/m/Y\")}}</td>
                            <td>{{app.user.etudiant.rps[i].statut.libelle}} {% if app.user.etudiant.rps[i].statut.id == 2%} de {{app.user.etudiant.rps[i].enseignant.prenom}} {{app.user.etudiant.rps[i].enseignant.nom}} {% endif %}</td>
                            <td>images action</td>
                          </tr>
                        {% endif %}
                      {% endfor %}
                    </tbody>
                </table>
            </div>
          </div>
      </div>
    </div>   


  <!-- tableau des stages --> 
  <div class=\"col-lg-10\">
    <div class=\"card\">   
      <div class=\"card-header d-flex align-items-center\">
            <h3 class=\"h4\"><h3 class=\"h4\"> Mes stages </h3>
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
          
                      {#% for stage in app.user.etudiant.stages %\"}
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




  <!-- Fil d'actualité --> 
  <div class=\"col-lg 10\">
                  <div class=\"card mb-0\">
                    <div class=\"card-header position-relative\">
                      <div class=\"card-close\">
                        <div class=\"dropdown\">
                          <button class=\"dropdown-toggle text-sm\" type=\"button\" id=\"closeCard1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-ellipsis-v\"></i></button>
                          <div class=\"dropdown-menu dropdown-menu-end shadow-sm\" aria-labelledby=\"closeCard1\"><a class=\"dropdown-item py-1 px-3 remove\" href=\"#\"> <i class=\"fas fa-times\"></i>Close</a><a class=\"dropdown-item py-1 px-3 edit\" href=\"#\"> <i class=\"fas fa-cog\"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class=\"h4 mb-0\">Fil d'actualité général</h3>
                    </div>
                    <div class=\"card-body p-0\">

                      {% for g in user.groupes %}
                          <tr>
                            <td>g.libelle</td>
                          </tr>
                      {% endfor %}

                      <!-- Item-->
                      <div class=\"p-3\">
                        <div class=\"d-flex justify-content-between\">
                          <div class=\"d-flex\"><a class=\"flex-shrink-0\" href=\"#\"><img class=\"img-fluid rounded-circle\" src=\"GROUPE_fichiers/avatar-3.jpg\" alt=\"person\" width=\"50\"></a>
                            <div class=\"ms-3\">
                              <h5>Ashley Wood</h5>
                              <p class=\"mb-0 text-xs text-gray-600 lh-1\">Posted a new blog</p><small class=\"text-gray-600 fw-light\">Today 5:60 pm - 12.06.2014</small>
                            </div>
                          </div>
                          <div class=\"text-right\"><small class=\"text-gray-500\">5min ago</small></div>
                        </div>
                        <div class=\"mt-3 ms-5 ps-3\">
                          <div class=\"bg-light p-3 shadow-sm\"><small class=\"text-gray-600\">Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 
                            1500s. Over the years.</small></div>
                          <div class=\"text-end mt-1\"><a class=\"btn btn-sm btn-secondary py-1\" href=\"#\"><i class=\"fas fa-thumbs-up me-1\"></i>Like</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


{% endblock %}", "etudiant/home.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\etudiant\\home.html.twig");
    }
}
