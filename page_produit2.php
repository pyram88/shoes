<div class="background-achat">
		<table class="panierProduit">
			<tr>
				<td width="50%"><img src="image/chaussure1_grand.jpg" alt="chaussure_1"class="Chaussure_photo"/></td>
				<td width="50%">
					<span class="title-produit">Escarpin "dead feet"</span>				
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
						<input type="hidden" name="nomProduit" value="Escarpin 'dead feet'" />
						<input type="hidden" name="refProduit" value="<?php echo $_GET['id'] ?>" />
						<input type="submit" name="addPanier" value="Ajouter au panier" />
					</form>	
				</td>
			</tr>
		</table>
	</div>
	<aside class="description">
		<h4>Chaussures festives pour adeptes de nuits endiablées</h4>
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
	</aside>


	<table width="100%">
		<thead>
			<th width="50%">Les plus</th>
			<th width="50%">Les moins</th>
		</thead>
		<tbody>
			<tr>
				<td>
					<!-- Les plus -->
					<ul>
						<li>plus 1</li>
						<li>plus 2</li>
					</ul>
				</td>
				<td>
					<!-- Les moins -->
					<ul>
						<li>moins 1</li>
						<li>moins 2</li>
					</ul>
				</td>
			</tr>
		</tbody>
	</table>