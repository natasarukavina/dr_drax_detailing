<?php

/* 520 */
class __TwigTemplate_423202b0bbaefe14c418a8defac1b6875dd651ad8635244709c2f40137434664 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <base href=\"https://templatemo.com/templates/templatemo_520_highway/\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  \t\t<title>Highway - Free CSS Template</title>
<!-- 

Highway Template

http://www.templatemo.com/tm-520-highway

-->
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">

        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"css/fontAwesome.css\">
        <link rel=\"stylesheet\" href=\"css/light-box.css\">
        <link rel=\"stylesheet\" href=\"css/templatemo-style.css\">

        <link href=\"https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">

        <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
    </head>

<body>

    <nav>
        <div class=\"logo\">
            <a href=\"index.html\">High<em>way</em></a>
        </div>
        <div class=\"menu-icon\">
        <span></span>
      </div>
    </nav>

    <div id=\"video-container\">
        <div class=\"video-overlay\"></div>
        <div class=\"video-content\">
            <div class=\"inner\">
              <h1>Welcome to <em>Highway</em></h1>
              <p>FREE CSS TEMPLATE by <a href=\"http://www.templatemo.com\" rel=\"nofollow\">templatemo</a></p>
              <p>Homepage with full-width image gallery</p>
                <div class=\"scroll-icon\">
                    <a class=\"scrollTo\" data-scrollTo=\"portfolio\" href=\"#\"><img src=\"img/scroll-icon.png\" alt=\"\"></a>
                </div>    
            </div>
        </div>
        <video autoplay=\"\" loop=\"\" muted>
        \t<source src=\"highway-loop.mp4\" type=\"video/mp4\" />
        </video>
    </div>


    <div class=\"full-screen-portfolio\" id=\"portfolio\">
        <div class=\"container-fluid\">

";
        // line 63
        $context["p"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("portfolio"));
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["p"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo " <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Dan", array()), "html", null, true);
            echo " </td>

            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\" data-lightbox=\"image-1\" >
                    <a href=\"http://127.0.0.1/img/";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", array()), "html", null, true);
            echo "\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</h1>
                                <p>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", array()), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <div style=\"background-size: cover; background-repeat: no-repeat; height:331px;
background-image: url(http://127.0.0.1/img/";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", array()), "html", null, true);
            echo "\"></div>
                        </div>
                    </div></a>
                </div>
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "


            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_4.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>Biodiesel <em>squid</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_4.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_2.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                                <p>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtitle", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_2.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_3.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>humblebrag <em>brunch</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_3.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_1.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>Succulents <em>chambray</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_1.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_5.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>freegan <em>aesthetic</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_5.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_6.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>taiyaki <em>vegan</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_6.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_7.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>Thundercats <em>santo</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_7.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"portfolio-item\">
                    <a href=\"img/big_portfolio_item_8.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>wayfarers <em>yuccie</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_8.png\">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
            \t<div class=\"portfolio-item\">
                \t<a href=\"img/big_portfolio_item_9.png\" data-lightbox=\"image-1\"><div class=\"thumb\">
                        <div class=\"hover-effect\">
                            <div class=\"hover-content\">
                                <h1>disrupt <em>street</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class=\"image\">
                            <img src=\"img/portfolio_item_9.png\">
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class=\"container-fluid\">
            <div class=\"col-md-12\">
                <p>Copyright &copy; 2018 Company Name 
    
    | Design: <a rel=\"nofollow\" href=\"http://www.templatemo.com\">Template Mo</a></p>
            </div>
        </div>
    </footer>


      <!-- Modal button -->
    <div class=\"popup-icon\">
      <button id=\"modBtn\" class=\"modal-btn\"><img src=\"img/contact-icon.png\" alt=\"\"></button>
    </div>  

    <!-- Modal -->
    <div id=\"modal\" class=\"modal\">
      <!-- Modal Content -->
      <div class=\"modal-content\">
        <!-- Modal Header -->
        <div class=\"modal-header\">
          <h3 class=\"header-title\">Say hello to <em>Highway</em></h3>
          <div class=\"close-btn\"><img src=\"img/close_contact.png\" alt=\"\"></div>    
        </div>
        <!-- Modal Body -->
        <div class=\"modal-body\">
          <div class=\"col-md-6 col-md-offset-3\">
            <form id=\"contact\" action=\"\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                      <fieldset>
                        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name...\" required=\"\">
                      </fieldset>
                    </div>
                    <div class=\"col-md-12\">
                      <fieldset>
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your email...\" required=\"\">
                      </fieldset>
                    </div>
                    <div class=\"col-md-12\">
                      <fieldset>
                        <textarea name=\"message\" rows=\"6\" class=\"form-control\" id=\"message\" placeholder=\"Your message...\" required=\"\"></textarea>
                      </fieldset>
                    </div>
                    <div class=\"col-md-12\">
                      <fieldset>
                        <button type=\"submit\" id=\"form-submit\" class=\"btn\">Send Message Now</button>
                      </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    

    <section class=\"overlay-menu\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main-menu\">
              <ul>
                  <li>
                      <a href=\"index.html\">Home - Full-width</a>
                  </li>
                  <li>
                      <a href=\"masonry.html\">Home - Masonry</a>
                  </li>
                  <li>
                      <a href=\"grid.html\">Home - Small-width</a>
                  </li>
                  <li>
                      <a href=\"about.html\">About Us</a>
                  </li>
                  <li>
                      <a href=\"blog.html\">Blog Entries</a>
                  </li>
                  <li>
                      <a href=\"single-post.html\">Single Post</a>
                  </li>
              </ul>
              <p>We create awesome templates for you.</p>
          </div>
        </div>
      </div>
    </section>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.2.min.js\"><\\/script>')</script>

    <script src=\"js/vendor/bootstrap.min.js\"></script>
    
    <script src=\"js/plugins.js\"></script>
    <script src=\"js/main.js\"></script>

    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "520";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 109,  157 => 108,  132 => 85,  119 => 78,  111 => 73,  107 => 72,  101 => 69,  93 => 65,  89 => 64,  87 => 63,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "520", "");
    }
}
