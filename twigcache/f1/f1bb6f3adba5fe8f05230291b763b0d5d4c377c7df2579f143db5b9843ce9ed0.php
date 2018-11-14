<?php

/* index.twig */
class __TwigTemplate_8b4a36bc17c5aa1906182b1859cf65772e52027ba346ace55f73bb9b5abeacbc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"home\">
    <div class=\"home--part\">
        <div class=\"home--part-istaknuta-akcija\">
                ";
        // line 7
        $context["IstaknutaAkcija"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("IstaknutaAkcija"));
        // line 8
        echo "                ";
        // line 9
        echo "                <div style=\"background-image: url('image.php/?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Slika1", array()), "html", null, true);
        echo "'); background-size: cover;
                background-repeat: no-repeat;     background-position: center; height: 335px;\"></div>
                <div class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Naslov", array()), "html", null, true);
        echo "</div>
                <div class=\"text\">";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Text", array());
        echo "  </div>
                <div class=\"more\"><a href=\"akcije\">Vidi ceo tekst...</a></div>

        </div>
        <div class=\"home--part-2\">
                <div class=\"suzi-akcije\"> SUZI Akcije</div>
                <div class=\"overflow\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Akcije")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                        <div class=\"naslov\"><a href=\"akcije?tip=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Naslov", array()), "html", null, true);
            echo "</a></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>
        </div>
    </div>
    <div class=\"home--part2\">
        <div class=\"home--part2--vesti\">
            <div class=\"home--part2--vesti--title titles\">SUZI Vesti</div>
            <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Vesti_suzi")));
        foreach ($context['_seq'] as $context["_key"] => $context["vesti_suzi"]) {
            // line 30
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"naslov sub_titles\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Naslov", array()), "html", null, true);
            echo "</div>
                        ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Slika", array())) {
                // line 33
                echo "                        <img class=\"slika\" src=\"image.php/?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Slika", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 35
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vesti_suzi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
            <a class=\"more\" href= \"vesti\">Sva SUZI obaveštenja...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">Vesti iz sveta</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Vesti_svet")));
        foreach ($context['_seq'] as $context["_key"] => $context["vesti_svet"]) {
            // line 44
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Naslov", array()), "html", null, true);
            echo "</div>
                        ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Slika1", array())) {
                // line 47
                echo "                        <img class=\"slika\" src=\"image.php/?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Slika1", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 49
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vesti_svet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </div>
                <a class=\"more\" href= \"vesti\">Sve vesti iz sveta...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">Suzi prikazi</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Prikazi")));
        foreach ($context['_seq'] as $context["_key"] => $context["vesti_prikazi"]) {
            // line 58
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Naslov", array()), "html", null, true);
            echo "</div>
                        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Slika1", array())) {
                // line 61
                echo "                        <img class=\"slika\" src=\"image.php/?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Slika1", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 63
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vesti_prikazi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </div>
                <a class=\"more\" href= \"vesti\">Svi prikazi...</a>
        </div>
    </div>
    <div class=\"home--part2\">
        <div class=\"home--part2--vesti\">
            <div class=\"home--part2--vesti--title titles\">SUZI Obaveštenja</div>
            <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Obavestenja")));
        foreach ($context['_seq'] as $context["_key"] => $context["suzi_obavestenja"]) {
            // line 74
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_obavestenja"], "Naslov", array()), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suzi_obavestenja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </div>
            <a class=\"more\" href= \"#\">Sva SUZI obaveštenja...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">SUZI eGlasnik</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("eGlasnik")));
        foreach ($context['_seq'] as $context["_key"] => $context["suzi_eGlasnik"]) {
            // line 85
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Naslov", array()), "html", null, true);
            echo "</div>
                        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Slika1", array())) {
                // line 88
                echo "                        <img class=\"slika\" src=\"image.php/?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Slika1", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 90
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suzi_eGlasnik'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </div>
                <a class=\"more\" href= \"#\">Prethodni brojevi...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">Korisni linkovi</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("KorisniLinkovi")));
        foreach ($context['_seq'] as $context["_key"] => $context["korisni_linkovi"]) {
            // line 99
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles-link\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["korisni_linkovi"], "Naslov", array()), "html", null, true);
            echo "</div>
                        <a class=\"link\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["korisni_linkovi"], "Link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["korisni_linkovi"], "Link", array()), "html", null, true);
            echo "</a>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['korisni_linkovi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                </div>
                <a class=\"more\" href= \"#\">Svi linkovi...</a>
        </div>
    </div>
</div>

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
        return array (  272 => 104,  261 => 101,  257 => 100,  254 => 99,  250 => 98,  242 => 92,  235 => 90,  229 => 88,  227 => 87,  223 => 86,  220 => 85,  216 => 84,  208 => 78,  199 => 75,  196 => 74,  192 => 73,  182 => 65,  175 => 63,  169 => 61,  167 => 60,  163 => 59,  160 => 58,  156 => 57,  148 => 51,  141 => 49,  135 => 47,  133 => 46,  129 => 45,  126 => 44,  122 => 43,  114 => 37,  107 => 35,  101 => 33,  99 => 32,  95 => 31,  92 => 30,  88 => 29,  79 => 22,  68 => 20,  64 => 19,  54 => 12,  50 => 11,  44 => 9,  42 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "/Users/igor/Projects/cms/twigtemplates/index.twig");
    }
}
