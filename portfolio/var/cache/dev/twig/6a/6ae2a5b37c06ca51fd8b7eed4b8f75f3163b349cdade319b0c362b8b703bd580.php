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

/* rp/commentaire/listCommentairesRp2.html.twig */
class __TwigTemplate_ae5e2181328c5231b7f7d1f6559c24bfc61c3d3f85a34ed60598fba5531e440b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/commentaire/listCommentairesRp2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/commentaire/listCommentairesRp2.html.twig"));

        $this->parent = $this->loadTemplate("baseEtudiant.html.twig", "rp/commentaire/listCommentairesRp2.html.twig", 1);
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

        echo "Réalisations professionnelles ";
        
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
        echo "        ";
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
   <!-- Forms Section-->
          <section class=\"forms\"> 
            <div class=\"container-fluid\">
              <div class=\"row\">\t\t  
\t\t\t
                <!-- Form Elements -->
                <div class=\"col-lg-12\">
                  <div class=\"card\">
\t\t\t\t
                    <div class=\"card-header d-flex align-items-center\">
                      <h3 class=\"h4\">All form elements</h3>
                    </div>
\t\t\t\t\t
                    <div class=\"card-body\">
                      
\t\t\t\t\t  ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                       
\t\t\t\t\t   <div class=\"form-group row\">                  
                          
\t\t\t\t\t\t  <div class=\"col-sm-10\">               
\t\t\t\t\t\t\t
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "enseignant", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                <div class=\"input-group-append\">
                                  <button type=\"button\" class=\"btn btn-primary\">Notifier l'enseignant</button>
                                </div>
                              </div>
                            </div>
\t\t\t\t\t\t\t
                          </div>
                        </div>
\t\t\t\t   \t\t\t\t   
                      ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rp/commentaire/listCommentairesRp2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  134 => 35,  123 => 27,  105 => 11,  96 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseEtudiant.html.twig\" %}
{% block titreContenu %}Réalisations professionnelles {% endblock %}


{% block contenu%}
        {% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
</br>
   <!-- Forms Section-->
          <section class=\"forms\"> 
            <div class=\"container-fluid\">
              <div class=\"row\">\t\t  
\t\t\t
                <!-- Form Elements -->
                <div class=\"col-lg-12\">
                  <div class=\"card\">
\t\t\t\t
                    <div class=\"card-header d-flex align-items-center\">
                      <h3 class=\"h4\">All form elements</h3>
                    </div>
\t\t\t\t\t
                    <div class=\"card-body\">
                      
\t\t\t\t\t  {{ form_start(form)}}
                       
\t\t\t\t\t   <div class=\"form-group row\">                  
                          
\t\t\t\t\t\t  <div class=\"col-sm-10\">               
\t\t\t\t\t\t\t
                            <div class=\"form-group\">
                              <div class=\"input-group\">
                                {{ form_row(form.enseignant, {'attr' : {'class' : 'form-control'}}) }} 
                                <div class=\"input-group-append\">
                                  <button type=\"button\" class=\"btn btn-primary\">Notifier l'enseignant</button>
                                </div>
                              </div>
                            </div>
\t\t\t\t\t\t\t
                          </div>
                        </div>
\t\t\t\t   \t\t\t\t   
                      {{ form_end(form)}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

{% endblock %}", "rp/commentaire/listCommentairesRp2.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\rp\\commentaire\\listCommentairesRp2.html.twig");
    }
}
