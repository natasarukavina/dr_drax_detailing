<?php

/* bs */
class __TwigTemplate_a228ee71824409fde228edee7906a226efa7aba06bdbc38017c5cdecac0d2412 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("bsbase", "bs", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bsbase";
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
      <div class=\"starter-template\">
        <h1>Starter template</h1>
        <p class=\"lead\">start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

";
        // line 9
        $context["p"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Sati"));
        // line 10
        echo "<table class=\"table\">
<thead>
<tr>
<th>id</th>
<th>Dan</th>
<th>Radnik</th>
<th>Tip Posla</th>
<th>Projekat</th>
<th>Sati</th>
</tr>
</thead>
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["p"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "<tr>
 <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Dan", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Radnik_label", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "TipPosla_label", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Projekat_label", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Sati", array()), "html", null, true);
            echo " </td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</table>

      </div>
";
    }

    public function getTemplateName()
    {
        return "bs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  61 => 22,  57 => 21,  44 => 10,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bs", "");
    }
}
