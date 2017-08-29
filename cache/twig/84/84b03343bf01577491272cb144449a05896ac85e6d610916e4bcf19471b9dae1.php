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
        echo "<!-- header section -->
\t<div class=\"s-header uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t<h1 class=\"s-header-title\">Металлоконструкции<br><span>на заказ</span></h1>
\t\t\t<div class=\"s-header-promo uk-grid-small uk-child-width-1-2@m\" uk-grid=\"\">
\t\t\t\t";
        // line 9
        $context["desc_header"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/catalog"), "method"), "children", array());
        // line 10
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["desc_header"]) ? $context["desc_header"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($context["item"], "header", array()), "home_desc", array())) {
                // line 12
                echo "\t\t\t\t\t\t<a class=\"s-header-promo-item\" href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">
\t\t\t\t\t\t\t<span uk-icon=\"icon: bookmark; ratio: 1.2\"> </span>
\t\t\t\t\t\t\t<div class=\"s-promo-desc\">";
                // line 14
                echo $this->getAttribute($this->getAttribute($context["item"], "header", array()), "home_desc", array());
                echo "</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>
<!-- end header -->
<!-- product section -->
<div class=\"s-section-product uk-section uk-section-default\">
\t<div class=\"uk-container\">
\t\t<h3 class=\"s-section-title\">Наша продукция</h3>
\t\t<div class=\"uk-flex-center uk-child-width-1-3@l uk-child-width-1-2@s\" uk-grid=\"\">
\t\t\t<div class=\"s-card\">
\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t<div class=\"uk-card-title\">Мангалы</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\"><a href=\"\"><img src=\"";
        // line 32
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/light.jpg");
        echo "\">
\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t\t\t\t</div></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s-card\">
\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t<div class=\"uk-card-title\">Мангалы</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\"><a href=\"\"><img src=\"";
        // line 44
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/light.jpg");
        echo "\">
\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t\t\t\t</div></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s-card\">
\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t<div class=\"uk-card-title\">Мангалы</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\"><a href=\"\"><img src=\"";
        // line 56
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/light.jpg");
        echo "\">
\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t\t\t\t</div></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div><!-- end product section -->

<!-- section gallery -->
<div class=\"s-section-gallery uk-section uk-section-secondary\">
\t<div class=\"uk-container\">
\t\t<h3 class=\"s-section-title\">Наши работы</h3>
\t</div>
\t<div class=\"s-gallery-grid uk-child-width-1-2@s uk-child-width-1-3@m\" uk-grid=\"\" uk-lightbox=\"\">
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"";
        // line 74
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size-h.jpg");
        echo "\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(";
        // line 79
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size-h.jpg");
        echo ")\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"";
        // line 82
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/dark.jpg");
        echo "\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(";
        // line 87
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/dark.jpg");
        echo ")\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/light.jpg");
        echo "\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(";
        // line 95
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/light.jpg");
        echo ")\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"";
        // line 98
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size-h.jpg");
        echo "\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(";
        // line 103
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size-h.jpg");
        echo ")\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"";
        // line 106
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size2.jpg");
        echo "\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(";
        // line 111
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size2.jpg");
        echo ")\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"";
        // line 114
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size1.jpg");
        echo "\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url(";
        // line 119
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/size1.jpg");
        echo ")\"></div>
\t\t</div>
\t</div>
</div><!-- end section gallery -->

