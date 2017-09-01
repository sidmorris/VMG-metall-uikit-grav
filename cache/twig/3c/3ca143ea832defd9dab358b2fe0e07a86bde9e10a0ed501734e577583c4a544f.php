<?php

/* partials/base.html.twig */
class __TwigTemplate_829d08834ab1c85f45f1fcdec723f7576b29ae5a943dfd90cb1d0a1958202f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

\t<head>
\t\t";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "\t</head>

\t<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
\t\t<div class=\"uk-offcanvas-content\">
\t\t\t<div class=\"s-top-nav uk-section uk-section-muted uk-padding-remove-vertical\" uk-sticky=\"show-on-up: true; animation: uk-animation-slide-top\">
\t\t\t\t<div class=\"uk-container\">
\t\t\t\t\t<nav class=\"uk-navbar-container uk-navbar uk-navbar-transparent\">
\t\t\t\t\t\t<div class=\"uk-navbar-left uk-visible@s\">
\t\t\t\t\t\t\t<div class=\"uk-navbar-item\">
\t\t\t\t\t\t\t\t<a class=\"uk-navbar-item uk-logo\" href=\"";
        // line 43
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uk-navbar-center\">
\t\t\t\t\t\t\t<div class=\"uk-navbar-item uk-hidden@m\">
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: phone\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-phone-top\">";
        // line 49
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "s_phone", array());
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uk-navbar-item uk-visible@m\">
\t\t\t\t\t\t\t\t<ul class=\"s-nav uk-navbar-nav\">
\t\t\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("uk-active") : (""));
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 59
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uk-navbar-right\">
\t\t\t\t\t\t\t<div class=\"uk-navbar-item\">
\t\t\t\t\t\t\t\t";
        // line 68
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
            // line 70
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 70)->display($context);
            echo "</li>
\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uk-navbar-item uk-visible@m\">
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: phone\"></span>
\t\t\t\t\t\t\t\t<p class=\"s_phone-top\">";
        // line 75
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "s_phone", array());
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"uk-float-right uk-hidden@m\" uk-toggle=\"target: #menu\" type=\"button\" uk-icon=\"icon: menu; ratio: 1.8;\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>

\t\t\t";
        // line 84
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "
\t\t\t";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "
\t\t\t<footer class=\"s-footer uk-section uk-section-secondary\">
\t\t\t\t<div class=\"uk-container\">
\t\t\t\t\t<div uk-grid=\"\">
\t\t\t\t\t\t<div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: phone\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-footer-contact-label\">
\t\t\t\t\t\t\t\t\tТелефон:</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"s-footer-contact-item uk-width-expand\">
\t\t\t\t\t\t\t\t<p>";
        // line 100
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "s_phone", array());
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: mail\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-footer-contact-label\">E-Mail:</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"s-footer-contact-item uk-width-expand\">
\t\t\t\t\t\t\t\t<p>";
        // line 109
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "email", array());
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: location\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-footer-contact-label\">
\t\t\t\t\t\t\t\t\tАдрес:</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"s-footer-contact-item uk-width-expand\">
\t\t\t\t\t\t\t\t<p>";
        // line 119
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "s_address", array());
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-divider-icon\"></div>
\t\t\t\t\t<div class=\"s-menu-footer\">
\t\t\t\t\t\t<div class=\"s-menu-footer-continer uk-flex-center uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t";
        // line 126
        $context["sub_nav"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/catalog"), "method"), "children", array());
        // line 129
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sub_nav"]) ? $context["sub_nav"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 130
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!-- offcanvas -->
\t\t\t<div id=\"menu\" uk-offcanvas=\"flip: true; mode: reveal\">
\t\t\t\t<div class=\"s-offcanvas uk-offcanvas-bar\">
\t\t\t\t\t<button class=\"uk-offcanvas-close\" type=\"button\" uk-close=\"\"></button>
\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">

\t\t\t\t\t\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 143
            echo "\t\t\t\t\t\t\t";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("uk-active") : (""));
            // line 146
            echo "\t\t\t\t\t\t<li class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
