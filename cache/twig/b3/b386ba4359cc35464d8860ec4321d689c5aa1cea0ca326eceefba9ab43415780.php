<?php

/* catalog.html.twig */
class __TwigTemplate_95afa3cc082a045dafc731b41f6dc5117f5e0146160308228aa0fd16b4b2f7de extends Twig_Template
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
        $this->loadTemplate("catalog.html.twig", "catalog.html.twig", 1, "453856357")->display($context);
    }

    public function getTemplateName()
    {
        return "catalog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'default.html.twig' %}

\t{% set collection = page.collection( ) %}

\t{% block content %}
\t\t<section class=\"s-catalog uk-section uk-section-default\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-grid-divider\" uk-grid=\"\">
\t\t\t\t\t<div class=\"s-catalog-content uk-width-4-5@l uk-width-3-4@m uk-width-2-3@s\">
\t\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t\t{% include 'partials/catalog_card.html.twig' with { 'blog': page, 'page': child, 'truncate': true } %}

\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-sidedar uk-width-1-5@l uk-width-1-4@m uk-width-1-3@s uk-visible@s\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t\t\t\t\t<li class=\"uk-nav-header\">Каталог</li>
\t\t\t\t\t\t\t<li class=\"uk-nav-divider\"></li>
\t\t\t\t\t\t\t{% set side_nav = page
\t\t\t\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t\t\t\t.children %}
\t\t\t\t\t\t\t{% for subnav in side_nav %}
\t\t\t\t\t\t\t\t{% set current_page = ( subnav.active )
\t\t\t\t\t\t\t\t\t? 'uk-active'
\t\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t\t{% if subnav.published == 1 %}
\t\t\t\t\t\t\t\t\t<li class=\"{{current_page}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ subnav.url }}\">{{ subnav.title }}</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}
", "catalog.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\catalog.html.twig");
    }
}


/* catalog.html.twig */
class __TwigTemplate_95afa3cc082a045dafc731b41f6dc5117f5e0146160308228aa0fd16b4b2f7de_453856357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("default.html.twig", "catalog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<section class=\"s-catalog uk-section uk-section-default\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-grid-divider\" uk-grid=\"\">
\t\t\t\t\t<div class=\"s-catalog-content uk-width-4-5@l uk-width-3-4@m uk-width-2-3@s\">
\t\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("partials/catalog_card.html.twig", "catalog.html.twig", 11)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 12
            echo "
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-sidedar uk-width-1-5@l uk-width-1-4@m uk-width-1-3@s uk-visible@s\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t\t\t\t\t<li class=\"uk-nav-header\">Каталог</li>
\t\t\t\t\t\t\t<li class=\"uk-nav-divider\"></li>
\t\t\t\t\t\t\t";
        // line 20
        $context["side_nav"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/catalog"), "method"), "children", array());
        // line 23
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["side_nav"]) ? $context["side_nav"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["subnav"]) {
            // line 24
            echo "\t\t\t\t\t\t\t\t";
            $context["current_page"] = (($this->getAttribute($context["subnav"], "active", array())) ? ("uk-active") : (""));
            // line 27
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["subnav"], "published", array()) == 1)) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 29
                echo $this->getAttribute($context["subnav"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["subnav"], "title", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subnav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t";
    }

    public function getTemplateName()
    {
        return "catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 33,  193 => 32,  185 => 29,  180 => 28,  177 => 27,  174 => 24,  169 => 23,  167 => 20,  159 => 14,  144 => 12,  141 => 11,  124 => 10,  118 => 6,  115 => 5,  111 => 1,  109 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'default.html.twig' %}

\t{% set collection = page.collection( ) %}

\t{% block content %}
\t\t<section class=\"s-catalog uk-section uk-section-default\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-grid-divider\" uk-grid=\"\">
\t\t\t\t\t<div class=\"s-catalog-content uk-width-4-5@l uk-width-3-4@m uk-width-2-3@s\">
\t\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t\t{% include 'partials/catalog_card.html.twig' with { 'blog': page, 'page': child, 'truncate': true } %}

\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-sidedar uk-width-1-5@l uk-width-1-4@m uk-width-1-3@s uk-visible@s\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t\t\t\t\t<li class=\"uk-nav-header\">Каталог</li>
\t\t\t\t\t\t\t<li class=\"uk-nav-divider\"></li>
\t\t\t\t\t\t\t{% set side_nav = page
\t\t\t\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t\t\t\t.children %}
\t\t\t\t\t\t\t{% for subnav in side_nav %}
\t\t\t\t\t\t\t\t{% set current_page = ( subnav.active )
\t\t\t\t\t\t\t\t\t? 'uk-active'
\t\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t\t{% if subnav.published == 1 %}
\t\t\t\t\t\t\t\t\t<li class=\"{{current_page}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ subnav.url }}\">{{ subnav.title }}</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}
", "catalog.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\catalog.html.twig");
    }
}
