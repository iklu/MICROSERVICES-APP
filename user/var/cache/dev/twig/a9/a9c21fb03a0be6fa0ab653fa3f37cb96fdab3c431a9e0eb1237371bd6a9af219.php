<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e5f4bb2ede02d95d562982507f08e1084c923b11f9fd471221c9a6e16d113caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c955ddfea4bba3ff83abf0a258d435d89c1f3453c151d1dba3d4f33d7811c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c955ddfea4bba3ff83abf0a258d435d89c1f3453c151d1dba3d4f33d7811c19->enter($__internal_0c955ddfea4bba3ff83abf0a258d435d89c1f3453c151d1dba3d4f33d7811c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_78967f4891cebaf4d4022e0fec2846956cdfaa6e14a423f69029141ab3f7b613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78967f4891cebaf4d4022e0fec2846956cdfaa6e14a423f69029141ab3f7b613->enter($__internal_78967f4891cebaf4d4022e0fec2846956cdfaa6e14a423f69029141ab3f7b613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c955ddfea4bba3ff83abf0a258d435d89c1f3453c151d1dba3d4f33d7811c19->leave($__internal_0c955ddfea4bba3ff83abf0a258d435d89c1f3453c151d1dba3d4f33d7811c19_prof);

        
        $__internal_78967f4891cebaf4d4022e0fec2846956cdfaa6e14a423f69029141ab3f7b613->leave($__internal_78967f4891cebaf4d4022e0fec2846956cdfaa6e14a423f69029141ab3f7b613_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f133249e15ecd871e025747cf5a4116f97fb16c8176dcc753c8c42fa0ac5a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f133249e15ecd871e025747cf5a4116f97fb16c8176dcc753c8c42fa0ac5a69->enter($__internal_7f133249e15ecd871e025747cf5a4116f97fb16c8176dcc753c8c42fa0ac5a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2edbbc6eee7b3c54c1c5126a30189975e58c5e22f43dbde98e69262df8a718b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edbbc6eee7b3c54c1c5126a30189975e58c5e22f43dbde98e69262df8a718b7->enter($__internal_2edbbc6eee7b3c54c1c5126a30189975e58c5e22f43dbde98e69262df8a718b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2edbbc6eee7b3c54c1c5126a30189975e58c5e22f43dbde98e69262df8a718b7->leave($__internal_2edbbc6eee7b3c54c1c5126a30189975e58c5e22f43dbde98e69262df8a718b7_prof);

        
        $__internal_7f133249e15ecd871e025747cf5a4116f97fb16c8176dcc753c8c42fa0ac5a69->leave($__internal_7f133249e15ecd871e025747cf5a4116f97fb16c8176dcc753c8c42fa0ac5a69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\WWW\\symfony-micro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
