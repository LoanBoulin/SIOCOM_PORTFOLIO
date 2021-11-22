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

/* admin/baseAdmin.html.twig */
class __TwigTemplate_3365ae3d524770a5d29838039ec4f452ae4866bced1ce2cd589786fe32e62f46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/baseAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/baseAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_profil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profil"));

        // line 3
        echo "    <li class=\"nav-item dropdown\"><a id=\"profile\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><span class=\"d-none d-sm-inline-block\">Mon compte</span></a>
      <ul aria-labelledby=\"profil\" class=\"dropdown-menu\">
        <li><a rel=\"nofollow\" href=\"";
        // line 5
        echo "\" class=\"dropdown-item\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/monCompte.png"), "html", null, true);
        echo "\" alt=\"Mon compte\" class=\"mr-2\">Mes informations</a></li>
        <li><a rel=\"nofollow\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\"  class=\"dropdown-item\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/changePasswd.png"), "html", null, true);
        echo "\" alt=\"changePasswd\" class=\"mr-2\">Changer mot de passe</a></li>
        <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("images/contact.png")), "html", null, true);
        echo "\" alt=\"Contact\" class=\"mr-2\">Contact Admin</a></li>
      </ul>
    </li>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        echo " ";
        // line 13
        echo "
      <div class=\"page-content d-flex align-items-stretch\"> 
        <!-- Side Navbar -->
        <nav class=\"side-navbar\">

          <!-- Sidebar Header-->
          <div class=\"sidebar-header d-flex align-items-center\">
            
            <div class=\"avatar\">
            <a href=\"";
        // line 22
        echo "\">
              ";
        // line 23
        $context["photo"] = "avatar/admin.PNG";
        // line 24
        echo "              <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 24, $this->source); })()))), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\" onError=\"this.src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("avatar/lambda.png")), "html", null, true);
        echo "\";\">
            </a>
            </div>
           <div class=\"title\"><a href=\"";
        // line 27
        echo "\">
              <h1 class=\"h4\">";
        // line 28
        echo " ";
        echo "</h1>
              <p>ADMIN</p></a>
            </div>
            
          </div>

       
          <!-- Sidebar Navidation Menus-->
          
          <span class=\"heading\">Gestion des comptes</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listPromoEtudiants");
        echo "\"> <i class=\"icon-home\"></i> Liste des étudiants</a></li>
            <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEnseignants");
        echo "\"> <i class=\"icon-grid\"></i>Liste des enseignants </a></li>
             <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerComptesNonActifs");
        echo "\"> <i class=\"icon-grid\"></i>Comptes inactifs </a></li>
          </ul> 

          <span class=\"heading\">Gestion des Groupes et Projets</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listGroupes");
        echo "\"> <i class=\"fa fa-users\"></i> Liste des groupes</a></li>
            <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProjets");
        echo "\"> <i class=\"fa fa-tasks\"></i>Liste des projets </a></li>
          </ul> 

        <!-- Sidebar Navidation Menus--><span class=\"heading\">Paramètres</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"index.html\"> <i class=\"icon-home\"></i> Stages</a></li>
            <li><a href=\"tables.html\"> <i class=\"icon-grid\"></i>xxxx </a></li>
            <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>xxxx </a></li>

      </ul>
   
        </nav>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        echo "  
 contenu admin
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 62,  172 => 47,  168 => 46,  160 => 41,  156 => 40,  152 => 39,  138 => 28,  135 => 27,  126 => 24,  124 => 23,  121 => 22,  110 => 13,  99 => 12,  85 => 7,  79 => 6,  74 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
 {% block profil %}
    <li class=\"nav-item dropdown\"><a id=\"profile\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><span class=\"d-none d-sm-inline-block\">Mon compte</span></a>
      <ul aria-labelledby=\"profil\" class=\"dropdown-menu\">
        <li><a rel=\"nofollow\" href=\"{#{ path('showEditAdmin')}#}\" class=\"dropdown-item\"> <img src=\"{{ asset('images/monCompte.png') }}\" alt=\"Mon compte\" class=\"mr-2\">Mes informations</a></li>
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
            <a href=\"{#{ path('etudiantHome')}#}\">
              {% set photo = 'avatar/admin.PNG' %}
              <img src=\"{{ asset(photo | trans )}}\" alt=\"...\" class=\"img-fluid rounded-circle\" onError=\"this.src=\"{{ asset('avatar/lambda.png' | trans )}}\";\">
            </a>
            </div>
           <div class=\"title\"><a href=\"{#{ path('etudiantHome')}#}\">
              <h1 class=\"h4\">{#{app.user.enseignant.prenom}#} {#{app.user.etudiant.nom}#}</h1>
              <p>ADMIN</p></a>
            </div>
            
          </div>

       
          <!-- Sidebar Navidation Menus-->
          
          <span class=\"heading\">Gestion des comptes</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"{{ path('listPromoEtudiants')}}\"> <i class=\"icon-home\"></i> Liste des étudiants</a></li>
            <li><a href=\"{{ path('listEnseignants')}}\"> <i class=\"icon-grid\"></i>Liste des enseignants </a></li>
             <li><a href=\"{{ path('listerComptesNonActifs')}}\"> <i class=\"icon-grid\"></i>Comptes inactifs </a></li>
          </ul> 

          <span class=\"heading\">Gestion des Groupes et Projets</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"{{ path('listGroupes')}}\"> <i class=\"fa fa-users\"></i> Liste des groupes</a></li>
            <li><a href=\"{{ path('listProjets')}}\"> <i class=\"fa fa-tasks\"></i>Liste des projets </a></li>
          </ul> 

        <!-- Sidebar Navidation Menus--><span class=\"heading\">Paramètres</span>
          <ul class=\"list-unstyled\">
            <li><a href=\"index.html\"> <i class=\"icon-home\"></i> Stages</a></li>
            <li><a href=\"tables.html\"> <i class=\"icon-grid\"></i>xxxx </a></li>
            <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>xxxx </a></li>

      </ul>
   
        </nav>
        
{% endblock %} {# fin bloc NavBar étudiant#}

{% block contenu %}  
 contenu admin
{% endblock %}
", "admin/baseAdmin.html.twig", "D:\\wamp64\\www\\SIOCOM_PORTFOLIO\\portfolio\\templates\\admin\\baseAdmin.html.twig");
    }
}
