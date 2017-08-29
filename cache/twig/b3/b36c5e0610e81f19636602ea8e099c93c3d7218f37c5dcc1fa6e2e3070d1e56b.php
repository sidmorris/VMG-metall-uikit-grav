<?php

/* partials/base.html.twig */
class __TwigTemplate_1e827d913d593961cc6449229c875bb91ddeeb30c778f8cc5c9dca9c1b2bb50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"ru\">

  <head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "  </head>

  <body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <div class=\"uk-offcanvas-content\">
      <div class=\"s-top-nav uk-section uk-section-muted uk-padding-remove-vertical\" uk-sticky=\"show-on-up: true; animation: uk-animation-slide-top\">
        <div class=\"uk-container\">
          <nav class=\"uk-navbar-container uk-navbar uk-navbar-transparent\">
            <div class=\"uk-navbar-left uk-visible@s\">
              <div class=\"uk-navbar-item\">
                <a class=\"uk-navbar-item uk-logo\" href=\"";
        // line 43
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</a>
              </div>
            </div>
            <div class=\"uk-navbar-center\">
              <div class=\"uk-navbar-item uk-hidden@m\">
                <span uk-icon=\"icon: phone\"></span>
                <p class=\"s-phone-top\">";
        // line 49
        echo $this->getAttribute(($context["site"] ?? null), "s_phone", array());
        echo "</p>
              </div>
              <div class=\"uk-navbar-item uk-visible@m\">
                <ul class=\"s-nav uk-navbar-nav\">
                  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 54
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("uk-active") : (""));
            // line 57
            echo "                    <li class=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
                      <a href=\"";
            // line 58
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                        ";
            // line 59
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
                      </a>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </ul>
              </div>
            </div>
            <div class=\"uk-navbar-right\">
              <div class=\"uk-navbar-item uk-visible@m\">
                <span uk-icon=\"icon: phone\"></span>
                <p class=\"s_phone-top\">";
        // line 69
        echo $this->getAttribute(($context["site"] ?? null), "s_phone", array());
        echo "</p>
              </div>
              <button class=\"uk-float-right uk-hidden@m\" uk-toggle=\"target: #menu\" type=\"button\" uk-icon=\"icon: menu; ratio: 1.8;\"></button>
            </div>
          </nav>
        </div>
        <hr>
      </div>

      ";
        // line 78
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "
      ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "
      <footer class=\"s-footer uk-section uk-section-secondary\">
        <div class=\"uk-container\">
          <div uk-grid=\"\">
            <div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
              <div>
                <span uk-icon=\"icon: phone\"></span>
                <p class=\"s-footer-contact-label\">
                  Телефон:</p>
              </div>
              <div class=\"s-footer-contact-item uk-width-expand\">
                <p>";
        // line 94
        echo $this->getAttribute(($context["site"] ?? null), "s_phone", array());
        echo "</p>
              </div>
            </div>
            <div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
              <div>
                <span uk-icon=\"icon: mail\"></span>
                <p class=\"s-footer-contact-label\">E-Mail:</p>
              </div>
              <div class=\"s-footer-contact-item uk-width-expand\">
                <p>";
        // line 103
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "email", array());
        echo "</p>
              </div>
            </div>
            <div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
              <div>
                <span uk-icon=\"icon: location\"></span>
                <p class=\"s-footer-contact-label\">
                  Адрес:</p>
              </div>
              <div class=\"s-footer-contact-item uk-width-expand\">
                <p>";
        // line 113
        echo $this->getAttribute(($context["site"] ?? null), "s_address", array());
        echo "</p>
              </div>
            </div>
          </div>
          <div class=\"uk-divider-icon\"></div>
          <div class=\"s-menu-footer\">
            <div class=\"s-menu-footer-continer uk-flex-center uk-child-width-auto\" uk-grid=\"\">
              ";
        // line 120
        $context["sub_nav"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/catalog"), "method"), "children", array());
        // line 123
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sub_nav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 124
            echo "                <a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </div>
          </div>
        </div>
      </footer>
      <!-- offcanvas -->
      <div id=\"menu\" uk-offcanvas=\"flip: true; mode: reveal\">
        <div class=\"s-offcanvas uk-offcanvas-bar\">
          <button class=\"uk-offcanvas-close\" type=\"button\" uk-close=\"\"></button>
          <ul class=\"uk-nav uk-nav-default\">
            <li class=\"uk-active\">
              <a href=\"index.html\">Домашняя</a>
            </li>
            <li class=\"uk-parent\">
              <a href=\"catalog.html\">Каталог
                <ul class=\"uk-nav-sub\">
                  <li class=\"uk-active\">
                    <a href=\"catalog.html\">Мангалы</a>
                  </li>
                  <li>
                    <a href=\"catalog.html\">Item sub Nav
                    </a>
                  </li>
                </ul>
              </a>
            </li>
            <li>
              <a href=\"gallery.html\">Галлерея</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "      <meta charset=\"utf-8\"/>
      <title>
        ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo "
          |
        ";
        }
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
      ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

      <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\"/>
      <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
      <link rel=\"apple-touch-icon\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/apple-touch-icon.png");
        echo "\">
      <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/apple-touch-icon-72x72.png");
        echo "\">
      <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon/apple-touch-icon-114x114.png");
        echo "\">
      ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
      ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->getAttribute(        // line 23
($context["assets"] ?? null), "addCss", array(0 => "theme://css/site.min.css", 1 => 101), "method");
        // line 24
        echo "        ";
        $this->getAttribute(        // line 25
($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 26
        echo "      ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(        // line 30
($context["assets"] ?? null), "addJs", array(0 => "theme://js/scripts.min.js", 1 => 100), "method");
        // line 31
        echo "      ";
    }

    // line 78
    public function block_header($context, array $blocks = array())
    {
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 81,  315 => 80,  310 => 78,  306 => 31,  304 => 30,  302 => 29,  299 => 28,  295 => 26,  293 => 25,  291 => 24,  289 => 23,  287 => 22,  284 => 21,  277 => 32,  275 => 28,  270 => 27,  268 => 21,  264 => 20,  260 => 19,  256 => 18,  252 => 17,  248 => 16,  243 => 13,  241 => 12,  237 => 11,  230 => 9,  226 => 7,  223 => 6,  185 => 126,  174 => 124,  169 => 123,  167 => 120,  157 => 113,  144 => 103,  132 => 94,  119 => 83,  117 => 80,  114 => 79,  112 => 78,  100 => 69,  92 => 63,  82 => 59,  78 => 58,  73 => 57,  70 => 54,  66 => 53,  59 => 49,  48 => 43,  38 => 36,  34 => 34,  32 => 6,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute( config.themes, config.system.pages.theme ) %}
<!DOCTYPE html>
<html lang=\"ru\">

  <head>
    {% block head %}
      <meta charset=\"utf-8\"/>
      <title>
        {% if header.title %}{{ header.title|e('html') }}
          |
        {% endif %}{{ site.title|e('html') }}</title>
      {% include 'partials/metadata.html.twig' %}
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

      <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\"/>
      <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
      <link rel=\"apple-touch-icon\" href=\"{{ url('theme://images/favicon/apple-touch-icon.png') }}\">
      <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ url('theme://images/favicon/apple-touch-icon-72x72.png') }}\">
      <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ url('theme://images/favicon/apple-touch-icon-114x114.png') }}\">
      {% block stylesheets %}
        {% do
          assets.addCss( 'theme://css/site.min.css', 101 ) %}
        {% do
          assets.addCss( 'theme://css/font-awesome.min.css', 100 ) %}
      {% endblock %}
      {{ assets.css() }}
      {% block javascripts %}
        {% do
          assets.addJs( 'theme://js/scripts.min.js', 100 ) %}
      {% endblock %}
      {{ assets.js() }}
    {% endblock head %}
  </head>

  <body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div class=\"uk-offcanvas-content\">
      <div class=\"s-top-nav uk-section uk-section-muted uk-padding-remove-vertical\" uk-sticky=\"show-on-up: true; animation: uk-animation-slide-top\">
        <div class=\"uk-container\">
          <nav class=\"uk-navbar-container uk-navbar uk-navbar-transparent\">
            <div class=\"uk-navbar-left uk-visible@s\">
              <div class=\"uk-navbar-item\">
                <a class=\"uk-navbar-item uk-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a>
              </div>
            </div>
            <div class=\"uk-navbar-center\">
              <div class=\"uk-navbar-item uk-hidden@m\">
                <span uk-icon=\"icon: phone\"></span>
                <p class=\"s-phone-top\">{{ site.s_phone }}</p>
              </div>
              <div class=\"uk-navbar-item uk-visible@m\">
                <ul class=\"s-nav uk-navbar-nav\">
                  {% for page in pages.children.visible %}
                    {% set current_page = ( page.active or page.activeChild )
                      ? 'uk-active'
                      : '' %}
                    <li class=\"{{ current_page }}\">
                      <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                      </a>
                    </li>
                  {% endfor %}
                </ul>
              </div>
            </div>
            <div class=\"uk-navbar-right\">
              <div class=\"uk-navbar-item uk-visible@m\">
                <span uk-icon=\"icon: phone\"></span>
                <p class=\"s_phone-top\">{{ site.s_phone }}</p>
              </div>
              <button class=\"uk-float-right uk-hidden@m\" uk-toggle=\"target: #menu\" type=\"button\" uk-icon=\"icon: menu; ratio: 1.8;\"></button>
            </div>
          </nav>
        </div>
        <hr>
      </div>

      {% block header %}{% endblock %}

      {% block content %}
        {{ page.content }}
      {% endblock %}

      <footer class=\"s-footer uk-section uk-section-secondary\">
        <div class=\"uk-container\">
          <div uk-grid=\"\">
            <div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
              <div>
                <span uk-icon=\"icon: phone\"></span>
                <p class=\"s-footer-contact-label\">
                  Телефон:</p>
              </div>
              <div class=\"s-footer-contact-item uk-width-expand\">
                <p>{{ site.s_phone }}</p>
              </div>
            </div>
            <div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
              <div>
                <span uk-icon=\"icon: mail\"></span>
                <p class=\"s-footer-contact-label\">E-Mail:</p>
              </div>
              <div class=\"s-footer-contact-item uk-width-expand\">
                <p>{{ site.author.email }}</p>
              </div>
            </div>
            <div class=\"s-footer-contact-box uk-width-1-1 uk-width-1-3@m uk-child-width-auto\" uk-grid=\"\">
              <div>
                <span uk-icon=\"icon: location\"></span>
                <p class=\"s-footer-contact-label\">
                  Адрес:</p>
              </div>
              <div class=\"s-footer-contact-item uk-width-expand\">
                <p>{{ site.s_address }}</p>
              </div>
            </div>
          </div>
          <div class=\"uk-divider-icon\"></div>
          <div class=\"s-menu-footer\">
            <div class=\"s-menu-footer-continer uk-flex-center uk-child-width-auto\" uk-grid=\"\">
              {% set sub_nav = page
                .find( '/catalog' )
                .children %}
              {% for item in sub_nav %}
                <a href=\"{{ item.url }}\">{{ item.title }}</a>
              {% endfor %}
            </div>
          </div>
        </div>
      </footer>
      <!-- offcanvas -->
      <div id=\"menu\" uk-offcanvas=\"flip: true; mode: reveal\">
        <div class=\"s-offcanvas uk-offcanvas-bar\">
          <button class=\"uk-offcanvas-close\" type=\"button\" uk-close=\"\"></button>
          <ul class=\"uk-nav uk-nav-default\">
            <li class=\"uk-active\">
              <a href=\"index.html\">Домашняя</a>
            </li>
            <li class=\"uk-parent\">
              <a href=\"catalog.html\">Каталог
                <ul class=\"uk-nav-sub\">
                  <li class=\"uk-active\">
                    <a href=\"catalog.html\">Мангалы</a>
                  </li>
                  <li>
                    <a href=\"catalog.html\">Item sub Nav
                    </a>
                  </li>
                </ul>
              </a>
            </li>
            <li>
              <a href=\"gallery.html\">Галлерея</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
", "partials/base.html.twig", "/opt/lampp/htdocs/VMG-metall-uikit-grav/user/themes/vmg-metall/templates/partials/base.html.twig");
    }
}
