<?php

/* image-demo.html.twig */
class __TwigTemplate_1d221b8687c33830cb1e91d176154373ab19bb5aebf28a98a0120a42a5193a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "image-demo.html.twig", 1);
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
        echo "<style>
\t.field { margin: 15px 0; padding:15px; background: #fff;}
\t.field img { max-width: 100%; height: auto; }
\tcode { display: inline-block; padding: 5px; margin: 15px 0; background: #000; color: #fff; }
</style>
<div style=\"padding: 30px; background: #ededed;\">
";
        // line 37
        echo "
<div class=\"field\">
\t<h3>Default image</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].html('My title', 'Some ALT text', 'myclass') &#125;&#125;</code>
\t<p>";
        // line 41
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "html", array(0 => "My title", 1 => "Some ALT text", 2 => "myclass"), "method");
        echo "</p>
</div>

";
        // line 83
        echo "
<div class=\"field\">
\t<h3>Display mode: source</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].display('thumbnail').html() &#125;&#125;</code>
\t<p>";
        // line 87
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 102
        echo "
<div class=\"field\">
\t<h3>Resize (with optional background color)</h3>
\t<p>Lets you create a new image based on the width and the height. The aspect ratio is maintained and the new image will contain blank areas in the color of the optional background color.</p>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].resize(200, 200, '#bada55').html() &#125;&#125;</code>
\t<p>";
        // line 107
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "resize", array(0 => 200, 1 => 200, 2 => "#bada55"), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 122
        echo "
<div class=\"field\">
\t<h3>Crop resize</h3>
\t<p>Best responive option. The aspect ratio is maintained and the new image will be resized to fit in the bounding-box</p>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].cropResize(400, 200).html() &#125;&#125;</code>
\t<p>";
        // line 127
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "cropResize", array(0 => 400, 1 => 200), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 145
        echo "
<div class=\"field\">
\t<h3>Crop zoom</h3>
\t<p>Best Hero/slider option. Similar to regular cropResize, cropZoom also takes a width and a height but will resize and crop the image to ensure the resulting image is the exact size you requested. The aspect ratio is maintained but parts of the image may be cropped, however the resulting image is centered.</p>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].cropZoom(400, 400).html() &#125;&#125;</code>
\t<p>";
        // line 150
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "cropZoom", array(0 => 400, 1 => 400), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 162
        echo "
<div class=\"field\">
\t<h3>Brightness</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].brightness(-50).html() &#125;&#125;</code>
\t<p>";
        // line 166
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "brightness", array(0 =>  -50), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 175
        echo "
<div class=\"field\">
\t<h3>Contrast</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].contrast(-50).html() &#125;&#125;</code>
\t<p>";
        // line 179
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "contrast", array(0 =>  -50), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 188
        echo "
<div class=\"field\">
\t<h3>Grayscale</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].grayscale.html() &#125;&#125;</code>
\t<p>";
        // line 192
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "grayscale", array()), "html", array(), "method");
        echo "</p>
</div>

";
        // line 201
        echo "
<div class=\"field\">
\t<h3>Smooth: Sharpen effect</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].smooth(-10).html() &#125;&#125;</code>
\t<p>";
        // line 205
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "smooth", array(0 =>  -10), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 214
        echo "
<div class=\"field\">
\t<h3>GaussianBlur</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].gaussianBlur(3).html() &#125;&#125;</code>
\t<p>";
        // line 218
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "gaussianBlur", array(0 => 3), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 227
        echo "
<div class=\"field\">
\t<h3>Colorize(red, green, blue)</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].colorize(-200,200,40).html() &#125;&#125;</code>
\t<p>";
        // line 231
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "colorize", array(0 =>  -200, 1 => 200, 2 => 40), "method"), "html", array(), "method");
        echo "</p>
</div>

";
        // line 237
        echo "
