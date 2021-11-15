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

/* stage/add.html.twig */
class __TwigTemplate_edf9dad42a40f364d2562595e21d8695a77ccb8c5c1482a4b59ca041178fa195 extends Template
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
        // line 3
        return $this->loadTemplate((isset($context["templateTwigParent"]) || array_key_exists("templateTwigParent", $context) ? $context["templateTwigParent"] : (function () { throw new RuntimeError('Variable "templateTwigParent" does not exist.', 3, $this->source); })()), "stage/add.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/add.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titreContenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreContenu"));

        echo "Mon stage ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
</br>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">
                      
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 27
        echo "\">Info</a></li>
                                ";
        // line 28
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 28, $this->source); })()), "duree", [], "any", false, false, false, 28), 0))) {
            echo "          
                                    ";
            // line 29
            $context["nbSem"] = twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 29, $this->source); })()), "duree", [], "any", false, false, false, 29);
            // line 30
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbSem"]) || array_key_exists("nbSem", $context) ? $context["nbSem"] : (function () { throw new RuntimeError('Variable "nbSem" does not exist.', 30, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "                                        <li class=\"breadcrumb-item\"><a href=\"";
                echo "\"> Semaine ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </a></li>                         
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                ";
        }
        // line 34
        echo "                            </ul>
                        </div>
                    </div>

                    <div class=\"card-body\">  

                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "

                            <!-- 1ère ligne de formulaire -->
                            <div class=\"form-group row\">    
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nomEntreprise", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div> 
                                        <div class=\"col-md-3\">
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "siret", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "codeNaf", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  ligne de formulaire  adresse -->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "numRue", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                         <div class=\"col-md-4\">
                                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "rue", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "copos", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "ville", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"line\"> </div>

                            <!-- 3ème ligne de formulaire adresse -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "sujet", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                             <!-- ligne de formulaire service et lieu -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "lieu", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-\">
                                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "service", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <!--  ligne tuteur -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "nomTuteur", [], "any", false, false, false, 112), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "mailTuteur", [], "any", false, false, false, 115), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-3\">
                                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "telTuteur", [], "any", false, false, false, 118), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!--  ligne de formulaire dates-->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "dateDebut", [], "any", false, false, false, 129), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "dateFin", [], "any", false, false, false, 132), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "duree", [], "any", false, false, false, 135), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  ligne horaires -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "horLun", [], "any", false, false, false, 146), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "horMar", [], "any", false, false, false, 149), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "horMer", [], "any", false, false, false, 152), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "horJeu", [], "any", false, false, false, 155), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "horVen", [], "any", false, false, false, 158), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                        <div class=\"col-md-2\">
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "horSam", [], "any", false, false, false, 161), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>


\t\t\t\t\t\t
                        <!-- ligne de formulaire boutons-->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-4 offset-sm-3\">
                                <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>

                    ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        echo "
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stage/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 177,  343 => 161,  337 => 158,  331 => 155,  325 => 152,  319 => 149,  313 => 146,  299 => 135,  293 => 132,  287 => 129,  273 => 118,  267 => 115,  261 => 112,  247 => 101,  241 => 98,  226 => 86,  210 => 73,  204 => 70,  198 => 67,  192 => 64,  178 => 53,  172 => 50,  166 => 47,  156 => 40,  148 => 34,  145 => 33,  135 => 31,  130 => 30,  128 => 29,  124 => 28,  121 => 27,  107 => 15,  98 => 12,  95 => 11,  91 => 10,  87 => 8,  77 => 7,  58 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("
{#% extends \"etudiant/baseEtudiant.html.twig\" %#}
{% extends templateTwigParent %}

{% block titreContenu %}Mon stage {% endblock %}

{% block contenu%}

</br>
{% for message in app.flashes('success') %}{# affichera un message de succès si l'action est réussie #}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}

 <!-- Forms Section-->
<!--section class=\"forms\"--> 
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header d-flex align-items-center\">
                      
                        <!-- Breadcrumb-->
                        <div class=\"breadcrumb-holder container-fluid\">
                            <ul class=\"breadcrumb\">
                                <li class=\"breadcrumb-item active\"><a href=\"{#{ path('rpShowEditAdd', {'idRp': idRp }) }#}\">Info</a></li>
                                {% if stage.duree > 0 %}          
                                    {% set nbSem = stage.duree %}
                                    {% for i in 1..nbSem %}
                                        <li class=\"breadcrumb-item\"><a href=\"{#{ path('rpActiviteList', { 'idRp': idRp }) }#}\"> Semaine {{ i }} </a></li>                         
                                    {% endfor %}
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"card-body\">  

                        {{ form_start(form)}}

                            <!-- 1ère ligne de formulaire -->
                            <div class=\"form-group row\">    
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.nomEntreprise, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div> 
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.siret, {'attr' : {'class' : 'form-control'}}) }}
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.codeNaf, {'attr' : {'class' : 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  ligne de formulaire  adresse -->
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.numRue, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                         <div class=\"col-md-4\">
                                            {{ form_row(form.rue, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.copos, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.ville, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"line\"> </div>

                            <!-- 3ème ligne de formulaire adresse -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.sujet, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                             <!-- ligne de formulaire service et lieu -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.lieu, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-\">
                                            {{ form_row(form.service, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <!--  ligne tuteur -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.nomTuteur, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.mailTuteur, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-3\">
                                            {{ form_row(form.telTuteur, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!--  ligne de formulaire dates-->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.dateDebut, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.dateFin, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.duree, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  ligne horaires -->
                            <div class=\"form-group row\">  
                                <div class=\"col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.horLun, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.horMar, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.horMer, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.horJeu, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.horVen, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                        <div class=\"col-md-2\">
                                            {{ form_row(form.horSam, {'attr' : {'class' : 'form-control'}}) }} 
                                        </div>
                                    </div>
                                </div>
                            </div>


\t\t\t\t\t\t
                        <!-- ligne de formulaire boutons-->
                        <div class=\"form-group row\">
                            <div class=\"col-sm-4 offset-sm-3\">
                                <button type=\"submit\" class=\"btn btn-secondary\">Annuler</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </div>

                    {{ form_end(form) }}
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/section-->

{% endblock %}", "stage/add.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\stage\\add.html.twig");
    }
}
