<?php

/* collection-demo.html.twig */
class __TwigTemplate_636be2b1f0275d3cd9db6e6ff91238351f4c2707dd74ef3b0e1d87512a41b94c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "collection-demo.html.twig", 1);
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
\t\tcode { display: block; padding: 5px; margin: 15px 0; background: #000; color: #fff; }
\t</style>

<div style=\"padding: 30px; background: #ededed;\">

\t<!-- https://learn.getgrav.org/content/collections -->
\t<h1>Page collections - creating listings in Grav</h1>
\t<small><a href=\"https://learn.getgrav.org/content/collections\">https://learn.getgrav.org/content/collections</a></small>



\t<!-- basic example -->
\t<div class=\"field\">

\t\t<h2>List all child pages from the root</h2>
\t\t<code>";
        // line 22
        echo " {% for item in page.collection({ 'items': '@root.children' }) %} ";
        echo "</code>
\t\t<code>";
        // line 23
        echo twig_escape_filter($this->env, " <a href='{{ item.url }}'>{{ item.title }}</a> ");
        echo "</code>
\t\t<code>";
        // line 24
        echo " {% endfor %} ";
        echo "</code>

\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t\t\t<a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a> <br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
\t</div>



\t<!-- order example -->
\t<div class=\"field\">

\t\t<h2>List by order</h2>
\t\t<code>";
        // line 38
        echo " {% for item in page.collection({ 'items': '@root.children', 'order': {'by': 'folder', 'dir': 'desc'} }) %} ";
        echo "</code>
\t\t<code>";
        // line 39
        echo twig_escape_filter($this->env, " <a href='{{ item.url }}'>{{ item.title }}</a> ");
        echo "</code>
\t\t<code>";
        // line 40
        echo " {% endfor %} ";
        echo "</code>

\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children", "order" => array("by" => "folder", "dir" => "desc"))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "\t\t
\t\t\t<a href=\"";
            // line 51
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a> <br>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
\t</div>

\t
\t<!-- listing by template example -->
\t<div class=\"field\">

\t\t<h2>List by single template used - ofType()</h2>
\t\t<code>";
        // line 62
        echo " {% for item in page.collection({'items': '@root.children', 'order': {'by': 'date','dir': 'desc'} }).ofType('image-demo') %} ";
        echo "</code>
\t\t<code>";
        // line 63
        echo twig_escape_filter($this->env, " <a href='{{ item.url }}'>{{ item.title }}</a> ");
        echo "</code>
\t\t<code>";
        // line 64
        echo " {% endfor %} ";
        echo "</code>

\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children", "order" => array("by" => "date", "dir" => "desc"))), "method"), "ofType", array(0 => "image-demo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 76
            echo "\t\t
\t\t\t<a href=\"";
            // line 77
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a> <br>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
\t</div>

\t

\t<!-- listing by template example -->
\t<div class=\"field\">

\t\t<h2>List by multiple templates used - ofOneOfTheseTypes([array])</h2>
\t\t<code>";
        // line 89
        echo " {% for item in page.collection({'items': '@root.children', 'order': {'by': 'date','dir': 'desc'} }).ofOneOfTheseTypes(['image-demo','divider-demo']) %} ";
        echo "</code>
\t\t<code>";
        // line 90
        echo twig_escape_filter($this->env, " <a href='{{ item.url }}'>{{ item.title }}</a> ");
        echo "</code>
\t\t<code>";
        // line 91
        echo " {% endfor %} ";
        echo "</code>

\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children", "order" => array("by" => "date", "dir" => "desc"))), "method"), "ofOneOfTheseTypes", array(0 => array(0 => "image-demo", 1 => "divider-demo")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 103
            echo "\t\t
\t\t\t<a href=\"";
            // line 104
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a> <br>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
\t</div>



\t<!-- Listing amount example -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - Restriction by order & limit</h2>
\t\t<code>";
        // line 116
        echo " {% for item in page.collection({'items': '@root.children'}, 'order': {'by': 'date', 'dir': 'desc'}, 'limit': '2') %} ";
        echo "</code>
\t\t<code>";
        // line 117
        echo twig_escape_filter($this->env, " <a href='{{ item.url }}'>{{ item.title }}</a> ");
        echo "</code>
\t\t<code>";
        // line 118
        echo " {% endfor %} ";
        echo "</code>

\t\t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children", "order" => array("by" => "date", "dir" => "desc"), "limit" => "2")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 130
            echo "\t
\t\t\t<a href=\"";
            // line 131
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a> <br>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
\t</div>
\t

\t<!-- Listing amount example -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - Restriction by slice(offset, length)</h2>
\t\t<code>";
        // line 142
        echo " {% for item in page.collection({'items': '@root.children'}).slice(0,3) %} ";
        echo "</code>
\t\t<code>";
        // line 143
        echo twig_escape_filter($this->env, " <a href='{{ item.url }}'>{{ item.title }}</a> ");
        echo "</code>
\t\t<code>";
        // line 144
        echo " {% endfor %} ";
        echo "</code>

\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children")), "method"), "slice", array(0 => 0, 1 => 3), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            echo "\t\t\t<a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "title", array());
            echo "</a> <br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
