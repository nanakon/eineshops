<section>
<?php foreach ($tovar as $tovar_item): ?>
  <div class="item">
    <h3><?php echo $tovar_item['nazov'] ?></h3>
        <?php echo $tovar_item['slug'] ?>
    <h3><?php echo $tovar_item['cena'] ?></h3>
        <?php if ($tovar_item['kusov'] > 0) echo '<p class="skladom">Skladom</p>'
              if ($tovar_item['kusov'] == 0) echo '<p class="skladom" id="nie_skladom">Nedostupné</p>' ?>
  </div>
<?php endforeach ?>
</section>