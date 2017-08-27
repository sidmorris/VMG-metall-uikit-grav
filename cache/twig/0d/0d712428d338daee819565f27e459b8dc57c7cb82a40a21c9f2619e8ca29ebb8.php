<?php

/* partials/s_nav-top.html.twig */
class __TwigTemplate_3bb9ed5b6dfc3a21736c523f8a3e30e72c7f5124deed9bc46f49df7d1109a121 extends Twig_Template
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
        echo "
<ul class=\"s-nav uk-navbar-nav\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "      ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("uk-active") : (""));
            // line 5
            echo "      <li class=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
          <a href=\"";
            // line 6
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
              ";
            // line 7
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
          </a>
      </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<!-- <ul class=\"s-nav uk-navbar-nav\">
  <li class=\"uk-active\"><a href=\"index.html\">Домашняя</a></li>
  <li><a href=\"catalog.html\">Каталог</a></li>
  <div uk-dropdown=\"\">
    <ul class=\"s-sub-nav uk-nav uk-dropdown-nav\">
      <li class=\"uk-active\"><a href=\"catalog.html\">Мангалы</a></li>
      <li><a href=\"catalog.html\">Item sub Nav</a></li>
    </ul>
  </div>
  <li><a href=\"gallery.html\">Галлерея</a></li>
</ul> -->
";
    }

    public function getTemplateName()
    {
        return "partials/s_nav-top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  39 => 7,  35 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<ul class=\"s-nav uk-navbar-nav\">
  {% for page in pages.children.visible %}
      {% set current_page = (page.active or page.activeChild) ? 'uk-active' : '' %}
      <li class=\"{{ current_page }}\">
          <a href=\"{{ page.url }}\">
              {{ page.menu }}
          </a>
      </li>
  {% endfor %}
</ul>

<!-- <ul class=\"s-nav uk-navbar-nav\">
  <li class=\"uk-active\"><a href=\"index.html\">Домашняя</a></li>
  <li><a href=\"catalog.html\">Каталог</a></li>
  <div uk-dropdown=\"\">
    <ul class=\"s-sub-nav uk-nav uk-dropdown-nav\">
      <li class=\"uk-active\"><a href=\"catalog.html\">Мангалы</a></li>
      <li><a href=\"catalog.html\">Item sub Nav</a></li>
    </ul>
  </div>
  <li><a href=\"gallery.html\">Галлерея</a></li>
</ul> -->
", "partials/s_nav-top.html.twig", "/opt/lampp/htdocs/vmg-metall-grav-17/user/themes/vmg-metall/templates/partials/s_nav-top.html.twig");
    }
}
