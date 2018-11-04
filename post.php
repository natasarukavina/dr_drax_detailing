<?php include("cms/engine.php");?>
<?php include("includes/head-tag-contents.php");?>
<div class="container" id="main-content">
    <?php
    $row = get_single_post($_GET['search']) ;
    //echo json_encode($dogs);
    //print_r($dogs);
    if ($row){
        print "
        <h2>$row[title]</h2>
        <p>$row[text]</p>";

        echo '<b>Komentari:</b><br>';
        foreach($row['comment'] as $crow){
            echo "$crow[text]  at $crow[date] by <small>$crow[user_name]</small><br>";
        }
    } 
    else echo 'nije nadjen taj post ('.$_GET['search'].')';
    ?>
</div>
<?php include("includes/footer.php");?>