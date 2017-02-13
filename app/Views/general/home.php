<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<a href="#top" class="goto hidden-xs anchor" id="goto-top"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></a>

<div class="row">
	<section id="AboutUs">
			<h2 id="AboutUsTitle">À propos</h2>
			<div class="content_aboutus">
			<p>
				Bienvenue sur WineNot, la première plateforme entièrement gratuite qui met en relation <strong>producteurs</strong> et <strong>consommateurs</strong> de vin.
			</p>
			<p>
				Tous les mois, notre équipe met en avant les meilleurs produits et producteurs de WineNot. Amateur de vin, professionnel du milieu ou simple curieux, n'attendez-plus : rejoignez-nous pour découvrir ce que nous avons à offrir !
			</p>
			<p>
				<a href="<?= $this->url('account') ;?>" class="link-register">S'inscrire</a>
			</p>
			</div>
	</section>
</div>

<div class="row">
	<section id="WineMonth">
		<h2 id="WineMonthTitle">Vins du mois</h2>

		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="flip-container">
					    <div class="flipper">
					        <div class="front">
				            	<img class="homeImg" src="assets/img/imgBottles/source_web_test/01.jpg" alt="romain">
				            	<div class="nameWineBottle">
						            <p>Cabernet Sauvignon 2015 <br>Vin Rouge</p>
								</div>
					        </div>

							<a href="#"><div class="back">
								<p>Servi à 16°C, ce vin d’une belle structure sera le partenaire idéal de vos planches de charcuterie, viandes rouges, plats en sauce et fromages de chèvre ou de caractère tels que le Comté…</p>
					        </div>
					    </div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="flip-container">
					    <div class="flipper">
					        <div class="front">
				            	<img class="homeImg" src="assets/img/imgBottles/source_web_test/vin_verre_raisin.jpg" alt="romain" >
				            	<div class="nameWineBottle">
									<p>Cabernet Sauvignon 2015 <br>Vin Rouge</p>
								</div>
					        </div>

							<a href="#"><div class="back">
								<p>Servi à 16°C, ce vin d’une belle structure sera le partenaire idéal de vos planches de charcuterie, viandes rouges, plats en sauce et fromages de chèvre ou de caractère tels que le Comté…</p>
							</div></a>
					    </div>
					</div>
				</div>


				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="flip-container">
					    <div class="flipper">
					        <div class="front">
				            	<img class="homeImg" src="assets/img/imgBottles/rouge/vinBouteille.jpg" alt="romain" >
				            	<div class="nameWineBottle">
									<p>Cabernet Sauvignon 2015 <br>Vin Blanc</p>
								</div>
					        </div>

							<a href="#"><div class="back">
								<p>Servi à 16°C, ce vin d’une belle structure sera le partenaire idéal de vos planches de charcuterie, viandes rouges, plats en sauce et fromages de chèvre ou de caractère tels que le Comté…</p>
							</div></a>
					    </div>
					</div>
				</div>


				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="">
						<div class="flip-container">
						    <div class="flipper">
						        <div class="front">
						           <div class="cercle">
						            	<img class="homeImg" src="assets/img/imgBottles/source_web_test/03.jpg" alt="romain">
						            	<div class="nameWineBottle">
											<p>Cabernet Sauvignon 2015 <br>Vin Blanc</p>
										</div>
						            </div>
						        </div>

								<a href="#"><div class="back">
									<p>Servi à 16°C, ce vin d’une belle structure sera le partenaire idéal de vos planches de charcuterie, viandes rouges, plats en sauce et fromages de chèvre ou de caractère tels que le Comté…</p>
						        </div></a>
						    </div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="flip-container">
					    <div class="flipper">
					        <div class="front">
					           <div class="cercle">
					            	<img class="homeImg" src="assets/img/imgBottles/source_web_test/04.jpg" alt="romain">
					            	<div class="nameWineBottle">
										<p>Merlot rosé 2015 <br>Vin Rosé</p>
									</div>
					            </div>
					        </div>

							<a href="#"><div class="back">
								<p>Servi à 16°C, ce vin d’une belle structure sera le partenaire idéal de vos planches de charcuterie, viandes rouges, plats en sauce et fromages de chèvre ou de caractère tels que le Comté…</p>
					        </div></a>
					    </div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 ">
					<div class="flip-container">
					    <div class="flipper">
					        <div class="front">
					           <div class="cercle">
					            	<img class="homeImg" src="assets/img/imgBottles/source_web_test/05.jpg" alt="romain">
					            	<div class="nameWineBottle">
										<p>Merlot rosé 2015 <br>Vin Rosé</p>
									</div>
					            </div>
					        </div>

							<a href="#"><div class="back">
								<p>Servi à 16°C, ce vin d’une belle structure sera le partenaire idéal de vos planches de charcuterie, viandes rouges, plats en sauce et fromages de chèvre ou de caractère tels que le Comté…</p>
					        </div></a>
					    </div>
					</div>
				</div>

			</div><!-- Fin de la row bootstrap -->
		</div><!-- Fin du container bootstrap -->

	</section>
</div>

<?php
/*
	DevNote : include pour le travail de Hwa-Seon
*/
include('../app/prod/includes/googlemap.php');
?>

<?php
/*
	DevNote : include pour le travail de Heramban
*/
include('../app/prod/includes/producteurs.php');
?>

<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
    <script src="<?= $this->assetUrl('js/main.js') ?>" type="text/javascript"></script>
<?php $this->stop('js') ?>
