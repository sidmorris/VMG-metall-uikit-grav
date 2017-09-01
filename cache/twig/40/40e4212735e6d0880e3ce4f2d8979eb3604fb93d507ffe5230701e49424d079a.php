<?php

/* gallery_item.html.twig */
class __TwigTemplate_bda6e6d43e4de30db6cf26741d5e13b8d36e7757dfd02bfc53a6837970cff5dd extends Twig_Template
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
        $this->loadTemplate("gallery_item.html.twig", "gallery_item.html.twig", 1, "1129597914")->display($context);
    }

    public function getTemplateName()
    {
        return "gallery_item.html.twig";
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

\t{% set collection = page
\t\t.parent
\t\t.collection( ) %}

\t{% block content %}
\t\t<section class=\"s-gallery uk-section\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"s-filter\">
\t\t\t\t\t<div class=\"s-button-group uk-button-group\">
\t\t\t\t\t\t{% for item in collection %}
\t\t\t\t\t\t\t{% set class_active = ( item.active or item.activeChild )
\t\t\t\t\t\t\t\t? 's-active'
\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t{% if item.children.visible %}
\t\t\t\t\t\t\t\t<a class=\" uk-button uk-button-primary {{class_active}}\" href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"grid\" uk-lightbox=\"\">
\t\t\t\t\t<div class=\"grid-sizer\"></div>

\t\t\t\t\t{% for image in page.media.images %}
\t\t\t\t\t\t<div class=\"grid-item\">
\t\t\t\t\t\t\t<div class=\"uk-inline uk-light uk-transition-toggle\">
\t\t\t\t\t\t\t\t<a href=\"{{ image.url }}\">{{ image }}
\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-primary uk-position-cover\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}
", "gallery_item.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\gallery_item.html.twig");
    }
}


/* gallery_item.html.twig */
class __TwigTemplate_bda6e6d43e4de30db6cf26741d5e13b8d36e7757dfd02bfc53a6837970cff5dd_1129597914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("default.html.twig", "gallery_item.html.twig", 1);
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
        $context["collection"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<section class=\"s-gallery uk-section\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"s-filter\">
\t\t\t\t\t<div class=\"s-button-group uk-button-group\">
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "\t\t\t\t\t\t\t";
            $context["class_active"] = ((($this->getAttribute($context["item"], "active", array()) || $this->getAttribute($context["item"], "activeChild", array()))) ? ("s-active") : (""));
            // line 16
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($context["item"], "children", array()), "visible", array())) {
                // line 17
                echo "\t\t\t\t\t\t\t\t<a class=\" uk-button uk-button-primary ";
                echo (isset($context["class_active"]) ? $context["class_active"] : null);
                echo "\" href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"grid\" uk-lightbox=\"\">
\t\t\t\t\t<div class=\"grid-sizer\"></div>

\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 28
            echo "\t\t\t\t\t\t<div class=\"grid-item\">
\t\t\t\t\t\t\t<div class=\"uk-inline uk-light uk-transition-toggle\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo $this->getAttribute($context["image"], "url", array());
            echo "\">";
            echo $context["image"];
            echo "
\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-primary uk-position-cover\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t";
    }

    public function getTemplateName()
    {
        return "gallery_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 40,  173 => 30,  169 => 28,  165 => 27,  156 => 20,  150 => 19,  140 => 17,  137 => 16,  134 => 13,  130 => 12,  124 => 8,  121 => 7,  117 => 1,  115 => 3,  19 => 1,);
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

\t{% set collection = page
\t\t.parent
\t\t.collection( ) %}

\t{% block content %}
\t\t<section class=\"s-gallery uk-section\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"s-filter\">
\t\t\t\t\t<div class=\"s-button-group uk-button-group\">
\t\t\t\t\t\t{% for item in collection %}
\t\t\t\t\t\t\t{% set class_active = ( item.active or item.activeChild )
\t\t\t\t\t\t\t\t? 's-active'
\t\t\t\t\t\t\t\t: '' %}
\t\t\t\t\t\t\t{% if item.children.visible %}
\t\t\t\t\t\t\t\t<a class=\" uk-button uk-button-primary {{class_active}}\" href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"grid\" uk-lightbox=\"\">
\t\t\t\t\t<div class=\"grid-sizer\"></div>

\t\t\t\t\t{% for image in page.media.images %}
\t\t\t\t\t\t<div class=\"grid-item\">
\t\t\t\t\t\t\t<div class=\"uk-inline uk-light uk-transition-toggle\">
\t\t\t\t\t\t\t\t<a href=\"{{ image.url }}\">{{ image }}
\t\t\t\t\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-primary uk-position-cover\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}
", "gallery_item.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\gallery_item.html.twig");
    }
}
