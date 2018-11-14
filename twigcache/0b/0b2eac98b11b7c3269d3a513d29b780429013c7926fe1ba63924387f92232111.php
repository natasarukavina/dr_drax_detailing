<?php

/* base.twig */
class __TwigTemplate_a2b3e0380916133b27d352bf05f5f27a0909fe39cdd8656a2a93b194b28ae081 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["_BASE"] ?? null), "html", null, true);
        echo "\">
  <title>SUZI</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 9
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  ";
        // line 12
        echo "</head>
<body>

    <div class=\"head\">
        <a style=\"margin-top: 10px;\" href=\"index\"><img src=\"images/suzi logo-2.svg\" alt=\"logo\"></a>
        <div class=\"head--meni\">

            <a href=\"o_nama\"         class=\"head--meni-title ";
        // line 19
        if ((twig_lower_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["_GET"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["twig_file_name"] ?? null) : null)) == "o_nama")) {
            echo " active ";
        }
        echo "\">O nama</a>
            <a href=\"akcije\"        class=\"head--meni-title ";
        // line 20
        if ((twig_lower_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["_GET"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["twig_file_name"] ?? null) : null)) == "akcije")) {
            echo " active ";
        }
        echo "\">Akcije</a>
            <a href=\"vesti\"         class=\"head--meni-title ";
        // line 21
        if ((twig_lower_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["_GET"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["twig_file_name"] ?? null) : null)) == "vesti")) {
            echo " active ";
        }
        echo "\">Vesti</a>
            <a href=\"komisije\"      class=\"head--meni-title ";
        // line 22
        if ((twig_lower_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["_GET"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["twig_file_name"] ?? null) : null)) == "komisije")) {
            echo " active ";
        }
        echo "\">Komisije</a>
            <a href=\"publikacije\"   class=\"head--meni-title ";
        // line 23
        if ((twig_lower_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["_GET"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["twig_file_name"] ?? null) : null)) == "publikacije")) {
            echo " active ";
        }
        echo "\">Publikacije</a>
            <a href=\"clanovi\"       class=\"head--meni-title ";
        // line 24
        if ((twig_lower_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["_GET"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["twig_file_name"] ?? null) : null)) == "clanovi")) {
            echo " active ";
        }
        echo "\">Članovi</a>
            <a href=\"kontakt\"       class=\"head--meni-title ";
        // line 25
        if ((twig_lower_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["_GET"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["twig_file_name"] ?? null) : null)) == "kontakt")) {
            echo " active ";
        }
        echo "\">Kontakt</a>

        </div>
    </div>

";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "
    <div class=\"footer\">
        <div class=\"footer--suzi\">2018 SUZI</div>
        <div class=\"footer--suzi\">Sponzori SUZI</div>
        <div class=\"footer--suzi\" style=\"border-right: none;\">Prijatelji SUZI</div>
        <div class=\"footer--icons\">
            <a href=\"#\"><img src=\"images/Facebook.svg\"></a>
            <a href=\"#\"><img src=\"images/Linkedin.svg\"></a>
            <a href=\"#\"><img src=\"images/Twitter.svg\"></a>
        </div>
    </div>
</body>
</html>
";
    }

    // line 30
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
        return array (  114 => 30,  97 => 31,  95 => 30,  85 => 25,  79 => 24,  73 => 23,  67 => 22,  61 => 21,  55 => 20,  49 => 19,  40 => 12,  36 => 9,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig", "/Applications/MAMP/htdocs/SUZI/twigtemplates/base.twig");
    }
}
