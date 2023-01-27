<div id="<?= $idCategoria ?>" class="tab-pane <?= ($activa) ? "active" : "" ?>">
    <h1>Categoría <?= $id ?></h1>
    <?php
        foreach ($arr as $img) {
            $urlPortfolio = $img->getURLPortfolio();
            $urlGaleria = $img->getURLGaleria();
            $alt = $img->getDescripcion();
    ?>
            <img src="<?= $urlPortfolio ?>" alt="<?= $alt ?>">
            <img src="<?= $urlGaleria ?>" alt="<?= $alt ?>">
    <?php } ?>
</div>