<link href="<?php echo base_url("assets/css/subscribe.css");?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url("assets/js/subscribe.js");?>"></script>
<body>
		<ul class="nav nav-tabs col-lg-12" id="myTab">
		  <li class="active"><a id="defaultOpen" data-toggle="tab" href="#menu01" onclick="openCity(event, 'EtatCivil')">Etat civil</a></li>
		  <li><a data-toggle="tab" href="#menu02" onclick="openCity(event, 'Identifiants')" >Identifiants</a></li>
		  <li><a data-toggle="tab" href="#menu03" onclick="openCity(event, 'Coordonnees')">Coordonnées</a></li>
		  <li><a data-toggle="tab" href="#menu04" onclick="openCity(event, 'Identite')">Identité</a></li>
		  <li><a data-toggle="tab" href="#menu05" onclick="openCity(event, 'TravaillerPourAs')">Travailler pour Périscolairé</a></li>
		  <li><a data-toggle="tab" href="#menu0" onclick="openCity(event, 'InfoComplementaire')">Information complémentaire</a></li>
		</ul>
	
        <form action="Utilisateur/check_enregistrer_inter" method="post" class="enregistrement">
			<div class="row">
				<div id="EtatCivil" class="tabcontent col-lg-3">
					<h3>Mon état civil</h3>
					<div class="form-group">
						<label for="nom">Nom: *</label>
						<input type="text" class="form-control" id="nom">
					</div>
					<div class="form-group">
						<label for="prenom">Prenom: *</label>
						<input type="text" class="form-control" id="prenom">
					</div>
					<div class="form-group">
						<label for="sel1">Sexe: *</label>
						<select class="form-control" id="sexe">
							<option>Homme</option>
							<option>Femme</option>
						</select>
					</div>
					<div class="form-group">
						<label for="date_naissance">Date de naissance: *</label>
						<input type="date" name="anniversaire" class="form-control" id="dateNaissance">
					</div>
					<button type="button" class="btn btn-default">Suivant</button>
				</div>
			</div>
		
		<div class="row">
			<div id="Identifiants" class="tabcontent col-lg-3">
				<h3>Mes identifiants périscolarité</h3>
				<div class="form-group">
					<label for="email">Email: *</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Mot de passe: *</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Confirmer mot de passe: *</label>
					<input type="password" class="form-control" id="confirm_pwd">
				</div>
				<button type="button" class="btn btn-default">Suivant</button>
			</div>
		</div>
		
		<div class="row">
			<div id="Coordonnees" class="tabcontent col-lg-3">
			  <h3>Mes coordonnées</h3>
				<div class="form-group">
					<label for="adresse">Adresse: *</label>
					<input type="text" class="form-control" id="adresse">
				</div>
				<div class="form-group">
					<label for="ville">Ville: *</label>
					<input type="text" class="form-control" id="ville">
				</div>
				<div  class="form-group">
					<label for="vehicule">Etes-vous véhiculé ? *</label>
					<select class="form-control" id="vehicule">
						<option value="oui">Oui</option>
						<option value="non">Non</option>
						<option value="permis">J'ai le permis mais pas de véhicule</option>
					</select>
				</div>
				<div class="form-group">
					<label for="codepostal">Code postal: *</label>
					<input type="text" class="form-control" id="code_postale">
				</div>
				<div class="form-group"> 
					<label for="numfixe">Numéro de téléphone fixe: *</label>
					<input type="text" class="form-control" id="numfixe">
				</div>
				<div class="form-group">
					<label for="numportable">Numéro de téléphone portable: *</label>
					<input type="text" class="form-control" id="numportable">
				</div>
			<button type="button" class="btn btn-default">Suivant</button>	
			</div>
		</div>
		
		<div class="row">
			<div id="Identite" class="tabcontent col-lg-3">
				<h3>Mon identité</h3>
				<div class="form-group">
					<label for="nationalite">Nationalité: *</label>
					<input type="text" class="form-control" id="nationalite">
				</div>
				<div class="form-group">
					<label for="pays_naissance">Pays de naissance *</label>
					<input type="text" class="form-control" id="pays_naissance">
				</div>
				<div class="form-group">
					<label for="ville_naissance">Ville de naissance *</label>
					<input type="text" class="form-control" id="ville_naissance">
				</div>
				<div class="form-group">
					<label for="code_postal_naissance">Code postal de la ville de naissance *</label>
					<input type="text" class="form-control" id="CodePostalNaissance">
				</div>
				<div class="form-group">
					<label for="papier_identite">Type de papier d'identité *</label>
					<select class="form-control" id="papier_identite">
						<option value="carteIdentite">Carte nationnale d'identité</option>
						<option value="passeportEurope">Passeport européen</option>
						<option value="titreSejour">Titre de séjour</option>
					</select>
				</div>
				<div class="form-group">
					<label for="date_expiration">Date d'expiration *</label>
					<input type="date" name="expiration" class="form-control" id="date_expiration">
				</div>
				<div class="form-group">
					<label for="delivre_par">Délivré par *</label>
					<input type="text" class="form-control" id="delivre_par">
				</div>
				<div class="form-group">
					<label for="departement_obtention">Département d'obtention des papiers d'identité *</label>
					<input type="text" class="form-control" id="departement_obtention" required autofocus>
				</div>
				<div class="form-group">
					<label for="numero_secu_sociale">Numéro de sécurité sociale *</label>
					<input type="text" class="form-controlF" id="numeroSecuSociale">
				</div>
			<button type="button" class="btn btn-default">Suivant</button>	
			</div>
		</div>
		<div class="row">
			<div id="TravaillerPourAs" class="tabcontent col-lg-4">
				<h3>Travailler pour périscolarité</h3>
				<div class="form-group">
					<label for="SituationPro">Vous êtes *</label>
					<select class="form-control" id="situation_pro">
						<option value="etudiant">Etudiant(e)</option>
						<option value="prof">Formateur(trice)/Professeur</option>
						<option value="sansActivite">Sans activité</option>
						<option value="salarie">Salarié</option>
					</select>
				</div>
					<p>
						<strong>Entrez vos disponibilités au format:</strong> "Jour de XXhXX à XXhXX"</br>
						<span><strong>Exemple:</strong> Mardi de 8h00 à 10h30</br></span>
						<span class="marge">Jeudi de 18h00 à 19h00</span>
					</p>
					<div class="form-group">
						 <label for="Disponibilite">Vos disponibilités *</label>
						 <textarea class="form-control" rows="7" id="dispoforminter">
