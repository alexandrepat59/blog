<?php

/* base.html.twig */
class __TwigTemplate_3a3de5f612eaa5c81035dddda6e99b065f9b394a215c89df997edb1851c1f901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28feb5371a782e27d3d03f3e0a88c034876dffc5bb3bbe747e804ca2af9132a3 = $this->env->getExtension("native_profiler");
        $__internal_28feb5371a782e27d3d03f3e0a88c034876dffc5bb3bbe747e804ca2af9132a3->enter($__internal_28feb5371a782e27d3d03f3e0a88c034876dffc5bb3bbe747e804ca2af9132a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_28feb5371a782e27d3d03f3e0a88c034876dffc5bb3bbe747e804ca2af9132a3->leave($__internal_28feb5371a782e27d3d03f3e0a88c034876dffc5bb3bbe747e804ca2af9132a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b7941ac40af8f6abddcd8f7b98e52499238a0036d6cfab7a755f4f2bd426b48 = $this->env->getExtension("native_profiler");
        $__internal_8b7941ac40af8f6abddcd8f7b98e52499238a0036d6cfab7a755f4f2bd426b48->enter($__internal_8b7941ac40af8f6abddcd8f7b98e52499238a0036d6cfab7a755f4f2bd426b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b7941ac40af8f6abddcd8f7b98e52499238a0036d6cfab7a755f4f2bd426b48->leave($__internal_8b7941ac40af8f6abddcd8f7b98e52499238a0036d6cfab7a755f4f2bd426b48_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2083788a9fed717b92cdfda965b1286cbb54d0a3379c9cbf8b9afa48ea79722e = $this->env->getExtension("native_profiler");
        $__internal_2083788a9fed717b92cdfda965b1286cbb54d0a3379c9cbf8b9afa48ea79722e->enter($__internal_2083788a9fed717b92cdfda965b1286cbb54d0a3379c9cbf8b9afa48ea79722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2083788a9fed717b92cdfda965b1286cbb54d0a3379c9cbf8b9afa48ea79722e->leave($__internal_2083788a9fed717b92cdfda965b1286cbb54d0a3379c9cbf8b9afa48ea79722e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_47ab9d4b2b23d2b49cec7b48e2f8965aff6451723a3fec6c45ee600a02e79e84 = $this->env->getExtension("native_profiler");
        $__internal_47ab9d4b2b23d2b49cec7b48e2f8965aff6451723a3fec6c45ee600a02e79e84->enter($__internal_47ab9d4b2b23d2b49cec7b48e2f8965aff6451723a3fec6c45ee600a02e79e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_47ab9d4b2b23d2b49cec7b48e2f8965aff6451723a3fec6c45ee600a02e79e84->leave($__internal_47ab9d4b2b23d2b49cec7b48e2f8965aff6451723a3fec6c45ee600a02e79e84_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_265eec7ef68b64c348406b429abea5d1d7e991030c3844e4308da353206dbbef = $this->env->getExtension("native_profiler");
        $__internal_265eec7ef68b64c348406b429abea5d1d7e991030c3844e4308da353206dbbef->enter($__internal_265eec7ef68b64c348406b429abea5d1d7e991030c3844e4308da353206dbbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_265eec7ef68b64c348406b429abea5d1d7e991030c3844e4308da353206dbbef->leave($__internal_265eec7ef68b64c348406b429abea5d1d7e991030c3844e4308da353206dbbef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
