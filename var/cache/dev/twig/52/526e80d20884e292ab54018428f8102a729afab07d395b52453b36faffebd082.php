<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c35d7fb1bdfde37f2d187844025bd4bffa82de74f442a1d923d9c2dcecf5d5ca extends Twig_Template
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
        $__internal_2067b9be181ab052b0bdc9852d20518cab1a54f90550f8f1aa758b7519781722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2067b9be181ab052b0bdc9852d20518cab1a54f90550f8f1aa758b7519781722->enter($__internal_2067b9be181ab052b0bdc9852d20518cab1a54f90550f8f1aa758b7519781722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8a131848592f21531af816229b8c6a9e82ec2930958b99d9ea995f6111a91b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a131848592f21531af816229b8c6a9e82ec2930958b99d9ea995f6111a91b76->enter($__internal_8a131848592f21531af816229b8c6a9e82ec2930958b99d9ea995f6111a91b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2067b9be181ab052b0bdc9852d20518cab1a54f90550f8f1aa758b7519781722->leave($__internal_2067b9be181ab052b0bdc9852d20518cab1a54f90550f8f1aa758b7519781722_prof);

        
        $__internal_8a131848592f21531af816229b8c6a9e82ec2930958b99d9ea995f6111a91b76->leave($__internal_8a131848592f21531af816229b8c6a9e82ec2930958b99d9ea995f6111a91b76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78daefbd45534604c9e25d8d3d7eec9da1b15aeec2958ce6a3905f9e6604014d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78daefbd45534604c9e25d8d3d7eec9da1b15aeec2958ce6a3905f9e6604014d->enter($__internal_78daefbd45534604c9e25d8d3d7eec9da1b15aeec2958ce6a3905f9e6604014d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf513f25954475ae2c95f0b0691b68fb5c9794efea7c1d9a07473a2d8219ac03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf513f25954475ae2c95f0b0691b68fb5c9794efea7c1d9a07473a2d8219ac03->enter($__internal_bf513f25954475ae2c95f0b0691b68fb5c9794efea7c1d9a07473a2d8219ac03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bf513f25954475ae2c95f0b0691b68fb5c9794efea7c1d9a07473a2d8219ac03->leave($__internal_bf513f25954475ae2c95f0b0691b68fb5c9794efea7c1d9a07473a2d8219ac03_prof);

        
        $__internal_78daefbd45534604c9e25d8d3d7eec9da1b15aeec2958ce6a3905f9e6604014d->leave($__internal_78daefbd45534604c9e25d8d3d7eec9da1b15aeec2958ce6a3905f9e6604014d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/projetoSerializer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
