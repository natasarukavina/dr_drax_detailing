<?php

/* bsbase */
class __TwigTemplate_2287f2604647cefdba29af2a60c8e61995d88c9dbd6f6b0af431ca2759d799e0 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"favicon.ico\">

    <title>Starter Template for Bootstrap</title>
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/starter-template/\">

    <!-- Bootstrap core CSS -->
    <link href=\"https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  </head>

  <body>

    <nav class=\"navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top\">
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Navbarzzz</a>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"dropdown-item\" href=\"#\">Action</a>
              <a class=\"dropdown-item\" href=\"#\">Another action</a>
              <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
          </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container\">

";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
    </div><!-- /.container -->
  </body>
</html>
";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bsbase";
    }

    public function getDebugInfo()
    {
        return array (  90 => 55,  82 => 56,  80 => 55,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bsbase", "");
    }
}
