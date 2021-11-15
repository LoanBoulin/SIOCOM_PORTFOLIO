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

/* enseignant/rpParPromo.html.twig */
class __TwigTemplate_5360fa78f889c953d4d2577bf891e141cc499845e4ac3df17cb5529696e25c8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/rpParPromo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/rpParPromo.html.twig"));

        $this->parent = $this->loadTemplate("baseEnseignant.html.twig", "enseignant/rpParPromo.html.twig", 1);
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
        echo " 
   <!-- Dashboard Counts Section-->
          <section class=\"dashboard-counts no-padding-bottom\">
          
            <div class=\"container-fluid\">
              <div class=\"card-header d-flex align-items-center\">
                <h3 class=\"h4\"> Liste des promotions </h3>
              </div> 
              <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-violet\"><i class=\"icon-user\"></i></div>
                    <div class=\"title\"><span>SISR 2</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 25%; height: 4px;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-violet\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>25</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-red\"><i class=\"icon-padnote\"></i></div>
                    <div class=\"title\"><span>SLAM 2</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 70%; height: 4px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-red\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>70</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-green\"><i class=\"icon-bill\"></i></div>
                    <div class=\"title\"><span>SISR 1</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 40%; height: 4px;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-green\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>40</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-orange\"><i class=\"icon-check\"></i></div>
                    <div class=\"title\"><span>SLAM 1</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 50%; height: 4px;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-orange\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>50</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
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
                        <h3 class=\"h4\"><h3 class=\"h4\"> ";
        // line 79
        echo "  specialite et niveau et promo</h3>
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
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 95
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 96), "html", null, true);
            echo " </th>
                              <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prenom", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                              <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "rps", [], "any", false, false, false, 98), "count", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                             <td>";
            // line 99
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                         </tbody>
                        </table>
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
        return "enseignant/rpParPromo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 102,  200 => 99,  196 => 98,  192 => 97,  188 => 96,  185 => 95,  181 => 94,  164 => 79,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEnseignant.html.twig\" %}
{% block titreContenu %}Accueil {% endblock %}

{% block contenu%}
 
   <!-- Dashboard Counts Section-->
          <section class=\"dashboard-counts no-padding-bottom\">
          
            <div class=\"container-fluid\">
              <div class=\"card-header d-flex align-items-center\">
                <h3 class=\"h4\"> Liste des promotions </h3>
              </div> 
              <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-violet\"><i class=\"icon-user\"></i></div>
                    <div class=\"title\"><span>SISR 2</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 25%; height: 4px;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-violet\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>25</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-red\"><i class=\"icon-padnote\"></i></div>
                    <div class=\"title\"><span>SLAM 2</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 70%; height: 4px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-red\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>70</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-green\"><i class=\"icon-bill\"></i></div>
                    <div class=\"title\"><span>SISR 1</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 40%; height: 4px;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-green\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>40</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-orange\"><i class=\"icon-check\"></i></div>
                    <div class=\"title\"><span>SLAM 1</span>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 50%; height: 4px;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-orange\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>50</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
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
                        <h3 class=\"h4\"><h3 class=\"h4\"> {#{etudiants.last.specialite.id}#}  specialite et niveau et promo</h3>
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
                              <td>{{e.rps.count}}</td>
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

{% endblock %}", "enseignant/rpParPromo.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\enseignant\\rpParPromo.html.twig");
    }
}
