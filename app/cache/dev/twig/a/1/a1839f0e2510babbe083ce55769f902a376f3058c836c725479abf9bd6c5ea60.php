<?php

/* default/index.html.twig */
class __TwigTemplate_a1839f0e2510babbe083ce55769f902a376f3058c836c725479abf9bd6c5ea60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67e29a4bc7a16c973364e57250e9051b9ece1d86fb4a2fa8c17108e97f9ada40 = $this->env->getExtension("native_profiler");
        $__internal_67e29a4bc7a16c973364e57250e9051b9ece1d86fb4a2fa8c17108e97f9ada40->enter($__internal_67e29a4bc7a16c973364e57250e9051b9ece1d86fb4a2fa8c17108e97f9ada40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e29a4bc7a16c973364e57250e9051b9ece1d86fb4a2fa8c17108e97f9ada40->leave($__internal_67e29a4bc7a16c973364e57250e9051b9ece1d86fb4a2fa8c17108e97f9ada40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c4f5a3d903ea15663b3125362bf885670d5d0e3270f70b86b5f8466c6f034b = $this->env->getExtension("native_profiler");
        $__internal_f6c4f5a3d903ea15663b3125362bf885670d5d0e3270f70b86b5f8466c6f034b->enter($__internal_f6c4f5a3d903ea15663b3125362bf885670d5d0e3270f70b86b5f8466c6f034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">
  
            <h1>ROCK PAPER SCISSORS SPOCK LIZARD</h1>
            <p><a target=\"_blank\" href=\"http://www.samkass.com/theories/RPSSL.html\">Rules</a>

            <table width=\"100%\">
                <tr>
                    <td valign=\"top\" align=\"center\" width=\"33%\">
                        <p>Player Picked</p>
                        <h2>     
                            ";
        // line 16
        if (array_key_exists("the_match", $context)) {
            echo "                   
                                ";
            // line 17
            if (($this->getAttribute((isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserRock", array()) == 1)) {
                // line 18
                echo "                                    ROCK
                                ";
            } elseif (($this->getAttribute(            // line 19
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserPaper", array()) == 1)) {
                // line 20
                echo "                                    PAPER
                                ";
            } elseif (($this->getAttribute(            // line 21
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserScissors", array()) == 1)) {
                // line 22
                echo "                                    SCISSORS
                                ";
            } elseif (($this->getAttribute(            // line 23
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserSpock", array()) == 1)) {
                // line 24
                echo "                                    SPOCK
                                ";
            } elseif (($this->getAttribute(            // line 25
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserLizard", array()) == 1)) {
                // line 26
                echo "                                    LIZARD
                                  ";
            }
            // line 28
            echo "                            ";
        }
        // line 29
        echo "                        </h2>
                    </td>
                    <td valign=\"top\" align=\"center\" width=\"33%\">
                        
                        ";
        // line 33
        if (array_key_exists("the_match", $context)) {
            echo "                        
                            ";
            // line 34
            if ($this->getAttribute((isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserWon", array())) {
                // line 35
                echo "                                <h2 style=\"color:blue;\">PLAYER WINS! Play Again</h2>
                            ";
            } elseif ($this->getAttribute(            // line 36
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getCompWon", array())) {
                // line 37
                echo "                                <h2 style=\"color:red;\">COMPUTER WINS! Play Again</h2>
                            ";
            } elseif ($this->getAttribute(            // line 38
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getUserCompTie", array())) {
                // line 39
                echo "                                <h2>TIE! Play Again</h2>
                            ";
            }
            // line 41
            echo "                        ";
        }
        // line 42
        echo "
                        <p>Choose</p>
                        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        <br>
                        
                    </td>
                    <td valign=\"top\" align=\"center\" width=\"33%\">
                        <p>Computer Picked</p>
                        
                        <h2>
                            ";
        // line 54
        if ( !array_key_exists("the_match", $context)) {
            // line 55
            echo "                                &nbsp;
                            ";
        } else {
            // line 57
            echo "                                ";
            if (($this->getAttribute((isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getCompRock", array()) == 1)) {
                // line 58
                echo "                                    ROCK
                                ";
            } elseif (($this->getAttribute(            // line 59
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getCompPaper", array()) == 1)) {
                // line 60
                echo "                                    PAPER
                                ";
            } elseif (($this->getAttribute(            // line 61
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getCompScissors", array()) == 1)) {
                // line 62
                echo "                                    SCISSORS
                                ";
            } elseif (($this->getAttribute(            // line 63
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getCompSpock", array()) == 1)) {
                // line 64
                echo "                                    SPOCK
                                ";
            } elseif (($this->getAttribute(            // line 65
(isset($context["the_match"]) ? $context["the_match"] : $this->getContext($context, "the_match")), "getCompLizard", array()) == 1)) {
                // line 66
                echo "                                    LIZARD
                                ";
            }
            // line 68
            echo "                            ";
        }
        // line 69
        echo "                        </h2>
                    </td>
                </tr>
            </table>
        
            ";
        // line 74
        if (array_key_exists("matches", $context)) {
            // line 75
            echo "                ";
            echo twig_include($this->env, $context, "default/history.html.twig", array("matches" => (isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches"))));
            echo "
            ";
        }
        // line 77
        echo "
        </div>
    </div>
";
        
        $__internal_f6c4f5a3d903ea15663b3125362bf885670d5d0e3270f70b86b5f8466c6f034b->leave($__internal_f6c4f5a3d903ea15663b3125362bf885670d5d0e3270f70b86b5f8466c6f034b_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_590a4e0f231563dccd868a5170039bce5c942e293775a664d86dd1bf7cd942b6 = $this->env->getExtension("native_profiler");
        $__internal_590a4e0f231563dccd868a5170039bce5c942e293775a664d86dd1bf7cd942b6->enter($__internal_590a4e0f231563dccd868a5170039bce5c942e293775a664d86dd1bf7cd942b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 83
        echo "<style>
    button { width: 100%; font-size: 20px; margin-bottom: .5em;}
    body { background: #FFF; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #FFF; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_590a4e0f231563dccd868a5170039bce5c942e293775a664d86dd1bf7cd942b6->leave($__internal_590a4e0f231563dccd868a5170039bce5c942e293775a664d86dd1bf7cd942b6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 83,  201 => 82,  191 => 77,  185 => 75,  183 => 74,  176 => 69,  173 => 68,  169 => 66,  167 => 65,  164 => 64,  162 => 63,  159 => 62,  157 => 61,  154 => 60,  152 => 59,  149 => 58,  146 => 57,  142 => 55,  140 => 54,  129 => 46,  125 => 45,  121 => 44,  117 => 42,  114 => 41,  110 => 39,  108 => 38,  105 => 37,  103 => 36,  100 => 35,  98 => 34,  94 => 33,  88 => 29,  85 => 28,  81 => 26,  79 => 25,  76 => 24,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  64 => 19,  61 => 18,  59 => 17,  55 => 16,  41 => 4,  35 => 3,  11 => 1,);
    }
}