\t</div>



\t<!-- Listing with pagination -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - next / previous links</h2>

\t\t";
        // line 162
        $context["theCollection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children")), "method");
        // line 163
        echo "\t\t";
        $context["nextPage"] = (($this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method", false, true), "url", array()), $this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "first", array(), "method"), "url", array()))) : ($this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "first", array(), "method"), "url", array())));
        // line 164
        echo "\t\t";
        $context["prevPage"] = (($this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["page"] ?? null), "path", array())), "method", false, true), "url", array()), $this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "last", array(), "method"), "url", array()))) : ($this->getAttribute($this->getAttribute(($context["theCollection"] ?? null), "last", array(), "method"), "url", array())));
        // line 165
        echo "
        <a class=\"nav nav-prev\" href=\"";
        // line 166
        echo ($context["prevPage"] ?? null);
        echo "\"><i class=\"fa fa-chevron-left\"></i>Prev</a>
\t\t<strong> ";
        // line 167
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo " </strong>
        <a class=\"nav nav-next\" href=\"";
        // line 168
        echo ($context["nextPage"] ?? null);
        echo "\">Next<i class=\"fa fa-chevron-right\"></i></a>
\t</div>
\t



\t<!-- Listing with pagination -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - pagination by children</h2>

\t\t";
        // line 179
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@self.children", "pagination" => true, "order" => array("by" => "title"), "limit" => 2)), "method");
        // line 185
        echo "
\t\t";
        // line 186
        $context["itemsInCollection"] = twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "items", array()))), "method"));
        // line 187
        echo "\t\t";
        $context["itemsPerPage"] = (($this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array(), "any", false, true), "limit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array(), "any", false, true), "limit", array()), ($context["itemsInCollection"] ?? null))) : (($context["itemsInCollection"] ?? null)));
        // line 188
        echo "\t\t";
        $context["pagesInCollection"] = twig_round((($context["itemsInCollection"] ?? null) / ($context["itemsPerPage"] ?? null)), 0, "ceil");
        // line 189
        echo "\t\t";
        $context["currentPage"] = (($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "page"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "page"), "method"), "1")) : ("1"));
        // line 190
        echo "
