<?php

/* navbar.html.twig */
class __TwigTemplate_ab85550cd52c71a3d665fd2047f73f8d55cc2a1c6d539accd9e76f5a108e2f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_navbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "    <div>
        <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #f56b2a;\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" class=\"thumbnail rounded-top\" alt=\"\">
            <a class=\"navbar-brand\">Navbar</a>
            <button class=\"navbar-toggler hidden-lg-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
                <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <a href=\"/login\" class=\"btn btn-info\" role=\"bouton\">Se connecter</a>
                </form>
            </div>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block navbar %}
    <div>
        <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #f56b2a;\">
            <img src=\"{{ asset('favicon.ico') }}\" class=\"thumbnail rounded-top\" alt=\"\">
            <a class=\"navbar-brand\">Navbar</a>
            <button class=\"navbar-toggler hidden-lg-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavId\" aria-controls=\"collapsibleNavId\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavId\">
                <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <a href=\"/login\" class=\"btn btn-info\" role=\"bouton\">Se connecter</a>
                </form>
            </div>
        </nav>
    </div>
{% endblock %}", "navbar.html.twig", "C:\\xampp\\htdocs\\Symfony\\my_project_name\\app\\Resources\\views\\navbar.html.twig");
    }
}
