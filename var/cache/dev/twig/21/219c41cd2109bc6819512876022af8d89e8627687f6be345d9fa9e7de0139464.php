<?php

/* index/index.html.twig */
class __TwigTemplate_2c4b60bfad733b7f03acd096df95bfc2ca5f17e432ddf816174bec252bd3e442 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   
    <h1>Filmothéques</h1>
    <div id=\"wrapper\">
        <div id =\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                        Films
                        </div>
                    </div>
                    <div class=\"panel-body\">                 
                            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_new");
        echo "\" class=\"btn btn-default new col-lg-1\" role=\"button\">Nouveau Film</a>
                           <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"FilmTable\">
                                <thead>
                                    <tr>                        
                                        <th>Titre</th>
                                        <th>Genre</th>                              
                                        <th>Acteur</th>
                                        <th>Note</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new Twig_Error_Runtime('Variable "films" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 28
            echo "                                     <tr>   
                                        
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "Titre", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["film"], "fkGenre", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 32
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                        <td> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["film"], "fkActeur", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acteur"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acteur"], "nom", array()), "html", null, true);
                echo " | ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                         
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "Note", array()), "html", null, true);
            echo "/5</td>    
                                        
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                </tbody>
                            </table>
                            
                        </div>
                        </div>
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
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  123 => 36,  106 => 34,  97 => 32,  93 => 31,  89 => 30,  85 => 28,  81 => 27,  67 => 16,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   
    <h1>Filmothéques</h1>
    <div id=\"wrapper\">
        <div id =\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                        Films
                        </div>
                    </div>
                    <div class=\"panel-body\">                 
                            <a href=\"{{ path('film_new') }}\" class=\"btn btn-default new col-lg-1\" role=\"button\">Nouveau Film</a>
                           <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"FilmTable\">
                                <thead>
                                    <tr>                        
                                        <th>Titre</th>
                                        <th>Genre</th>                              
                                        <th>Acteur</th>
                                        <th>Note</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for film in films %}
                                     <tr>   
                                        
                                        <td>{{film.Titre}}</td>
                                        {% for genre in film.fkGenre %}
                                        <td>{{genre.genre}}</td>
                                        {%endfor%}
                                        <td> {% for acteur in film.fkActeur %} {{acteur.prenom}} {{acteur.nom}} | {%endfor%}</td>
                                         
                                        <td>{{film.Note}}/5</td>    
                                        
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                            
                        </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>

{% endblock %}
", "index/index.html.twig", "D:\\projet\\Filmotheques\\templates\\index\\index.html.twig");
    }
}
