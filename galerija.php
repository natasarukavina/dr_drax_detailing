<?php include("cms/engine.php");?>
<?php include("includes/head-tag-contents.php");?>

<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>Some content goes here! Let's go with the classic "lorem ipsum."</p>

<hr>
<table border=1 style="width:100%">
<thead><tr><th>user</th><th>Firma</th><th>slika</th><th>boja</th></tr></thead>
<tbody>
<?php 
$dogs = fetch('MainGalery') ;
//print_r( fetch2("select * from files") ); 
 
foreach($dogs as $row)
    {
print <<<EOD
<tr>
<td> $row[Naslov] </td>
<td> $row[html] </td>
<td width="100px" style="width:100px"> <img style="height:40px" src="image/$row[Slika]" > </td>
<td > $row[gps] </td>
</tr>
EOD;
} 
?>
</tbody>
</table>

</div>


<?php include("includes/footer.php");?>