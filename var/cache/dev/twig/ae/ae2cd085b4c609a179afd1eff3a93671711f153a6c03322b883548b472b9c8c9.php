<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_df8e81be547b40edaa1545faf3cc8cb4828fe6d8116102cbe6b1453cab9c6a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5463c78f5e2ee63a81b708934653eef43c4057e5b04c947e04954fdabe6f92d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5463c78f5e2ee63a81b708934653eef43c4057e5b04c947e04954fdabe6f92d6->enter($__internal_5463c78f5e2ee63a81b708934653eef43c4057e5b04c947e04954fdabe6f92d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5463c78f5e2ee63a81b708934653eef43c4057e5b04c947e04954fdabe6f92d6->leave($__internal_5463c78f5e2ee63a81b708934653eef43c4057e5b04c947e04954fdabe6f92d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c3cfb8ae3a8a0b12feacac7217ddd12a3fabd6ba2a9af8d31abdbb0397d893a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3cfb8ae3a8a0b12feacac7217ddd12a3fabd6ba2a9af8d31abdbb0397d893a->enter($__internal_5c3cfb8ae3a8a0b12feacac7217ddd12a3fabd6ba2a9af8d31abdbb0397d893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_5c3cfb8ae3a8a0b12feacac7217ddd12a3fabd6ba2a9af8d31abdbb0397d893a->leave($__internal_5c3cfb8ae3a8a0b12feacac7217ddd12a3fabd6ba2a9af8d31abdbb0397d893a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
