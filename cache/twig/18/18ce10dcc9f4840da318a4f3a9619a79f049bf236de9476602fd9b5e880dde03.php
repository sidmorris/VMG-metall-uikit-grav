<?php

/* default.html.twig */
class __TwigTemplate_0c14805cc860ddd013040a707f7616cd690e6d15e8a51859c748ae4824b11a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"s-header uk-section uk-section-primary\">
\t\t<div class=\"uk-container\">
\t\t\t<h1 class=\"s-header-title\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "title", array());
        echo "
\t\t\t\t<span>
\t\t\t\t\t/
\t\t\t\t\t";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</span>
\t\t\t</h1>
\t\t</div>
\t</div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  51 => 13,  42 => 8,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
{% block header %}
\t<div class=\"s-header uk-section uk-section-primary\">
\t\t<div class=\"uk-container\">
\t\t\t<h1 class=\"s-header-title\">{{page.parent.title}}
\t\t\t\t<span>
\t\t\t\t\t/
\t\t\t\t\t{{page.title}}</span>
\t\t\t</h1>
\t\t</div>
\t</div>
{% endblock %}
{% block content %}
\t{{page.content}}
{% endblock %}
", "default.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\default.html.twig");
    }
}
