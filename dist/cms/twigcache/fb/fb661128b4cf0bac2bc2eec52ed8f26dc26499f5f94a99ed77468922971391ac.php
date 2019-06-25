<?php

/* post.twig */
class __TwigTemplate_ff673c54e696a282e930b87e2ffec3b6be1c0e0e783f519e263538c11c59f95e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "post.twig", 1);
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
        // line 2
        $context["slug"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["_GET"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["1"] ?? null) : null);
        // line 3
        $context["Post"] = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Post", array("id" => ($context["slug"] ?? null))))) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Description", array()), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h5>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Title", array()), "html", null, true);
        echo " <tag style=\"float:right; text-transform: none;\">Posted at ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Date", array()), "html", null, true);
        echo "</tag></h5>
  ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Image", array())) {
            echo " <img src=\"img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Image", array()), "html", null, true);
            echo "\"> ";
        }
        // line 8
        echo "  <div style=\"margin-top: 1rem;\" >";
        echo twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Body", array());
        echo " </div> 
";
    }

    public function getTemplateName()
    {
        return "post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  54 => 7,  47 => 6,  44 => 5,  38 => 4,  34 => 1,  32 => 3,  30 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "post.twig", "/Users/igor/Projects/cms/dist/twigtemplates/post.twig");
    }
}
