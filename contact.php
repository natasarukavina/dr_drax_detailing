<?php include("cms/engine.php");?>
<?php include("includes/head-tag-contents.php");?>
<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>Contsacts page</p>
<hr>
<table border=1 style="width:100%">
<tr><td>Naslov</td><td>Opis</td><td>Slika</td><td>HTML</td></tr>
<?php 
$dogs = fetch('MainGalery') ;
//$site = api('site_single', array()) ;

//echo ($site);
//print_r($dogs);
foreach($dogs as $r)
{
print <<<EOD
<tr>
<td> $r[Naslov] </td>
<td> $r[Opis] </td>
<td width="100px" style="width:100px"> <img style="height:40px" src="image/$r[Slika]" > </td>
<td> $r[html] </td>
</tr>
EOD;
} 
?>
</table>
</div>
<?php include("includes/footer.php");?>