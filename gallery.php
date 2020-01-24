<?php
require('includes/function.php');
require('includes/header.php');

$page=isset($_GET['page'])?$_GET['page']:0;

$img_selects = find_paged(6, 6 * $page);
?>


<!doctype html>
<html lang="fr">

<body id="gallery">
    <?php require('includes/head.php'); ?>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                <?php
                foreach ($img_selects as $img_select) { ?>
                    <a href="detail.php?id=<?php echo $img_select['id'] ?>" title="<?php echo $img_select['title'] ?>">
                        <img src=./images/medium/<?php echo $img_select['slug'] . '.jpg'; ?> alt="Picture 1">
                        <br><?php echo $img_select['title'] ?>
                    </a>
                <?php } ?>

            </div>
            <p id="pager">
                <?php if($page==0){?>
                <a href="javascript:void(0)" class="btn disabled">
                    Previous page
                </a>
                <?php }else{?>
                    <a href="gallery.php?page=<?php echo $page-1?>" class="btn">
                    Previous page
                </a>
                <?php }?>

                
                <?php if($page==2){?>
                <a href="javascript:void(0)" class="btn disabled">
                    Next page
                </a>
                <?php }else{?>
                    <a href="gallery.php?page=<?php echo $page+1?>" class="btn">
                    Next page
                </a>
                <?php }?>
            </p>
        </div>
    </main>
    <?php require('includes/footers.php'); ?>
</body>

</html>