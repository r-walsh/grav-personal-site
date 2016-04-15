<?php

/* post.html.twig */
class __TwigTemplate_bf65e686ff53fb7cbf34d4002e77361f3c5c240ff89c539ed3745c48fd7381f5 extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1998497478")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* post.html.twig */
class __TwigTemplate_bf65e686ff53fb7cbf34d4002e77361f3c5c240ff89c539ed3745c48fd7381f5_1998497478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
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
        echo "<article class=\"post column small-12\">
    <header class=\"post--header\">
        <h1>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
        <date class=\"post--date\">";
        // line 7
        echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), true);
        echo "</date>
    </header>
    <section class=\"post--body\">
        ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </section>
</article>

<div class=\"post--meta column small-12\">
  <div class=\"columns small-3 medium-2\">
    <a class=\"post--avatar\" href=\"http://twitter.com/";
        // line 16
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\">
        <img src=\"https://en.gravatar.com/userimage/94364550/300ac1ae6a2a713f35e173f38ba3d78b.png?size=200\">
    </a>
  </div>

  <div class=\"columns small-6 medium-7\">
      <a href=\"http://twitter.com/";
        // line 22
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\">
          <h5 class=\"dark\">";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "</h5>
      </a>
      <p class=\"caption\">";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "</p>
  </div>

  <div class=\"columns small-3 medium-3\">
    <button class=\"button default hollow post--follow \">
        <a href=\"http://twitter.com/";
        // line 30
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\"><i class=\"fa fa-twitter show-for-medium\"></i> Follow</a>
    </button>
  </div>

</div>

<div class=\"post--nav column small-12\">
    ";
        // line 37
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
            // line 38
            echo "    <span class=\"prev\">
        <a href=\"";
            // line 39
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
            echo "\">
            <span class=\"arrow\">←</span>
            ";
            // line 41
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "title", array());
            echo "</a>
    </span>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
            // line 46
            echo "    <span class=\"next\">
        <a href=\"";
            // line 47
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "title", array());
            echo "
            <span class=\"arrow\">→</span>
        </a>
    </span>
    ";
        }
        // line 52
        echo "</div>

";
        // line 54
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "disqus", array())) {
            // line 55
            echo "<div class=\"archive readmore column small-12\">
    <h3>Comments</h3>
    ";
            // line 57
            $this->loadTemplate("partials/disqus.html.twig", "post.html.twig", 57)->display($context);
            // line 58
            echo "</div>
";
        }
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  166 => 58,  164 => 57,  160 => 55,  158 => 54,  154 => 52,  144 => 47,  141 => 46,  139 => 45,  136 => 44,  130 => 41,  125 => 39,  122 => 38,  120 => 37,  110 => 30,  102 => 25,  97 => 23,  93 => 22,  84 => 16,  75 => 10,  69 => 7,  65 => 6,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <article class="post column small-12">*/
/*     <header class="post--header">*/
/*         <h1>{{ page.title }}</h1>*/
/*         <date class="post--date">{{ page.date|nicetime(true) }}</date>*/
/*     </header>*/
/*     <section class="post--body">*/
/*         {{ page.content }}*/
/*     </section>*/
/* </article>*/
/* */
/* <div class="post--meta column small-12">*/
/*   <div class="columns small-3 medium-2">*/
/*     <a class="post--avatar" href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}">*/
/*         <img src="https://en.gravatar.com/userimage/94364550/300ac1ae6a2a713f35e173f38ba3d78b.png?size=200">*/
/*     </a>*/
/*   </div>*/
/* */
/*   <div class="columns small-6 medium-7">*/
/*       <a href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}">*/
/*           <h5 class="dark">{{ site.author.name }}</h5>*/
/*       </a>*/
/*       <p class="caption">{{ site.metadata.description }}</p>*/
/*   </div>*/
/* */
/*   <div class="columns small-3 medium-3">*/
/*     <button class="button default hollow post--follow ">*/
/*         <a href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}"><i class="fa fa-twitter show-for-medium"></i> Follow</a>*/
/*     </button>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* <div class="post--nav column small-12">*/
/*     {% if not page.isFirst %}*/
/*     <span class="prev">*/
/*         <a href="{{ page.nextSibling.url }}">*/
/*             <span class="arrow">←</span>*/
/*             {{ page.nextSibling.title }}</a>*/
/*     </span>*/
/*     {% endif %}*/
/* */
/*     {% if not page.isLast %}*/
/*     <span class="next">*/
/*         <a href="{{ page.prevSibling.url }}">{{ page.prevSibling.title }}*/
/*             <span class="arrow">→</span>*/
/*         </a>*/
/*     </span>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% if page.header.disqus %}*/
/* <div class="archive readmore column small-12">*/
/*     <h3>Comments</h3>*/
/*     {% include 'partials/disqus.html.twig' %}*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
