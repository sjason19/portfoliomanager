<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd4d0b3618671703a97832e58aa615f5095569cd894ffd56888c0502deac1983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4d0b3618671703a97832e58aa615f5095569cd894ffd56888c0502deac1983->enter($__internal_bd4d0b3618671703a97832e58aa615f5095569cd894ffd56888c0502deac1983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e65ff42b7ab1fc20e8e53e68b8b0b15dcd439933a2e0431320cb7c6aed75b7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65ff42b7ab1fc20e8e53e68b8b0b15dcd439933a2e0431320cb7c6aed75b7c0->enter($__internal_e65ff42b7ab1fc20e8e53e68b8b0b15dcd439933a2e0431320cb7c6aed75b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bd4d0b3618671703a97832e58aa615f5095569cd894ffd56888c0502deac1983->leave($__internal_bd4d0b3618671703a97832e58aa615f5095569cd894ffd56888c0502deac1983_prof);

        
        $__internal_e65ff42b7ab1fc20e8e53e68b8b0b15dcd439933a2e0431320cb7c6aed75b7c0->leave($__internal_e65ff42b7ab1fc20e8e53e68b8b0b15dcd439933a2e0431320cb7c6aed75b7c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36170ce5f61a0397ad07f5bf2f5d58a7cccd2d463bd43c9accb1ac744a664151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36170ce5f61a0397ad07f5bf2f5d58a7cccd2d463bd43c9accb1ac744a664151->enter($__internal_36170ce5f61a0397ad07f5bf2f5d58a7cccd2d463bd43c9accb1ac744a664151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d02468dad5b81d0a6495f63c685c59bdd16503d1a818b4f95a4ba4990006861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d02468dad5b81d0a6495f63c685c59bdd16503d1a818b4f95a4ba4990006861->enter($__internal_1d02468dad5b81d0a6495f63c685c59bdd16503d1a818b4f95a4ba4990006861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d02468dad5b81d0a6495f63c685c59bdd16503d1a818b4f95a4ba4990006861->leave($__internal_1d02468dad5b81d0a6495f63c685c59bdd16503d1a818b4f95a4ba4990006861_prof);

        
        $__internal_36170ce5f61a0397ad07f5bf2f5d58a7cccd2d463bd43c9accb1ac744a664151->leave($__internal_36170ce5f61a0397ad07f5bf2f5d58a7cccd2d463bd43c9accb1ac744a664151_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5f7afd4da3ca726ba800ccac818a9cb693fadd536f5ee02eabe6cff7df4fc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f7afd4da3ca726ba800ccac818a9cb693fadd536f5ee02eabe6cff7df4fc67->enter($__internal_f5f7afd4da3ca726ba800ccac818a9cb693fadd536f5ee02eabe6cff7df4fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b96d5cfb7875dde6965fc247e8e40dda1ed69616487003cc968350c89a61a2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96d5cfb7875dde6965fc247e8e40dda1ed69616487003cc968350c89a61a2e2->enter($__internal_b96d5cfb7875dde6965fc247e8e40dda1ed69616487003cc968350c89a61a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b96d5cfb7875dde6965fc247e8e40dda1ed69616487003cc968350c89a61a2e2->leave($__internal_b96d5cfb7875dde6965fc247e8e40dda1ed69616487003cc968350c89a61a2e2_prof);

        
        $__internal_f5f7afd4da3ca726ba800ccac818a9cb693fadd536f5ee02eabe6cff7df4fc67->leave($__internal_f5f7afd4da3ca726ba800ccac818a9cb693fadd536f5ee02eabe6cff7df4fc67_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d4f75948499fcbba307259fa4cb5c8f396c64d4ff82c524d487b2fe47a6637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d4f75948499fcbba307259fa4cb5c8f396c64d4ff82c524d487b2fe47a6637->enter($__internal_53d4f75948499fcbba307259fa4cb5c8f396c64d4ff82c524d487b2fe47a6637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_daf45d89b2e157355ff4fcb4d18f20edfc09eee20bcb9a4c0264966e06f31c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf45d89b2e157355ff4fcb4d18f20edfc09eee20bcb9a4c0264966e06f31c6c->enter($__internal_daf45d89b2e157355ff4fcb4d18f20edfc09eee20bcb9a4c0264966e06f31c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_daf45d89b2e157355ff4fcb4d18f20edfc09eee20bcb9a4c0264966e06f31c6c->leave($__internal_daf45d89b2e157355ff4fcb4d18f20edfc09eee20bcb9a4c0264966e06f31c6c_prof);

        
        $__internal_53d4f75948499fcbba307259fa4cb5c8f396c64d4ff82c524d487b2fe47a6637->leave($__internal_53d4f75948499fcbba307259fa4cb5c8f396c64d4ff82c524d487b2fe47a6637_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ba22c2a315cdca6a1fb82ee9d22116d1d28742621e927a761411b1d7dc0cc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba22c2a315cdca6a1fb82ee9d22116d1d28742621e927a761411b1d7dc0cc50->enter($__internal_3ba22c2a315cdca6a1fb82ee9d22116d1d28742621e927a761411b1d7dc0cc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7dc09066b818756fb9239321ac707879729995f8c3affccab22d647c06bb50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dc09066b818756fb9239321ac707879729995f8c3affccab22d647c06bb50f->enter($__internal_f7dc09066b818756fb9239321ac707879729995f8c3affccab22d647c06bb50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7dc09066b818756fb9239321ac707879729995f8c3affccab22d647c06bb50f->leave($__internal_f7dc09066b818756fb9239321ac707879729995f8c3affccab22d647c06bb50f_prof);

        
        $__internal_3ba22c2a315cdca6a1fb82ee9d22116d1d28742621e927a761411b1d7dc0cc50->leave($__internal_3ba22c2a315cdca6a1fb82ee9d22116d1d28742621e927a761411b1d7dc0cc50_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\portfoliomanager\\app\\Resources\\views\\base.html.twig");
    }
}
