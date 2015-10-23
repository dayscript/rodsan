<div class="indicadores-block">
	<div class="indicadores-block-content">
		<?php $data=json_decode($data);

		foreach ($data as $key => $value) :?>
			<?php
			$image = ($value->change_percent < 0) ? "down-image":"up-image";

			?>
			<div class="content">
				<div class="indicadores-name left"><?php print $value->name ?> </div>
				<div class="indicadores-value rigth">
					<span class="<?php print $image ?>"></span>
					<span class="indicadores-simbol">$</span>
					<?php print $value->value ?> </div>
			</div>


			<!--<?php print $value->date?>
	     <?php print $value->short ?>
	     <?php print $value->value ?>
	     <?php print $value->unit ?>
	     <?php print $value->change_percent ?>
	     <?php print $value->country ?>-->


		<?php endforeach;?>


		<div>
		</div>