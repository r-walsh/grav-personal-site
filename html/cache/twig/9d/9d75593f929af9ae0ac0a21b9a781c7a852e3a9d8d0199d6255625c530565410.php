<?php

/* macros/dates.twig */
class __TwigTemplate_e63129d38f033d015195a367cb4cd3830cc1e9cbbb4bc6d839043de33332d38e extends Twig_Template
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
        // line 5
        echo "
";
        // line 10
        echo "
";
    }

    // line 1
    public function gettranslateMonths($__index__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "index" => $__index__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["months"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "translate", array(0 => array(0 => "MONTHS_OF_THE_YEAR")), "method"), ",");
            // line 3
            echo $this->getAttribute((isset($context["months"]) ? $context["months"] : null), ((isset($context["index"]) ? $context["index"] : null) - 1), array(), "array");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function gettranslateDays($__index__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "index" => $__index__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            $context["days"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "translate", array(0 => array(0 => "DAYS_OF_THE_WEEK")), "method"), ",");
            // line 8
            echo $this->getAttribute((isset($context["days"]) ? $context["days"] : null), ((isset($context["index"]) ? $context["index"] : null) - 1), array(), "array");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/dates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  66 => 7,  54 => 6,  41 => 3,  39 => 2,  27 => 1,  22 => 10,  19 => 5,);
    }
}
/* {% macro translateMonths(index) %}*/
/* {% set months = grav.language.translate(['MONTHS_OF_THE_YEAR'])|split(',') %}*/
/* {{ months[index - 1]}}*/
/* {% endmacro %}*/
/* */
/* {% macro translateDays(index) %}*/
/* {% set days = grav.language.translate(['DAYS_OF_THE_WEEK'])|split(',') %}*/
/* {{ days[index - 1]}}*/
/* {% endmacro %}*/
/* */
/* */
