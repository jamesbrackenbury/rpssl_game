<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_9ea32cd253c2fdb0b126f08756ad69b19efa949079f742ec7702dfb07e202b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        $__internal_1ab42aee5cffcc80914fcb86a09d90675bed4eb54a54f0fa64058d119900f12d = $this->env->getExtension("native_profiler");
        $__internal_1ab42aee5cffcc80914fcb86a09d90675bed4eb54a54f0fa64058d119900f12d->enter($__internal_1ab42aee5cffcc80914fcb86a09d90675bed4eb54a54f0fa64058d119900f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab42aee5cffcc80914fcb86a09d90675bed4eb54a54f0fa64058d119900f12d->leave($__internal_1ab42aee5cffcc80914fcb86a09d90675bed4eb54a54f0fa64058d119900f12d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be110e8d0775372952c24fdebbcf0eaf3689853871391025089c6021dbe9e7ff = $this->env->getExtension("native_profiler");
        $__internal_be110e8d0775372952c24fdebbcf0eaf3689853871391025089c6021dbe9e7ff->enter($__internal_be110e8d0775372952c24fdebbcf0eaf3689853871391025089c6021dbe9e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["dumps_count"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array());
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["dumps_count"]) ? $context["dumps_count"] : $this->getContext($context, "dumps_count"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M21 14h-1c-0.3-4.8-4.1-8.7-9-9V4h-1v1c-4.8 0.3-8.7 4.1-9 9H0v1h1c0.3 4.8 4.1 8.7 9 9v1h1v-1 c4.8-0.3 8.7-4.1 9-9h1V14z M11 22v-4h-1v4c-3.7-0.2-6.7-3.2-7-7h4v-1H3c0.2-3.7 3.2-6.7 7-7v4h1V7c3.7 0.2 6.7 3.2 7 7h-4v1h4 C17.7 18.7 14.7 21.7 11 22z\"/></svg>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["dumps_count"]) ? $context["dumps_count"] : $this->getContext($context, "dumps_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>dump()</b>
            </div>
            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 17
                echo "                <div class=\"sf-toolbar-info-piece\">
                    in
                    ";
                // line 19
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 20
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 21
                    echo "                        ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 26
                    echo "                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                    line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                    ";
                // line 30
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\"
                 onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);}\"/>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 36
            echo "
        ";
            // line 37
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Debug/Profiler/dump.html.twig", 37)->display(array_merge($context, array("link" => true)));
            // line 38
            echo "    ";
        }
        
        $__internal_be110e8d0775372952c24fdebbcf0eaf3689853871391025089c6021dbe9e7ff->leave($__internal_be110e8d0775372952c24fdebbcf0eaf3689853871391025089c6021dbe9e7ff_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81df5893cee498012f6bb951189b6c97202abc47be65f0282b823ee55f077cca = $this->env->getExtension("native_profiler");
        $__internal_81df5893cee498012f6bb951189b6c97202abc47be65f0282b823ee55f077cca->enter($__internal_81df5893cee498012f6bb951189b6c97202abc47be65f0282b823ee55f077cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 44
        echo "";
        // line 45
        echo "<svg width=\"28\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 28 28\" enable-background=\"new 0 0 28 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M28 13h-1.1C26.5 6.6 21.4 1.5 15 1.1V0h-2v1.1C6.6 1.5 1.5 6.6 1.1 13H0v2h1.1C1.5 21.4 6.6 26.5 13 26.9 V28h2v-1.1c6.4-0.5 11.5-5.6 11.9-11.9H28V13z M15 24.9V19h-2v5.9c-5.3-0.5-9.5-4.7-9.9-9.9H9v-2H3.1C3.5 7.7 7.7 3.5 13 3.1V9h2 V3.1c5.3 0.5 9.5 4.7 9.9 9.9H19v2h5.9C24.5 20.3 20.3 24.5 15 24.9z\"/></svg>";
        // line 46
        echo "";
        // line 47
        echo "</span>
        <strong>dump()</strong>
        <span class=\"count\">
            <span>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_81df5893cee498012f6bb951189b6c97202abc47be65f0282b823ee55f077cca->leave($__internal_81df5893cee498012f6bb951189b6c97202abc47be65f0282b823ee55f077cca_prof);

    }

    // line 55
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8928df79542e054d38097cb4af3baceda0478daa141804dbf0c5da96886141e9 = $this->env->getExtension("native_profiler");
        $__internal_8928df79542e054d38097cb4af3baceda0478daa141804dbf0c5da96886141e9->enter($__internal_8928df79542e054d38097cb4af3baceda0478daa141804dbf0c5da96886141e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 56
        echo "    <h2>dump()</h2>

    <style>
        li.sf-dump {
            list-style-type: disc;
        }
        .sf-dump ol>li {
            padding: 0;
        }
        .sf-dump a {
            cursor: pointer;
        }
        .sf-dump-compact {
            display: none;
        }
    </style>

    ";
        // line 73
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 74
            echo "        <ul class=\"alt\">
            ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 76
                echo "            <li class=\"sf-dump sf-reset\">
                in
                ";
                // line 78
                if ($this->getAttribute($context["dump"], "line", array())) {
                    // line 79
                    echo "                    ";
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 80
                    echo "                    ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 81
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                    ";
                    } else {
                        // line 83
                        echo "                        <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                    ";
                    }
                    // line 85
                    echo "                ";
                } else {
                    // line 86
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                ";
                }
                // line 88
                echo "                line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                <a onclick=\"var s = this.nextElementSibling; if ('sf-dump-compact' == s.className) {this.innerHTML = '&#9660;'; s.className = 'sf-dump-expanded';} else {this.innerHTML = '&#9654;'; s.className = 'sf-dump-compact';}\">&#9654;</a>
                <span class=\"sf-dump-compact\">
                ";
                // line 91
                if ($this->getAttribute($context["dump"], "fileExcerpt", array())) {
                    echo $this->getAttribute($context["dump"], "fileExcerpt", array());
                } else {
                    echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                }
                // line 92
                echo "                </span>

                ";
                // line 94
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        </ul>
    ";
        } else {
            // line 99
            echo "        <p>
            <em>No dumped variable</em>
        </p>
    ";
        }
        
        $__internal_8928df79542e054d38097cb4af3baceda0478daa141804dbf0c5da96886141e9->leave($__internal_8928df79542e054d38097cb4af3baceda0478daa141804dbf0c5da96886141e9_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 99,  276 => 97,  267 => 94,  263 => 92,  257 => 91,  250 => 88,  244 => 86,  241 => 85,  233 => 83,  223 => 81,  220 => 80,  217 => 79,  215 => 78,  211 => 76,  207 => 75,  204 => 74,  202 => 73,  183 => 56,  177 => 55,  166 => 50,  161 => 47,  159 => 46,  157 => 45,  155 => 44,  152 => 42,  146 => 41,  138 => 38,  136 => 37,  133 => 36,  128 => 33,  119 => 30,  114 => 29,  108 => 27,  105 => 26,  97 => 24,  87 => 22,  84 => 21,  81 => 20,  79 => 19,  75 => 17,  71 => 16,  66 => 13,  64 => 12,  61 => 11,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
