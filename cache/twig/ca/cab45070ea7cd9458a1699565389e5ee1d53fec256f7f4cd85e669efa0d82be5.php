<?php

/* partials/catalog_sidebar.html.twig */
class __TwigTemplate_56b0b356b11c842d748d453dc8c42af86b807ff6fa1093e360db390c763da206 extends Twig_Template
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
        $context["collection"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/blog-iner-container"), "method"), "children", array());
        // line 4
        echo "<nav class=\"sidebar-menu-custom\">
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "\t\t";
            $context["activepage"] = (($this->getAttribute($context["page"], "active", array())) ? ("active") : (""));
            // line 9
            echo "\t\t";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 10
                echo "\t\t\t<li class=\"nav-link ";
                echo (isset($context["activepage"]) ? $context["activepage"] : null);
                echo "\">
\t\t\t\t<a href=\"";
                // line 11
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "title", array());
                echo "</a>
\t\t\t</li>
\t\t";
            }
            // line 14
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/catalog_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 14,  39 => 11,  34 => 10,  31 => 9,  28 => 6,  24 => 5,  21 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set collection = page
\t.find( '/blog-iner-container' )
\t.children %}
<nav class=\"sidebar-menu-custom\">
\t{% for page in collection %}
\t\t{% set activepage = ( page.active )
\t\t\t? 'active'
\t\t\t: '' %}
\t\t{% if page.visible %}
\t\t\t<li class=\"nav-link {{ activepage }}\">
\t\t\t\t<a href=\"{{ page.url }}\">{{ page.title }}</a>
\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
</nav>
", "partials/catalog_sidebar.html.twig", "P:\\OpenServer\\domains\\VMG-metall-uikit-grav\\user\\themes\\vmg-metall\\templates\\partials\\catalog_sidebar.html.twig");
    }
}
