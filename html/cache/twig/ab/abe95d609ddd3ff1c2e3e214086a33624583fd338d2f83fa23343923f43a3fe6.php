<?php

/* partials/base.html.twig */
class __TwigTemplate_98ea38339500db23801d649328411c6ff397a4afc3b0412e38d1cdeaf2386347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) : ($this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/avatar.png")));
        // line 3
        $context["dates"] = $this->loadTemplate("macros/dates.twig", "partials/base.html.twig", 3);
        // line 4
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <title>";
        // line 11
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " - ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "\">
  <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicon.ico");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 14
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "\" href=\"/rss.xml\">

  ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

  ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
</head>

<body class=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "--body\">

    ";
        // line 36
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "
    ";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header", array())) {
            // line 39
            echo "        ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 39)->display($context);
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "profile", array())) {
            // line 43
            echo "        ";
            $this->loadTemplate("partials/profile.html.twig", "partials/base.html.twig", 43)->display($context);
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    <div class=\"row\">
      ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
      <div class=\"";
        // line 50
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
      ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "      </div>
    </div>

    ";
        // line 55
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "analytics", array())) {
            // line 56
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 56)->display($context);
            // line 57
            echo "    ";
        }
        // line 58
        echo "
</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/styles/app.min.css", 1 => 100), "method");
        // line 18
        echo "  ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/jquery/dist/jquery.min.js"), "method");
        // line 23
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/what-input/what-input.min.js"), "method");
        // line 24
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://bower_components/foundation-sites/dist/foundation.min.js"), "method");
        // line 25
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://dist/scripts/main.min.js"), "method");
        // line 26
        echo "  ";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "      ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 51,  179 => 48,  176 => 47,  172 => 26,  169 => 25,  166 => 24,  163 => 23,  160 => 22,  157 => 21,  153 => 18,  150 => 17,  147 => 16,  140 => 58,  137 => 57,  134 => 56,  132 => 55,  127 => 52,  125 => 51,  121 => 50,  118 => 49,  116 => 47,  112 => 45,  109 => 44,  106 => 43,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  93 => 38,  90 => 37,  88 => 36,  83 => 34,  72 => 27,  70 => 21,  64 => 19,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  41 => 11,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* {% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://dist/images/avatar.png') %}*/
/* {% import 'macros/dates.twig' as dates %}*/
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*   <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ site.title }}</title>*/
/*   <meta name="description" content="{{ site.metadata.description }}">*/
/*   <link rel="shortcut icon" href="{{ url('theme://dist/images/favicon.ico') }}" />*/
/*   <link rel="alternate" type="application/rss+xml" title="{{ site.title }}" href="/rss.xml">*/
/* */
/*   {% block stylesheets %}*/
/*     {% do assets.addCss('theme://dist/styles/app.min.css',100) %}*/
/*   {% endblock %}*/
/*   {{ assets.css() }}*/
/* */
/*   {% block javascripts %}*/
/*       {% do assets.addJs('theme://bower_components/jquery/dist/jquery.min.js') %}*/
/*       {% do assets.addJs('theme://bower_components/what-input/what-input.min.js') %}*/
/*       {% do assets.addJs('theme://bower_components/foundation-sites/dist/foundation.min.js') %}*/
/*       {% do assets.addJs('theme://dist/scripts/main.min.js') %}*/
/*   {% endblock %}*/
/*   {{ assets.js() }}*/
/* */
/*   <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>*/
/* */
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/* </head>*/
/* */
/* <body class="{{ page.header.class }}--body">*/
/* */
/*     {% include 'partials/navigation.html.twig' %}*/
/* */
/*     {% if page.header.header %}*/
/*         {% include 'partials/header.html.twig' %}*/
/*     {% endif %}*/
/* */
/*     {% if page.header.profile %}*/
/*         {% include 'partials/profile.html.twig' %}*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*       {% block header %}*/
/*       {% endblock %}*/
/* */
/*       <div class="{{ page.header.class }}">*/
/*       {% block content %}{% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% if site.analytics %}*/
/*     {% include 'partials/analytics.html.twig' %}*/
/*     {% endif %}*/
/* */
/* </body>*/
/* </html>*/
/* */
