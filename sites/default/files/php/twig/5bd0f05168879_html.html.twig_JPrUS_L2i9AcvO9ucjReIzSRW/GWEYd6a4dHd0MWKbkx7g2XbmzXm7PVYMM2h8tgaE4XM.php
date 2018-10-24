<?php

/* themes/custom/trasinv/templates/system/html.html.twig */
class __TwigTemplate_4da4f307a5491b929a1f84d5c45bc56f9f965993507504bee28dba97de7b1514 extends Twig_Template
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
        $tags = array("set" => 48);
        $filters = array("clean_class" => 50, "raw" => 81, "safe_join" => 82, "t" => 88);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'safe_join', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        $context["body_classes"] = array(0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 51
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 52
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 53
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-is-" . $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array()))) : ("")), 5 => (($this->getAttribute(        // line 54
($context["theme"] ?? null), "has_glyphicons", array())) ? ("has-glyphicons") : ("")));
        // line 57
        echo "<!DOCTYPE html>
<html ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo ">
  <head>

    ";
        // line 62
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Bootstrap core CSS -->
    <link href=\"themes/custom/trasinv/web/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom fonts for this template -->
    <link href=\"themes/custom/trasinv/fonts/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href=\"themes/custom/trasinv/web/css/agency.css\" rel=\"stylesheet\">
    ";
        // line 78
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
";
        // line 80
        echo "<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
    <head-placeholder token=\"";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>
  <body";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
        <!-- Bootstrap core JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery/jquery.min.js\"></script>
    <script src=\"themes/custom/trasinv/web/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Contact form JavaScript -->
    <script src=\"themes/custom/trasinv/web/js/jqBootstrapValidation.js\"></script>
    <script src=\"themes/custom/trasinv/web/js/contact_me.js\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"themes/custom/trasinv/web/js/agency.min.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/trasinv/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 93,  117 => 92,  113 => 91,  109 => 90,  104 => 88,  99 => 86,  94 => 84,  90 => 83,  86 => 82,  82 => 81,  79 => 80,  76 => 78,  60 => 62,  54 => 58,  51 => 57,  49 => 54,  48 => 53,  47 => 52,  46 => 51,  45 => 50,  44 => 49,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - \$css: An array of CSS files for the current page.
 * - \$language: (object) The language the site is being displayed in.
 *   \$language->language contains its textual representation.
 *   \$language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - \$rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - \$grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - \$head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - \$head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the \$head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - \$head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - \$styles: Style tags necessary to import all CSS files for the page.
 * - \$scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - \$page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - \$page: The rendered page content.
 * - \$page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - \$classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @ingroup templates
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
    theme.settings.navbar_position ? 'navbar-is-' ~ theme.settings.navbar_position,
    theme.has_glyphicons ? 'has-glyphicons',
  ]
%}
<!DOCTYPE html>
<html {{ html_attributes }}>
  <head>

    {# estilos template   #}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Bootstrap core CSS -->
    <link href=\"themes/custom/trasinv/web/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom fonts for this template -->
    <link href=\"themes/custom/trasinv/fonts/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href=\"themes/custom/trasinv/web/css/agency.css\" rel=\"stylesheet\">
    {# fin de estilos templates  #}
{#     CSS #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
{# JS #}
<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
  </head>
  <body{{ attributes.addClass(body_classes) }}>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
        <!-- Bootstrap core JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery/jquery.min.js\"></script>
    <script src=\"themes/custom/trasinv/web/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Contact form JavaScript -->
    <script src=\"themes/custom/trasinv/web/js/jqBootstrapValidation.js\"></script>
    <script src=\"themes/custom/trasinv/web/js/contact_me.js\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"themes/custom/trasinv/web/js/agency.min.js\"></script>
  </body>
</html>
", "themes/custom/trasinv/templates/system/html.html.twig", "C:\\xampp\\htdocs\\memo\\drupal-8.6.1\\memo\\themes\\custom\\trasinv\\templates\\system\\html.html.twig");
    }
}
