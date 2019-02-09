<div class="panel panel-out panel-clientes">
	<div class="container">
		<div class="panel-body">
			<?php if (count($empresas)>0): ?>
				<div class="t-center"><h2 class="panel-title">Nossos Clientes</h2></div>
			<div class="slide slide-5">
				<?php foreach ($empresas as $empresa): ?>
					<div class="item"><figure><img src="<?php echo base_url('public/uploads/clientes/' . $empresa->emc_imagem) ?>" alt="<?php echo $empresa->emc_titulo ?>" class="image"></figure></div>
				<?php endforeach ?>
			</div>
			<?php endif ?>			

		</div>
	</div>
</div>