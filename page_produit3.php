<div class="background-achat">
		<table class="panierProduit">
			<tr>
				<td width="50%"><img src="image/chaussure3_grand.jpg" alt="chaussure_3"class="Chaussure_photo"/></td>
				<td width="50%">
					<span class="title-produit">Les chaussures de la serveuse</span>				
					<form action="" method="post" >
						<div class="pointure">
							<p>
								<b>CONSEIL POINTURE</b>
								<br/>
								Prenez une taille au-dessus de votre pointure habituelle
							</p>
							<select name="pointure">
							<option value="0">Choisissez votre taille</option>
							<?php for($i = 36; $i <= 42; $i++): ?>	
								<option value="<?php echo $i ?>"><?php echo $i ?></option>
							<?php endfor; ?>
							</select>
						</div>
						<br/>
						<div class="conditions">
							<span class="offert">Offert</span>
							<br/>
							<span class="livraison">Livraison à l'ESCP sous 5 minutes</span>
						</div>
						<input type="hidden" name="nomProduit" value="Basket 'cool Raoul'" />
						<input type="hidden" name="refProduit" value="<?php echo $_GET['id'] ?>" />
						<input type="submit" name="addPanier" value="Ajouter au panier" />
					</form>	
				</td>
			</tr>
		</table>
	</div>
	<aside class="description">
		<h4>Maigrissez en bossant dans un restau c'est possible (enfin en théorie)</h4>
		<div id="paragraphe">
			<p>Ces chaussures resprésente une passion que j'ai depuis toujours: celle de la cuisine et de la restauration. Elles sont même comparable à la cuisine;</br>
			composées de plusieurs matières, couleurs et imprimés, elles forment un ensemble cohérent qui ravit tant les yeux que les pieds. La cuisine, c'est pareil
			et c'est ce qui est beau dans cet art qui se partage comme aucun autre. La cuisine demande rigueur mais aussi créativité, elle demande du travail mais aussi
			une part de génie. Bosser en restauration, c'est aimer rapprocher les contraires finalement. Et c'est une chose que j'ai pu mettre à profit depuis quelques années
			maintenant. Car la passion est d'abord une histoire de famille, qui ma été transmise par ma mère et ma grand-mère avec qui je cuisine depuis l'enfance.
			Et puis depuis maintenant deux ans, j'ai pu vraiment entrer dans le monde de la restauration en travaillant comme serveuse dans un restaurant.</br>
			Si vous demandez à mes amis ce qu'ils pensent que je veux faire plus tars, la grande majorité vous répondra "le rêve de Marie, c'est d'ouvrir son bar/restau!". Et c'est vrai!
			Rien ne me passionne plus que de travailler au contact permanent des clients, de ne pas être assise devant un bureau et un ordinateur continuellement (même si j'aime excel, ce qui est d'autant plus bizarre à dire!)</br>
			Bref, partager les goûts, faire découvrir de nouvelles choses aux personnes et leur offrir un voyage le temps d'un repas est quelque chose qui me motive plus que tout.</br>
			Malgré cela, je ne sais pas si la tenue d'un établissement se fera tout de suite, mais je souhaite créer mon entreprise dans ce secteur (j'ai notamment mes petites idées que j'espère pouvoir partager avec vous dans le futur).</br></br>
			Ces chaussures m'ont accompagné pendant cette période de travail, et pour moi elles représentent mon avenir professionnel, du moins comme je voudrais qu'il soit!

			</p>
		</div>
	</aside>

			<table class="titre_tab" width="100%">
				<thead id="tab_fiche">
					<th width="100%">Fiche produit</th>
				
				</thead>
			</table>

			<div id="acquisition">
				<table class="para" width="100%">
					<tbody>
						<tr>
							<td width="25%">
								<ul id="para_1">
									<li>Acquises en</li>
									<li>Matière </li>
									<li>Etat</li>
								</ul>
							</td>
							<td width="25%">
								<ul id="para_2">
									<li><span class="answer">2012 après un premier service en bottines</span></li>
									<li><span class="answer">Savant mélange du chef</span></li>
									<li><span class="answer">Fonctionnelles</span></li>
								</ul>
							</td>

							<td width="25%">
								<ul id="para_3">
									<li>Qualité démontrée</li>
									<li>Lavage</li>
								</ul>
							</td>
							<td width="25%">
								<ul id="para_4">
									<li><span class="answer">Passion de la restauration, bras super forts pour porter les plats</span></li>
									<li><img src="image/lavage4.png" alt="lavage"/></li>

								</ul>
							</td>
							
						</tr>
					</tbody>
				</table>
				
	
					<div id="plus_moins">
						<table width="100%">
							<thead id="tab_plus_moins_4">
								<th width="50%">Les plus</th>
								<th width="50%">Les moins</th>
							</thead>
							<tbody>
								<tr>
									<td id="tab_plus_4">
										<!-- Les plus -->
										<ul id = "plus">
											<li><img src="image/check.png" alt="check"/>Confortables</li>
											<li><img src="image/check.png" alt="check"/>Permettent aux autres de vous répérer rapidement</li>
										</ul>
									</td>
									<td id= "tab_moins_4">
										<!-- Les moins -->
										<ul id="moins">
											<li><img src="image/check.png" alt="check"/>Attention à ne pas leur renverser de vin dessus</li>
											<li><img src="image/check.png" alt="check"/>Il faut assumer de les porter!</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<h4>Conseillées par</h4>
					<ul class="conseillers_produits">
						<li class="align-top"><img src="image/philippe.png" alt="conseil1"/><strong>Philippe Etchebest</strong></br> <em>"J'espère que tu viendras pas faire Chauchemar en Cuisine avec ça!"</em></li>
						<li class="align-top"><img src="image/lignac.png" alt="conseil2"/><strong>Cyril Lignac</strong></br><em>"C'est gourmand croquant comme je l'aime!"</em></li>
						<li class="align-top"><img src="image/timeout.png" alt="conseil3"/><strong>Time Out Paris </strong></br><em>"Courez-y, c'est un incontournable"</em></li>
					</ul>