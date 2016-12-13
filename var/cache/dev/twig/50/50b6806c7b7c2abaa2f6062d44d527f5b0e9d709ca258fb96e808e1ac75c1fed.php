<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_18dfb0dfc4dd05113152a8309f7f4f3504c85973b5fb7d7334d8accf9300981e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_312f168a36f945d3535724aabe6e706a4e589990fe20466eaa091cf970ad7334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312f168a36f945d3535724aabe6e706a4e589990fe20466eaa091cf970ad7334->enter($__internal_312f168a36f945d3535724aabe6e706a4e589990fe20466eaa091cf970ad7334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_21f1e7e9e14ab24cfa233a46ab872c4f6e25bfa30ef99771fa65bd7a99e4887e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f1e7e9e14ab24cfa233a46ab872c4f6e25bfa30ef99771fa65bd7a99e4887e->enter($__internal_21f1e7e9e14ab24cfa233a46ab872c4f6e25bfa30ef99771fa65bd7a99e4887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_312f168a36f945d3535724aabe6e706a4e589990fe20466eaa091cf970ad7334->leave($__internal_312f168a36f945d3535724aabe6e706a4e589990fe20466eaa091cf970ad7334_prof);

        
        $__internal_21f1e7e9e14ab24cfa233a46ab872c4f6e25bfa30ef99771fa65bd7a99e4887e->leave($__internal_21f1e7e9e14ab24cfa233a46ab872c4f6e25bfa30ef99771fa65bd7a99e4887e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/projetoSerializer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
