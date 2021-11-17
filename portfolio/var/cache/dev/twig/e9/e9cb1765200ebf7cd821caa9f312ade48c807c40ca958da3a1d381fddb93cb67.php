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

/* baseEtudiant.html.twig */
class __TwigTemplate_7a06c6515cfdb92c361cca276a51588ea06d294878ae675f1414f6200bb199dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'notifications' => [$this, 'block_notifications'],
            'profil' => [$this, 'block_profil'],
            'navBar' => [$this, 'block_navBar'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEtudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEtudiant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "baseEtudiant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notifications"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notifications"));

        // line 4
        echo "  <!-- Notifications-->
                <li class=\"nav-item dropdown\"> <a id=\"notifications\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link\"><i class=\"fa fa-bell-o\"></i><span class=\"badge bg-red badge-corner\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "etudiant", [], "any", false, false, false, 5), "rps", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5), "html", null, true);
        echo "</span></a>
                  <ul aria-labelledby=\"notifications\" class=\"dropdown-menu\">
                    <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> 
                        <div class=\"notification\">
                          <div class=\"notification-content\"><i class=\"fa fa-envelope bg-green\"></i>Vous avez ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "etudiant", [], "any", false, false, false, 9), "rps", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9), "html", null, true);
        echo " rp</div>
                          <div class=\"notification-time\"><small>";
        // line 10
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "etudiant", [], "any", false, false, false, 10), "rps", [], "any", false, false, false, 10), "count", [], "any", false, false, false, 10), 0))) {
            echo "Dernière créée le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "etudiant", [], "any", false, false, false, 10), "rps", [], "any", false, false, false, 10), "last", [], "any", false, false, false, 10), "dateModif", [], "any", false, false, false, 10), "d/m/Y"), "html", null, true);
            echo "  ";
        }
        echo "</small></div>
                        </div></a></li>

                             <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> 
                        <div class=\"notification\">
                          <div class=\"notification-content\"><i class=\"fa fa-upload bg-orange\"></i>Elles couvrent ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "etudiant", [], "any", false, false, false, 15), "getNbActivites", [], "any", false, false, false, 15), "html", null, true);
        echo " activités sur 18 </div>
                          <!--div class=\"notification-time\"><small>4 minutes ago</small></div-->
                        </div></a></li>
            
                    <li><a rel=\"nofollow\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantRps");
        echo "\" class=\"dropdown-item all-notifications text-center\"> <strong>voir toutes les rp                                            </strong></a></li>
                  </ul>
                </li>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_profil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        // line 25
        echo "    <li class=\"nav-item dropdown\"><a id=\"profile\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><span class=\"d-none d-sm-inline-block\">Mon compte</span></a>
      <ul aria-labelledby=\"profil\" class=\"dropdown-menu\">
        <li><a rel=\"nofollow\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEditEtudiant");
        echo "\" class=\"dropdown-item\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/monCompte.png"), "html", null, true);
        echo "\" alt=\"Mon compte\" class=\"mr-2\">Mes informations</a></li>
        <li><a rel=\"nofollow\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\"  class=\"dropdown-item\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/changePasswd.png"), "html", null, true);
        echo "\" alt=\"changePasswd\" class=\"mr-2\">Changer mot de passe</a></li>
        <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("images/contact.png")), "html", null, true);
        echo "\" alt=\"Contact\" class=\"mr-2\">Contact Admin</a></li>
      </ul>
    </li>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        echo " ";
        // line 35
        echo "
      <div class=\"page-content d-flex align-items-stretch\"> 
        <!-- Side Navbar -->
        <nav class=\"side-navbar\">

          <!-- Sidebar Header-->
          <div class=\"sidebar-header d-flex align-items-center\">
            
            <div class=\"avatar\">
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantHome");
        echo "\">
              ";
        // line 45
        $context["photo"] = (("avatar/etudiant/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "etudiant", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)) . ".png");
        // line 46
        echo "              <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 46, $this->source); })()))), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\" onError=\"this.src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("avatar/lambda.png")), "html", null, true);
        echo "\";\">
            </a>
            </div>
           <div class=\"title\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantHome");
        echo "\">
              <h1 class=\"h4\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "etudiant", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "etudiant", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
        echo "</h1>
              <p>Etudiant</p></a>
            </div>
            
          </div>

          <!-- Sidebar Navidation Menus-->
          <span class=\"heading\">Mon activité</span>
          
          <ul class=\"list-unstyled\">
            <li><a href=\"#realisation\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-bar-chart\"></i>Réalisations Pro. </a>
              <ul id=\"realisation\" class=\"collapse list-unstyled \">
                <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantRps");
        echo "\">Réalisations en cours</a></li>
                <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantRpsArchivees");
        echo "\">Réalisations archivées</a></li>
                <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rpShowEditAdd");
        echo "\">Nouvelle réalisation</a></li>
              </ul>
            </li>
            
            <li><a href=\"#stages\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-grid\"></i>Stages </a>
              <ul id=\"stages\" class=\"collapse list-unstyled \">
                <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantStages");
        echo "\">Mes stages</a></li>
                <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stageAddEdit");
        echo "\">Nouveau stage</a></li>
                <li><a href=\"#\">Carnet de bord</a></li>
              </ul>
            </li>    

            <li><a href=\"#groupes\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-users\"></i>Groupes </a>
              <ul id=\"groupes\" class=\"collapse list-unstyled \">
                <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantStages");
        echo "\">Mes groupes</a></li>
              </ul>
            </li>   

            <li><a href=\"#projets\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-tasks\"></i>Projets </a>
              <ul id=\"projets\" class=\"collapse list-unstyled \">
                <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantStages");
        echo "\">Mes projets</a></li>
              </ul>
            </li>   

          </ul>


        <!-- Sidebar Navidation Menus--><span class=\"heading\">Paramètres</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"index.html\"> <i class=\"icon-home\"></i> Bilan</a></li>
            <li><a href=\"tables.html\"> <i class=\"icon-grid\"></i>Tableau de synthèse </a></li>
            <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>Sauvegarde </a></li>

      </ul>







   
        </nav>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        echo "  


test contenu etudiant
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 110,  256 => 84,  247 => 78,  237 => 71,  233 => 70,  224 => 64,  220 => 63,  216 => 62,  199 => 50,  195 => 49,  186 => 46,  184 => 45,  180 => 44,  169 => 35,  158 => 34,  144 => 29,  138 => 28,  132 => 27,  128 => 25,  118 => 24,  104 => 19,  97 => 15,  85 => 10,  81 => 9,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

  {% block notifications %}
  <!-- Notifications-->
                <li class=\"nav-item dropdown\"> <a id=\"notifications\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link\"><i class=\"fa fa-bell-o\"></i><span class=\"badge bg-red badge-corner\">{{app.user.etudiant.rps.count}}</span></a>
                  <ul aria-labelledby=\"notifications\" class=\"dropdown-menu\">
                    <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> 
                        <div class=\"notification\">
                          <div class=\"notification-content\"><i class=\"fa fa-envelope bg-green\"></i>Vous avez {{app.user.etudiant.rps.count}} rp</div>
                          <div class=\"notification-time\"><small>{% if (app.user.etudiant.rps.count > 0) %}Dernière créée le {{app.user.etudiant.rps.last.dateModif | date(\"d/m/Y\")}}  {% endif %}</small></div>
                        </div></a></li>

                             <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> 
                        <div class=\"notification\">
                          <div class=\"notification-content\"><i class=\"fa fa-upload bg-orange\"></i>Elles couvrent {{app.user.etudiant.getNbActivites}} activités sur 18 </div>
                          <!--div class=\"notification-time\"><small>4 minutes ago</small></div-->
                        </div></a></li>
            
                    <li><a rel=\"nofollow\" href=\"{{ path('etudiantRps')}}\" class=\"dropdown-item all-notifications text-center\"> <strong>voir toutes les rp                                            </strong></a></li>
                  </ul>
                </li>
  {% endblock %}

 {% block profil %}
    <li class=\"nav-item dropdown\"><a id=\"profile\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><span class=\"d-none d-sm-inline-block\">Mon compte</span></a>
      <ul aria-labelledby=\"profil\" class=\"dropdown-menu\">
        <li><a rel=\"nofollow\" href=\"{{ path('showEditEtudiant')}}\" class=\"dropdown-item\"> <img src=\"{{ asset('images/monCompte.png') }}\" alt=\"Mon compte\" class=\"mr-2\">Mes informations</a></li>
        <li><a rel=\"nofollow\" href=\"{{ path('app_forgot_password_request') }}\"  class=\"dropdown-item\"> <img src=\"{{ asset('images/changePasswd.png') }}\" alt=\"changePasswd\" class=\"mr-2\">Changer mot de passe</a></li>
        <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"{{ asset('images/contact.png' | trans)}}\" alt=\"Contact\" class=\"mr-2\">Contact Admin</a></li>
      </ul>
    </li>
 {% endblock %}

{% block navBar %} {# bloc NavBar étudiant#}

      <div class=\"page-content d-flex align-items-stretch\"> 
        <!-- Side Navbar -->
        <nav class=\"side-navbar\">

          <!-- Sidebar Header-->
          <div class=\"sidebar-header d-flex align-items-center\">
            
            <div class=\"avatar\">
            <a href=\"{{ path('etudiantHome')}}\">
              {% set photo = 'avatar/etudiant/'~ app.user.etudiant.id ~'.png' %}
              <img src=\"{{ asset(photo | trans )}}\" alt=\"...\" class=\"img-fluid rounded-circle\" onError=\"this.src=\"{{ asset('avatar/lambda.png' | trans )}}\";\">
            </a>
            </div>
           <div class=\"title\"><a href=\"{{ path('etudiantHome')}}\">
              <h1 class=\"h4\">{{app.user.etudiant.prenom}} {{app.user.etudiant.nom}}</h1>
              <p>Etudiant</p></a>
            </div>
            
          </div>

          <!-- Sidebar Navidation Menus-->
          <span class=\"heading\">Mon activité</span>
          
          <ul class=\"list-unstyled\">
            <li><a href=\"#realisation\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-bar-chart\"></i>Réalisations Pro. </a>
              <ul id=\"realisation\" class=\"collapse list-unstyled \">
                <li><a href=\"{{ path('etudiantRps')}}\">Réalisations en cours</a></li>
                <li><a href=\"{{ path('etudiantRpsArchivees')}}\">Réalisations archivées</a></li>
                <li><a href=\"{{ path('rpShowEditAdd')}}\">Nouvelle réalisation</a></li>
              </ul>
            </li>
            
            <li><a href=\"#stages\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-grid\"></i>Stages </a>
              <ul id=\"stages\" class=\"collapse list-unstyled \">
                <li><a href=\"{{ path('etudiantStages')}}\">Mes stages</a></li>
                <li><a href=\"{{ path('stageAddEdit')}}\">Nouveau stage</a></li>
                <li><a href=\"#\">Carnet de bord</a></li>
              </ul>
            </li>    

            <li><a href=\"#groupes\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-users\"></i>Groupes </a>
              <ul id=\"groupes\" class=\"collapse list-unstyled \">
                <li><a href=\"{{ path('etudiantStages')}}\">Mes groupes</a></li>
              </ul>
            </li>   

            <li><a href=\"#projets\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-tasks\"></i>Projets </a>
              <ul id=\"projets\" class=\"collapse list-unstyled \">
                <li><a href=\"{{ path('etudiantStages')}}\">Mes projets</a></li>
              </ul>
            </li>   

          </ul>


        <!-- Sidebar Navidation Menus--><span class=\"heading\">Paramètres</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"index.html\"> <i class=\"icon-home\"></i> Bilan</a></li>
            <li><a href=\"tables.html\"> <i class=\"icon-grid\"></i>Tableau de synthèse </a></li>
            <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>Sauvegarde </a></li>

      </ul>







   
        </nav>
        
{% endblock %} {# fin bloc NavBar étudiant#}

{% block contenu %}  


test contenu etudiant
{% endblock %}
", "baseEtudiant.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\etudiant\\baseEtudiant.html.twig");
    }
}
