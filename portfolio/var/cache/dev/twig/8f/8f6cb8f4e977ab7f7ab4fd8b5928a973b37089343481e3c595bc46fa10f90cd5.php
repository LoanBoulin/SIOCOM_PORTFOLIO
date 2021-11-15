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

/* baseEnseignant.html.twig */
class __TwigTemplate_bf0e8631496a999d55346df9fabb612c60cd5ff509c4c3cd1aec204e703add58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEnseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEnseignant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "baseEnseignant.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEditEnseignant");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiantHome");
        echo "\">
              ";
        // line 23
        $context["photo"] = (("avatar/enseignant/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "enseignant", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)) . ".png");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignantHome");
        echo "\">
              <h1 class=\"h4\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "enseignant", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "enseignant", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
              <p>Enseignant</p></a>
            </div>
            
          </div>

          <!-- Sidebar Navidation Menus-->
          <span class=\"heading\">Mon activité</span>
          
          <ul class=\"list-unstyled\">
            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-bar-chart\"></i>Réalisations Pro. </a>
              <ul   id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                <li><a href=\"";
        // line 40
        echo "\">Réalisations en cours????</a></li>
                <li><a href=\"";
        // line 41
        echo "\">Réalisations archivées???</a></li>
                <li><a href=\"";
        // line 42
        echo "\">xxxxx</a></li>
              </ul>
            </li>
            
            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-grid\"></i>Stages </a>
              <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeStagesSuivis");
        echo "\">Stages à suivre</a></li>
                <li><a href=\"#\">xxxx</a></li>
                <li><a href=\"#\">Carnet de bord ???</a></li>
              </ul>
            </li>    
          </ul>
        </nav>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        echo "  
test contenu enseignant
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  172 => 48,  164 => 42,  161 => 41,  158 => 40,  141 => 28,  137 => 27,  128 => 24,  126 => 23,  122 => 22,  111 => 13,  100 => 12,  86 => 7,  80 => 6,  74 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"base.html.twig\" %}
 {% block profil %}
    <li class=\"nav-item dropdown\"><a id=\"profile\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><span class=\"d-none d-sm-inline-block\">Mon compte</span></a>
      <ul aria-labelledby=\"profil\" class=\"dropdown-menu\">
        <li><a rel=\"nofollow\" href=\"{{ path('showEditEnseignant')}}\" class=\"dropdown-item\"> <img src=\"{{ asset('images/monCompte.png') }}\" alt=\"Mon compte\" class=\"mr-2\">Mes informations</a></li>
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
              {% set photo = 'avatar/enseignant/'~ app.user.enseignant.id ~'.png' %}
              <img src=\"{{ asset(photo | trans )}}\" alt=\"...\" class=\"img-fluid rounded-circle\" onError=\"this.src=\"{{ asset('avatar/lambda.png' | trans )}}\";\">
            </a>
            </div>
           <div class=\"title\"><a href=\"{{ path('enseignantHome')}}\">
              <h1 class=\"h4\">{{app.user.enseignant.prenom}} {{app.user.enseignant.nom}}</h1>
              <p>Enseignant</p></a>
            </div>
            
          </div>

          <!-- Sidebar Navidation Menus-->
          <span class=\"heading\">Mon activité</span>
          
          <ul class=\"list-unstyled\">
            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-bar-chart\"></i>Réalisations Pro. </a>
              <ul   id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                <li><a href=\"{#{ path('etudiantRps')}#}\">Réalisations en cours????</a></li>
                <li><a href=\"{#{ path('etudiantRpsArchivees')}#}\">Réalisations archivées???</a></li>
                <li><a href=\"{#{ path('rpShowEditAdd')}#}\">xxxxx</a></li>
              </ul>
            </li>
            
            <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-grid\"></i>Stages </a>
              <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                <li><a href=\"{{ path('listeStagesSuivis')}}\">Stages à suivre</a></li>
                <li><a href=\"#\">xxxx</a></li>
                <li><a href=\"#\">Carnet de bord ???</a></li>
              </ul>
            </li>    
          </ul>
        </nav>
        
{% endblock %} {# fin bloc NavBar étudiant#}

{% block contenu %}  
test contenu enseignant
{% endblock %}
", "baseEnseignant.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\enseignant\\baseEnseignant.html.twig");
    }
}