\t\t<ul class=\"pagination\">
\t\t";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rangeFunc(1, ($context["pagesInCollection"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 193
            echo "\t\t\t<li ";
            if ((($context["currentPage"] ?? null) === (("" . $context["i"]) . ""))) {
                echo " class=\"currentpage\" ";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 194
            echo ((($this->getAttribute(($context["page"] ?? null), "url", array()) . "/page") . $this->getAttribute(($context["system"] ?? null), "param_sep", array())) . $context["i"]);
            echo "\">";
            echo $context["i"];
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "\t\t</ul>

\t\t";
        // line 200
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 201
            echo "\t\t   ";
            echo $this->getAttribute($context["child"], "title", array());
            echo " <br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "
\t</div>



\t<!-- Listing with pagination -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - pagination by template</h2>
\t\t<p><strong>When using dynamic twig variables, turn off the page cache !</strong></p>

\t\t<!-- setup variables -->
\t\t";
        // line 215
        $context["headerCollection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => "@root.children")), "method");
        // line 216
        echo "\t\t";
        $context["typesInCollection"] = $this->getAttribute(($context["headerCollection"] ?? null), "ofOneOfTheseTypes", array(0 => array(0 => "image-demo", 1 => "divider-demo", 2 => "fields-demo")), "method");
        // line 217
        echo "\t\t";
        $context["itemsPerPage"] = 2;
        // line 218
        echo "
\t\t<!-- page amount calculations -->
\t\t";
        // line 220
        $context["itemsInCollection"] = twig_length_filter($this->env, ($context["typesInCollection"] ?? null));
        // line 221
        echo "\t\t";
        $context["pagesInCollection"] = twig_round((($context["itemsInCollection"] ?? null) / ($context["itemsPerPage"] ?? null)), 0, "ceil");
        // line 222
        echo "\t\t
\t\t<!-- listing item amount calculations -->
\t\t";
        // line 224
        $context["currentPage"] = (($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "page"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "page"), "method"), "1")) : ("1"));
        // line 225
        echo "\t\t";
        $context["sliceOffset"] = ((($context["currentPage"] ?? null) * ($context["itemsPerPage"] ?? null)) - ($context["itemsPerPage"] ?? null));
        // line 226
        echo "
\t\t<!-- fallback - if itemsPerPage is set to 1 -->
\t\t";
        // line 228
        if ( !(($context["itemsPerPage"] ?? null) === 1)) {
            // line 229
            echo "\t\t\t";
            $context["sliceLength"] = (($context["sliceOffset"] ?? null) + ($context["itemsPerPage"] ?? null));
            // line 230
            echo "\t\t";
        } else {
            // line 231
            echo "\t\t\t";
            if ((($context["sliceOffset"] ?? null) == 0)) {
                // line 232
                echo "\t\t\t\t";
                $context["sliceLength"] = 1;
                // line 233
                echo "\t\t\t";
            } else {
                // line 234
                echo "\t\t\t\t";
                $context["sliceLength"] = ($context["sliceOffset"] ?? null);
                // line 235
                echo "\t\t\t";
            }
            // line 236
            echo "\t\t";
        }
        // line 237
        echo "
\t\t<!-- the rendering -->
\t\t";
        // line 239
        $context["theCollection"] = $this->getAttribute(($context["typesInCollection"] ?? null), "slice", array(0 => ($context["sliceOffset"] ?? null), 1 => ($context["sliceLength"] ?? null)), "method");
        // line 240
        echo "

\t\t";
        // line 242
        echo ("items per page: " . ($context["itemsPerPage"] ?? null));
        echo " <br>
\t\t";
        // line 243
        echo ("items in collection: " . ($context["itemsInCollection"] ?? null));
        echo " <br>
\t\t";
        // line 244
        echo ("pages in collection: " . ($context["pagesInCollection"] ?? null));
        echo " <br>
\t\t";
        // line 245
        echo ("current page: " . ($context["currentPage"] ?? null));
        echo " <br>
\t\t";
        // line 246
        echo ("slice offset: " . ($context["sliceOffset"] ?? null));
        echo " <br>
\t\t";
        // line 247
        echo ("slice length: " . ($context["sliceLength"] ?? null));
        echo " <br>

