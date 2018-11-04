<?php include("cms/engine.php");?>
<?php include("includes/head-tag-contents.php");?>
<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>Posts page</p>
<hr>
<table border=1 style="width:100%">
<tr><td>Id</td><td>Title</td><td>Text</td><td>Nice url</td><td>Prvi comment</td></tr>
<?php 
$posts = fetch2('post') ;
foreach($posts as $row){
    echo "<tr>
    <td> $row[id] </td>
    <td> $row[title] </td>
    <td> $row[text] </td>
    <td> <a href ='post/{$row['nice_url']}' > $row[nice_url] </a></td>
    <td>";
    foreach($row['comment'] as $crow){
        echo "$crow[text] <br>";
    }
    echo "</td>
    </tr>";
}; ?>
</table>
</div>
<?php include("includes/footer.php");?>