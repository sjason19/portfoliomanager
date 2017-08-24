<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eee6c8ba47f50ab4bf3c8eb04f85d51188d77f1ebfae32f057665b5a4d22717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eee6c8ba47f50ab4bf3c8eb04f85d51188d77f1ebfae32f057665b5a4d22717->enter($__internal_2eee6c8ba47f50ab4bf3c8eb04f85d51188d77f1ebfae32f057665b5a4d22717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e5dbd0d282709621454661483feb55c718a3ac0ba4fbf47802a5eb017c7f9cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dbd0d282709621454661483feb55c718a3ac0ba4fbf47802a5eb017c7f9cf8->enter($__internal_e5dbd0d282709621454661483feb55c718a3ac0ba4fbf47802a5eb017c7f9cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2eee6c8ba47f50ab4bf3c8eb04f85d51188d77f1ebfae32f057665b5a4d22717->leave($__internal_2eee6c8ba47f50ab4bf3c8eb04f85d51188d77f1ebfae32f057665b5a4d22717_prof);

        
        $__internal_e5dbd0d282709621454661483feb55c718a3ac0ba4fbf47802a5eb017c7f9cf8->leave($__internal_e5dbd0d282709621454661483feb55c718a3ac0ba4fbf47802a5eb017c7f9cf8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_801cbb0f3ad45a387bf39c90a5e8ab088b6f5192edecdfa099570104d376418c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801cbb0f3ad45a387bf39c90a5e8ab088b6f5192edecdfa099570104d376418c->enter($__internal_801cbb0f3ad45a387bf39c90a5e8ab088b6f5192edecdfa099570104d376418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f47d3396a55504f2c71ca7232a3781fa77876bf0ce9ec6c8fedb15c803627bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f47d3396a55504f2c71ca7232a3781fa77876bf0ce9ec6c8fedb15c803627bf->enter($__internal_8f47d3396a55504f2c71ca7232a3781fa77876bf0ce9ec6c8fedb15c803627bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8f47d3396a55504f2c71ca7232a3781fa77876bf0ce9ec6c8fedb15c803627bf->leave($__internal_8f47d3396a55504f2c71ca7232a3781fa77876bf0ce9ec6c8fedb15c803627bf_prof);

        
        $__internal_801cbb0f3ad45a387bf39c90a5e8ab088b6f5192edecdfa099570104d376418c->leave($__internal_801cbb0f3ad45a387bf39c90a5e8ab088b6f5192edecdfa099570104d376418c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c648403c4dfb249a9490926a3ab1444a17fa19e9267889cfbbd44b39e23fa5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c648403c4dfb249a9490926a3ab1444a17fa19e9267889cfbbd44b39e23fa5c->enter($__internal_9c648403c4dfb249a9490926a3ab1444a17fa19e9267889cfbbd44b39e23fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa7f8a629cccc526f634a7170db7db35ce2e43886cc270e47527bf2873a64f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7f8a629cccc526f634a7170db7db35ce2e43886cc270e47527bf2873a64f5f->enter($__internal_fa7f8a629cccc526f634a7170db7db35ce2e43886cc270e47527bf2873a64f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fa7f8a629cccc526f634a7170db7db35ce2e43886cc270e47527bf2873a64f5f->leave($__internal_fa7f8a629cccc526f634a7170db7db35ce2e43886cc270e47527bf2873a64f5f_prof);

        
        $__internal_9c648403c4dfb249a9490926a3ab1444a17fa19e9267889cfbbd44b39e23fa5c->leave($__internal_9c648403c4dfb249a9490926a3ab1444a17fa19e9267889cfbbd44b39e23fa5c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0a9bc37b78295f84843338f72780f65e437faa53dfe4c7bd77b79168537fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0a9bc37b78295f84843338f72780f65e437faa53dfe4c7bd77b79168537fc9->enter($__internal_fc0a9bc37b78295f84843338f72780f65e437faa53dfe4c7bd77b79168537fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64ef5b9964952e1a52bae366c1a39c4a5b9ea2838a5e7a5d9a0cffbc4f5b7bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ef5b9964952e1a52bae366c1a39c4a5b9ea2838a5e7a5d9a0cffbc4f5b7bd0->enter($__internal_64ef5b9964952e1a52bae366c1a39c4a5b9ea2838a5e7a5d9a0cffbc4f5b7bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64ef5b9964952e1a52bae366c1a39c4a5b9ea2838a5e7a5d9a0cffbc4f5b7bd0->leave($__internal_64ef5b9964952e1a52bae366c1a39c4a5b9ea2838a5e7a5d9a0cffbc4f5b7bd0_prof);

        
        $__internal_fc0a9bc37b78295f84843338f72780f65e437faa53dfe4c7bd77b79168537fc9->leave($__internal_fc0a9bc37b78295f84843338f72780f65e437faa53dfe4c7bd77b79168537fc9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\portfoliomanager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