<section class=\"uk-section-deffault\">
\t<div class=\"home-contact-map\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=sD2sMSNBBz0-22QYYnb2Y9aP0lbSn9IL&amp;amp;width=100%25&amp;amp;height=300&amp;amp;lang=ru_RU&amp;amp;sourceType=constructor&amp;amp;scroll=true\"></script>
\t</div>
</section>



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
        return array (  211 => 119,  203 => 114,  197 => 111,  189 => 106,  183 => 103,  175 => 98,  169 => 95,  161 => 90,  155 => 87,  147 => 82,  141 => 79,  133 => 74,  112 => 56,  97 => 44,  82 => 32,  66 => 18,  60 => 17,  54 => 14,  48 => 12,  45 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
<!-- header section -->
\t<div class=\"s-header uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t<h1 class=\"s-header-title\">Металлоконструкции<br><span>на заказ</span></h1>
\t\t\t<div class=\"s-header-promo uk-grid-small uk-child-width-1-2@m\" uk-grid=\"\">
\t\t\t\t{% set desc_header = page.find('/catalog').children %}
\t\t\t\t{% for item in desc_header %}
\t\t\t\t\t{% if item.header.home_desc %}
\t\t\t\t\t\t<a class=\"s-header-promo-item\" href=\"{{item.url}}\">
\t\t\t\t\t\t\t<span uk-icon=\"icon: bookmark; ratio: 1.2\"> </span>
\t\t\t\t\t\t\t<div class=\"s-promo-desc\">{{ item.header.home_desc }}</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
<!-- end header -->
<!-- product section -->
<div class=\"s-section-product uk-section uk-section-default\">
\t<div class=\"uk-container\">
\t\t<h3 class=\"s-section-title\">Наша продукция</h3>
\t\t<div class=\"uk-flex-center uk-child-width-1-3@l uk-child-width-1-2@s\" uk-grid=\"\">
\t\t\t<div class=\"s-card\">
\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t<div class=\"uk-card-title\">Мангалы</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\"><a href=\"\"><img src=\"{{ url('theme://images/light.jpg') }}\">
\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t\t\t\t</div></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s-card\">
\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t<div class=\"uk-card-title\">Мангалы</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\"><a href=\"\"><img src=\"{{ url('theme://images/light.jpg') }}\">
\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t\t\t\t</div></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"s-card\">
\t\t\t\t<div class=\"uk-card uk-card-small uk-border-rounded\">
\t\t\t\t\t<div class=\"uk-card-header\">
\t\t\t\t\t\t<div class=\"uk-card-title\">Мангалы</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-card-media-top uk-inline uk-dark uk-transition-toggle\"><a href=\"\"><img src=\"{{ url('theme://images/light.jpg') }}\">
\t\t\t\t\t\t\t<div class=\"uk-transition-fade\">
\t\t\t\t\t\t\t\t<div class=\"uk-overlay-default uk-position-cover\"></div>
\t\t\t\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t\t\t\t</div></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div><!-- end product section -->

<!-- section gallery -->
<div class=\"s-section-gallery uk-section uk-section-secondary\">
\t<div class=\"uk-container\">
\t\t<h3 class=\"s-section-title\">Наши работы</h3>
\t</div>
\t<div class=\"s-gallery-grid uk-child-width-1-2@s uk-child-width-1-3@m\" uk-grid=\"\" uk-lightbox=\"\">
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"{{ url('theme://images/size-h.jpg') }}\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url({{ url('theme://images/size-h.jpg') }})\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"{{ url('theme://images/dark.jpg') }}\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url({{ url('theme://images/dark.jpg') }})\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"{{ url('theme://images/light.jpg') }}\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url({{ url('theme://images/light.jpg') }})\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"{{ url('theme://images/size-h.jpg') }}\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url({{ url('theme://images/size-h.jpg') }})\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"{{ url('theme://images/size2.jpg') }}\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url({{ url('theme://images/size2.jpg') }})\"></div>
\t\t</div>
\t\t<div class=\"s-gallery-container uk-inline uk-dark uk-transition-toggle\">
\t\t\t<a href=\"{{ url('theme://images/size1.jpg') }}\">
\t\t\t\t<div class=\"uk-overlay-primary uk-position-cover uk-transition-fade\">
\t\t\t\t\t<div class=\"uk-position-center\"><span uk-overlay-icon=\"\"></span></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"s-gallery-item\" style=\"background-image: url({{ url('theme://images/size1.jpg') }})\"></div>
\t\t</div>
\t</div>
</div><!-- end section gallery -->

<section class=\"uk-section-deffault\">
\t<div class=\"home-contact-map\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=sD2sMSNBBz0-22QYYnb2Y9aP0lbSn9IL&amp;amp;width=100%25&amp;amp;height=300&amp;amp;lang=ru_RU&amp;amp;sourceType=constructor&amp;amp;scroll=true\"></script>
\t</div>
</section>



{% endblock %}
", "home.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\home.html.twig");
    }
}
