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
        $this->loadTemplate("catalog.html.twig", "catalog.html.twig", 1, "1544321723")->display($context);
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
\t\t\t\t\t\t{% for item in collection %}
\t\t\t\t\t\t\t{% set catalog_image = item.media.images | first %}
\t\t\t\t\t\t\t<div class=\"s-card-product uk-card uk-card-hover uk-grid-collapse uk-margin-medium-bottom\" uk-grid=\"\" uk-lightbox=\"\">
\t\t\t\t\t\t\t\t<div class=\"uk-width-1-1\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"uk-card-title\">{{item.header.model}}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uk-text-small\">{{item.header.sub_model}}</span>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t\t\t\t\t\t\t{% if item.header.price %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"s-card-product-badge uk-badge\">{{item.header.price}}</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr class=\"uk-margin-small\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{catalog_image.url}}\">{{catalog_image}}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@m\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-card-body\">
\t\t\t\t\t\t\t\t\t\t<p>{{ item.content }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-sidedar uk-width-1-5@l uk-width-1-4@m uk-width-1-3@s uk-visible@s\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t\t\t\t\t<li class=\"uk-nav-header\">Каталог</li>
\t\t\t\t\t\t\t<li class=\"uk-nav-divider\"></li>
\t\t\t\t\t\t\t{% set sub_nav = page
\t\t\t\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t\t\t\t.children %}
\t\t\t\t\t\t\t{% for item in sub_nav %}
\t\t\t\t\t\t\t\t{% set current_page = ( item.active or item.activeChild )
\t\t\t\t\t\t\t\t\t? 'uk-active'
\t\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t\t{% if item.children.visible %}
\t\t\t\t\t\t\t\t\t<li class=\"{{current_page}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a>
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
class __TwigTemplate_95afa3cc082a045dafc731b41f6dc5117f5e0146160308228aa0fd16b4b2f7de_1544321723 extends Twig_Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "\t\t\t\t\t\t\t";
            $context["catalog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array()));
            // line 12
            echo "\t\t\t\t\t\t\t<div class=\"s-card-product uk-card uk-card-hover uk-grid-collapse uk-margin-medium-bottom\" uk-grid=\"\" uk-lightbox=\"\">
\t\t\t\t\t\t\t\t<div class=\"uk-width-1-1\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"uk-card-title\">";
            // line 16
            echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "model", array());
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uk-text-small\">";
            // line 17
            echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "sub_model", array());
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "price", array())) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"s-card-product-badge uk-badge\">";
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "price", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr class=\"uk-margin-small\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo $this->getAttribute((isset($context["catalog_image"]) ? $context["catalog_image"] : null), "url", array());
            echo "\">";
            echo (isset($context["catalog_image"]) ? $context["catalog_image"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@m\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-card-body\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 41
            echo $this->getAttribute($context["item"], "content", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-sidedar uk-width-1-5@l uk-width-1-4@m uk-width-1-3@s uk-visible@s\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t\t\t\t\t<li class=\"uk-nav-header\">Каталог</li>
\t\t\t\t\t\t\t<li class=\"uk-nav-divider\"></li>
\t\t\t\t\t\t\t";
        // line 52
        $context["sub_nav"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/catalog"), "method"), "children", array());
        // line 55
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sub_nav"]) ? $context["sub_nav"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t";
            $context["current_page"] = ((($this->getAttribute($context["item"], "active", array()) || $this->getAttribute($context["item"], "activeChild", array()))) ? ("uk-active") : (""));
            // line 59
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($context["item"], "children", array()), "visible", array())) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t<li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return array (  263 => 65,  257 => 64,  249 => 61,  244 => 60,  241 => 59,  238 => 56,  233 => 55,  231 => 52,  223 => 46,  212 => 41,  196 => 30,  188 => 24,  182 => 22,  180 => 21,  173 => 17,  169 => 16,  163 => 12,  160 => 11,  156 => 10,  150 => 6,  147 => 5,  143 => 1,  141 => 3,  19 => 1,);
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
\t\t\t\t\t\t{% for item in collection %}
\t\t\t\t\t\t\t{% set catalog_image = item.media.images | first %}
\t\t\t\t\t\t\t<div class=\"s-card-product uk-card uk-card-hover uk-grid-collapse uk-margin-medium-bottom\" uk-grid=\"\" uk-lightbox=\"\">
\t\t\t\t\t\t\t\t<div class=\"uk-width-1-1\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"uk-card-title\">{{item.header.model}}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uk-text-small\">{{item.header.sub_model}}</span>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t\t\t\t\t\t\t{% if item.header.price %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"s-card-product-badge uk-badge\">{{item.header.price}}</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr class=\"uk-margin-small\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{catalog_image.url}}\">{{catalog_image}}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"uk-width-1-2@m\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-card-body\">
\t\t\t\t\t\t\t\t\t\t<p>{{ item.content }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"s-sidedar uk-width-1-5@l uk-width-1-4@m uk-width-1-3@s uk-visible@s\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-nav-default\">
\t\t\t\t\t\t\t<li class=\"uk-nav-header\">Каталог</li>
\t\t\t\t\t\t\t<li class=\"uk-nav-divider\"></li>
\t\t\t\t\t\t\t{% set sub_nav = page
\t\t\t\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t\t\t\t.children %}
\t\t\t\t\t\t\t{% for item in sub_nav %}
\t\t\t\t\t\t\t\t{% set current_page = ( item.active or item.activeChild )
\t\t\t\t\t\t\t\t\t? 'uk-active'
\t\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t\t{% if item.children.visible %}
\t\t\t\t\t\t\t\t\t<li class=\"{{current_page}}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a>
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
