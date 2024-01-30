<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="box_title"><h1><?= $tendm ?></h1></div>
            <div class="box_content">
                <div class="items">
                    <?php foreach ($dssp as $dssp) {
                        extract($dssp);
                        ?>
                        <div class="box_items">
                            <div class="box_items_img">
                                <a href="index.php?act=chitietsp&idsp=<?= $id ?>"><img src="upload/<?= $img ?>" alt=""></a>
                                <a href="index.php?act=chitietsp&idsp=<?= $id ?>">
                                    <div class="add">ADD TO CART</div>
                                </a>
                            </div>
                            <a class="item_name" href="">
                                <?= $name ?>
                            </a>
                            <p class="price">
                                <?= $price ?>
                            </p>

                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        </div>

        <?php include "view/boxright.php" ?>

    </div>

</main>