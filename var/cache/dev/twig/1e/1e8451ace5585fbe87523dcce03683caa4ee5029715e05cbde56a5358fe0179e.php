<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dc48e7c2cab7fe61594392ab0352dad7cb41e54ec71fac711a3fe09a9780615 extends Twig_Template
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
        $__internal_430645e09db1619778b4c489d16bd4dd3e53f173669fc6ed6c3e87bb334f8481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430645e09db1619778b4c489d16bd4dd3e53f173669fc6ed6c3e87bb334f8481->enter($__internal_430645e09db1619778b4c489d16bd4dd3e53f173669fc6ed6c3e87bb334f8481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_af2152809276dee21943e2407d5536c3e4ad11b6831f5b879f557dec871ade54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2152809276dee21943e2407d5536c3e4ad11b6831f5b879f557dec871ade54->enter($__internal_af2152809276dee21943e2407d5536c3e4ad11b6831f5b879f557dec871ade54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430645e09db1619778b4c489d16bd4dd3e53f173669fc6ed6c3e87bb334f8481->leave($__internal_430645e09db1619778b4c489d16bd4dd3e53f173669fc6ed6c3e87bb334f8481_prof);

        
        $__internal_af2152809276dee21943e2407d5536c3e4ad11b6831f5b879f557dec871ade54->leave($__internal_af2152809276dee21943e2407d5536c3e4ad11b6831f5b879f557dec871ade54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2ef149894cc5629702c24a734e7c28187fcb64648551b0136ee3f4e07789510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ef149894cc5629702c24a734e7c28187fcb64648551b0136ee3f4e07789510->enter($__internal_a2ef149894cc5629702c24a734e7c28187fcb64648551b0136ee3f4e07789510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c030eb4e8c820c927c39bb7b37cb16b30fb673d9ed984ec44da928aacbec4c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c030eb4e8c820c927c39bb7b37cb16b30fb673d9ed984ec44da928aacbec4c0a->enter($__internal_c030eb4e8c820c927c39bb7b37cb16b30fb673d9ed984ec44da928aacbec4c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c030eb4e8c820c927c39bb7b37cb16b30fb673d9ed984ec44da928aacbec4c0a->leave($__internal_c030eb4e8c820c927c39bb7b37cb16b30fb673d9ed984ec44da928aacbec4c0a_prof);

        
        $__internal_a2ef149894cc5629702c24a734e7c28187fcb64648551b0136ee3f4e07789510->leave($__internal_a2ef149894cc5629702c24a734e7c28187fcb64648551b0136ee3f4e07789510_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf0fdafdd19bd706694a8fc5955d70a45d27294cd1f40cf4e65798c6a6f334e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0fdafdd19bd706694a8fc5955d70a45d27294cd1f40cf4e65798c6a6f334e4->enter($__internal_bf0fdafdd19bd706694a8fc5955d70a45d27294cd1f40cf4e65798c6a6f334e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76e96db3e59190fc72e102e4e945718b1844bf54f9ae082e53b3b8b465dcb58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e96db3e59190fc72e102e4e945718b1844bf54f9ae082e53b3b8b465dcb58e->enter($__internal_76e96db3e59190fc72e102e4e945718b1844bf54f9ae082e53b3b8b465dcb58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_76e96db3e59190fc72e102e4e945718b1844bf54f9ae082e53b3b8b465dcb58e->leave($__internal_76e96db3e59190fc72e102e4e945718b1844bf54f9ae082e53b3b8b465dcb58e_prof);

        
        $__internal_bf0fdafdd19bd706694a8fc5955d70a45d27294cd1f40cf4e65798c6a6f334e4->leave($__internal_bf0fdafdd19bd706694a8fc5955d70a45d27294cd1f40cf4e65798c6a6f334e4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c66b430f3a6e8d9df1e8c4f956a457c810478a74a99dbde2bacc1e4896d0ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c66b430f3a6e8d9df1e8c4f956a457c810478a74a99dbde2bacc1e4896d0ac6->enter($__internal_0c66b430f3a6e8d9df1e8c4f956a457c810478a74a99dbde2bacc1e4896d0ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da8b246edc0594e647266903441c69426b57a33207678c4d9b39994563393f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8b246edc0594e647266903441c69426b57a33207678c4d9b39994563393f76->enter($__internal_da8b246edc0594e647266903441c69426b57a33207678c4d9b39994563393f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_da8b246edc0594e647266903441c69426b57a33207678c4d9b39994563393f76->leave($__internal_da8b246edc0594e647266903441c69426b57a33207678c4d9b39994563393f76_prof);

        
        $__internal_0c66b430f3a6e8d9df1e8c4f956a457c810478a74a99dbde2bacc1e4896d0ac6->leave($__internal_0c66b430f3a6e8d9df1e8c4f956a457c810478a74a99dbde2bacc1e4896d0ac6_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/projetoSerializer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
