<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d1c86431bdbf3e565f7fdff85cc5892dd6a58ec8a6b2514a06b01eef6f9b72d7 extends Twig_Template
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
        $__internal_f4c96004f59f394f677355e3c8df2db6e1d0fde41c39a71e570925215a15ef7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c96004f59f394f677355e3c8df2db6e1d0fde41c39a71e570925215a15ef7a->enter($__internal_f4c96004f59f394f677355e3c8df2db6e1d0fde41c39a71e570925215a15ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f4c96004f59f394f677355e3c8df2db6e1d0fde41c39a71e570925215a15ef7a->leave($__internal_f4c96004f59f394f677355e3c8df2db6e1d0fde41c39a71e570925215a15ef7a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
