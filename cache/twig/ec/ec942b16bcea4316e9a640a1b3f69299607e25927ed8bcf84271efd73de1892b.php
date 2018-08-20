<?php

/* forms/fields/display/display.html.twig */
class __TwigTemplate_7d99968a1d3ff57c00a8838b10966be8dc6e02ce078426d3b2c4e84b6d4d145d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/display/display.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute(($context["field"] ?? null), "file", array())) {
            // line 4
            $context["content"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->readFileFunc($this->getAttribute(($context["field"] ?? null), "file", array()));
        } else {
            // line 6
            $context["content"] = $this->getAttribute(($context["field"] ?? null), "content", array());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_input($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-display-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        echo ">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(($context["content"] ?? null)));
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(($context["content"] ?? null)));
                echo "
            ";
            }
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 19
                echo "                ";
                echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(($context["content"] ?? null));
                echo "
            ";
            } else {
                // line 21
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(($context["content"] ?? null));
                echo "
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/display/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  86 => 23,  80 => 21,  74 => 19,  71 => 18,  68 => 17,  62 => 15,  56 => 13,  53 => 12,  51 => 11,  40 => 10,  37 => 9,  33 => 1,  30 => 6,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% if field.file %}
    {% set content = read_file(field.file) %}
{% else %}
    {% set content = field.content %}
{% endif %}

{% block input %}
    <div class=\"form-display-wrapper {{ field.size }}\" {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}>
        {% if field.markdown %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ content|tu|markdown|raw }}
            {% else %}
                {{ content|t|markdown|raw }}
            {% endif %}
        {% else %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ content|tu|raw }}
            {% else %}
                {{ content|t|raw }}
            {% endif %}
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/display/display.html.twig", "/Applications/MAMP/htdocs/grav-demo/user/plugins/form/templates/forms/fields/display/display.html.twig");
    }
}
