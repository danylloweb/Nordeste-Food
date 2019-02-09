<section >
	<div class="container">
		<h1 class="titulos-1 page-title">À la Carte</h1>

		<div class="row">
			<div class="col-md-8">
				<div id="content-conteudo">
					<div id="box-institucional" class="interna-box">
						<? if (count($carnes_categoria) > 0): ?> 
						<span class="desc-item"><?= $estatico->est_descricao?></span>
						<div class="img-inst carda-img">
							<img src="<?= image_thumb('public/uploads/alacartes/' . $carnes_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
						</div>                
						<h1 class="t-dia"><?= ucwords($carnes_categoria->alc_nome) ?>:</h1> 
					<? endif; ?>    
					<?
					$carnes = $this->alacarte->listar_alacarte(array('alc_id' => 1), 0, 99);
					if (count($carnes) > 0):
						?>
					<? foreach ($carnes as $carne):
					?>
					<p class="type-item">
						<?= $carne->ala_nome ?>
						<span class="desc-item"><?= $carne->ala_descricao ?></span>
					</p>                                                
					<?
					endforeach;
					endif;
					?>

					<? if (count($frangos_categoria) > 0): ?> 
					<div class="img-inst carda-img">
						<img src="<?= image_thumb('public/uploads/alacartes/' . $frangos_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
					</div>                
					<h1 class="t-dia"><?= ucwords($frangos_categoria->alc_nome) ?>:</h1> 
				<? endif; ?>    
				<?
				$frangos = $this->alacarte->listar_alacarte(array('alc_id' => 2), 0, 99);
				if (count($frangos) > 0):
					?>
				<? foreach ($frangos as $frango):
				?>
				<p class="type-item">
					<?= $frango->ala_nome ?>
					<span class="desc-item"><?= $frango->ala_descricao ?></span>
				</p>                                                
				<?
				endforeach;
				endif;
				?>

				<? if (count($peixes_categoria) > 0): ?> 
				<div class="img-inst carda-img">
					<img src="<?= image_thumb('public/uploads/alacartes/' . $peixes_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
				</div>                
				<h1 class="t-dia"><?= ucwords($peixes_categoria->alc_nome) ?>:</h1> 
			<? endif; ?>    
			<?
			$peixes = $this->alacarte->listar_alacarte(array('alc_id' => 3), 0, 99);
			if (count($peixes) > 0):
				?>
			<? foreach ($peixes as $peixe):
			?>
			<p class="type-item">
				<?= $peixe->ala_nome ?>
				<span class="desc-item"><?= $peixe->ala_descricao ?></span>
			</p>                                                
			<?
			endforeach;
			endif;
			?>

			<? if (count($parmegianas_categoria) > 0): ?> 
			<div class="img-inst carda-img">
				<img src="<?= image_thumb('public/uploads/alacartes/' . $parmegianas_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
			</div>                
			<h1 class="t-dia"><?= ucwords($parmegianas_categoria->alc_nome) ?>:</h1> 
		<? endif; ?>    
		<?
		$parmegianas = $this->alacarte->listar_alacarte(array('alc_id' => 4), 0, 99);
		if (count($parmegianas) > 0):
			?>
		<? foreach ($parmegianas as $parmegiana):
		?>
		<p class="type-item">
			<?= $parmegiana->ala_nome ?>
			<span class="desc-item"><?= $parmegiana->ala_descricao ?></span>
		</p>                                                
		<?
		endforeach;
		endif;
		?>

		<? if (count($guarnicoes_categoria) > 0): ?> 
		<div class="img-inst carda-img">
			<img src="<?= image_thumb('public/uploads/alacartes/' . $guarnicoes_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
		</div>                
		<h1 class="t-dia"><?= ucwords($guarnicoes_categoria->alc_nome) ?>:</h1> 
	<? endif; ?>    
	<?
	$guarnicoes = $this->alacarte->listar_alacarte(array('alc_id' => 5), 0, 99);
	if (count($guarnicoes) > 0):
		?>
	<? foreach ($guarnicoes as $guarnicao):
	?>
	<p class="type-item">
		<?= $guarnicao->ala_nome ?>
		<span class="desc-item"><?= $guarnicao->ala_descricao ?></span>
	</p>                                                
	<?
	endforeach;
	endif;
	?>                    

	<? if (count($executivos_categoria) > 0): ?> 
	<div class="img-inst carda-img">
		<img src="<?= image_thumb('public/uploads/alacartes/' . $executivos_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
	</div>                
	<h1 class="t-dia"><?= ucwords($executivos_categoria->alc_nome) ?>:</h1> 
<? endif; ?>    
<?
$executivos = $this->alacarte->listar_alacarte(array('alc_id' => 6), 0, 99);
if (count($executivos) > 0):
	?>
<? foreach ($executivos as $executivo):
?>
<p class="type-item">
	<?= $executivo->ala_nome ?>
	<span class="desc-item"><?= $executivo->ala_descricao ?></span>
</p>                                                
<?
endforeach;
endif;
?>

<? if (count($espetos_categoria) > 0): ?> 
<div class="img-inst carda-img">
	<img src="<?= image_thumb('public/uploads/alacartes/' . $espetos_categoria->alc_imagem, 686, 254, FALSE, FALSE) ?>" alt="">
</div>                
<h1 class="t-dia"><?= ucwords($espetos_categoria->alc_nome) ?>:</h1> 
<? endif; ?>    
<?
$espetos = $this->alacarte->listar_alacarte(array('alc_id' => 7), 0, 99);
if (count($espetos) > 0):
	?>
<? foreach ($espetos as $espeto):
?>
<p class="type-item">
	<?= $executivo->ala_nome ?>
	<span class="desc-item"><?= $espeto->ala_descricao ?></span>
</p>                                                
<?
endforeach;
endif;
?>                                        

</div><!--/box-institucional-->   
</div><!--/content-conteudo-->
</div>
<div class="col-md-4">
	<div id="sid-right">
		<nav id="nav-interna">
			<ul class="nav-menu-lateral">
				<li><a href="<?= site_url('cardapio_semanal') ?>" class="botao btn-amarelo">Cardápio</a></li>
				<li class="activ"><a href="<?= site_url('alacartes') ?>" class="botao btn-amarelo">À la Carte</a></li>
			</ul>
		</nav>
		<? $this->load->view('sidebar/right') ?>
	</div><!--/sid-right-->
</div>            
</div>
</div><!--/center-->
</section><!--/wrap-centro-->
