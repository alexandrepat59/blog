<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b416a211c9cdc151d4db635a7cc3caeef30df0c5cd8afbd7ae24a56291cc174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e13045eec321ba461d27e02bbb9d67ebe55045ae09bc3001e72a7bb1979f13f = $this->env->getExtension("native_profiler");
        $__internal_0e13045eec321ba461d27e02bbb9d67ebe55045ae09bc3001e72a7bb1979f13f->enter($__internal_0e13045eec321ba461d27e02bbb9d67ebe55045ae09bc3001e72a7bb1979f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e13045eec321ba461d27e02bbb9d67ebe55045ae09bc3001e72a7bb1979f13f->leave($__internal_0e13045eec321ba461d27e02bbb9d67ebe55045ae09bc3001e72a7bb1979f13f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ff4d4da64a282186ebbf42103090ab91d71483c47994a87b0427a8c790a63e1 = $this->env->getExtension("native_profiler");
        $__internal_7ff4d4da64a282186ebbf42103090ab91d71483c47994a87b0427a8c790a63e1->enter($__internal_7ff4d4da64a282186ebbf42103090ab91d71483c47994a87b0427a8c790a63e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ff4d4da64a282186ebbf42103090ab91d71483c47994a87b0427a8c790a63e1->leave($__internal_7ff4d4da64a282186ebbf42103090ab91d71483c47994a87b0427a8c790a63e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73d956165cd27a05675d1c0eff38d4615ed2c54ab6a30c2de9b4b75fd01225d5 = $this->env->getExtension("native_profiler");
        $__internal_73d956165cd27a05675d1c0eff38d4615ed2c54ab6a30c2de9b4b75fd01225d5->enter($__internal_73d956165cd27a05675d1c0eff38d4615ed2c54ab6a30c2de9b4b75fd01225d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73d956165cd27a05675d1c0eff38d4615ed2c54ab6a30c2de9b4b75fd01225d5->leave($__internal_73d956165cd27a05675d1c0eff38d4615ed2c54ab6a30c2de9b4b75fd01225d5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7845676053eb98db5d33c51887bd4ed286cb48aa3a6088e42fc7eba0743ec744 = $this->env->getExtension("native_profiler");
        $__internal_7845676053eb98db5d33c51887bd4ed286cb48aa3a6088e42fc7eba0743ec744->enter($__internal_7845676053eb98db5d33c51887bd4ed286cb48aa3a6088e42fc7eba0743ec744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7845676053eb98db5d33c51887bd4ed286cb48aa3a6088e42fc7eba0743ec744->leave($__internal_7845676053eb98db5d33c51887bd4ed286cb48aa3a6088e42fc7eba0743ec744_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
