<?php

/* video */
class __TwigTemplate_65d11b78bfcc0793ca0b5dc1e4a12bf62416a01d4434758e64c50415a6593bc4 extends Twig_Template
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
        echo "<html>
  <head>
    <title>Video stream sample</title>
  </head>
  <script>
      document.cookie ='cid=uid123; expires=Fri, 3 Aug 3001 20:47:11 UTC; path=/'
  </script>
  <body>
    <video style=\"width:100%; max-height:100%;\"  controls>
      <source src=\"http://panlite.rs:3001/video\" type=\"video/mp4\">
    </video>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "video";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "video", "");
    }
}
