<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e493d968e25a79dbe4b79a3efc767aada32ce428af33dd9cbf3e65e3ddbc92b extends Twig_Template
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
        $__internal_013978b3261752d7e38aa3974c0b874c2b0855288138b01835991ffbfda54ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013978b3261752d7e38aa3974c0b874c2b0855288138b01835991ffbfda54ced->enter($__internal_013978b3261752d7e38aa3974c0b874c2b0855288138b01835991ffbfda54ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_47513bca5cd48e0c7d337407f160ec8f43293b2d1c9abc38ac58c49eae640f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47513bca5cd48e0c7d337407f160ec8f43293b2d1c9abc38ac58c49eae640f30->enter($__internal_47513bca5cd48e0c7d337407f160ec8f43293b2d1c9abc38ac58c49eae640f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013978b3261752d7e38aa3974c0b874c2b0855288138b01835991ffbfda54ced->leave($__internal_013978b3261752d7e38aa3974c0b874c2b0855288138b01835991ffbfda54ced_prof);

        
        $__internal_47513bca5cd48e0c7d337407f160ec8f43293b2d1c9abc38ac58c49eae640f30->leave($__internal_47513bca5cd48e0c7d337407f160ec8f43293b2d1c9abc38ac58c49eae640f30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82f9aa41e59c8c2f7f3a36833b9f839804a5447168be2ee3473d8a50414a6453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f9aa41e59c8c2f7f3a36833b9f839804a5447168be2ee3473d8a50414a6453->enter($__internal_82f9aa41e59c8c2f7f3a36833b9f839804a5447168be2ee3473d8a50414a6453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_39518e67f0a5d1acd9144889bb60ad876fa620815391149fad492ac5ec842ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39518e67f0a5d1acd9144889bb60ad876fa620815391149fad492ac5ec842ce6->enter($__internal_39518e67f0a5d1acd9144889bb60ad876fa620815391149fad492ac5ec842ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_39518e67f0a5d1acd9144889bb60ad876fa620815391149fad492ac5ec842ce6->leave($__internal_39518e67f0a5d1acd9144889bb60ad876fa620815391149fad492ac5ec842ce6_prof);

        
        $__internal_82f9aa41e59c8c2f7f3a36833b9f839804a5447168be2ee3473d8a50414a6453->leave($__internal_82f9aa41e59c8c2f7f3a36833b9f839804a5447168be2ee3473d8a50414a6453_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee800e8db93e7362948e62496cafb790938f293c2e1d3a0c00cd2dce95c33ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee800e8db93e7362948e62496cafb790938f293c2e1d3a0c00cd2dce95c33ed8->enter($__internal_ee800e8db93e7362948e62496cafb790938f293c2e1d3a0c00cd2dce95c33ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_080444fb19db59ca58d1c8eb3089154eb0d9417275f0cdad751459e51d6e5baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080444fb19db59ca58d1c8eb3089154eb0d9417275f0cdad751459e51d6e5baf->enter($__internal_080444fb19db59ca58d1c8eb3089154eb0d9417275f0cdad751459e51d6e5baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_080444fb19db59ca58d1c8eb3089154eb0d9417275f0cdad751459e51d6e5baf->leave($__internal_080444fb19db59ca58d1c8eb3089154eb0d9417275f0cdad751459e51d6e5baf_prof);

        
        $__internal_ee800e8db93e7362948e62496cafb790938f293c2e1d3a0c00cd2dce95c33ed8->leave($__internal_ee800e8db93e7362948e62496cafb790938f293c2e1d3a0c00cd2dce95c33ed8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0840f8d5adf51a74c4178f3e1cd77a23576c44ef6380687c3b1990685a9513c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0840f8d5adf51a74c4178f3e1cd77a23576c44ef6380687c3b1990685a9513c->enter($__internal_f0840f8d5adf51a74c4178f3e1cd77a23576c44ef6380687c3b1990685a9513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_771716b71f59224aaeee74f36c07d9d61da718247175bc6d3fe3352cecd250e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771716b71f59224aaeee74f36c07d9d61da718247175bc6d3fe3352cecd250e1->enter($__internal_771716b71f59224aaeee74f36c07d9d61da718247175bc6d3fe3352cecd250e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_771716b71f59224aaeee74f36c07d9d61da718247175bc6d3fe3352cecd250e1->leave($__internal_771716b71f59224aaeee74f36c07d9d61da718247175bc6d3fe3352cecd250e1_prof);

        
        $__internal_f0840f8d5adf51a74c4178f3e1cd77a23576c44ef6380687c3b1990685a9513c->leave($__internal_f0840f8d5adf51a74c4178f3e1cd77a23576c44ef6380687c3b1990685a9513c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/projetoSerializer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
