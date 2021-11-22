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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 101, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 101, $this->source); })()), "dateTimePost", [], "any", false, false, false, 101) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 101, $this->source); })()), "dateTimePost", [], "any", false, false, false, 101)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 102
            echo "
                        <div class=\"p-3\">
                          <div class=\"d-flex justify-content-between\">
                           ";
            // line 105
            $context["photo"] = (("avatar/etudiant/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 105), "etudiant", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)) . ".png");
            // line 106
            echo "                            <div class=\"d-flex\">
                              <a class=\"flex-shrink-0 mr-2\" href=\"#\">
                                <img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 108, $this->source); })()))), "html", null, true);
            echo "\" alt=\"person\" width=\"50\" class=\"img-fluid rounded-circle\" onError=\"this.src='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("avatar/lambda.png")), "html", null, true);
            echo "';\">
                              </a>
                              <div class=\"ms-3\">
                                ";
            // line 111
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 111), "roles", [], "any", false, false, false, 111), [0 => "ROLE_ETUDIANT"]))) {
                // line 112
                echo "                                  <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 112), "etudiant", [], "any", false, false, false, 112), "prenom", [], "any", false, false, false, 112), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 112), "etudiant", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112), "html", null, true);
                echo " </h5>
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 113
$context["g"], "user", [], "any", false, false, false, 113), "roles", [], "any", false, false, false, 113), [0 => "ROLE_ENSEIGNANT"]))) {
                // line 114
                echo "                                  <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 114), "enseignant", [], "any", false, false, false, 114), "prenom", [], "any", false, false, false, 114), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 114), "enseignant", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114), "html", null, true);
                echo " </h5>
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 115
$context["g"], "user", [], "any", false, false, false, 115), "roles", [], "any", false, false, false, 115), [0 => "ROLE_ADMIN"]))) {
                // line 116
                echo "                                  <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "user", [], "any", false, false, false, 116), "email", [], "any", false, false, false, 116), "html", null, true);
                echo " (Administrateur) </h5>
                                ";
            }
            // line 118
            echo "                                <p class=\"mb-0 text-xs text-gray-600 lh-1\">a posté :</p>
                              </div>
                            </div>
                            <div class=\"text-right\"><small class=\"text-gray-500\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "dateTimePost", [], "any", false, false, false, 121), "format", [0 => "Y-m-d H:i:s"], "method", false, false, false, 121), "html", null, true);
            echo "</small></div>
                          </div>
                          <div class=\"mt-3 ms-5 ps-3\">
                            <div class=\"bg-light p-3 shadow-sm\"><p class=\"text-gray-600\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 124), "html", null, true);
            echo "</p></div>
                          </div>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "




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
        return array (  287 => 128,  277 => 124,  271 => 121,  266 => 118,  260 => 116,  258 => 115,  251 => 114,  249 => 113,  242 => 112,  240 => 111,  232 => 108,  228 => 106,  226 => 105,  221 => 102,  217 => 101,  191 => 77,  162 => 40,  156 => 39,  141 => 35,  137 => 34,  133 => 33,  127 => 32,  123 => 31,  120 => 30,  117 => 29,  113 => 28,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
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

                      {% for g in posts|sort((a, b) => a.dateTimePost <=> b.dateTimePost) %}

                        <div class=\"p-3\">
                          <div class=\"d-flex justify-content-between\">
                           {% set photo = 'avatar/etudiant/'~ g.user.etudiant.id ~'.png' %}
                            <div class=\"d-flex\">
                              <a class=\"flex-shrink-0 mr-2\" href=\"#\">
                                <img src=\"{{ asset(photo | trans )}}\" alt=\"person\" width=\"50\" class=\"img-fluid rounded-circle\" onError=\"this.src='{{ asset('avatar/lambda.png' | trans )}}';\">
                              </a>
                              <div class=\"ms-3\">
                                {% if g.user.roles == [\"ROLE_ETUDIANT\"] %}
                                  <h5>{{g.user.etudiant.prenom}} {{g.user.etudiant.nom}} </h5>
                                {% elseif g.user.roles == [\"ROLE_ENSEIGNANT\"] %}
                                  <h5>{{g.user.enseignant.prenom}} {{g.user.enseignant.nom}} </h5>
                                {% elseif g.user.roles == [\"ROLE_ADMIN\"] %}
                                  <h5>{{g.user.email}} (Administrateur) </h5>
                                {% endif %}
                                <p class=\"mb-0 text-xs text-gray-600 lh-1\">a posté :</p>
                              </div>
                            </div>
                            <div class=\"text-right\"><small class=\"text-gray-500\">{{g.dateTimePost.format('Y-m-d H:i:s')}}</small></div>
                          </div>
                          <div class=\"mt-3 ms-5 ps-3\">
                            <div class=\"bg-light p-3 shadow-sm\"><p class=\"text-gray-600\">{{g.description}}</p></div>
                          </div>
                        </div>
                      {% endfor %}





                    </div>
                  </div>
                </div>


{% endblock %}", "etudiant/home.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\etudiant\\home.html.twig");
    }
}
