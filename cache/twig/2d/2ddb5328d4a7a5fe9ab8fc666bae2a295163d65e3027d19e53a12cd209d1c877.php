<?php

/* partials/userinfo-avatar-credit.html.twig */
class __TwigTemplate_86bbb95708ad577a982bb59fcd2b654f0ba43d3cb41e1390f127afe5bf93e1d1 extends Twig_Template
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
        echo "<p class=\"gravatar\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_BY"), "html", null, true);
        echo " <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a>. ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_UPLOAD_OWN"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar-credit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"gravatar\">{{ \"PLUGIN_ADMIN.AVATAR_BY\"|tu }} <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a>. {{ \"PLUGIN_ADMIN.AVATAR_UPLOAD_OWN\"|tu }}</p>
", "partials/userinfo-avatar-credit.html.twig", "/Users/pau/Sites/grav-demonstratie/user/plugins/admin/themes/grav/templates/partials/userinfo-avatar-credit.html.twig");
    }
}
