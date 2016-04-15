<?php

/* partials/header.html.twig */
class __TwigTemplate_4af1a4500eb287a6415bcd049fac30cf502ee5154de71052fa8b8f24916413f4 extends Twig_Template
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
        // line 1
        echo "<header class=\"header\">
  <div class=\"header--image\" style=\"background-image:url(https://goo.gl/OdjI42);background-color:#000;\">
    <div class=\"row\">
      <div class=\"column small-12\">
        <h1>";
        // line 5
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h1>
        <h4>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "</h4>
      </div>
    </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <header class="header">*/
/*   <div class="header--image" style="background-image:url(https://goo.gl/OdjI42);background-color:#000;">*/
/*     <div class="row">*/
/*       <div class="column small-12">*/
/*         <h1>{{ site.title }}</h1>*/
/*         <h4>{{ site.metadata.description }}</h4>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
