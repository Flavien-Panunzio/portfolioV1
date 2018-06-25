<?php
	include("configuration/config.php");
	include("includes/connection.php");
?>
<h2>Portfolio</h2>
<div class="row">
	<div class="col-sm-12 selection">
		<ul>
			<li id="TOUT" class="Active">TOUT AFFICHER</li>
			<li id="WEB">WEB</li>
			<li id="PRINT">PRINT</li>
			<li id="VIDEO">AUDIOVISUEL</li>
		</ul>
	</div>
	

	<?php

		$requete="SELECT * FROM creation";
		$resultats=$connection->query($requete);
		$crea=$resultats->fetchAll(PDO::FETCH_OBJ); $resultats->closeCursor();

		for ($i=0; $i < count($crea); $i++) { 
			?>
			<div class="crea <?php echo $crea[$i]->Categorie;?> visible col-sm-6 col-lg-4" style="background-image:url(<?php echo $crea[$i] -> Image; ?>)">
				<div class="fond">
					<div class="description">
						<h3><u><?php echo $crea[$i] -> Titre; ?></u></h3>
						<p><?php echo $crea[$i] -> Description; ?></p>
						<?php
						if ($crea[$i] -> Titre == "Projet Tuteuré") {
							?>
							<a href="https://ptut-tattoo.tk" target="_blank" class="btn btn-primary">Voir le site</a>
							<?php
						}
						else
							echo '<button type="button" class="btn btn-primary plus">Voir plus</button>';
						?>
					</div>
				</div>
			</div>
			<?php
		}
	?>
</div>