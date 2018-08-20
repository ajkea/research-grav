<?php

/* fields-demo.html.twig */
class __TwigTemplate_602388bb1820da335920f8667ec492297d6198f6afec7efc2c88ef5915d603f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "fields-demo.html.twig", 1);
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
\t<style>
\t\t.field { margin: 15px 0; padding:15px; background: #fff;}
\t\t.field img { display: block; width: 100%; height: auto; max-width: 200px; }
\t\tcode { display: inline-block; padding: 5px; margin: 15px 0; background: #000; color: #fff; }
\t</style>

\t<div style=\"padding: 30px; background: #ededed;\">

\t\t<div class=\"field\">
\t\t\t<h3>Color field value</h3>
\t\t\t<p>";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "color", array());
        echo "</p>
\t\t\t<code>&#123;&#123; page.header.color &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Date & time field value</h3>
\t\t\t<p>";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "date", array());
        echo "</p>
\t\t\t<code>&#123;&#123; page.header.date &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>File - Storage options</h3>
\t\t\t<p>
\t\t\t\tIf you save theme specific images to - folder: 'theme@:/images' - <br>
\t\t\t\tyou can retrieve them by using the twig code:<br>
\t\t\t\t<code>&#123;&#123; url('theme://images/&lt;image-name&gt;') &#125;&#125;</code><br>
\t\t\t\t<img src=\"";
        // line 31
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blockquotevisual.png");
        echo "\" alt=\"\">
\t\t\t</p>
\t\t\t<p>
\t\t\t\tIf you save all the user uploaded images to - folder: 'user/pages/images' - <br>
\t\t\t\tyou can retrieve them by using the twig code:<br>
\t\t\t\t<code>&#123;&#123; page.find('/images').media[image.name] &#125;&#125;</code><br>
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fileupload", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 38
            echo "\t\t\t\t\t";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($context["image"], "name", array()), array(), "array"), "html", array(), "method");
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</p>
\t\t\t<p>
\t\t\t\tIf you save all the user uploaded images in each page folder (default) <br>
\t\t\t\tyou can retrieve them by using the twig code:<br>
\t\t\t\t<code>&#123;&#123; base_url_absolute &#125;&#125;&#123;&#123; page.route &#125;&#125;/&#123;&#123; page.header.pageImage &#125;&#125;</code><br>
\t\t\t\t<img src=\"";
        // line 45
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pageImage", array());
        echo "\" alt=\"\">
\t\t\t</p>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>File upload field value</h3>
\t\t\t<p>
\t\t\t\t<code>&#123;&#123; page.find('/images').media[image.name].html() &#125;&#125;</code><br>
\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "fileupload", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 54
            echo "\t\t\t\t\t";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($context["image"], "name", array()), array(), "array"), "html", array(), "method");
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t</p>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>File picker field value</h3>
\t\t\t<p>
\t\t\t\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].html() &#125;&#125;</code><br>
\t\t\t\t";
        // line 63
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "filepicker", array()), array(), "array"), "html", array(), "method");
        echo "
\t\t\t</p>
\t\t\t
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Page select field value</h3>
\t\t\t<p>";
        // line 70
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pageselect", array());
        echo "</p>
\t\t\t<code>&#123;&#123; base_url_absolute &#125;&#125;&#123;&#123; page.header.pageselect &#125;&#125;</code>
\t\t\t<p><a href=\"";
        // line 72
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pageselect", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pageselect", array());
        echo "</a></p>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Repeater field value</h3>
\t\t\t<ul>
\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "repeater", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "\t\t\t\t<li>text: ";
            echo $this->getAttribute($context["item"], "text", array());
            echo " <br>boolean: ";
            echo $this->getAttribute($context["item"], "primary", array());
            echo "</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t</ul>
\t\t\t<code>
\t\t\t\t&#123;% for item in page.header.repeater %&#125;<br>
\t\t\t\t\ttext: &#123;&#123; item.text &#125;&#125;<br>
\t\t\t\t\tboolean: &#123;&#123; item.primary &#125;&#125;<br>
\t\t\t\t&#123;% endfor %&#125;
\t\t\t</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Selectize field value (tag)</h3>
\t\t\t<ul>
\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "selection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "\t\t\t\t<li>tag: ";
            echo $context["item"];
            echo "</li>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t</ul>
\t\t\t<code>
\t\t\t\t&#123;% for item in page.header.selection %&#125;<br>
\t\t\t\t\ttag: &#123;&#123; item &#125;&#125;<br>
\t\t\t\t&#123;% endfor %&#125;
\t\t\t</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Text field value</h3>
\t\t\t<p>";
        // line 106
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
        echo "</p>
\t\t\t<code>&#123;&#123; page.header.text &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Textarea field value</h3>
\t\t\t<p>";
        // line 112
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "textarea", array());
        echo "</p>
\t\t\t<code>&#123;&#123; page.header.textarea &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>TinyMCE field value</h3>
\t\t\t";
        // line 118
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tinymce", array());
        echo "
\t\t\t<code>&#123;&#123; page.header.tinymce &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Toggle field value</h3>
\t\t\t";
        // line 124
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "toggle", array());
        echo " <br>
\t\t\t<code>&#123;&#123; page.header.toggle &#125;&#125;</code>
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "fields-demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 124,  231 => 118,  222 => 112,  213 => 106,  201 => 96,  192 => 94,  188 => 93,  174 => 81,  163 => 79,  159 => 78,  147 => 72,  141 => 70,  131 => 63,  122 => 56,  113 => 54,  109 => 53,  95 => 45,  88 => 40,  79 => 38,  75 => 37,  66 => 31,  53 => 21,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
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

