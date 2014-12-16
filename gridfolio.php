<?php require_once("elements/header.php"); ?>

	<div class="wmgrid-g wmgrid-r">

		<div class="wmgrid wmgrid-1-1">

			<div class="box-d">
				<div class="box-header">
					<h2>
						Galeria estilo portifólio
					</h2>
				</div>
				<div class="box-body">

					<div class="wmg-container wm-grid">

						<?php for($i=1;$i<=24;$i++): ?>
  			
			  			<div class="wmg-item">
			  				<div class="wmg-thumbnail">
			  					<div class="wmg-thumbnail-content">

			  						<!-- exemplo de conteudo para thumbnail -->
			  						<img src="sample/img/wmg/img-<?php echo $i; ?>.jpg" alt="image">
			  						<!-- fim do exemplo -->

			  					</div>
			  					<div class="wmg-arrow"></div>
			  				</div>
			  				<div class="wmg-details">
			  					<span class="wmg-close"></span>
			  					<div class="wmg-details-content">
			  						
			  						<!-- exemplo de coteúdo para detail -->
			  						<div class="wmgrid-g wmgrid-r">
		  								<div class="wmgrid wmgrid-1-2">
		  									<img src="sample/img/wmg/example-detail.gif" alt="image">
		  								</div>
				  						<div class="wmgrid wmgrid-1-2">
				  							<h2>Lorem ipsum <?php echo $i; ?></h2>
				  							<hr><br>
				  							<p>
				  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				  								Cras lacinia ex non arcu tempus, non venenatis elit facilisis. 
				  								Proin fringilla nibh ante, ac luctus lectus ornare maximus
				  							</p>
				  							<p>
				  								Ut iaculis vestibulum libero, vel ultrices metus aliquet vel. 
				  								Vestibulum pulvinar tincidunt quam, in sagittis ex sagittis id.
				  							</p>
				  							<p>
				  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				  								Cras lacinia ex non arcu tempus, non venenatis elit facilisis. 
				  								Proin fringilla nibh ante, ac luctus lectus ornare maximus
				  							</p>
				  							<br><br>
				  							<a href="#" class="btn btn-primary" title="Lorem ipsum">Lorem ipsum</a>
				  						</div>
			  						</div>
			  						<!-- fim do exemplo -->

			  					</div>
			  				</div>
			  			</div><!-- .wmg-item -->

			  			<?php endfor; ?>

			  		</div>

				</div>
			</div>

		</div>
	</div>

<?php require_once("elements/footer.php"); ?>