<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
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
        $__internal_a56e551a10a5ab3e04fed988fc2595c310e82c7fff0c34777bf11a0ef0be36de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56e551a10a5ab3e04fed988fc2595c310e82c7fff0c34777bf11a0ef0be36de->enter($__internal_a56e551a10a5ab3e04fed988fc2595c310e82c7fff0c34777bf11a0ef0be36de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b287a04e8711ed75a1bd36f4381a76730109ae85f24937a76fc7f4c8f6048928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b287a04e8711ed75a1bd36f4381a76730109ae85f24937a76fc7f4c8f6048928->enter($__internal_b287a04e8711ed75a1bd36f4381a76730109ae85f24937a76fc7f4c8f6048928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56e551a10a5ab3e04fed988fc2595c310e82c7fff0c34777bf11a0ef0be36de->leave($__internal_a56e551a10a5ab3e04fed988fc2595c310e82c7fff0c34777bf11a0ef0be36de_prof);

        
        $__internal_b287a04e8711ed75a1bd36f4381a76730109ae85f24937a76fc7f4c8f6048928->leave($__internal_b287a04e8711ed75a1bd36f4381a76730109ae85f24937a76fc7f4c8f6048928_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dde1f313991d059a9736dbec47269d28865057d000364fb96314f6fe65d7bf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde1f313991d059a9736dbec47269d28865057d000364fb96314f6fe65d7bf6e->enter($__internal_dde1f313991d059a9736dbec47269d28865057d000364fb96314f6fe65d7bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29bddae99205c38108376aea9107ffeee0aedf9f90f6edbe51f909404fe19d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bddae99205c38108376aea9107ffeee0aedf9f90f6edbe51f909404fe19d39->enter($__internal_29bddae99205c38108376aea9107ffeee0aedf9f90f6edbe51f909404fe19d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_29bddae99205c38108376aea9107ffeee0aedf9f90f6edbe51f909404fe19d39->leave($__internal_29bddae99205c38108376aea9107ffeee0aedf9f90f6edbe51f909404fe19d39_prof);

        
        $__internal_dde1f313991d059a9736dbec47269d28865057d000364fb96314f6fe65d7bf6e->leave($__internal_dde1f313991d059a9736dbec47269d28865057d000364fb96314f6fe65d7bf6e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a6a3ceaf8634924883980d3e56e64df44343b7cae2b28872536c60e48afce65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6a3ceaf8634924883980d3e56e64df44343b7cae2b28872536c60e48afce65->enter($__internal_1a6a3ceaf8634924883980d3e56e64df44343b7cae2b28872536c60e48afce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1894aa8f3c4ae848d4ad8d9a047c01cbb421aa8265d5df3dbc797db8a2f3752a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1894aa8f3c4ae848d4ad8d9a047c01cbb421aa8265d5df3dbc797db8a2f3752a->enter($__internal_1894aa8f3c4ae848d4ad8d9a047c01cbb421aa8265d5df3dbc797db8a2f3752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1894aa8f3c4ae848d4ad8d9a047c01cbb421aa8265d5df3dbc797db8a2f3752a->leave($__internal_1894aa8f3c4ae848d4ad8d9a047c01cbb421aa8265d5df3dbc797db8a2f3752a_prof);

        
        $__internal_1a6a3ceaf8634924883980d3e56e64df44343b7cae2b28872536c60e48afce65->leave($__internal_1a6a3ceaf8634924883980d3e56e64df44343b7cae2b28872536c60e48afce65_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_06b9ff7829195b5b31b59d50228c794548811419595e8c0fe357ac4033c41168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b9ff7829195b5b31b59d50228c794548811419595e8c0fe357ac4033c41168->enter($__internal_06b9ff7829195b5b31b59d50228c794548811419595e8c0fe357ac4033c41168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67aefb2038df1c577f1e0f439a31cb3b2abd64324b5455e182507d50ca9e259d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67aefb2038df1c577f1e0f439a31cb3b2abd64324b5455e182507d50ca9e259d->enter($__internal_67aefb2038df1c577f1e0f439a31cb3b2abd64324b5455e182507d50ca9e259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_67aefb2038df1c577f1e0f439a31cb3b2abd64324b5455e182507d50ca9e259d->leave($__internal_67aefb2038df1c577f1e0f439a31cb3b2abd64324b5455e182507d50ca9e259d_prof);

        
        $__internal_06b9ff7829195b5b31b59d50228c794548811419595e8c0fe357ac4033c41168->leave($__internal_06b9ff7829195b5b31b59d50228c794548811419595e8c0fe357ac4033c41168_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\portfoliomanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
