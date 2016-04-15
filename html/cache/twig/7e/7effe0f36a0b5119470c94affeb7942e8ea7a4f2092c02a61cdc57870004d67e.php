<?php

/* error.html.twig */
class __TwigTemplate_0f7cba9272a78927f493f0c1ce3ab8b4b33a46391e01f4f06f2dbfe249d15263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"error\" class=\"columns small-12\">
        <div>
            <h1>Error ";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
            <p>
                ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="error" class="columns small-12">*/
/*         <div>*/
/*             <h1>Error {{ page.header.http_response_code }}</h1>*/
/*             <p>*/
/*                 {{ page.content }}*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
