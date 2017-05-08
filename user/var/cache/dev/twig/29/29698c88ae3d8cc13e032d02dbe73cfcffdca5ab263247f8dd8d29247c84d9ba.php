<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7bcabf9d743147698776f194e461f3a4c7e219769a0f4eb67bfb5f5605bfad79 extends Twig_Template
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
        $__internal_f591f05c6cce7ee0535724306381a4baf4e6cef2d46cc587ba983764d953acf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f591f05c6cce7ee0535724306381a4baf4e6cef2d46cc587ba983764d953acf3->enter($__internal_f591f05c6cce7ee0535724306381a4baf4e6cef2d46cc587ba983764d953acf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4b2b2af495e8112334d02c56dffc34d59e0671bf5e44fa02bd7712cf6978947f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2b2af495e8112334d02c56dffc34d59e0671bf5e44fa02bd7712cf6978947f->enter($__internal_4b2b2af495e8112334d02c56dffc34d59e0671bf5e44fa02bd7712cf6978947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f591f05c6cce7ee0535724306381a4baf4e6cef2d46cc587ba983764d953acf3->leave($__internal_f591f05c6cce7ee0535724306381a4baf4e6cef2d46cc587ba983764d953acf3_prof);

        
        $__internal_4b2b2af495e8112334d02c56dffc34d59e0671bf5e44fa02bd7712cf6978947f->leave($__internal_4b2b2af495e8112334d02c56dffc34d59e0671bf5e44fa02bd7712cf6978947f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b0945eb92e81c475a0861c770ee90ab956492f0c14f3cdbb97c0fb4a1794385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0945eb92e81c475a0861c770ee90ab956492f0c14f3cdbb97c0fb4a1794385->enter($__internal_4b0945eb92e81c475a0861c770ee90ab956492f0c14f3cdbb97c0fb4a1794385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fed1215e4379e55beb2fda50e604d8addc9ed5c5f42c202b3e6240b78fbfe6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed1215e4379e55beb2fda50e604d8addc9ed5c5f42c202b3e6240b78fbfe6d1->enter($__internal_fed1215e4379e55beb2fda50e604d8addc9ed5c5f42c202b3e6240b78fbfe6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fed1215e4379e55beb2fda50e604d8addc9ed5c5f42c202b3e6240b78fbfe6d1->leave($__internal_fed1215e4379e55beb2fda50e604d8addc9ed5c5f42c202b3e6240b78fbfe6d1_prof);

        
        $__internal_4b0945eb92e81c475a0861c770ee90ab956492f0c14f3cdbb97c0fb4a1794385->leave($__internal_4b0945eb92e81c475a0861c770ee90ab956492f0c14f3cdbb97c0fb4a1794385_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f92b9099870a98ab8fd4671906b5134a4565077ab0f112984581494a4776394d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92b9099870a98ab8fd4671906b5134a4565077ab0f112984581494a4776394d->enter($__internal_f92b9099870a98ab8fd4671906b5134a4565077ab0f112984581494a4776394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b33b5b58f7300173a403df867c3de7acfd6b8e7c8458eda4c93df9dae2e95282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33b5b58f7300173a403df867c3de7acfd6b8e7c8458eda4c93df9dae2e95282->enter($__internal_b33b5b58f7300173a403df867c3de7acfd6b8e7c8458eda4c93df9dae2e95282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b33b5b58f7300173a403df867c3de7acfd6b8e7c8458eda4c93df9dae2e95282->leave($__internal_b33b5b58f7300173a403df867c3de7acfd6b8e7c8458eda4c93df9dae2e95282_prof);

        
        $__internal_f92b9099870a98ab8fd4671906b5134a4565077ab0f112984581494a4776394d->leave($__internal_f92b9099870a98ab8fd4671906b5134a4565077ab0f112984581494a4776394d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b379f5cf7c58086d455045e8293f15420f261e70556b809e9eeabc2c51a95b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b379f5cf7c58086d455045e8293f15420f261e70556b809e9eeabc2c51a95b2->enter($__internal_0b379f5cf7c58086d455045e8293f15420f261e70556b809e9eeabc2c51a95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_754be693aec2dee1084375bed8d6048137d12e7069f186cf0f3eefedc3b4398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754be693aec2dee1084375bed8d6048137d12e7069f186cf0f3eefedc3b4398b->enter($__internal_754be693aec2dee1084375bed8d6048137d12e7069f186cf0f3eefedc3b4398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_754be693aec2dee1084375bed8d6048137d12e7069f186cf0f3eefedc3b4398b->leave($__internal_754be693aec2dee1084375bed8d6048137d12e7069f186cf0f3eefedc3b4398b_prof);

        
        $__internal_0b379f5cf7c58086d455045e8293f15420f261e70556b809e9eeabc2c51a95b2->leave($__internal_0b379f5cf7c58086d455045e8293f15420f261e70556b809e9eeabc2c51a95b2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\WWW\\symfony-micro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
