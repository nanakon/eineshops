<div id="telo">
<?php foreach ($tovar as $tovar_item): ?>

    <h2><?php echo $tovar_item['nazov'] ?></h2>
    <div id="main">
        <?php echo $tovar_item['popis'] ?>
    </div>
    <h3><?php echo $tovar_item['cena']?></h3>

<?php endforeach ?>
</div>