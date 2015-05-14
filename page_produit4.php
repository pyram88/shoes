<div class="background-achat">
		<table class="panierProduit">
			<tr>
				<td width="50%"><img src="image/moi_petite.jpg" alt="chaussure_4"class="Chaussure_photo"/></td>
				<td width="50%">
					<span class="title-produit">Basket de "basket"</span>				
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
							<span class="offert">Pas à vendre</span>
							<br/>
							<span class="livraison">Visibles à l'ESCP sur demande</span>
						</div>
						<input type="hidden" name="nomProduit" value="Basket de "basket"" />
						<input type="hidden" name="refProduit" value="<?php echo $_GET['id'] ?>" />
						<input type="submit" name="addPanier" value="Ajouter au panier" />
					</form>	
				</td>
			</tr>
		</table>
	</div>
	<aside class="description">
		<h4>Les chaussures d'une vie</h4>
		<div id="paragraphe">
			<p>Ces chaussures, c'est un peu comme une <span class="text">madeleine de Proust</span> pour moi. Dès que je les vois, j'ai comme un flot de souvenirs qui m'envahissent. Je revois alors mes débuts à <span class="text">7 ans</span>
			à essayer de mettre un ballon dans le panier. Je revois Sophie, Charlène, Romane, Laulau, Elo, Océ, Lohana, Delphine, Camille, Chrissy, Lana, Agnès, Auré, Ten, Amé, Karen, Soléane, Calipso, Laurie, et toutes les autres qui ont été ma <span class="text">famille</span> pendant plus de 15ans.</br></br>
			Je revois les coachs, Jean, Choupi, Frank, Sylvain, Emilie. Je me souviens de nos <span class="text">déplacements en championnat de France</span>, de ces aller-retours entre Fréjus et la région lyonnaise, de ces devoirs que l'on faisaient dans le <span class="text">bus</span> ou à l'hôtel.</br>
			Je me souviens de la <span class="text">joie des victoires</span>, de la <span class="text">douleur</span>, des larmes versées après les <span class="text">défaites</span>, je me rappelle des <span class="text">discours d'avant-match</span>, je me rapelle des matchs de merde, des meilleurs, de ces matchs qui aujourd'hui encore me donnent la <span class="text">chair de poule</span>.</br></br>
			Je me rapelle les <span class="text">parents</span> qui encourageaient, des <span class="text">copains</span> qui venaient aux matchs le dimanche. Je n'oublie pas les <span class="text">kilomètres parcourus</span>, les quatre entrainements par semaine à 13ans. Et puis je me souviens des sélections en <span class="text">équipe du var et PACA</span>.</br>
			Les retrouvailles aux vacances, les stages d'entraînement à <span class="text">Cavalaire</span> et au <span class="text">CREPS de Bouloris</span>. Je me rappelle de Faverge et du TIL. Je pense toujours à <span class="text">Laure</span> qui nous manque à tous. Je repense à <span class="text">la rage et l'ambition</span> que j'avais.</br></br>
			Je me souviens d'écouter <span class="text">"Demain c'est loin"</span> avant les matchs. Je me souviens du flunch d'avant-match ou de la fête du boudin avant le match à <span class="text">Saint-Jean de Muzol!</span>
			Je nous revois <span class="text">grandir ensemble</span>, comme une famille, je me souviens de nos <span class="text">envies</span>, de nos <span class="text">rêves</span>. Je me rends compte que l'on a bien dévié de ces derniers. Je me rappelle notre <span class="text">voyage aux USA</span>, en Espagne.</br>
			Je me rappelle le <span class="text">numéro 8</span>, je me souviens le rituel d'avant match... Je me souviens de l'<span class="text">envie</span>, de <span class="text">quelqu'un qui tombe et qui se relève toujours</span>.</br></br>
			Je revois les chaussures trouées, les <span class="text">chaussures "porte-bonheur"</span>, celles qui ont évolué au fil du temps mais qui ne constituent qu'une seule et même <span class="text">histoire</span>.
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
									<li><span class="answer">1999 environ pour la première paire</span></li>
									<li><span class="answer">Cuire et semelle double</span></li>
									<li><span class="answer">Elles ont du vécu</span></li>
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
									<li><span class="answer">Sportive et esprit d'équipe</span></li>
									<li><img src="image/lavage3.png" alt="lavage"/></li>

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
											<li><img src="image/check.png" alt="check"/>"Eye of the tiger" spirit</li>
											<li><img src="image/check.png" alt="check"/>Protection de la cheville </li>
										</ul>
									</td>
									<td id= "tab_moins">
										<!-- Les moins -->
										<ul id="moins">
											<li><img src="image/check.png" alt="check"/>Aucun problème, elles sont parfaites!</li>
											<li id="triche">" "</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<h4>Conseillées par</h4>
					<ul class="conseillers_produits">
						<li class="align-top"><img src="image/amslf.png" alt="conseil1"/><strong>Fréjus Var Basket</strong></br> <em>"Let's go defence let's go!"</em></li>
						<li class="align-top"><img src="image/jean.png" alt="conseil2"/><strong>Coach Juanito</strong></br><em>"Maintenant que t'as les chaussures Marie, tu peux décrocher la caravane!"</em></li>
						<li class="align-top"><img src="image/copines.png" alt="conseil3"/><strong>Les copines</strong></br><em>"Marie, il y a des trous dans tes chaussures, faudrait les changer!"</em></li>
					</ul>