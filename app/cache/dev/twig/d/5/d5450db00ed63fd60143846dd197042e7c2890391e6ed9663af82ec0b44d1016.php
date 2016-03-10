<?php

/* base.html.twig */
class __TwigTemplate_d5450db00ed63fd60143846dd197042e7c2890391e6ed9663af82ec0b44d1016 extends Twig_Template
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
        $__internal_8e3d4aa6e93f6ea5b8687b73f5677ff82922e7203e4510068f5a87b85636eaf6 = $this->env->getExtension("native_profiler");
        $__internal_8e3d4aa6e93f6ea5b8687b73f5677ff82922e7203e4510068f5a87b85636eaf6->enter($__internal_8e3d4aa6e93f6ea5b8687b73f5677ff82922e7203e4510068f5a87b85636eaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8e3d4aa6e93f6ea5b8687b73f5677ff82922e7203e4510068f5a87b85636eaf6->leave($__internal_8e3d4aa6e93f6ea5b8687b73f5677ff82922e7203e4510068f5a87b85636eaf6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b253f9867d74b2bbf744427f12152fd91ba437608cea7766aee4e04732fb6a0a = $this->env->getExtension("native_profiler");
        $__internal_b253f9867d74b2bbf744427f12152fd91ba437608cea7766aee4e04732fb6a0a->enter($__internal_b253f9867d74b2bbf744427f12152fd91ba437608cea7766aee4e04732fb6a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ROCK PAPER SCISSORS SPOCK LIZARD!";
        
        $__internal_b253f9867d74b2bbf744427f12152fd91ba437608cea7766aee4e04732fb6a0a->leave($__internal_b253f9867d74b2bbf744427f12152fd91ba437608cea7766aee4e04732fb6a0a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_043393105d4cbe7ae4014f4946b4bf7ce950946c14c6d7c985115044ba0a9ef4 = $this->env->getExtension("native_profiler");
        $__internal_043393105d4cbe7ae4014f4946b4bf7ce950946c14c6d7c985115044ba0a9ef4->enter($__internal_043393105d4cbe7ae4014f4946b4bf7ce950946c14c6d7c985115044ba0a9ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_043393105d4cbe7ae4014f4946b4bf7ce950946c14c6d7c985115044ba0a9ef4->leave($__internal_043393105d4cbe7ae4014f4946b4bf7ce950946c14c6d7c985115044ba0a9ef4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f47e8f532ff718fb8d8f70877ce435aae526864f200b73ac805f1bd6229b8d7a = $this->env->getExtension("native_profiler");
        $__internal_f47e8f532ff718fb8d8f70877ce435aae526864f200b73ac805f1bd6229b8d7a->enter($__internal_f47e8f532ff718fb8d8f70877ce435aae526864f200b73ac805f1bd6229b8d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f47e8f532ff718fb8d8f70877ce435aae526864f200b73ac805f1bd6229b8d7a->leave($__internal_f47e8f532ff718fb8d8f70877ce435aae526864f200b73ac805f1bd6229b8d7a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23d4ff81e25df684841fdb6e283823fc4006e041e627ce20972e6fa89866d690 = $this->env->getExtension("native_profiler");
        $__internal_23d4ff81e25df684841fdb6e283823fc4006e041e627ce20972e6fa89866d690->enter($__internal_23d4ff81e25df684841fdb6e283823fc4006e041e627ce20972e6fa89866d690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_23d4ff81e25df684841fdb6e283823fc4006e041e627ce20972e6fa89866d690->leave($__internal_23d4ff81e25df684841fdb6e283823fc4006e041e627ce20972e6fa89866d690_prof);

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
