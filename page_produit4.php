<div class="background-achat">
		<table class="panierProduit">
			<tr>
				<td width="50%"><img src="image/chaussure1_grand.jpg" alt="chaussure_1"class="Chaussure_photo"/></td>
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
						<input type="hidden" name="nomProduit" value="Basket 'basket'" />
						<input type="hidden" name="refProduit" value="<?php echo $_GET['id'] ?>" />
						<input type="submit" name="addPanier" value="Ajouter au panier" />
					</form>	
				</td>
			</tr>
		</table>
	</div>
	<aside class="description">
		<h4>Les chaussures d'une vie</h4>
		<p>Ces chaussures, c'est un peu comme une madeleine de Proust pour moi. Dès que je les vois, j'ai comme un flot de souvenirs qui m'envahit. Je revois alors mes débuts à 7 ans</br>
		à essayer de mettre un ballon dans le panier. Je revois Sophie, Charlène, Romane, Laulau, Elo, Océ, Lohana, Delphine, Camille, Chrissy, Lana, Agnès, Auré, Ten, Amé, Karen, Soléane, Calipso, Laurie, et toutes les autres qui ont été ma famille pendant plus de 15ans.</br>
		Je revois les coachs, Jean, Choupi, Frank, Sylvain, Emilie. Je me souviens de nos déplacements en championnat de France, de ces aller-retours entre Fréjus et la région lyonnaise, de ces devoirs que l'on faisaient dans le bus ou à l'hôtel.</br>
		Je me souviens de la douleur, des larmes versées après les défaites, je me rappelle des discours d'avant-match, je me rapelle des matchs de merde, des meilleurs, de ces matchs qui aujourd'hui encore me donnent la chair de poule.</br>
		Je me rapelle les parents qui encourageaient, des copains qui venaient aux matchs le dimanche. J'oublie pas les kilomètres parcourus, les quatre entrainements par semaine à 13ans. Et puis je me souviens des sélections en équipe du var et PACA.</br>
		Les retrouvailles aux vacances, les stages d'entraînement à Cavalaire et au CREPS de Bouloris. Je me rappelle de Faverge et du TIL. Je pense toujours à Laure qui nous manque à tous. Je repense à la rage et l'ambition que j'avais.</br>
		Je me souviens d'écouter "Demain c'est loin" avant les matchs. Je me souviens du flunch d'avant match ou de la fête du boudin avant le match à Saint Jean de Muzol.</br>
		Je nous revois grandir ensemble, comme une famille, je me souviens de nos envies, de nos rêves. Je me rends compte que l'on a bien dévié de ces derniers. Je me rappelle notre voyage aux USA, en Espagne.</br>
		Je me rappelle le numéro 8, je me souviens le rituel d'avant match... Je me souviens de l'envie, de quelqu'un qui tombe et qui se relève toujours.</br>
		Je revois les chaussures trouées, les chaussures "porte-bonheur", celles qui ont évolué au fil du temps mais qui ne constituent qu'une seule et même histoire.
		
		
		</p>
	</aside>


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
							<li>Effet svelte</li>
							<li>Pointe anti-aggression</li>
						</ul>
					</td>
					<td>
						<!-- Les moins -->
						<ul id="moins">
							<li>Passer de 1m77 à 1m90 en 1 seconde</li>
							<li>Doigts de pieds en sang</li>
						</ul>
					</td>
				</tr>
			</tbody>
		</table>
	</div>