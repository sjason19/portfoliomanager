<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_09414313f8b2e2c32e06c3d872953bb38d8fb344840b0d59fd978dde2779d9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09414313f8b2e2c32e06c3d872953bb38d8fb344840b0d59fd978dde2779d9a1->enter($__internal_09414313f8b2e2c32e06c3d872953bb38d8fb344840b0d59fd978dde2779d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7d9b707d602dbe39ebaae202d619280f7ce81da20c4ee08cd2da6113b33934c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9b707d602dbe39ebaae202d619280f7ce81da20c4ee08cd2da6113b33934c9->enter($__internal_7d9b707d602dbe39ebaae202d619280f7ce81da20c4ee08cd2da6113b33934c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09414313f8b2e2c32e06c3d872953bb38d8fb344840b0d59fd978dde2779d9a1->leave($__internal_09414313f8b2e2c32e06c3d872953bb38d8fb344840b0d59fd978dde2779d9a1_prof);

        
        $__internal_7d9b707d602dbe39ebaae202d619280f7ce81da20c4ee08cd2da6113b33934c9->leave($__internal_7d9b707d602dbe39ebaae202d619280f7ce81da20c4ee08cd2da6113b33934c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3e0ed463eab1069f8d25933cd0373c727e92f4b61b6521d56b11431a620bb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e0ed463eab1069f8d25933cd0373c727e92f4b61b6521d56b11431a620bb1b->enter($__internal_e3e0ed463eab1069f8d25933cd0373c727e92f4b61b6521d56b11431a620bb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44b326fc0d1e32276f5fe6b80341d1146e7912861690a1bf3231e39e138baad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b326fc0d1e32276f5fe6b80341d1146e7912861690a1bf3231e39e138baad3->enter($__internal_44b326fc0d1e32276f5fe6b80341d1146e7912861690a1bf3231e39e138baad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_44b326fc0d1e32276f5fe6b80341d1146e7912861690a1bf3231e39e138baad3->leave($__internal_44b326fc0d1e32276f5fe6b80341d1146e7912861690a1bf3231e39e138baad3_prof);

        
        $__internal_e3e0ed463eab1069f8d25933cd0373c727e92f4b61b6521d56b11431a620bb1b->leave($__internal_e3e0ed463eab1069f8d25933cd0373c727e92f4b61b6521d56b11431a620bb1b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_379649cdcaa494a65bcc7a55ee5e266c19d01e89c3f3bde04e2a4cf7aa195bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379649cdcaa494a65bcc7a55ee5e266c19d01e89c3f3bde04e2a4cf7aa195bd1->enter($__internal_379649cdcaa494a65bcc7a55ee5e266c19d01e89c3f3bde04e2a4cf7aa195bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db4e44c738e8a23a34ab48949e164a8e2598ec9e5645cbde6e688b0e50f07207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4e44c738e8a23a34ab48949e164a8e2598ec9e5645cbde6e688b0e50f07207->enter($__internal_db4e44c738e8a23a34ab48949e164a8e2598ec9e5645cbde6e688b0e50f07207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_db4e44c738e8a23a34ab48949e164a8e2598ec9e5645cbde6e688b0e50f07207->leave($__internal_db4e44c738e8a23a34ab48949e164a8e2598ec9e5645cbde6e688b0e50f07207_prof);

        
        $__internal_379649cdcaa494a65bcc7a55ee5e266c19d01e89c3f3bde04e2a4cf7aa195bd1->leave($__internal_379649cdcaa494a65bcc7a55ee5e266c19d01e89c3f3bde04e2a4cf7aa195bd1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b63958132cdf643cfefd3fd6aea356350dea464a50963e1c4e4b8083ea1c9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b63958132cdf643cfefd3fd6aea356350dea464a50963e1c4e4b8083ea1c9e9->enter($__internal_7b63958132cdf643cfefd3fd6aea356350dea464a50963e1c4e4b8083ea1c9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b095bb3d35ceb50b2c626fb8c57c32c7faef9dfb92adcd274ba7288393f9f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b095bb3d35ceb50b2c626fb8c57c32c7faef9dfb92adcd274ba7288393f9f5d->enter($__internal_9b095bb3d35ceb50b2c626fb8c57c32c7faef9dfb92adcd274ba7288393f9f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9b095bb3d35ceb50b2c626fb8c57c32c7faef9dfb92adcd274ba7288393f9f5d->leave($__internal_9b095bb3d35ceb50b2c626fb8c57c32c7faef9dfb92adcd274ba7288393f9f5d_prof);

        
        $__internal_7b63958132cdf643cfefd3fd6aea356350dea464a50963e1c4e4b8083ea1c9e9->leave($__internal_7b63958132cdf643cfefd3fd6aea356350dea464a50963e1c4e4b8083ea1c9e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\portfoliomanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
