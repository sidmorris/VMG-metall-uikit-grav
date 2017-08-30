<?php

/* home.html.twig */
class __TwigTemplate_0e32f3c1d098672c443e28a068c6557bc9bc7e6abe1e93d1ac5177866a19e0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "
\t<!-- header section -->
\t<div class=\"s-header uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t<h1 class=\"s-header-title\">Металлоконструкции<br>
\t\t\t\t<span>на заказ</span>
\t\t\t</h1>
\t\t\t<div class=\"s-header-promo uk-grid-small uk-child-width-1-2@m\" uk-grid=\"\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "promo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "\t\t\t\t\t<a class=\"s-header-promo-item\" href=\"";
            echo $this->getAttribute($context["item"], "link", array());
            echo "\">
\t\t\t\t\t\t<span uk-icon=\"icon: bookmark; ratio: 1.2\"></span>
\t\t\t\t\t\t<div class=\"s-promo-desc\">";
            // line 15
            echo $this->getAttribute($context["item"], "text", array());
            echo "</div>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end header -->

\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 24
            echo "\t\t";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t<!-- product section -->

\t<div class=\"s-section-product uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t<h3 class=\"s-section-title\">Наша продукция</h3>
\t\t\t<div class=\"uk-flex-center uk-child-width-1-3@l uk-child-width-1-2@s\" uk-grid=\"\">

\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "product", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "\t\t\t\t\t<div class=\"s-card\">
\t\t\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t\t\t<div class=\"uk-card-title\">";
            // line 38
            echo $this->getAttribute($context["item"], "text", array());
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->getAttribute($context["item"], "link", array());
            echo "\"><img src=\"/user/pages/01.home/";
            echo $this->getAttribute($context["item"], "img", array());
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end product section -->

\t<!-- section gallery -->

\t<div class=\"s-section-gallery uk-section uk-section-secondary\">
\t\t<div class=\"uk-container\">
\t\t\t<h3 class=\"s-section-title\">Наши работы</h3>
\t\t</div>
\t\t<div class=\"s-gallery-grid uk-child-width-1-2@s uk-child-width-1-3@m\" uk-grid=\"\" uk-lightbox=\"\">

\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "gallery", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "\t\t\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t<a href=\"/user/pages/01.home/";
            // line 69
            echo $this->getAttribute($context["item"], "img", array());
            echo "\">
\t\t\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(/user/pages/01.home/";
            // line 76
            echo $this->getAttribute($context["item"], "img", array());
            echo ")\"></div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
\t\t</div>
\t</div>
\t<!-- end section gallery -->

\t<section class=\"uk-section-deffault\">
\t\t<div class=\"home-contact-map\">
\t\t\t<script
\t\t\t\ttype=\"text/javascript\"
\t\t\t\tcharset=\"utf-8\"
\t\t\t\tasync
\t\t\t\tsrc=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=sD2sMSNBBz0-22QYYnb2Y9aP0lbSn9IL&amp;amp;width=100%25&amp;amp;height=300&amp;amp;lang=ru_RU&amp;amp;sourceType=constructor&amp;amp;scroll=true\"></script>
\t\t</div>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 79,  158 => 76,  148 => 69,  145 => 68,  141 => 67,  125 => 53,  105 => 41,  99 => 38,  94 => 35,  90 => 34,  80 => 26,  71 => 24,  67 => 23,  60 => 18,  51 => 15,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

\t<!-- header section -->
\t<div class=\"s-header uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t<h1 class=\"s-header-title\">Металлоконструкции<br>
\t\t\t\t<span>на заказ</span>
\t\t\t</h1>
\t\t\t<div class=\"s-header-promo uk-grid-small uk-child-width-1-2@m\" uk-grid=\"\">
\t\t\t\t{% for item in page.header.promo %}
\t\t\t\t\t<a class=\"s-header-promo-item\" href=\"{{item.link}}\">
\t\t\t\t\t\t<span uk-icon=\"icon: bookmark; ratio: 1.2\"></span>
\t\t\t\t\t\t<div class=\"s-promo-desc\">{{item.text}}</div>
\t\t\t\t\t</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end header -->

\t{% for module in page.collection( ) %}
\t\t{{ module.content }}
\t{% endfor %}

\t<!-- product section -->

\t<div class=\"s-section-product uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t<h3 class=\"s-section-title\">Наша продукция</h3>
\t\t\t<div class=\"uk-flex-center uk-child-width-1-3@l uk-child-width-1-2@s\" uk-grid=\"\">

\t\t\t\t{% for item in page.header.product %}
\t\t\t\t\t<div class=\"s-card\">
\t\t\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t\t\t<div class=\"uk-card-title\">{{item.text}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t\t\t\t<a href=\"{{item.link}}\"><img src=\"/user/pages/01.home/{{item.img}}\">
\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end product section -->

\t<!-- section gallery -->

\t<div class=\"s-section-gallery uk-section uk-section-secondary\">
\t\t<div class=\"uk-container\">
\t\t\t<h3 class=\"s-section-title\">Наши работы</h3>
\t\t</div>
\t\t<div class=\"s-gallery-grid uk-child-width-1-2@s uk-child-width-1-3@m\" uk-grid=\"\" uk-lightbox=\"\">

\t\t\t{% for item in page.header.gallery %}
\t\t\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t\t<a href=\"/user/pages/01.home/{{item.img}}\">
\t\t\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(/user/pages/01.home/{{item.img}})\"></div>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t</div>
\t</div>
\t<!-- end section gallery -->

\t<section class=\"uk-section-deffault\">
\t\t<div class=\"home-contact-map\">
\t\t\t<script
\t\t\t\ttype=\"text/javascript\"
\t\t\t\tcharset=\"utf-8\"
\t\t\t\tasync
\t\t\t\tsrc=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=sD2sMSNBBz0-22QYYnb2Y9aP0lbSn9IL&amp;amp;width=100%25&amp;amp;height=300&amp;amp;lang=ru_RU&amp;amp;sourceType=constructor&amp;amp;scroll=true\"></script>
\t\t</div>
\t</section>

{% endblock %}
", "home.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\home.html.twig");
    }
}
