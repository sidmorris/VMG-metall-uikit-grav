<?php

/* catalog.html.twig */
class __TwigTemplate_fa750498d04d544df188fef5e596ce45cea1a037b3be8293720f9466907dcd19 extends Twig_Template
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
        $this->loadTemplate("catalog.html.twig", "catalog.html.twig", 1, "1878350261")->display($context);
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

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">



\t\t\t\t{% for child in collection %}

\t\t\t\t<div class=\"s-card-product uk-card uk-card-default uk-grid-collapse\" uk-grid=\"\" uk-lightbox=\"\">
\t\t\t\t  <div class=\"uk-width-1-1\">
\t\t\t\t    <div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t      <div class=\"uk-width-1-2@s\">
\t\t\t\t        <h3 class=\"uk-card-title\">{{child.header.model}}<span class=\"uk-text-small\">{{child.header.sub_model}}</span></h3>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"uk-width-1-2@s\"><span class=\"s-card-product-badge uk-badge\">{{child.header.price}}</span></div>
\t\t\t\t    </div>
\t\t\t\t    <hr class=\"uk-margin-small\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\">
\t\t\t\t    <div class=\"uk-inline uk-dark uk-transition-toggle\"><a href=\"img/light.jpg\"><img src=\"img/light.jpg\">
\t\t\t\t        <div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t          <div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t        </div></a></div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"uk-width-1-2@m\">
\t\t\t\t    <div class=\"uk-card-body\">
\t\t\t\t      <p>{{ page.content }}</p>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>


\t\t\t    {% endfor %}



\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% set sub_nav = page
\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t.children %}
\t\t\t\t{% for item in sub_nav %}
\t\t\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "catalog.html.twig", "/opt/lampp/htdocs/VMG-metall-uikit-grav/user/themes/vmg-metall/templates/catalog.html.twig");
    }
}


/* catalog.html.twig */
class __TwigTemplate_fa750498d04d544df188fef5e596ce45cea1a037b3be8293720f9466907dcd19_1878350261 extends Twig_Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 7
        echo "
\t\t";
        // line 8
        if (($context["blog_image"] ?? null)) {
            // line 9
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 11
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 13
        echo "\t\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>

\t\t\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 17
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "catalog.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "
\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">



\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 26
            echo "
\t\t\t\t<div class=\"s-card-product uk-card uk-card-default uk-grid-collapse\" uk-grid=\"\" uk-lightbox=\"\">
\t\t\t\t  <div class=\"uk-width-1-1\">
\t\t\t\t    <div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t      <div class=\"uk-width-1-2@s\">
\t\t\t\t        <h3 class=\"uk-card-title\">";
            // line 31
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "model", array());
            echo "<span class=\"uk-text-small\">";
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "sub_model", array());
            echo "</span></h3>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"uk-width-1-2@s\"><span class=\"s-card-product-badge uk-badge\">";
            // line 33
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "price", array());
            echo "</span></div>
\t\t\t\t    </div>
\t\t\t\t    <hr class=\"uk-margin-small\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\">
\t\t\t\t    <div class=\"uk-inline uk-dark uk-transition-toggle\"><a href=\"img/light.jpg\"><img src=\"img/light.jpg\">
\t\t\t\t        <div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t          <div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t        </div></a></div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"uk-width-1-2@m\">
\t\t\t\t    <div class=\"uk-card-body\">
\t\t\t\t      <p>";
            // line 45
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>


\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "


\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 57
        $context["sub_nav"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/catalog"), "method"), "children", array());
        // line 60
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sub_nav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t</div>
\t\t</div>
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
        return array (  256 => 63,  245 => 61,  240 => 60,  238 => 57,  231 => 52,  218 => 45,  203 => 33,  196 => 31,  189 => 26,  185 => 25,  177 => 19,  174 => 18,  171 => 17,  169 => 16,  162 => 13,  158 => 11,  152 => 9,  150 => 8,  147 => 7,  144 => 6,  141 => 5,  137 => 1,  135 => 3,  19 => 1,);
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

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>

\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">



\t\t\t\t{% for child in collection %}

\t\t\t\t<div class=\"s-card-product uk-card uk-card-default uk-grid-collapse\" uk-grid=\"\" uk-lightbox=\"\">
\t\t\t\t  <div class=\"uk-width-1-1\">
\t\t\t\t    <div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t      <div class=\"uk-width-1-2@s\">
\t\t\t\t        <h3 class=\"uk-card-title\">{{child.header.model}}<span class=\"uk-text-small\">{{child.header.sub_model}}</span></h3>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"uk-width-1-2@s\"><span class=\"s-card-product-badge uk-badge\">{{child.header.price}}</span></div>
\t\t\t\t    </div>
\t\t\t\t    <hr class=\"uk-margin-small\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\">
\t\t\t\t    <div class=\"uk-inline uk-dark uk-transition-toggle\"><a href=\"img/light.jpg\"><img src=\"img/light.jpg\">
\t\t\t\t        <div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t          <div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t        </div></a></div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"uk-width-1-2@m\">
\t\t\t\t    <div class=\"uk-card-body\">
\t\t\t\t      <p>{{ page.content }}</p>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>


\t\t\t    {% endfor %}



\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% set sub_nav = page
\t\t\t\t\t.find( '/catalog' )
\t\t\t\t\t.children %}
\t\t\t\t{% for item in sub_nav %}
\t\t\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "catalog.html.twig", "/opt/lampp/htdocs/VMG-metall-uikit-grav/user/themes/vmg-metall/templates/catalog.html.twig");
    }
}
