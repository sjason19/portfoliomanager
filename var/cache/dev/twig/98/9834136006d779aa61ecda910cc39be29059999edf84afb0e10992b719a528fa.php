<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
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
        $__internal_152021f3ac6ba4808f485c9859f1c3a86c260f08062bd4249ddb1a2a777cf46a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152021f3ac6ba4808f485c9859f1c3a86c260f08062bd4249ddb1a2a777cf46a->enter($__internal_152021f3ac6ba4808f485c9859f1c3a86c260f08062bd4249ddb1a2a777cf46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c546553b6a7b0ccdb086877f8a9f5376b5306415f1792c2c68d4e87183abcf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c546553b6a7b0ccdb086877f8a9f5376b5306415f1792c2c68d4e87183abcf44->enter($__internal_c546553b6a7b0ccdb086877f8a9f5376b5306415f1792c2c68d4e87183abcf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152021f3ac6ba4808f485c9859f1c3a86c260f08062bd4249ddb1a2a777cf46a->leave($__internal_152021f3ac6ba4808f485c9859f1c3a86c260f08062bd4249ddb1a2a777cf46a_prof);

        
        $__internal_c546553b6a7b0ccdb086877f8a9f5376b5306415f1792c2c68d4e87183abcf44->leave($__internal_c546553b6a7b0ccdb086877f8a9f5376b5306415f1792c2c68d4e87183abcf44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9084a85f1d011aa061ddc1d5e6700746bfdc0bdfcf794cc85a4943460d28031e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9084a85f1d011aa061ddc1d5e6700746bfdc0bdfcf794cc85a4943460d28031e->enter($__internal_9084a85f1d011aa061ddc1d5e6700746bfdc0bdfcf794cc85a4943460d28031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_963734621b856f76f6ca6733a5bcabd3d3465ec8d9a8ea10f8e761d1ee89f720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963734621b856f76f6ca6733a5bcabd3d3465ec8d9a8ea10f8e761d1ee89f720->enter($__internal_963734621b856f76f6ca6733a5bcabd3d3465ec8d9a8ea10f8e761d1ee89f720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_963734621b856f76f6ca6733a5bcabd3d3465ec8d9a8ea10f8e761d1ee89f720->leave($__internal_963734621b856f76f6ca6733a5bcabd3d3465ec8d9a8ea10f8e761d1ee89f720_prof);

        
        $__internal_9084a85f1d011aa061ddc1d5e6700746bfdc0bdfcf794cc85a4943460d28031e->leave($__internal_9084a85f1d011aa061ddc1d5e6700746bfdc0bdfcf794cc85a4943460d28031e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63b1b144378bf0973ea6a3a70a8f59eb96bb831a26f4333c07920193175251c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b1b144378bf0973ea6a3a70a8f59eb96bb831a26f4333c07920193175251c9->enter($__internal_63b1b144378bf0973ea6a3a70a8f59eb96bb831a26f4333c07920193175251c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a200d968484dc85537ed8bbf9986e3af8033795b64b4134f0665f47333409073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a200d968484dc85537ed8bbf9986e3af8033795b64b4134f0665f47333409073->enter($__internal_a200d968484dc85537ed8bbf9986e3af8033795b64b4134f0665f47333409073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a200d968484dc85537ed8bbf9986e3af8033795b64b4134f0665f47333409073->leave($__internal_a200d968484dc85537ed8bbf9986e3af8033795b64b4134f0665f47333409073_prof);

        
        $__internal_63b1b144378bf0973ea6a3a70a8f59eb96bb831a26f4333c07920193175251c9->leave($__internal_63b1b144378bf0973ea6a3a70a8f59eb96bb831a26f4333c07920193175251c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_414be381970f04d67f914ebaec15baf3a54511c626fe2a9f826c6333aa61c94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414be381970f04d67f914ebaec15baf3a54511c626fe2a9f826c6333aa61c94b->enter($__internal_414be381970f04d67f914ebaec15baf3a54511c626fe2a9f826c6333aa61c94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db9dd1c3e2b24b4c79288e3e5e4ed1fb303f4bdca60cfcb3a48d0dab653c918d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9dd1c3e2b24b4c79288e3e5e4ed1fb303f4bdca60cfcb3a48d0dab653c918d->enter($__internal_db9dd1c3e2b24b4c79288e3e5e4ed1fb303f4bdca60cfcb3a48d0dab653c918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db9dd1c3e2b24b4c79288e3e5e4ed1fb303f4bdca60cfcb3a48d0dab653c918d->leave($__internal_db9dd1c3e2b24b4c79288e3e5e4ed1fb303f4bdca60cfcb3a48d0dab653c918d_prof);

        
        $__internal_414be381970f04d67f914ebaec15baf3a54511c626fe2a9f826c6333aa61c94b->leave($__internal_414be381970f04d67f914ebaec15baf3a54511c626fe2a9f826c6333aa61c94b_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\portfoliomanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
