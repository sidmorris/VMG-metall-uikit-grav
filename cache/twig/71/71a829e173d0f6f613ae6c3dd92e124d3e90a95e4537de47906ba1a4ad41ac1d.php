<?php

/* partials/catalog_card.html.twig */
class __TwigTemplate_91d63495098b5bb4a73328b123a69af3e5a51353137893262e0171a10cecf874 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "published", array()) == 1)) {
            // line 2
            echo "\t";
            $context["catalog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
            // line 3
            echo "\t<div class=\"s-card-product uk-card uk-card-hover uk-grid-collapse uk-margin-medium-bottom\" uk-grid=\"\">
\t\t<div class=\"uk-width-1-1\">
\t\t\t<div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t<h3 class=\"uk-card-title\">";
            // line 7
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "model", array());
            echo "
\t\t\t\t\t\t<span class=\"uk-text-small\">";
            // line 8
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sub_model", array());
            echo "</span>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "price", array())) {
                // line 13
                echo "\t\t\t\t\t\t<span class=\"s-card-product-badge uk-badge\">";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "price", array());
                echo "</span>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"uk-margin-small\">
\t\t</div>
\t\t<div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\" uk-lightbox=\"\">
\t\t\t<div class=\"uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t<a href=\"";
            // line 21
            echo $this->getAttribute((isset($context["catalog_image"]) ? $context["catalog_image"] : null), "url", array());
            echo "\">";
            echo (isset($context["catalog_image"]) ? $context["catalog_image"] : null);
            echo "
\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"uk-width-1-2@m\">
\t\t\t<div class=\"uk-card-body\">
\t\t\t\t<p>";
            // line 32
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
\t\t\t\t";
            // line 33
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
                // line 34
                echo "\t\t\t\t\t";
                if ((isset($context["truncate"]) ? $context["truncate"] : null)) {
                    // line 35
                    echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"";
                    // line 36
                    echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                    echo "\">Редактировать...</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t";
                if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                    // line 40
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
                    echo "\">Назад</a>
\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
            }
            // line 43
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/catalog_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  100 => 42,  94 => 40,  91 => 39,  85 => 36,  82 => 35,  79 => 34,  77 => 33,  73 => 32,  57 => 21,  49 => 15,  43 => 13,  41 => 12,  34 => 8,  30 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.published == 1 %}
\t{% set catalog_image = page.media.images | first %}
\t<div class=\"s-card-product uk-card uk-card-hover uk-grid-collapse uk-margin-medium-bottom\" uk-grid=\"\">
\t\t<div class=\"uk-width-1-1\">
\t\t\t<div class=\"uk-padding-remove-bottom uk-card-header uk-grid-small\" uk-grid=\"\">
\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t<h3 class=\"uk-card-title\">{{page.header.model}}
\t\t\t\t\t\t<span class=\"uk-text-small\">{{page.header.sub_model}}</span>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"uk-width-1-2@s\">
\t\t\t\t\t{% if page.header.price %}
\t\t\t\t\t\t<span class=\"s-card-product-badge uk-badge\">{{page.header.price}}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"uk-margin-small\">
\t\t</div>
\t\t<div class=\"uk-card-media-left uk-margin-top uk-margin-bottom uk-width-1-2@m\" uk-lightbox=\"\">
\t\t\t<div class=\"uk-inline uk-dark uk-transition-toggle\">
\t\t\t\t<a href=\"{{catalog_image.url}}\">{{catalog_image}}
\t\t\t\t\t<div class=\"uk-transition-fade uk-overlay-default uk-position-cover\">
\t\t\t\t\t\t<div class=\"uk-position-center\">
\t\t\t\t\t\t\t<span uk-overlay-icon=\"\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"uk-width-1-2@m\">
\t\t\t<div class=\"uk-card-body\">
\t\t\t\t<p>{{ page.content }}</p>
\t\t\t\t{% if config.plugins.login.enabled and grav.user.username %}
\t\t\t\t\t{% if truncate %}
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<a href=\"{{ page.url }}\">Редактировать...</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if not truncate %}
\t\t\t\t\t\t<a href=\"{{ page.parent.url }}\">Назад</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}
", "partials/catalog_card.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\partials\\catalog_card.html.twig");
    }
}
