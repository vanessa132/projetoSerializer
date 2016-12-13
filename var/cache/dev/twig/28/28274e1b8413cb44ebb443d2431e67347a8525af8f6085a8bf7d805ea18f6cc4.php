<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d30cd01b7e16f3c91a7b34634d0ed385b53ce38cf9b51e2b5551eed1adae1608 extends Twig_Template
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
        $__internal_89e2a4d048b02e887c61fdf6506ea89502eabfb1e7b4932c3b7667aa219169d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e2a4d048b02e887c61fdf6506ea89502eabfb1e7b4932c3b7667aa219169d8->enter($__internal_89e2a4d048b02e887c61fdf6506ea89502eabfb1e7b4932c3b7667aa219169d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7aab7be65eb281733e2debb99e9e9a4b492dd62d579307af6ee696b62bab882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aab7be65eb281733e2debb99e9e9a4b492dd62d579307af6ee696b62bab882->enter($__internal_f7aab7be65eb281733e2debb99e9e9a4b492dd62d579307af6ee696b62bab882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e2a4d048b02e887c61fdf6506ea89502eabfb1e7b4932c3b7667aa219169d8->leave($__internal_89e2a4d048b02e887c61fdf6506ea89502eabfb1e7b4932c3b7667aa219169d8_prof);

        
        $__internal_f7aab7be65eb281733e2debb99e9e9a4b492dd62d579307af6ee696b62bab882->leave($__internal_f7aab7be65eb281733e2debb99e9e9a4b492dd62d579307af6ee696b62bab882_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16b68d76073d0a9a973ce99d5b4cafe830f1f7243ba7fccf7dd97f2f79b823b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b68d76073d0a9a973ce99d5b4cafe830f1f7243ba7fccf7dd97f2f79b823b8->enter($__internal_16b68d76073d0a9a973ce99d5b4cafe830f1f7243ba7fccf7dd97f2f79b823b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d900d37771d521202562172b78704f9128032887859ab9ab6c0df5cb721daf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d900d37771d521202562172b78704f9128032887859ab9ab6c0df5cb721daf9->enter($__internal_9d900d37771d521202562172b78704f9128032887859ab9ab6c0df5cb721daf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d900d37771d521202562172b78704f9128032887859ab9ab6c0df5cb721daf9->leave($__internal_9d900d37771d521202562172b78704f9128032887859ab9ab6c0df5cb721daf9_prof);

        
        $__internal_16b68d76073d0a9a973ce99d5b4cafe830f1f7243ba7fccf7dd97f2f79b823b8->leave($__internal_16b68d76073d0a9a973ce99d5b4cafe830f1f7243ba7fccf7dd97f2f79b823b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_151f2f3e1602bb07fb0911bf43c50217233e36c10bf131170f13b97d02ac74fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151f2f3e1602bb07fb0911bf43c50217233e36c10bf131170f13b97d02ac74fc->enter($__internal_151f2f3e1602bb07fb0911bf43c50217233e36c10bf131170f13b97d02ac74fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9844b8cad8a5f2344597c6b2d80a51fcd4bfcb176c46af8bc4a45c640520c41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9844b8cad8a5f2344597c6b2d80a51fcd4bfcb176c46af8bc4a45c640520c41b->enter($__internal_9844b8cad8a5f2344597c6b2d80a51fcd4bfcb176c46af8bc4a45c640520c41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9844b8cad8a5f2344597c6b2d80a51fcd4bfcb176c46af8bc4a45c640520c41b->leave($__internal_9844b8cad8a5f2344597c6b2d80a51fcd4bfcb176c46af8bc4a45c640520c41b_prof);

        
        $__internal_151f2f3e1602bb07fb0911bf43c50217233e36c10bf131170f13b97d02ac74fc->leave($__internal_151f2f3e1602bb07fb0911bf43c50217233e36c10bf131170f13b97d02ac74fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b53949d53e29e9193e7fd23c8babc26e1cb65440508ac3c828d0303d59e6c7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53949d53e29e9193e7fd23c8babc26e1cb65440508ac3c828d0303d59e6c7fd->enter($__internal_b53949d53e29e9193e7fd23c8babc26e1cb65440508ac3c828d0303d59e6c7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a863cef76505426668dd1dfacb69cbf3306a74f0ae12dfad2c8f0c5e7403017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a863cef76505426668dd1dfacb69cbf3306a74f0ae12dfad2c8f0c5e7403017->enter($__internal_4a863cef76505426668dd1dfacb69cbf3306a74f0ae12dfad2c8f0c5e7403017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a863cef76505426668dd1dfacb69cbf3306a74f0ae12dfad2c8f0c5e7403017->leave($__internal_4a863cef76505426668dd1dfacb69cbf3306a74f0ae12dfad2c8f0c5e7403017_prof);

        
        $__internal_b53949d53e29e9193e7fd23c8babc26e1cb65440508ac3c828d0303d59e6c7fd->leave($__internal_b53949d53e29e9193e7fd23c8babc26e1cb65440508ac3c828d0303d59e6c7fd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projetoSerializer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