Lundi de
Mardi de
Mercredi de
Jeudi de
Vendredi de
Samedi de
Dimanche de</textarea>
					</div>
				<div class="form-group">
					<label for="Motivation">Vos motivations* </label>
					<textarea id="motivforminter" type="text" class="form-control"></textarea>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div id="InfoComplementaire" class="tabcontent col-lg-6">
				<h3>Informations complémentaires</h3>
				<div class="form-group">
					<label for="parrain">Email du parrain </label>
					<input type="email" class="form-control" id="mail_parrain">
				</div>
				<div class="form-group">
					<label for="comment_connu">Comment avez vous connu As Du Ménage ? *</label>
					<select class="form-control" id="comment_connu">
						<option></option>
						<option value="ami">Par un ami</option>
						<option value="commercial">Lien commercial</option>
						<option value="moteurRecherche">Moteur de recherche</option>
						<option value="pubMetro">Pub métro</option>
						<option value="etudiantfr">L'étudiant.fr</option>
						<option value="annonceetudiantcom">annonceetudiant.com</option>
						<option value="facebook">Facebook</option>
						<option value="autre">Autre</option>
					</select>
				</div>
				<div class="form-group">
				<label for="Offre">Je souhaite recevoir des offres par email:&nbsp </label>
				<label class="radio-inline"><input type="radio" name="offre" value="oui" checked>Oui</label>
				<label class="radio-inline"><input type="radio" name="offre" value="non">Non</label>
				</div>
				
				<div class="form-group">
					<div class="checkbox">
						<label><input type="checkbox" name="ConditionGenerale"> J'accepte les<a href="#" data-toggle="modal" data-target="#modalCondition"> conditions générales</a>*</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="ConditionPaiement">J'accepte de me conformer aux 
							<!-- Trigger the modal with a link -->
							  <a href="#" data-toggle="modal" data-target="#modalConditionPaiement">conditions de paiement As Du Ménage</a>*</label>
					</div>
					
				</div>
				<button style="float:right;" type="submit">Valider</button>
				<div class="raw">
				<div class="col-lg-12">
					<p id="infoLegale" style="font-size: 50%;">
						<p><b>
							Informations légales
						</b></p>
						Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en envoyant un email à info@asdumenage.fr ou en envoyant un courrier postal à As Du Ménage, 80 Rue Jules Guesde, 92300 Levallois-Perret
					</p>
					
					<center>
						<p id="foot-form">
							Les champs avec un * sont obligatoires! 
						
						</p>
						<p>Si vous ne pouvez pas valider, vous avez surrement oublié d'entrer une information. Vérifiez que tous les champs avec un * sont remplis.</p>
					</center>
				</div>
				</div>
			</div>
			
			
			
			 <!-- Modal -->
						<div class="modal fade" id="modalConditionPaiement" role="dialog">
							<div class="modal-dialog modal-lg">
							  <!-- Modal content "nous contacter"-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h3 class="modal-title">Conditions de paiement As du Ménage</h3>
								</div>
								<div class="modal-body">
									<h4>Pour recevoir mon paiement:</h4>
									<p>J'ai bien noté mon Email et mon mot de passe.</p>
									<p>J'accepte d'enregister mes coupons AVANT le 24 de chaque mois minuit.</p>
									<p>J'ai renseigné une adresse postale valide pour recevoir ma paie.</p>
								</div>
							  </div>

							</div>
						</div>
		</div>
        </form>
</body>