\t\t
\t\t<!-- the pagination -->
\t\t<ul class=\"pagination\">
\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rangeFunc(1, ($context["pagesInCollection"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 253
            echo "\t\t\t<li ";
            if ((($context["currentPage"] ?? null) === (("" . $context["number"]) . ""))) {
                echo " class=\"currentpage\" ";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 254
            echo ((($this->getAttribute(($context["page"] ?? null), "url", array()) . "/page") . $this->getAttribute(($context["system"] ?? null), "param_sep", array())) . $context["number"]);
            echo "\">";
            echo $context["number"];
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\t</ul>

\t\t<!-- the list items -->
\t\t";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            echo " 
\t\t   ";
            // line 261
            echo $this->getAttribute($context["child"], "title", array());
            echo " <br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "collection-demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 263,  530 => 261,  524 => 260,  519 => 257,  508 => 254,  501 => 253,  497 => 252,  489 => 247,  485 => 246,  481 => 245,  477 => 244,  473 => 243,  469 => 242,  465 => 240,  463 => 239,  459 => 237,  456 => 236,  453 => 235,  450 => 234,  447 => 233,  444 => 232,  441 => 231,  438 => 230,  435 => 229,  433 => 228,  429 => 226,  426 => 225,  424 => 224,  420 => 222,  417 => 221,  415 => 220,  411 => 218,  408 => 217,  405 => 216,  403 => 215,  389 => 203,  380 => 201,  375 => 200,  371 => 197,  360 => 194,  353 => 193,  349 => 192,  345 => 190,  342 => 189,  339 => 188,  336 => 187,  334 => 186,  331 => 185,  329 => 179,  315 => 168,  311 => 167,  307 => 166,  304 => 165,  301 => 164,  298 => 163,  296 => 162,  284 => 152,  273 => 150,  269 => 146,  264 => 144,  260 => 143,  256 => 142,  246 => 134,  235 => 131,  232 => 130,  228 => 120,  223 => 118,  219 => 117,  215 => 116,  204 => 107,  193 => 104,  190 => 103,  186 => 93,  181 => 91,  177 => 90,  173 => 89,  162 => 80,  151 => 77,  148 => 76,  144 => 66,  139 => 64,  135 => 63,  131 => 62,  121 => 54,  110 => 51,  107 => 50,  103 => 42,  98 => 40,  94 => 39,  90 => 38,  79 => 29,  68 => 27,  64 => 26,  59 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
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
\t\tcode { display: block; padding: 5px; margin: 15px 0; background: #000; color: #fff; }
\t</style>

<div style=\"padding: 30px; background: #ededed;\">

\t<!-- https://learn.getgrav.org/content/collections -->
\t<h1>Page collections - creating listings in Grav</h1>
\t<small><a href=\"https://learn.getgrav.org/content/collections\">https://learn.getgrav.org/content/collections</a></small>



\t<!-- basic example -->
\t<div class=\"field\">

\t\t<h2>List all child pages from the root</h2>
\t\t<code>{{\" {% for item in page.collection({ 'items': '@root.children' }) %} \"}}</code>
\t\t<code>{{\" <a href='{{ item.url }}'>{{ item.title }}</a> \"|escape}}</code>
\t\t<code>{{\" {% endfor %} \"}}</code>

\t\t{% for item in page.collection({ 'items': '@root.children' }) %}
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a> <br>
\t\t{% endfor %}

\t</div>



\t<!-- order example -->
\t<div class=\"field\">

\t\t<h2>List by order</h2>
\t\t<code>{{\" {% for item in page.collection({ 'items': '@root.children', 'order': {'by': 'folder', 'dir': 'desc'} }) %} \"}}</code>
\t\t<code>{{\" <a href='{{ item.url }}'>{{ item.title }}</a> \"|escape}}</code>
\t\t<code>{{\" {% endfor %} \"}}</code>

\t\t{% for item in page.collection({
\t            'items': '@root.children',
\t            'order': {
\t                'by': 'folder',
\t                'dir': 'desc',
\t            }
\t        })
\t    %}
\t\t
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a> <br>

\t\t{% endfor %}

\t</div>

\t
\t<!-- listing by template example -->
\t<div class=\"field\">

\t\t<h2>List by single template used - ofType()</h2>
\t\t<code>{{\" {% for item in page.collection({'items': '@root.children', 'order': {'by': 'date','dir': 'desc'} }).ofType('image-demo') %} \"}}</code>
\t\t<code>{{\" <a href='{{ item.url }}'>{{ item.title }}</a> \"|escape}}</code>
\t\t<code>{{\" {% endfor %} \"}}</code>

\t\t{% for item in page.collection({
\t            'items': '@root.children',
\t            'order': {
\t                'by': 'date',
\t                'dir': 'desc',
\t            },
\t            
\t        })
\t        .ofType('image-demo')
\t    %}
\t\t
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a> <br>

\t\t{% endfor %}

\t</div>

\t

\t<!-- listing by template example -->
\t<div class=\"field\">

\t\t<h2>List by multiple templates used - ofOneOfTheseTypes([array])</h2>
\t\t<code>{{\" {% for item in page.collection({'items': '@root.children', 'order': {'by': 'date','dir': 'desc'} }).ofOneOfTheseTypes(['image-demo','divider-demo']) %} \"}}</code>
\t\t<code>{{\" <a href='{{ item.url }}'>{{ item.title }}</a> \"|escape}}</code>
\t\t<code>{{\" {% endfor %} \"}}</code>

\t\t{% for item in page.collection({
\t            'items': '@root.children',
\t            'order': {
\t                'by': 'date',
\t                'dir': 'desc',
\t            },
\t            
\t        })
\t        .ofOneOfTheseTypes(['image-demo','divider-demo'])
\t    %}
\t\t
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a> <br>

\t\t{% endfor %}

\t</div>



\t<!-- Listing amount example -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - Restriction by order & limit</h2>
\t\t<code>{{\" {% for item in page.collection({'items': '@root.children'}, 'order': {'by': 'date', 'dir': 'desc'}, 'limit': '2') %} \"}}</code>
\t\t<code>{{\" <a href='{{ item.url }}'>{{ item.title }}</a> \"|escape}}</code>
\t\t<code>{{\" {% endfor %} \"}}</code>

\t\t{% for item in page.collection({
\t            'items': '@root.children',
\t            'order': {
\t                'by': 'date',
\t                'dir': 'desc',
\t            },
\t            'limit': '2'
\t            
\t        })
\t    %}
\t
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a> <br>

\t\t{% endfor %}

\t</div>
\t

\t<!-- Listing amount example -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - Restriction by slice(offset, length)</h2>
\t\t<code>{{\" {% for item in page.collection({'items': '@root.children'}).slice(0,3) %} \"}}</code>
\t\t<code>{{\" <a href='{{ item.url }}'>{{ item.title }}</a> \"|escape}}</code>
\t\t<code>{{\" {% endfor %} \"}}</code>

\t\t{% for item in page.collection({
\t\t\t\t'items': '@root.children'
\t\t\t}).slice(0,3) 
\t\t%}
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a> <br>
\t\t{% endfor %}

\t</div>



\t<!-- Listing with pagination -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - next / previous links</h2>

\t\t{% set theCollection = page.collection({'items': '@root.children'}) %}
\t\t{% set nextPage = theCollection.prevSibling(page.path).url|default(theCollection.first().url) %}
\t\t{% set prevPage = theCollection.nextSibling(page.path).url|default(theCollection.last().url) %}

        <a class=\"nav nav-prev\" href=\"{{ prevPage }}\"><i class=\"fa fa-chevron-left\"></i>Prev</a>
\t\t<strong> {{ page.title }} </strong>
        <a class=\"nav nav-next\" href=\"{{ nextPage }}\">Next<i class=\"fa fa-chevron-right\"></i></a>
\t</div>
\t



\t<!-- Listing with pagination -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - pagination by children</h2>

\t\t{% set collection = page.collection({
\t\t\t'items': '@self.children', 
\t\t\t'pagination': true, 
\t\t\t'order': {'by': 'title'}, 
\t\t\t'limit': 2}) 
\t\t%}

\t\t{% set itemsInCollection = page.collection({'items': collection.params.items})|length %}
\t\t{% set itemsPerPage = collection.params.limit|default(itemsInCollection) %}
\t\t{% set pagesInCollection = (itemsInCollection / itemsPerPage)|round(0, 'ceil') %}
\t\t{% set currentPage = uri.param('page')|default('1') %}

\t\t<ul class=\"pagination\">
\t\t{% for i in range(1, pagesInCollection) %}
\t\t\t<li {% if currentPage is same as('' ~ i ~ '') %} class=\"currentpage\" {% endif %}>
\t\t\t\t<a href=\"{{ page.url ~ '/page' ~ system.param_sep ~ i }}\">{{ i }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t\t</ul>

\t\t{# Render the list of blog posts (automatically filtered when using pagination) #}
\t\t{% for child in collection %}
\t\t   {{ child.title }} <br>
\t\t{% endfor %}

\t</div>



\t<!-- Listing with pagination -->
\t<div class=\"field\">

\t\t<h2>Amount of listing items - pagination by template</h2>
\t\t<p><strong>When using dynamic twig variables, turn off the page cache !</strong></p>

\t\t<!-- setup variables -->
\t\t{% set headerCollection = page.collection({ 'items': '@root.children' }) %}
\t\t{% set typesInCollection = headerCollection.ofOneOfTheseTypes(['image-demo','divider-demo','fields-demo']) %}
\t\t{% set itemsPerPage = 2 %}

\t\t<!-- page amount calculations -->
\t\t{% set itemsInCollection = typesInCollection|length %}
\t\t{% set pagesInCollection = (itemsInCollection / itemsPerPage)|round(0, 'ceil') %}
\t\t
\t\t<!-- listing item amount calculations -->
\t\t{% set currentPage = uri.param('page')|default('1') %}
\t\t{% set sliceOffset = (currentPage * itemsPerPage) - itemsPerPage %}

\t\t<!-- fallback - if itemsPerPage is set to 1 -->
\t\t{% if not itemsPerPage is same as(1) %}
\t\t\t{% set sliceLength =  sliceOffset + itemsPerPage %}
\t\t{% else %}
\t\t\t{% if sliceOffset ==  0 %}
\t\t\t\t{% set sliceLength =  1 %}
\t\t\t{% else %}
\t\t\t\t{% set sliceLength =  sliceOffset %}
\t\t\t{% endif %}
\t\t{% endif %}

\t\t<!-- the rendering -->
\t\t{% set theCollection = typesInCollection.slice(sliceOffset,sliceLength) %}


\t\t{{ \"items per page: \" ~ itemsPerPage }} <br>
\t\t{{ \"items in collection: \" ~ itemsInCollection }} <br>
\t\t{{ \"pages in collection: \" ~ pagesInCollection }} <br>
\t\t{{ \"current page: \" ~ currentPage }} <br>
\t\t{{ \"slice offset: \" ~ sliceOffset }} <br>
\t\t{{ \"slice length: \" ~ sliceLength }} <br>

\t\t
\t\t<!-- the pagination -->
\t\t<ul class=\"pagination\">
\t\t{% for number in range(1, pagesInCollection) %}
\t\t\t<li {% if currentPage is same as('' ~ number ~ '') %} class=\"currentpage\" {% endif %}>
\t\t\t\t<a href=\"{{ page.url ~ '/page' ~ system.param_sep ~ number }}\">{{ number }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t\t</ul>

\t\t<!-- the list items -->
\t\t{% for child in theCollection %} 
\t\t   {{ child.title }} <br>
\t\t{% endfor %}

\t</div>

</div>
{% endblock %}
", "collection-demo.html.twig", "/Users/hendrikvandijck/school/research-grav/user/themes/my-demo-theme/templates/collection-demo.html.twig");
    }
}
