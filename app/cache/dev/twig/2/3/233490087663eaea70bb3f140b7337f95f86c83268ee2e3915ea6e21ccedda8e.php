<?php

/* default/history.html.twig */
class __TwigTemplate_233490087663eaea70bb3f140b7337f95f86c83268ee2e3915ea6e21ccedda8e extends Twig_Template
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
        $__internal_c0b7487b4600bbb2385900dadd2c5c3b0ac9d29e807c8b97d228787a91fb3296 = $this->env->getExtension("native_profiler");
        $__internal_c0b7487b4600bbb2385900dadd2c5c3b0ac9d29e807c8b97d228787a91fb3296->enter($__internal_c0b7487b4600bbb2385900dadd2c5c3b0ac9d29e807c8b97d228787a91fb3296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/history.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches"))) > 0)) {
            // line 2
            echo "<br>
<p><h2>Game Stats</h2></p>
<table width=\"100%\">
   <thead>
        <th align=\"left\"># of Matches</th>
        <th align=\"left\">Player Victories</th>
        <th align=\"left\">Tied</th>
        <th align=\"left\">Computer Victories</th>
    </thead> 
    <tbody>       
        <tr>
            <td align=\"left\"><em>";
            // line 13
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["matches"]) ? $context["matches"] : $this->getContext($context, "matches"))), "html", null, true);
            echo " </em></td>
            <td align=\"left\"> <em>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "wins", array(), "array"), "html", null, true);
            echo "</em></td>
            <td align=\"left\"> <em>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "ties", array(), "array"), "html", null, true);
            echo "</em></td>
            <td align=\"left\"> <em>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "losses", array(), "array"), "html", null, true);
            echo "</em></td>
        </tr>
    </tbody>
</table>
<br>
<p><h2>Selection Stats</h2></p>
<table width=\"100%\">
    <thead>
        <th align=\"left\">Choice</th>
        <th align=\"left\">Player</th>
        <th align=\"left\">Computer</th>
    </thead> 
    <tbody> 
        <tr>
            <td align=\"left\">Rock</td>
            <td align=\"left\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "player_rock", array(), "array"), "html", null, true);
            echo "</td>
            <td align=\"left\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "comp_rock", array(), "array"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td align=\"left\">Paper</td>
            <td align=\"left\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "player_paper", array(), "array"), "html", null, true);
            echo "</td>
            <td align=\"left\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "comp_paper", array(), "array"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td align=\"left\">Scissors</td>
            <td align=\"left\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "player_scissors", array(), "array"), "html", null, true);
            echo "</td>
            <td align=\"left\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "comp_scissors", array(), "array"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td align=\"left\">Spock</td>
            <td align=\"left\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "player_spock", array(), "array"), "html", null, true);
            echo "</td>
            <td align=\"left\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "comp_spock", array(), "array"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td align=\"left\">Lizard</td>
            <td align=\"left\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "player_lizard", array(), "array"), "html", null, true);
            echo "</td>
            <td align=\"left\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "comp_lizard", array(), "array"), "html", null, true);
            echo "</td>
        </tr>
     </tbody>
</table>
";
        }
        
        $__internal_c0b7487b4600bbb2385900dadd2c5c3b0ac9d29e807c8b97d228787a91fb3296->leave($__internal_c0b7487b4600bbb2385900dadd2c5c3b0ac9d29e807c8b97d228787a91fb3296_prof);

    }

    public function getTemplateName()
    {
        return "default/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  111 => 51,  104 => 47,  100 => 46,  93 => 42,  89 => 41,  82 => 37,  78 => 36,  71 => 32,  67 => 31,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  24 => 2,  22 => 1,);
    }
}
