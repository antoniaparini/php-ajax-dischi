
<div class="main">
    <div class="container">
        <?php foreach($database as $data) {?>
            <div class="disk-content">
                <img src="<?php echo $data['poster'] ?>" alt="">
                <h3 class="title">
                    <?php echo $data['title'] ?>
                    <small class="artist"><?php echo $data['author'] ?></small>
                </h3>
                <span class="year"><?php echo $data['year'] ?></span>
                <span class="genre"><?php echo $data['genre'] ?></span>
            </div>
        <?php } ?><!-- Fine Ciclo Foreach -->
    </div>
</div>
