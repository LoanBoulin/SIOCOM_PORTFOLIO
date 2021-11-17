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

/* groupe/listGroups.html.twig */
class __TwigTemplate_135392007294a5de862eec99413ab7e651bab4033cb1f6508bde6cc1d71429e8 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/listGroups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/listGroups.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "groupe/listGroups.html.twig", 1);
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

        echo "Liste des groupes";
        
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
        echo "
 
</br>
     <div class=\"col-lg-12\">
                  <div class=\"card\">
                               \t\t
                    <div class=\"card-body\">

                      <input style=\"width: 20%; margin: 3vh 0;\" class=\"form-control\" onkeyup=\"search_group()\" id=\"search_group\" type=\"text\" placeholder=\"Rechercher un nom de groupe\">
                      
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\" id=\"table_group\">
                          <thead>
                            <tr>
                              <th>Groupe</th>
                              <th>Type</th>
                              <th>Libellé</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 27
            echo "                            <tr>
                              <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo " </th>
                              <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["g"], "getGroupeType", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                              <td><a class=\"text\" href=\"test\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "libelle", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script>

  function search_group() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(\"search_group\");
    filter = input.value.toUpperCase();
    table = document.getElementById(\"table_group\");
    tr = table.getElementsByTagName(\"tr\");

    console.log(input);

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName(\"td\")[2];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = \"\";
        } else {
          tr[i].style.display = \"none\";
        }
      }
    }
  }
    
    
    
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "groupe/listGroups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 45,  151 => 44,  135 => 33,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  89 => 6,  79 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}
{% block titreContenu %}Liste des groupes{% endblock %}


{% block contenu%}

 
</br>
     <div class=\"col-lg-12\">
                  <div class=\"card\">
                               \t\t
                    <div class=\"card-body\">

                      <input style=\"width: 20%; margin: 3vh 0;\" class=\"form-control\" onkeyup=\"search_group()\" id=\"search_group\" type=\"text\" placeholder=\"Rechercher un nom de groupe\">
                      
                      <div class=\"table-responsive\">   
                        <table class=\"table table-striped table-sm\" id=\"table_group\">
                          <thead>
                            <tr>
                              <th>Groupe</th>
                              <th>Type</th>
                              <th>Libellé</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for g in groupes  %}
                            <tr>
                              <th scope=\"row\">{{g.id}} </th>
                              <td>{{g.getGroupeType.libelle}}</td>
                              <td><a class=\"text\" href=\"test\">{{g.libelle}}</a></td>
                            </tr>
                            {% endfor %}
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>      
{% endblock %}




{% block javascripts %}
    <script>

  function search_group() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(\"search_group\");
    filter = input.value.toUpperCase();
    table = document.getElementById(\"table_group\");
    tr = table.getElementsByTagName(\"tr\");

    console.log(input);

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName(\"td\")[2];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = \"\";
        } else {
          tr[i].style.display = \"none\";
        }
      }
    }
  }
    
    
    
    </script>
{% endblock %}", "groupe/listGroups.html.twig", "D:\\wamp64\\www\\portfolio\\templates\\groupe\\listGroups.html.twig");
    }
}
