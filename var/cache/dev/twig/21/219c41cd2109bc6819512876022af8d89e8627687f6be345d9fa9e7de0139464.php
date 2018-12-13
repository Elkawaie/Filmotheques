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
            'javascripts' => array($this, 'block_javascripts'),
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
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Films
                    </div>
                </div>

                <div class=\"panel-body\">
                    <div class=\"row\">
                        <ul class=\"button\">
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalFilm\">Nouveau
                                Film</li>
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalActeur\">Nouvel
                                Acteur</li>
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalGenre\">Nouveau
                                Genre</li>
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalReal\">Nouveau
                                Réalisateur</li>
                        </ul>
                    </div>
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new Twig_Error_Runtime('Variable "films" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 40
            echo "                            <tr>

                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "Titre", array()), "html", null, true);
            echo "</td>
                                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["film"], "fkGenre", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 44
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre", array()), "html", null, true);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                <td>
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["film"], "fkActeur", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
                // line 48
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acteur"], "prenom", array()), "html", null, true);
                echo "
                                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acteur"], "nom", array()), "html", null, true);
                echo "
                                    |
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </td>

                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "Note", array()), "html", null, true);
            echo "/5</td>

                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class=\"modal fade\" id=\"modalFilm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Film</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modalActeur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Acteur</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modalGenre\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Genre</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modalReal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Réalisateur</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js\"></script>
<script>
    //Modal Film
    \$('#modalFilm').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_nouveau");
        echo "', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalFilm');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });

    // Modal Acteur
    \$('#modalActeur').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acteur_nouveau");
        echo "', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalActeur');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });

    //Modal Genre

    \$('#modalGenre').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre_new");
        echo "', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalGenre');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });

    //Modal Réalisateur

    \$('#modalReal').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisateur_new");
        echo "', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalReal');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });
</script>
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
        return array (  397 => 275,  352 => 233,  307 => 191,  263 => 150,  250 => 140,  241 => 139,  151 => 58,  141 => 54,  137 => 52,  128 => 49,  123 => 48,  119 => 47,  116 => 46,  107 => 44,  103 => 43,  99 => 42,  95 => 40,  91 => 39,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Filmothéques</h1>
<div id=\"wrapper\">
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Films
                    </div>
                </div>

                <div class=\"panel-body\">
                    <div class=\"row\">
                        <ul class=\"button\">
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalFilm\">Nouveau
                                Film</li>
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalActeur\">Nouvel
                                Acteur</li>
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalGenre\">Nouveau
                                Genre</li>
                            <li class=\"btn btn-default new col-lg-1\" data-toggle=\"modal\" data-target=\"#modalReal\">Nouveau
                                Réalisateur</li>
                        </ul>
                    </div>
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
                                {% endfor %}
                                <td>
                                    {% for acteur in film.fkActeur %}
                                    {{acteur.prenom}}
                                    {{acteur.nom}}
                                    |
                                    {% endfor %}
                                </td>

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
</div>
</div>
<div class=\"modal fade\" id=\"modalFilm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Film</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modalActeur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Acteur</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modalGenre\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Genre</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"modalReal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalTitle\">Ajout d'un Réalisateur</h2>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

{% endblock %}
{% block javascripts %}
{{ parent() }}
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js\"></script>
<script>
    //Modal Film
    \$('#modalFilm').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('{{ path(\"film_nouveau\") }}', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalFilm');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });

    // Modal Acteur
    \$('#modalActeur').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('{{ path(\"acteur_nouveau\") }}', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalActeur');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });

    //Modal Genre

    \$('#modalGenre').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('{{ path(\"genre_new\") }}', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalGenre');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });

    //Modal Réalisateur

    \$('#modalReal').on('shown.bs.modal', function () {
        var modal = \$(this);
        \$.ajax('{{ path(\"realisateur_new\") }}', {
            success: function (data) {
                modal.find('.modal-body').html(data);
            }
        });
    });

    \$(document).on('submit', 'form', function (e) {
        // il est impératif de commencer avec cette méthode qui va empêcher le navigateur d'envoyer le formulaire lui-même
        e.preventDefault();

        \$form = \$(e.target);
        modal = \$('#modalReal');

        var title = \$('#article_title').val();

        var \$submitButton = \$form.find(':submit');
        \$submitButton.html('<i class=\"fas fa-spinner fa-pulse\"></i>');
        \$submitButton.prop('disabled', true);

        // ajaxSubmit du plugin ajaxForm nécessaire pour l'upload de fichier
        \$form.ajaxSubmit({
            type: 'post',
            success: function (data) {
                if (data == 'ok') {
                    \$('ul').append('<li>' + title + '</li>');
                    modal.modal('toggle');
                } else {
                    modal.find('.modal-body').html(data);
                }
            },
            error: function (jqXHR, status, error) {
                \$submitButton.html(button.data('label'));
                \$submitButton.prop('disabled', false);
            }
        });
    });
</script>
{% endblock %}", "index/index.html.twig", "D:\\projet\\Filmotheques\\templates\\index\\index.html.twig");
    }
}
