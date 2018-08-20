<?php

/* divider-demo.html.twig */
class __TwigTemplate_43fbd3d813225cf5e4024095483c401522f6c1d2f7bd6238120fd939e846ba84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "divider-demo.html.twig", 1);
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
\t<div style=\"padding: 30px;\">
\t\tThis page has no content.
\t\tLook for the divider demo in the admin panel.
\t</div>

";
    }

    public function getTemplateName()
    {
        return "divider-demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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

\t<div style=\"padding: 30px;\">
\t\tThis page has no content.
\t\tLook for the divider demo in the admin panel.
\t</div>

{% endblock %}
", "divider-demo.html.twig", "/Users/pau/Sites/grav-demonstratie/user/themes/my-demo-theme/templates/divider-demo.html.twig");
    }
}
