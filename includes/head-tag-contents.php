<?php 
    //echo $SITE['title'] ;

//echo $_SERVER["SCRIPT_NAME"];
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/galerija.php":
        $CURRENT_PAGE = "Galerija"; 
        $PAGE_TITLE = "Galerija";
        break;
    case "/contact.php":
        $CURRENT_PAGE = "Contact"; 
        $PAGE_TITLE = "Contact Us";
        break;
    case "/posts.php":
        $CURRENT_PAGE = "posts"; 
        $PAGE_TITLE = "Posts";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to my homepage!";
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php print $PAGE_TITLE;?></title>
<meta charset=utf-8>
<meta name="description" content="<?php print $SITE['description'] ?>" />
<meta name="keywords" content="<?php print $SITE['keywords'] ?>" /> 
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
	#main-content {
		margin-top:20px;
	}
	.footer {
		font-size: 14px;
		text-align: center;
	}
    html {height:100%}
    body {height:100%; display:flex; flex-flow:column;}
    #main-content {
        flex:1;
        overflow: auto;
    }
</style>
</head>
<body>

<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Galerija") {?>active<?php }?>" href="/galerija.php">Galerija</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="/contact.php">Contact</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "posts") {?>active<?php }?>" href="/posts.php">Posts</a>
	  </li>
	</ul>
</div>