<div class=\"field\">
\t<h3>Combination: Sharpened, Colorized, Contrasted and Cropped to (x, y, width, height)</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].smooth(-10).colorize(-200,100,-40).contrast(-50).crop(885,210,300,300).html() &#125;&#125;</code>
\t<p>";
        // line 241
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "filepicker", array()), array(), "array"), "smooth", array(0 =>  -10), "method"), "colorize", array(0 =>  -200, 1 => 100, 2 =>  -40), "method"), "contrast", array(0 =>  -50), "method"), "crop", array(0 => 885, 1 => 210, 2 => 300, 3 => 300), "method"), "html", array(), "method");
        echo "</p>

</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "image-demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 241,  174 => 237,  168 => 231,  162 => 227,  156 => 218,  150 => 214,  144 => 205,  138 => 201,  132 => 192,  126 => 188,  120 => 179,  114 => 175,  108 => 166,  102 => 162,  96 => 150,  89 => 145,  83 => 127,  76 => 122,  70 => 107,  63 => 102,  57 => 87,  51 => 83,  45 => 41,  39 => 37,  31 => 4,  28 => 3,  11 => 1,);
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
<style>
\t.field { margin: 15px 0; padding:15px; background: #fff;}
\t.field img { max-width: 100%; height: auto; }
\tcode { display: inline-block; padding: 5px; margin: 15px 0; background: #000; color: #fff; }
</style>
<div style=\"padding: 30px; background: #ededed;\">
{#

=======================================================
RENDERING IMAGES
=======================================================

## Images saved in a global folder - 'user/pages/images'
++++++++++++++++++++++++++++++++++++++++++++++++++++++++

POS:
- Allows Grav image actions
- All pages have acces to all images. No duplication amongst pages.

### Render image as html img tag
#### Optionaly can add .html([title][, alt][, classes])
{% for image in page.header.fileupload %}
\t{{ page.find('/images').media[image.name].html('My title', 'Some ALT text', 'myclass') }}
\tor
\t{{ grav.pages.dispatch('/images').media[image.name].html('My title', 'Some ALT text', 'myclass') }}
{% endfor %}

### Get image url
{% for image in page.header.fileupload %}
\t{{ grav.pages.dispatch('/images').media[image.name].url }}
{% endfor %}

#}

<div class=\"field\">
\t<h3>Default image</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].html('My title', 'Some ALT text', 'myclass') &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].html('My title', 'Some ALT text', 'myclass') }}</p>
</div>

{#

## Images saved in a global theme folder - '<theme>/images'
++++++++++++++++++++++++++++++++++++++++++++++++++++++++

POS:
- Seperation of theme specific images (files)
- All pages can have acces to all theme specific images. No duplication amongst pages.

NEG:
- No Grav image actions

### Get image url
{% for image in page.header.fileupload %}
\t{{ url('theme://images/' ~ image.name) }}
{% endfor %}



=======================================================
GRAV IMAGE ACTIONS - Crop, resize, grayscale, etc
=======================================================

https://learn.getgrav.org/content/media


## Display mode
+++++++++++++++++++++++++++++++++++++++++++++++++++++++

!!! Display mode must be called first. See docs.
https://learn.getgrav.org/content/media#display-modes

source:\tVisual representation of the media itself, i.e. the actual image, video or file
text:\tTextual representation of the media
thumbnail:\tThe thumbnail image for this media object

{{ page.media['sample-image.jpg'].display('thumbnail') }}

#}

<div class=\"field\">
\t<h3>Display mode: source</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].display('thumbnail').html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].display('thumbnail').html() }}</p>
</div>

{#

## resize(width, height, [background])
+++++++++++++++++++++++++++++++++++++++++++++++++++++++

Lets you create a new image based on the width and the height. 
The aspect ratio is maintained and the new image will 
contain blank areas in the color of the optional background color

{{ page.media['sample-image.jpg'].resize(400, 200).html() }}

#}

<div class=\"field\">
\t<h3>Resize (with optional background color)</h3>
\t<p>Lets you create a new image based on the width and the height. The aspect ratio is maintained and the new image will contain blank areas in the color of the optional background color.</p>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].resize(200, 200, '#bada55').html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].resize(200, 200, '#bada55').html() }}</p>
</div>

