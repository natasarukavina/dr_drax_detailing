<?php

/* base.twig */
class __TwigTemplate_1c2bc81a9dc08c0e5e0b81461a3ffffb294677cdcdd92bae2ac43a22f016d6bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" style=\"height: 100%\">
<head>
  <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["_BASE"] ?? null), "html", null, true);
        echo "\">
  <title>Example</title>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/bare-css@2.0.3/css/bare.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"cms/sharedstyle.css\">
  <!--
  <meta name=\"keywords\" content=\"\">
  <link rel=\"icon\" href=\"images/favicon.png\">
  -->
</head>
<body style=\"display: flex; flex-flow: column; height: 100%\">
  <nav>
    <label>
      <input type=\"checkbox\">
      <header>
        <!-- you can leave this empty if you don't want a title -->
        <a><!--<img src=\"img/bareCSS.svg\">-->Evolvit CMS</a>
      </header>
      
      <ul>
        <li><a href=\"index\">Home</a></li>
        <li>
          <a>Posts</a>
          <menu>
          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Post")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "Publish", array()) == "true")) {
                // line 31
                echo "            <menuitem><a href=\"post/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", array()), "html", null, true);
                echo "</a></menuitem>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          </menu>
        </li>
      </ul>
    </label>
  </nav>

<section style=\"flex:1; overflow:auto;\">
  ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "</section>

  <footer>
    <grid>\t\t
      <div col=\"1/1\" style=\"text-align: center\">
        <p>
          <a att href=\"https://github.com/vujovicigor/evolvitcms\" target=\"_blank\">
            github.com/vujovicigor/evolvitcms
          </a>
        </p>
      </div>
    </grid>
  </footer>

</body>
</html>
";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  110 => 8,  90 => 41,  88 => 40,  79 => 33,  67 => 31,  62 => 30,  37 => 8,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig", "/Users/igor/Projects/cms/dist/twigtemplates/base.twig");
    }
}
