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

/* promotion/listPromos.html.twig */
class __TwigTemplate_9a3c37c8679ce7ca3e9b9a1f641bcbbc4f562a27e1389b50337e3827e6b841bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/listPromos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/listPromos.html.twig"));

        // line 1
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
                    <div class=\"title\"> <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEtudiantsParPromo", ["idSpecialite" => 1, "idNiveau" => 2]), "html", null, true);
        echo "\"><span>SISR 2</span></a>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 50%; height: 4px;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-violet\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>58</strong></div>
                  </div>
                
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-red\"><i class=\"icon-padnote\"></i></div>
                    <div class=\"title\"><span> <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEtudiantsParPromo", ["idSpecialite" => 2, "idNiveau" => 2]), "html", null, true);
        echo "\">SLAM 2</a></span>
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
                    <div class=\"title\"><span> <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEtudiantsParPromo", ["idSpecialite" => 1, "idNiveau" => 1]), "html", null, true);
        echo "\">SISR 1</a></span>
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
                    <div class=\"title\"><span> <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEtudiantsParPromo", ["idSpecialite" => 2, "idNiveau" => 1]), "html", null, true);
        echo "\">SLAM 1</a></span>
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


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "promotion/listPromos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 52,  90 => 40,  75 => 28,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
                    <div class=\"title\"> <a href=\"{{ path('listEtudiantsParPromo', {'idSpecialite': 1 ,'idNiveau': 2 }) }}\"><span>SISR 2</span></a>
                      <div class=\"progress\">
                        <div role=\"progressbar\" style=\"width: 50%; height: 4px;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar bg-violet\"></div>
                      </div>
                    </div>
                    <div class=\"number\"><strong>58</strong></div>
                  </div>
                
                </div>
                <!-- Item -->
                <div class=\"col-xl-3 col-sm-6\">
                  <div class=\"item d-flex align-items-center\">
                    <div class=\"icon bg-red\"><i class=\"icon-padnote\"></i></div>
                    <div class=\"title\"><span> <a href=\"{{ path('listEtudiantsParPromo', {'idSpecialite': 2 ,'idNiveau': 2 }) }}\">SLAM 2</a></span>
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
                    <div class=\"title\"><span> <a href=\"{{ path('listEtudiantsParPromo', {'idSpecialite': 1 ,'idNiveau': 1 }) }}\">SISR 1</a></span>
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
                    <div class=\"title\"><span> <a href=\"{{ path('listEtudiantsParPromo', {'idSpecialite': 2 ,'idNiveau': 1 }) }}\">SLAM 1</a></span>
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


", "promotion/listPromos.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\promotion\\listPromos.html.twig");
    }
}
