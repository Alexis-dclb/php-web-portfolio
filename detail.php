<?php 
require('includes/function.php');
$id=isset($_GET['id'])?$_GET['id']:0; 
$data_img = findOneById($id);
if (false=== $data_img){
    exit ('image introuvable');
}


?>

<!doctype html>
<html lang="fr">
<?php require('includes/head.php');  ?>
<body id="detail">
<?php require('includes/header.php'); ?>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $data_img['title'] ?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <?php $src='images/large/'.$data_img['slug'].'.jpg'  ?>
                <img src=<?php echo $src ?> alt="Image large file" />
                <!-- Picture date and location -->
                <figcaption><?php echo $data_img['date'].'-'.$data_img['location'] ?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $data_img['description'] ?></p>


            <p id="pager">
            <?php if($id==1){?>
                <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                </a>
                <?php }else{?>
                <a href="detail.php?id=<?php echo $id-1?>" class="btn">
                    Previous shot
                </a>
                <?php }?>
                <?php if($id==16){?>
                    <a href="javascript:void(0)" class="btn disabled">
                    Next shot
                </a>
                <?php }else{?>
                <a href="detail.php?id=<?php echo $id+1?>" class="btn">
                    Next shot
                </a>
                <?php }?>
            </p>

        </div>
    </main>
<?php require('includes/footers.php'); ?>
</body>
</html>
