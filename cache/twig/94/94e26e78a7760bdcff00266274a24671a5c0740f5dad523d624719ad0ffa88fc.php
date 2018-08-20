<?php

/* partials/base-root.html.twig */
class __TwigTemplate_7129cac5a48f32204e6c73022f13462646bb6b2693f609cb06498499f5647e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'page' => array($this, 'block_page'),
            'navigation' => array($this, 'block_navigation'),
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'widgets' => array($this, 'block_widgets'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "extension", array(), "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    ";
            $context["icon_style"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "admin_icons", array());
            // line 3
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    ";
            // line 6
            $this->displayBlock('head', $context, $blocks);
            // line 33
            echo "    </head>
    ";
            // line 34
            $this->displayBlock('body', $context, $blocks);
            // line 116
            echo "    </html>
";
        }
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 8
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</title>
        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 10
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 12
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 15
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 17
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 19
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url_simple"]) ? $context["base_url_simple"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["theme_url"]) ? $context["theme_url"] : null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 23)->display($context);
        // line 24
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 29)->display($context);
        // line 30
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "    <body class=\"ga-theme-17x ";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "size", array()) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "body_classes", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["body_classes"]) ? $context["body_classes"] : null), "html", null, true);
        echo "\">
        ";
        // line 36
        $this->displayBlock('page', $context, $blocks);
        // line 113
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 114
        echo "    </body>
    ";
    }

    // line 36
    public function block_page($context, array $blocks = array())
    {
        // line 37
        echo "        <div class=\"remodal-bg\">

            ";
        // line 39
        $this->displayBlock('navigation', $context, $blocks);
        // line 42
        echo "
            <main id=\"admin-main\" >
                ";
        // line 44
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 44)->display($context);
        // line 45
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 46
        $this->displayBlock('titlebar', $context, $blocks);
        // line 47
        echo "                </div>

                <div class=\"content-wrapper\">
                    <div class=\"";
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "content_padding", array())) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 51
        $this->displayBlock('messages', $context, $blocks);
        // line 54
        echo "
                        ";
        // line 55
        $this->displayBlock('widgets', $context, $blocks);
        // line 56
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 57
        $this->displayBlock('content_top', $context, $blocks);
        // line 58
        echo "                            <div class=\"admin-block\">";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "</div>
                            ";
        // line 61
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "show_github_msg", array())) {
            // line 62
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 64
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 65
        echo "                        </div>
                        ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "                    </div>
                </div>

                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

            </main>
            <div id='overlay'></div>
        </div>
        ";
    }

    // line 39
    public function block_navigation($context, array $blocks = array())
    {
        // line 40
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 40)->display($context);
        // line 41
        echo "            ";
    }

    // line 46
    public function block_titlebar($context, array $blocks = array())
    {
    }

    // line 51
    public function block_messages($context, array $blocks = array())
    {
        // line 52
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 52)->display($context);
        // line 53
        echo "                        ";
    }

    // line 55
    public function block_widgets($context, array $blocks = array())
    {
    }

    // line 57
    public function block_content_top($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_content_bottom($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "                        <footer id=\"footer\">
                             <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">";
        // line 68
        echo twig_escape_filter($this->env, twig_constant("GRAV_VERSION"), "html", null, true);
        echo "</span> - Admin v";
        echo twig_escape_filter($this->env, (isset($context["admin_version"]) ? $context["admin_version"] : null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WAS_MADE_WITH")), "html", null, true);
        echo " <i class=\"fa fa-heart-o pulse\"></i> ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BY")), "html", null, true);
        echo " <a href=\"https://trilby.media\">Trilby Media</a>.
                        </footer>
                        ";
    }

    // line 113
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 113,  361 => 68,  358 => 67,  355 => 66,  350 => 64,  345 => 59,  340 => 57,  335 => 55,  331 => 53,  328 => 52,  325 => 51,  320 => 46,  316 => 41,  313 => 40,  310 => 39,  297 => 104,  293 => 103,  286 => 99,  281 => 97,  272 => 91,  263 => 85,  254 => 79,  248 => 76,  241 => 71,  239 => 66,  236 => 65,  233 => 64,  227 => 62,  225 => 61,  222 => 60,  220 => 59,  218 => 58,  216 => 57,  213 => 56,  211 => 55,  208 => 54,  206 => 51,  200 => 50,  195 => 47,  193 => 46,  190 => 45,  188 => 44,  184 => 42,  182 => 39,  178 => 37,  175 => 36,  170 => 114,  167 => 113,  165 => 36,  156 => 35,  153 => 34,  146 => 30,  143 => 29,  140 => 28,  133 => 24,  130 => 23,  127 => 22,  123 => 32,  120 => 28,  118 => 27,  115 => 26,  113 => 22,  107 => 20,  104 => 19,  100 => 17,  94 => 15,  91 => 14,  85 => 12,  79 => 10,  77 => 9,  64 => 8,  61 => 7,  58 => 6,  52 => 116,  50 => 34,  47 => 33,  45 => 6,  40 => 3,  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    {% set icon_style = config.plugins.admin.admin_icons %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if title %}{{ title }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
            {{ assets.css()|raw }}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
            {{ assets.js()|raw }}
        {% endblock %}
    {% endblock %}
    </head>
    {% block body %}
    <body class=\"ga-theme-17x {{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }} {{ body_classes }}\">
        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                <div class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">{{ constant('GRAV_VERSION') }}</span> - Admin v{{ admin_version }} - {{ \"PLUGIN_ADMIN.WAS_MADE_WITH\"|tu|lower }} <i class=\"fa fa-heart-o pulse\"></i> {{ \"PLUGIN_ADMIN.BY\"|tu|lower }} <a href=\"https://trilby.media\">Trilby Media</a>.
                        </footer>
                        {% endblock %}
                    </div>
                </div>

                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|tu }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|tu }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
                        </div>
                    </form>
                </div>

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}
    {% block bottom %}{% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "/Users/pau/Sites/grav-demonstratie/user/plugins/admin/themes/grav/templates/partials/base-root.html.twig");
    }
}
