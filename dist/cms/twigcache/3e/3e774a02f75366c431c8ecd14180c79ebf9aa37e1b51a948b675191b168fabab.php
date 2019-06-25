<?php

/* index.twig */
class __TwigTemplate_4d547d9f34f52420745ed4eddc35b312f3ed2786cb900f1154af49bb2d5b01d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_description($context, array $blocks = array())
    {
        echo "All posts";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<grid>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Post")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "Publish", array()) == "true")) {
                // line 6
                echo "\t<div col=\"1/2\">
\t\t<card>
\t\t\t<h5>";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", array()), "html", null, true);
                echo " <tag style=\"float:right; text-transform: none;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Date", array()), "html", null, true);
                echo "</tag></h5>
\t\t\t 
";
                // line 11
                echo "        <div class=\"container_img\"> 
          <a href=\"post/";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", array()), "html", null, true);
                echo "\" class=\"element_img\" style=\"";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "Image", array())) {
                    echo "background-image:url('img/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Image", array()), "html", null, true);
                    echo "')";
                }
                echo "\"> 
          </a>
        </div>
      
\t\t\t<div class=\"short_text\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Short", array()), "html", null, true);
                echo "
        <div class=\"filter\"></div>
      </div>
      <a btn primary href=\"post/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", array()), "html", null, true);
                echo "\" >Read more...</a>
\t\t</card>
\t</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</grid>

<style>
.filter {
  position:absolute; 
  bottom:0; 
  right:0; 
  left:0; 
  height:2em; 
  background:linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
}
.short_text {
  position:relative;
  height: 5em;
  overflow: hidden;
  margin-bottom: 1rem;
}
.container_img {
    display: inline-block;
    position: relative;
    width: 100%;
}
.container_img:after {
    content: '';
    display: block;
    margin-top: 56.25%; /* 16:9 Aspect Ratio */
}
.element_img {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;    
}

</style>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  83 => 19,  77 => 16,  64 => 12,  61 => 11,  54 => 8,  50 => 6,  45 => 5,  42 => 4,  39 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "/Users/igor/Projects/cms/dist/twigtemplates/index.twig");
    }
}
