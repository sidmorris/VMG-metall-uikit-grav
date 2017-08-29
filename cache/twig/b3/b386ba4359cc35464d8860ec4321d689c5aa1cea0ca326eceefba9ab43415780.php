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
        $this->loadTemplate("catalog.html.twig", "catalog.html.twig", 1, "801796714")->display($context);
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
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection( ) %}

\t{% block content %}
\t\t{% set blog_image = page.media.images | first
\t\t\t.grayscale( )
\t\t\t.contrast( 20 )
\t\t\t.brightness( -100 )
\t\t\t.colorize( -35, 81, 122 ) %}

\t\t{% if blog_image %}
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t\t{% else %}
\t\t\t\t<div class=\"blog-header\">
\t\t\t\t{% endif %}
\t\t\t\t{{ page.content }}
\t\t\t</div>

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}

\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t{% include 'partials/catalog_item_page.html.twig' with { 'blog': page, 'page': child, 'truncate': true, } %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t{% include 'partials/pagination.html.twig' with { 'base_url': page.url, 'pagination': collection.params.pagination, } %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t\t{% include 'partials/catalog_sidebar.html.twig' with { 'blog': page } %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock %}

\t{% endembed %}
", "catalog.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\catalog.html.twig");
    }
}


/* catalog.html.twig */
class __TwigTemplate_95afa3cc082a045dafc731b41f6dc5117f5e0146160308228aa0fd16b4b2f7de_801796714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "catalog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 11
        echo "
\t\t";
        // line 12
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 13
            echo "\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t<div class=\"blog-header\">
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</div>

\t\t\t";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 21
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "catalog.html.twig", 21)->display($context);
            // line 22
            echo "\t\t\t";
        }
        // line 23
        echo "
\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t";
        // line 26
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
            // line 27
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("partials/catalog_item_page.html.twig", "catalog.html.twig", 27)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 28
            echo "\t\t\t\t\t";
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
        // line 29
        echo "
\t\t\t\t\t";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 31
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("partials/pagination.html.twig", "catalog.html.twig", 31)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 32
            echo "\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t\t";
        // line 35
        $this->loadTemplate("partials/catalog_sidebar.html.twig", "catalog.html.twig", 35)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 36
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        return array (  206 => 36,  204 => 35,  200 => 33,  197 => 32,  194 => 31,  192 => 30,  189 => 29,  175 => 28,  172 => 27,  155 => 26,  150 => 23,  147 => 22,  144 => 21,  142 => 20,  135 => 17,  131 => 15,  125 => 13,  123 => 12,  120 => 11,  117 => 6,  114 => 5,  110 => 1,  108 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection( ) %}

\t{% block content %}
\t\t{% set blog_image = page.media.images | first
\t\t\t.grayscale( )
\t\t\t.contrast( 20 )
\t\t\t.brightness( -100 )
\t\t\t.colorize( -35, 81, 122 ) %}

\t\t{% if blog_image %}
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t\t{% else %}
\t\t\t\t<div class=\"blog-header\">
\t\t\t\t{% endif %}
\t\t\t\t{{ page.content }}
\t\t\t</div>

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}

\t\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t{% include 'partials/catalog_item_page.html.twig' with { 'blog': page, 'page': child, 'truncate': true, } %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t{% include 'partials/pagination.html.twig' with { 'base_url': page.url, 'pagination': collection.params.pagination, } %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t\t{% include 'partials/catalog_sidebar.html.twig' with { 'blog': page } %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock %}

\t{% endembed %}
", "catalog.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\catalog.html.twig");
    }
}
