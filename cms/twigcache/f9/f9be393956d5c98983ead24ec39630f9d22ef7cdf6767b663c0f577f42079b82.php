<?php

/* bs */
class __TwigTemplate_582ae1427355fda305d94959000d1f7e0c5e0d34e8d1b0fbd6f21b22d222c14f extends Twig_Template
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
        <h1>Bootstrap starter template</h1>
        <p class=\"lead\">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

";
        // line 9
        $context["p"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Sati"));
        // line 10
        echo "<table class=\"table\">
<thead>
<tr>
<th>Dan</th>
<th>Radnik</th>
<th>TipPosla</th>
<th>Projekat</th>
<th>Sati</th>
</tr>
</thead>
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["p"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "<tr>
 <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Dan", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Radnik_label", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "TipPosla_label", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Projekat_label", array()), "html", null, true);
            echo " </td>
 <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Sati", array()), "html", null, true);
            echo " </td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        return array (  88 => 29,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  60 => 21,  56 => 20,  44 => 10,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bs", "");
    }
}
