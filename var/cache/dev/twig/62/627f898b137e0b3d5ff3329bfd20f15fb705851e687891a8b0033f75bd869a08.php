<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c6252ee6918835da6997930b779235fce11d90078e58e7131c6d682736dded28 extends Twig_Template
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
        $__internal_cf5edb285f2971db973d8b0961bb8f2cf51a78a7359aeeea91ddb7fd50ec05a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5edb285f2971db973d8b0961bb8f2cf51a78a7359aeeea91ddb7fd50ec05a5->enter($__internal_cf5edb285f2971db973d8b0961bb8f2cf51a78a7359aeeea91ddb7fd50ec05a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cf5edb285f2971db973d8b0961bb8f2cf51a78a7359aeeea91ddb7fd50ec05a5->leave($__internal_cf5edb285f2971db973d8b0961bb8f2cf51a78a7359aeeea91ddb7fd50ec05a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