{#

## cropResize(width, height)
+++++++++++++++++++++++++++++++++++++++++++++++++++++++

Best responive option.
The aspect ratio is maintained and the new image will be resized 
to fit in the bounding-box

{{ page.media['sample-image.jpg'].cropResize(300, 300).html() }}

#}

<div class=\"field\">
\t<h3>Crop resize</h3>
\t<p>Best responive option. The aspect ratio is maintained and the new image will be resized to fit in the bounding-box</p>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].cropResize(400, 200).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].cropResize(400, 200).html() }}</p>
</div>

{#

## cropZoom(width, height)
+++++++++++++++++++++++++++++++++++++++++++++++++++++++

Best Hero/slider option.
Similar to regular cropResize, cropZoom also takes a width 
and a height but will resize and crop the image to ensure 
the resulting image is the exact size you requested. 
The aspect ratio is maintained but parts of the image may 
be cropped, however the resulting image is centered.

{{ page.media['sample-image.jpg'].cropZoom(600,200).html() }}

#}

<div class=\"field\">
\t<h3>Crop zoom</h3>
\t<p>Best Hero/slider option. Similar to regular cropResize, cropZoom also takes a width and a height but will resize and crop the image to ensure the resulting image is the exact size you requested. The aspect ratio is maintained but parts of the image may be cropped, however the resulting image is centered.</p>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].cropZoom(400, 400).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].cropZoom(400, 400).html() }}</p>
</div>

{#

## Some other manipulation filters - grav contains more
+++++++++++++++++++++++++++++++++++++++++++++++++++++++

brightness(value) - value from -255 to +255
{{ page.media['sample-image.jpg'].brightness(-100).html() }}

#}

<div class=\"field\">
\t<h3>Brightness</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].brightness(-50).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].brightness(-50).html() }}</p>
</div>

{#

contrast(value) - value from -100 to +100
{{ page.media['sample-image.jpg'].contrast(-50).html() }}

#}

<div class=\"field\">
\t<h3>Contrast</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].contrast(-50).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].contrast(-50).html() }}</p>
</div>

{#

grayscale()
{{ page.media['sample-image.jpg'].grayscale.html() }}

#}

<div class=\"field\">
\t<h3>Grayscale</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].grayscale.html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].grayscale.html() }}</p>
</div>

{#

smooth(value) - blur/sharpen effect - value setting from -10 to 10
{{ page.media['sample-image.jpg'].smooth(5).html() }}

#}

<div class=\"field\">
\t<h3>Smooth: Sharpen effect</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].smooth(-10).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].smooth(-10).html() }}</p>
</div>

{#

gaussianBlur(factor) - Strong blur effect
{{ page.media['sample-image.jpg'].gaussianBlur(3).html() }}

#}

<div class=\"field\">
\t<h3>GaussianBlur</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].gaussianBlur(3).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].gaussianBlur(3).html() }}</p>
</div>

{#

colorize(red, green, blue) -  red, green, and blue values from -255 to +255
{{ page.media['sample-image.jpg'].colorize(100,-100,40).html() }}

#}

<div class=\"field\">
\t<h3>Colorize(red, green, blue)</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].colorize(-200,200,40).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].colorize(-200,200,40).html() }}</p>
</div>

{#

#}

<div class=\"field\">
\t<h3>Combination: Sharpened, Colorized, Contrasted and Cropped to (x, y, width, height)</h3>
\t<code>&#123;&#123; page.find('/images').media[page.header.filepicker].smooth(-10).colorize(-200,100,-40).contrast(-50).crop(885,210,300,300).html() &#125;&#125;</code>
\t<p>{{ page.find('/images').media[page.header.filepicker].smooth(-10).colorize(-200,100,-40).contrast(-50).crop(885,210,300,300).html() }}</p>

</div>

</div>
{% endblock %}
", "image-demo.html.twig", "/Users/hendrikvandijck/school/research-grav/user/themes/my-demo-theme/templates/image-demo.html.twig");
    }
}
