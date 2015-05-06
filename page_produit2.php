<div class="background-achat">
		<table class="panierProduit">
			<tr>
				<td width="50%"><img src="image/chaussure2_grand.jpg" alt="chaussure_2"class="Chaussure_photo"/></td>
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
		<h4>Ou l'application du conseil "il faut souffrir pour être belle"</h4>
		<div id="paragraphe">
			<p>"Marie quand même c'est bien beau que tu t'exprimes stylistiquement parlant, mais quand même, après le garçon manqué, la gothique et le look hippie, tu ne penses pas que tu pourrais faire un effort pour être plus féminine?" déclara ma mère</br>
			J'ai dès lors compris avec effroi que mon trépas était proche et que l'aube d'une nouvelle époque approchait (autrement dit, j'allais prendre cher).
			Ma mère se tourna d'un pas assuré, une boîte à la main, le regard vif et rond.
			Elle avait l'air si ravie, si fière que son enfant s'élève au rang des femmes parmi les femmes. C'était fort, digne un rite initiatique.
			Je m'approchai finalement de la boîte en question, ma triste Pandore, sombre objet de mes maux à venir. Quelle ne fut pas ma stupeur en découvrant cet objet, pourtant si beau et pourtant si froid.
			Il y eu un cri lorsque j'ouvris ce coffret. "NNNNNNNOOOOOONNNNNNNNNNNN, s'il te plait, pas ce petit bout resserré!". Je m'étonnai alors de cette voix inconnue, que je n'avais jamais entendue
			et cherchai alors à en identifier la source. C'est alors qu'en baissant la tête, j'aperçu ces petits être difformes me parler, petits être autrement connus sous le nom d'orteils.
			"Mais tu vois bien qu'on est des pieds grecs, puis bon on est plutôt gros et longs, tu fais quand même du 41, c'est pas pour toi, mieux vaut des Crocs à ce niveau là" me dirent-ils, paniqués.
			N'écoutant alors que mon courage, et non ces petits être grognons, j'enfilai ces délicates chaussures, qui eurent un effet redoutable. "Ouah, mes poteaux télégraphiques ressemblent enfin à des jambes!" lançai-je en direction de ma mère.
			Mais la stupeur fut de courte durée, car une autre épreuve m'attendait. Il fallait dès lors arriver à marcher du haut de ces échasses. Sur ce coup, j'avais une avance certaine; des centaines d'émissions "Nouveau look pour une nouvelle vie" ainsi que "Les reines du shopping" m'avaient donné une formation théorique certaine</br>
			J'entendis soudain une voix familière "Ma chérie pour être magnifyyyyyke tu dois marcher comme si il y avait une ligne devant toi! Et va pas me secouer le coco einh ohoh!"
			Oh ma Christina, déesse entre toutes les déesses, ta force mentale n'a d'égal que ma haine de ces pompes!
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
									<li><span class="answer">2010 au moment d'entrer en prépa</span></li>
									<li><span class="answer">Daim ou cuir</span></li>
									<li><span class="answer">Quasi neuves</span></li>
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
									<li><span class="answer">Sérieuse et pas douillette</span></li>
									<li><img src="image/lavage2.png" alt="lavage"/></li>

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
											<li><img src="image/check.png" alt="check"/>Allongement jamb(on)ier</li>
											<li><img src="image/check.png" alt="check"/>Pointe anti-aggression</li>
										</ul>
									</td>
									<td id= "tab_moins">
										<!-- Les moins -->
										<ul id="moins">
											<li><img src="image/check.png" alt="check"/>Taille de girafe quand on fait 1m77</li>
											<li><img src="image/check.png" alt="check"/>Perte de toute sensation après une heure</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>