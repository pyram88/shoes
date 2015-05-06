<div class="background-achat">
		<table class="panierProduit">
			<tr>
				<td width="50%"><img src="image/chaussure3_grand.jpg" alt="chaussure_3"class="Chaussure_photo"/></td>
				<td width="50%">
					<span class="title-produit">Basket "cool Raoul"</span>				
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
		<h4>Chaussures festives pour adeptes de nuits endiablées</h4>
		<div id="paragraphe">
			<p>ÇA Y EST!</br>Tu l'as fait.Oui, tu es enfin arrivée en école de commerce, et puis pas nimporte laquelle, puisque tu es à l'ESCP.</br>
			Te voilà donc partie la fleur au fusil, les cheveux au vent, dehambulant dans ce lieux magique dont tu as toujours rêvé.</br> 
			Tu traverses sans (trop) d'encombres le WEI, les cours, lorsque soudain, prise d'un élan d'ambition tu décides de lister pour la JE. 
			Te voilà donc à préparer l'équivalent de 3000 roulés-saucisses pour 600 personnes prêtes à débarquer, plus ssoifées que jamais.</br> 
			"Ok, l'acool c'est bon, le taureau mécanique est en place, le mur en carton est prêt, bref, c'est parti pour une nuit qui s'annonce mémorable".</br> 
			Et quelle nuit! Une soirée dont les gens te parlent encore aujourd'hui en disant "Vous aviez mis un canon à neige dans la cour!" 
			Que de souvenirs que l'on garde et que l'on partage avec ses anciens compagnons d'aventure...</br> C'est souvent en repensant à ce moment que 
			je pense à mes chaussures, car oui, elles ont tout vécu: des kilomètres faits jusqu'à METRO au démarchage de sponsors, TOUT.</br>
			Ah oui, car au passage elles ont aussi pris l'huile froides des fritteuses au moment de ranger ce qui s'apparentait au vestiges d'une nuit inoubliable.
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
									<li><span class="answer">2010 à la suite de mon premier potliste</span></li>
									<li><span class="answer">Vraie peau de bête en provenance d'H&M</span></li>
									<li><span class="answer">Elles ont fait la guerre</span></li>
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
									<li><span class="answer">Twerk hability</span></li>
									<li><img src="image/lavage.png" alt="lavage"/></li>

								</ul>
							</td>
							
						</tr>
					</tbody>
				</table>
				
	
					<div id="plus_moins">
						<table width="100%">
							<thead id="tab_plus_moins">
								<th width="50%">Les plus</th>
								<th width="50%">Les moins</th>
							</thead>
							<tbody>
								<tr>
									<td id="tab_plus">
										<!-- Les plus -->
										<ul id = "plus">
											<li><img src="image/check.png" alt="check"/>Un style certain</li>
											<li><img src="image/check.png" alt="check"/>Résistent à tout</li>
										</ul>
									</td>
									<td id= "tab_moins">
										<!-- Les moins -->
										<ul id="moins">
											<li><img src="image/check.png" alt="check"/>Pas très distinguées pour un cocktail</li>
											<li><img src="image/check.png" alt="check"/>Problème de senteur en fin de soirée</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>