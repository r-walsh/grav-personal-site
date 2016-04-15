<?php

/* partials/post-item.html.twig */
class __TwigTemplate_b05febe2ef9f0733c543a2a549cc03968d3bfed568c285c18af6b7f33bcca861 extends Twig_Template
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
        echo "<div class=\"post-list\">
  <div class=\"post-list--data\">
      <a href=\"";
        // line 3
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "\"><h1 class=\"dark\">";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
        echo "</h1></a>
      <a href=\"";
        // line 4
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "\"><date>";
        echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), true);
        echo "</date></a>
      <p>";
        // line 5
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "summary", array());
        echo "</p><a href=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "\"><span class=\"read-more\">Read more...</span></a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="post-list">*/
/*   <div class="post-list--data">*/
/*       <a href="{{ post.url }}"><h1 class="dark">{{ post.title }}</h1></a>*/
/*       <a href="{{ post.url }}"><date>{{ post.date|nicetime(true) }}</date></a>*/
/*       <p>{{ post.summary }}</p><a href="{{ post.url }}"><span class="read-more">Read more...</span></a>*/
/*   </div>*/
/* </div>*/
/* */