\t<style>
\t\t.field { margin: 15px 0; padding:15px; background: #fff;}
\t\t.field img { display: block; width: 100%; height: auto; max-width: 200px; }
\t\tcode { display: inline-block; padding: 5px; margin: 15px 0; background: #000; color: #fff; }
\t</style>

\t<div style=\"padding: 30px; background: #ededed;\">

\t\t<div class=\"field\">
\t\t\t<h3>Color field value</h3>
\t\t\t<p>{{ page.header.color }}</p>
\t\t\t<code>&#123;&#123; page.header.color &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Date & time field value</h3>
\t\t\t<p>{{ page.header.date }}</p>
\t\t\t<code>&#123;&#123; page.header.date &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>File - Storage options</h3>
\t\t\t<p>
\t\t\t\tIf you save theme specific images to - folder: 'theme@:/images' - <br>
\t\t\t\tyou can retrieve them by using the twig code:<br>
\t\t\t\t<code>&#123;&#123; url('theme://images/&lt;image-name&gt;') &#125;&#125;</code><br>
\t\t\t\t<img src=\"{{ url('theme://images/blockquotevisual.png') }}\" alt=\"\">
\t\t\t</p>
\t\t\t<p>
\t\t\t\tIf you save all the user uploaded images to - folder: 'user/pages/images' - <br>
\t\t\t\tyou can retrieve them by using the twig code:<br>
\t\t\t\t<code>&#123;&#123; page.find('/images').media[image.name] &#125;&#125;</code><br>
\t\t\t\t{% for image in page.header.fileupload %}
\t\t\t\t\t{{ page.find('/images').media[image.name].html() }}
\t\t\t\t{% endfor %}
\t\t\t</p>
\t\t\t<p>
\t\t\t\tIf you save all the user uploaded images in each page folder (default) <br>
\t\t\t\tyou can retrieve them by using the twig code:<br>
\t\t\t\t<code>&#123;&#123; base_url_absolute &#125;&#125;&#123;&#123; page.route &#125;&#125;/&#123;&#123; page.header.pageImage &#125;&#125;</code><br>
\t\t\t\t<img src=\"{{ base_url_absolute }}{{ page.route }}/{{ page.header.pageImage }}\" alt=\"\">
\t\t\t</p>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>File upload field value</h3>
\t\t\t<p>
\t\t\t\t<code>&#123;&#123; page.find('/images').media[image.name].html() &#125;&#125;</code><br>
\t\t\t\t{% for image in page.header.fileupload %}
\t\t\t\t\t{{ page.find('/images').media[image.name].html() }}
\t\t\t\t{% endfor %}
\t\t\t</p>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>File picker field value</h3>
\t\t\t<p>
\t\t\t\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].html() &#125;&#125;</code><br>
\t\t\t\t{{ page.find('/images').media[page.header.filepicker].html() }}
\t\t\t</p>
\t\t\t
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Page select field value</h3>
\t\t\t<p>{{ base_url_absolute }}{{ page.header.pageselect }}</p>
\t\t\t<code>&#123;&#123; base_url_absolute &#125;&#125;&#123;&#123; page.header.pageselect &#125;&#125;</code>
\t\t\t<p><a href=\"{{ base_url_absolute }}{{ page.header.pageselect }}\">{{ page.header.pageselect }}</a></p>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Repeater field value</h3>
\t\t\t<ul>
\t\t\t{% for item in page.header.repeater %}
\t\t\t\t<li>text: {{ item.text }} <br>boolean: {{ item.primary }}</li>
\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<code>
\t\t\t\t&#123;% for item in page.header.repeater %&#125;<br>
\t\t\t\t\ttext: &#123;&#123; item.text &#125;&#125;<br>
\t\t\t\t\tboolean: &#123;&#123; item.primary &#125;&#125;<br>
\t\t\t\t&#123;% endfor %&#125;
\t\t\t</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Selectize field value (tag)</h3>
\t\t\t<ul>
\t\t\t{% for item in page.header.selection %}
\t\t\t\t<li>tag: {{ item }}</li>\t
\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<code>
\t\t\t\t&#123;% for item in page.header.selection %&#125;<br>
\t\t\t\t\ttag: &#123;&#123; item &#125;&#125;<br>
\t\t\t\t&#123;% endfor %&#125;
\t\t\t</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Text field value</h3>
\t\t\t<p>{{ page.header.text }}</p>
\t\t\t<code>&#123;&#123; page.header.text &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Textarea field value</h3>
\t\t\t<p>{{ page.header.textarea }}</p>
\t\t\t<code>&#123;&#123; page.header.textarea &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>TinyMCE field value</h3>
\t\t\t{{ page.header.tinymce }}
\t\t\t<code>&#123;&#123; page.header.tinymce &#125;&#125;</code>
\t\t</div>

\t\t<div class=\"field\">
\t\t\t<h3>Toggle field value</h3>
\t\t\t{{ page.header.toggle }} <br>
\t\t\t<code>&#123;&#123; page.header.toggle &#125;&#125;</code>
\t\t</div>

\t</div>

{% endblock %}
", "fields-demo.html.twig", "/Users/pau/Sites/grav-demonstratie/user/themes/my-demo-theme/templates/fields-demo.html.twig");
    }
}
