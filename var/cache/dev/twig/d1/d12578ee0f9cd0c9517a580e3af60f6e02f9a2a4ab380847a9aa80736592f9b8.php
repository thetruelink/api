<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_167050544a746dae99f0200b96447e218b2fb6f902baa0c7adbe2ad3a4e451d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97e4074dbabd34d03652a8df9f7d0fa841441e686e1bdbb0afd82ea07bb41762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e4074dbabd34d03652a8df9f7d0fa841441e686e1bdbb0afd82ea07bb41762->enter($__internal_97e4074dbabd34d03652a8df9f7d0fa841441e686e1bdbb0afd82ea07bb41762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e4074dbabd34d03652a8df9f7d0fa841441e686e1bdbb0afd82ea07bb41762->leave($__internal_97e4074dbabd34d03652a8df9f7d0fa841441e686e1bdbb0afd82ea07bb41762_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ba05c38bbd2b25584cb2707c7732fbc73b927c6ff56bd4614dea6fab9030c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba05c38bbd2b25584cb2707c7732fbc73b927c6ff56bd4614dea6fab9030c8a->enter($__internal_7ba05c38bbd2b25584cb2707c7732fbc73b927c6ff56bd4614dea6fab9030c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ba05c38bbd2b25584cb2707c7732fbc73b927c6ff56bd4614dea6fab9030c8a->leave($__internal_7ba05c38bbd2b25584cb2707c7732fbc73b927c6ff56bd4614dea6fab9030c8a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_293aba57cb8b6e125e17d47d9c429ce0e6281ad37a1a0e2b869dc8b5ff45092b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293aba57cb8b6e125e17d47d9c429ce0e6281ad37a1a0e2b869dc8b5ff45092b->enter($__internal_293aba57cb8b6e125e17d47d9c429ce0e6281ad37a1a0e2b869dc8b5ff45092b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_293aba57cb8b6e125e17d47d9c429ce0e6281ad37a1a0e2b869dc8b5ff45092b->leave($__internal_293aba57cb8b6e125e17d47d9c429ce0e6281ad37a1a0e2b869dc8b5ff45092b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_337f9134c54633e331f89b91a98590d3b3dd04c880bbeff41adf2753374a2406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337f9134c54633e331f89b91a98590d3b3dd04c880bbeff41adf2753374a2406->enter($__internal_337f9134c54633e331f89b91a98590d3b3dd04c880bbeff41adf2753374a2406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_337f9134c54633e331f89b91a98590d3b3dd04c880bbeff41adf2753374a2406->leave($__internal_337f9134c54633e331f89b91a98590d3b3dd04c880bbeff41adf2753374a2406_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\api\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