\t\t\t\t\t\t\t<a href=\"";
            // line 147
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 148
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
\t\t\t\t\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_page"]) {
                // line 150
                echo "\t\t\t\t\t\t\t\t\t<ul class=\"uk-nav-sub\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 152
                echo $this->getAttribute($context["sub_page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["sub_page"], "title", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo "
\t\t\t\t\t|
\t\t\t\t";
        }
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
\t\t\t";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\"/>
\t\t\t<link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
\t\t\t<link rel=\"apple-touch-icon\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/apple-touch-icon.png");
        echo "\">
\t\t\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/apple-touch-icon-72x72.png");
        echo "\">
\t\t\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/apple-touch-icon-114x114.png");
        echo "\">
\t\t\t";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
\t\t\t";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t\t";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t\t";
        $this->getAttribute(        // line 23
(isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/site.min.css", 1 => 101), "method");
        // line 24
        echo "\t\t\t\t";
        $this->getAttribute(        // line 25
(isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 26
        echo "\t\t\t";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t";
        $this->getAttribute(        // line 30
(isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.min.js", 1 => 100), "method");
        // line 31
        echo "\t\t\t";
    }

    // line 84
    public function block_header($context, array $blocks = array())
    {
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        // line 87
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t";
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
        return array (  365 => 87,  362 => 86,  357 => 84,  353 => 31,  351 => 30,  349 => 29,  346 => 28,  342 => 26,  340 => 25,  338 => 24,  336 => 23,  334 => 22,  331 => 21,  324 => 32,  322 => 28,  317 => 27,  315 => 21,  311 => 20,  307 => 19,  303 => 18,  299 => 17,  295 => 16,  290 => 13,  288 => 12,  284 => 11,  277 => 9,  273 => 7,  270 => 6,  259 => 159,  251 => 156,  239 => 152,  235 => 150,  231 => 149,  227 => 148,  223 => 147,  218 => 146,  215 => 143,  211 => 142,  199 => 132,  188 => 130,  183 => 129,  181 => 126,  171 => 119,  158 => 109,  146 => 100,  133 => 89,  131 => 86,  128 => 85,  126 => 84,  114 => 75,  109 => 72,  104 => 70,  101 => 69,  99 => 68,  92 => 63,  82 => 59,  78 => 58,  73 => 57,  70 => 54,  66 => 53,  59 => 49,  48 => 43,  38 => 36,  34 => 34,  32 => 6,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute( config.themes, config.system.pages.theme ) %}
<!DOCTYPE html>
<html lang=\"ru\">

\t<head>
\t\t{% block head %}
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t{% if header.title %}{{ header.title|e('html') }}
\t\t\t\t\t|
\t\t\t\t{% endif %}{{ site.title|e('html') }}</title>
\t\t\t{% include 'partials/metadata.html.twig' %}
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\"/>
\t\t\t<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
\t\t\t<link rel=\"apple-touch-icon\" href=\"{{ url('theme://images/favicon/apple-touch-icon.png') }}\">
\t\t\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ url('theme://images/favicon/apple-touch-icon-72x72.png') }}\">
\t\t\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ url('theme://images/favicon/apple-touch-icon-114x114.png') }}\">
\t\t\t{% block stylesheets %}
\t\t\t\t{% do
\t\t\t\t\tassets.addCss( 'theme://css/site.min.css', 101 ) %}
\t\t\t\t{% do
\t\t\t\t\tassets.addCss( 'theme://css/font-awesome.min.css', 100 ) %}
\t\t\t{% endblock %}
\t\t\t{{ assets.css() }}
\t\t\t{% block javascripts %}
\t\t\t\t{% do
\t\t\t\t\tassets.addJs( 'theme://js/scripts.min.js', 100 ) %}
\t\t\t{% endblock %}
\t\t\t{{ assets.js() }}
\t\t{% endblock head %}
\t</head>

\t<body id=\"top\" class=\"{{ page.header.body_classes }}\">
\t\t<div class=\"uk-offcanvas-content\">
\t\t\t<div class=\"s-top-nav uk-section uk-section-muted uk-padding-remove-vertical\" uk-sticky=\"show-on-up: true; animation: uk-animation-slide-top\">
\t\t\t\t<div class=\"uk-container\">
\t\t\t\t\t<nav class=\"uk-navbar-container uk-navbar uk-navbar-transparent\">
\t\t\t\t\t\t<div class=\"uk-navbar-left uk-visible@s\">
\t\t\t\t\t\t\t<div class=\"uk-navbar-item\">
\t\t\t\t\t\t\t\t<a class=\"uk-navbar-item uk-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uk-navbar-center\">
\t\t\t\t\t\t\t<div class=\"uk-navbar-item uk-hidden@m\">
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: phone\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-phone-top\">{{ site.s_phone }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uk-navbar-item uk-visible@m\">
\t\t\t\t\t\t\t\t<ul class=\"s-nav uk-navbar-nav\">
\t\t\t\t\t\t\t\t\t{% for page in pages.children.visible %}
\t\t\t\t\t\t\t\t\t\t{% set current_page = ( page.active or page.activeChild )
\t\t\t\t\t\t\t\t\t\t\t? 'uk-active'
\t\t\t\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t\t\t\t<li class=\"{{ current_page }}\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ page.url }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ page.menu }}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uk-navbar-right\">
\t\t\t\t\t\t\t<div class=\"uk-navbar-item\">
\t\t\t\t\t\t\t\t{% if config.plugins.login.enabled and grav.user.username %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t{% include 'partials/login-status.html.twig' %}</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uk-navbar-item uk-visible@m\">
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: phone\"></span>
\t\t\t\t\t\t\t\t<p class=\"s_phone-top\">{{ site.s_phone }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"uk-float-right uk-hidden@m\" uk-toggle=\"target: #menu\" type=\"button\" uk-icon=\"icon: menu; ratio: 1.8;\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>

\t\t\t{% block header %}{% endblock %}

\t\t\t{% block content %}
\t\t\t\t{{ page.content }}
\t\t\t{% endblock %}

\t\t\t<footer class=\"s-footer uk-section uk-section-secondary\">
\t\t\t\t<div class=\"uk-container\">
\t\t\t\t\t<div uk-grid=\"\">
\t\t\t\t\t\t<div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: phone\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-footer-contact-label\">
\t\t\t\t\t\t\t\t\tТелефон:</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"s-footer-contact-item uk-width-expand\">
\t\t\t\t\t\t\t\t<p>{{ site.s_phone }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: mail\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-footer-contact-label\">E-Mail:</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"s-footer-contact-item uk-width-expand\">
\t\t\t\t\t\t\t\t<p>{{ site.author.email }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span uk-icon=\"icon: location\"></span>
\t\t\t\t\t\t\t\t<p class=\"s-footer-contact-label\">
\t\t\t\t\t\t\t\t\tАдрес:</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"s-footer-contact-item uk-width-expand\">
\t\t\t\t\t\t\t\t<p>{{ site.s_address }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-divider-icon\"></div>
\t\t\t\t\t<div class=\"s-menu-footer\">
\t\t\t\t\t\t<div class=\"s-menu-footer-continer uk-flex-center uk-child-width-auto\" uk-grid=\"\">
\t\t\t\t\t\t\t{% set sub_nav = page
\t\t\t\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t\t\t\t.children %}
\t\t\t\t\t\t\t{% for item in sub_nav %}
\t\t\t\t\t\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!-- offcanvas -->
\t\t\t<div id=\"menu\" uk-offcanvas=\"flip: true; mode: reveal\">
\t\t\t\t<div class=\"s-offcanvas uk-offcanvas-bar\">
\t\t\t\t\t<button class=\"uk-offcanvas-close\" type=\"button\" uk-close=\"\"></button>
\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">

\t\t\t\t\t\t{% for page in pages.children.visible %}
\t\t\t\t\t\t\t{% set current_page = ( page.active or page.activeChild )
\t\t\t\t\t\t\t\t? 'uk-active'
\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t<li class=\"{{ current_page }}\">
\t\t\t\t\t\t\t<a href=\"{{ page.url }}\">
\t\t\t\t\t\t\t\t{{ page.menu }}
\t\t\t\t\t\t\t\t{% for sub_page in page.children.visible %}
\t\t\t\t\t\t\t\t\t<ul class=\"uk-nav-sub\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{sub_page.url}}\">{{sub_page.title}}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}

\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html>
", "partials/base.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\partials\\base.html.twig");
    }
}
