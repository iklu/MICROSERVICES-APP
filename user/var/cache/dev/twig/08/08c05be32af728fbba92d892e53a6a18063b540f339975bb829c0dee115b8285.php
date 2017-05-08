<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5eb7cdf718b5894e596a4fab87d9fe5c7f432b2971be0504bb1911c028ea537d extends Twig_Template
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
        $__internal_39a3d61e647dec1ad63c6b993b230a092e5f7309d9b10aaa4d9db5a1bc080baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a3d61e647dec1ad63c6b993b230a092e5f7309d9b10aaa4d9db5a1bc080baf->enter($__internal_39a3d61e647dec1ad63c6b993b230a092e5f7309d9b10aaa4d9db5a1bc080baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea9b828faa91f390bb3a8f23469d14c22fab9aebd0f1afdc08b30d7151674224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9b828faa91f390bb3a8f23469d14c22fab9aebd0f1afdc08b30d7151674224->enter($__internal_ea9b828faa91f390bb3a8f23469d14c22fab9aebd0f1afdc08b30d7151674224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a3d61e647dec1ad63c6b993b230a092e5f7309d9b10aaa4d9db5a1bc080baf->leave($__internal_39a3d61e647dec1ad63c6b993b230a092e5f7309d9b10aaa4d9db5a1bc080baf_prof);

        
        $__internal_ea9b828faa91f390bb3a8f23469d14c22fab9aebd0f1afdc08b30d7151674224->leave($__internal_ea9b828faa91f390bb3a8f23469d14c22fab9aebd0f1afdc08b30d7151674224_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0255584c6d0a3cb4bef53839c481353c525b8e09ee23688371338b38c7e41b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0255584c6d0a3cb4bef53839c481353c525b8e09ee23688371338b38c7e41b5a->enter($__internal_0255584c6d0a3cb4bef53839c481353c525b8e09ee23688371338b38c7e41b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b0b406bc3af3bef673b0a292d546cc671613dc4053f8353883367d0e63a143df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b406bc3af3bef673b0a292d546cc671613dc4053f8353883367d0e63a143df->enter($__internal_b0b406bc3af3bef673b0a292d546cc671613dc4053f8353883367d0e63a143df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0b406bc3af3bef673b0a292d546cc671613dc4053f8353883367d0e63a143df->leave($__internal_b0b406bc3af3bef673b0a292d546cc671613dc4053f8353883367d0e63a143df_prof);

        
        $__internal_0255584c6d0a3cb4bef53839c481353c525b8e09ee23688371338b38c7e41b5a->leave($__internal_0255584c6d0a3cb4bef53839c481353c525b8e09ee23688371338b38c7e41b5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab06f2d25445623a369c5d7ff836461ac0a147ac492c896d0e678c8e76ecc38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab06f2d25445623a369c5d7ff836461ac0a147ac492c896d0e678c8e76ecc38d->enter($__internal_ab06f2d25445623a369c5d7ff836461ac0a147ac492c896d0e678c8e76ecc38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6bc02016843a225590a9fd0470f090d9815f012751ae31b08f87799f6b8ac6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc02016843a225590a9fd0470f090d9815f012751ae31b08f87799f6b8ac6d5->enter($__internal_6bc02016843a225590a9fd0470f090d9815f012751ae31b08f87799f6b8ac6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6bc02016843a225590a9fd0470f090d9815f012751ae31b08f87799f6b8ac6d5->leave($__internal_6bc02016843a225590a9fd0470f090d9815f012751ae31b08f87799f6b8ac6d5_prof);

        
        $__internal_ab06f2d25445623a369c5d7ff836461ac0a147ac492c896d0e678c8e76ecc38d->leave($__internal_ab06f2d25445623a369c5d7ff836461ac0a147ac492c896d0e678c8e76ecc38d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b43353eedb8c7a0e3b6eb33098be388ffadb2cd2e852f0e2917adf056f9b834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b43353eedb8c7a0e3b6eb33098be388ffadb2cd2e852f0e2917adf056f9b834->enter($__internal_2b43353eedb8c7a0e3b6eb33098be388ffadb2cd2e852f0e2917adf056f9b834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a3051ece3cc3e8e130df5298d7b491fed453a07c4e50c8157cf9b16cb7311c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3051ece3cc3e8e130df5298d7b491fed453a07c4e50c8157cf9b16cb7311c1->enter($__internal_0a3051ece3cc3e8e130df5298d7b491fed453a07c4e50c8157cf9b16cb7311c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_0a3051ece3cc3e8e130df5298d7b491fed453a07c4e50c8157cf9b16cb7311c1->leave($__internal_0a3051ece3cc3e8e130df5298d7b491fed453a07c4e50c8157cf9b16cb7311c1_prof);

        
        $__internal_2b43353eedb8c7a0e3b6eb33098be388ffadb2cd2e852f0e2917adf056f9b834->leave($__internal_2b43353eedb8c7a0e3b6eb33098be388ffadb2cd2e852f0e2917adf056f9b834_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\WWW\\symfony-micro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
