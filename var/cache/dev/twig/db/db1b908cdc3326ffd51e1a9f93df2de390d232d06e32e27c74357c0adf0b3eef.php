<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_691f938d40384534773c069f3f12b6508ed018ada41465caa01e75af166da985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69f388351116e9c7d33d71e294e9227bb4a3f153db50b4b272b522ee2709a210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f388351116e9c7d33d71e294e9227bb4a3f153db50b4b272b522ee2709a210->enter($__internal_69f388351116e9c7d33d71e294e9227bb4a3f153db50b4b272b522ee2709a210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f388351116e9c7d33d71e294e9227bb4a3f153db50b4b272b522ee2709a210->leave($__internal_69f388351116e9c7d33d71e294e9227bb4a3f153db50b4b272b522ee2709a210_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ced25022ea9367db41c50133d9a418c8fdb3b7a8f2ebb803b76133bc44ab26d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced25022ea9367db41c50133d9a418c8fdb3b7a8f2ebb803b76133bc44ab26d9->enter($__internal_ced25022ea9367db41c50133d9a418c8fdb3b7a8f2ebb803b76133bc44ab26d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ced25022ea9367db41c50133d9a418c8fdb3b7a8f2ebb803b76133bc44ab26d9->leave($__internal_ced25022ea9367db41c50133d9a418c8fdb3b7a8f2ebb803b76133bc44ab26d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55cee4d105b2539faa8e4faeb3d0f2c474b1ea82b37740017fef7ec9b0a0ca49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cee4d105b2539faa8e4faeb3d0f2c474b1ea82b37740017fef7ec9b0a0ca49->enter($__internal_55cee4d105b2539faa8e4faeb3d0f2c474b1ea82b37740017fef7ec9b0a0ca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55cee4d105b2539faa8e4faeb3d0f2c474b1ea82b37740017fef7ec9b0a0ca49->leave($__internal_55cee4d105b2539faa8e4faeb3d0f2c474b1ea82b37740017fef7ec9b0a0ca49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f1a13140efa16a0f00384009f9d6d7f06619841a605dae6da5395401d1fa115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1a13140efa16a0f00384009f9d6d7f06619841a605dae6da5395401d1fa115->enter($__internal_7f1a13140efa16a0f00384009f9d6d7f06619841a605dae6da5395401d1fa115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f1a13140efa16a0f00384009f9d6d7f06619841a605dae6da5395401d1fa115->leave($__internal_7f1a13140efa16a0f00384009f9d6d7f06619841a605dae6da5395401d1fa115_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\api\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
