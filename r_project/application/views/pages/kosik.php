<?php //echo form_open('/pages/update_kosik'); ?>
<div class="kosik_page">

<?php 
  if ($this->cart->total_items() == 0) {
    echo '<br><p id="kosik_prazdny_notice">Košík je prázdny</p><br>';
  }
  else { ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
  <th>Kusov</th>
  <th>Tovar</th>
  <th style="text-align:right">Cena za kus</th>
  <th style="text-align:right">Celková cena</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<a href="/r_project/index.php/pages/detail/<?php echo $items['id']?>", class="item_v_kosik_page_link"><?php echo $items['name']; ?></a>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right">€ <?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">€ <?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="kosik_page_total"><strong>Spolu: </strong></td>
  <td class="kosik_page_total">€ <?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php  $vypr_kos = array ('type' => 'submit', 'class' => 'login', 'id' => 'login_submit');
  if ($this->cart->total_items() != 0) { 
 echo form_open('pages/vyprazdnit_kosik'), form_submit('vypr_kos', 'Vyprázdniť košík'), form_close(); 
 }
 ?></p>
 
 
 
 <p><?php  $kupit = array ('type' => 'submit', 'class' => 'login', 'id' => 'kupit_submit');
 if ($this->cart->total_items() != 0) { 
 echo form_open('pages/kupit'), form_submit('kupit', 'Kúpiť'), form_close();
 }
 } ?></p>
</div>  

<?php //echo form_submit('', 'Upraviť košík'), form_close();?>