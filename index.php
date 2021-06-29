<?php
$mat = substr($_SERVER['AUTH_USER'],-4);
//print_r($mat);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enquête de satisfaction | Dirction SIOP</title>
<link href="common/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="common/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="common/validationEngine.jquery.css" rel="stylesheet" type="text/css" media="all" />
<link href="common/all.css" rel="stylesheet">
<script type="text/javascript" src="common/jquery.js"></script>
<script type="text/javascript" src="common/jquery.validationEngine.js"></script>
<script type="text/javascript" src="common/jquery.validationEngine-fr.js"></script>
<script type="text/javascript" src="common/dsi.js"></script>
<script type="text/javascript" src="common/validation-utils.js"></script>
</head>
<body>
<center>
  <div align="left" id="page">
    <div class="head">
      <div style="text-align: center;"><img src="/RH/sites/default/files/headerSahetna.png" width="100%" height="100%" /></div>
    </div>
    <div class="sep"></div>
    <form id="enquete" name="enquete" method="post">
      <div class="fm">
        <div class="ln">
          <fieldset>
            <legend>Vous êtes : </legend>
            <p></p>
            <div>
              <label>Homme
                <input id="qg1" name="genre" type="radio" value="homme" class="validate[required] radio" />
              </label>
              <label>Femme
                <input id="qg2" name="genre" type="radio" value="femme" class="validate[required] radio" />
              </label>
            </div>
          </fieldset>
        </div>
        <div class="ln">
          <fieldset>
            <legend>À quelle tranche d'âge appartenez-vous ?</legend>
              <div><br/>
              <label>Moins de 25 ans
                <input id="age1" name="age" type="radio" value="0-25" class="validate[required] radio" />
              </label>
              <label>25 - 34 ans
                <input id="age2" name="age" type="radio" value="25-34" class="validate[required] radio"/>
              </label>
              <label>35 - 44 ans
                <input id="age3" name="age" type="radio" value="35-44" class="validate[required] radio"/>
              </label>
              <label>45 - 54 ans
                <input id="age4" name="age" type="radio" value="45-54" class="validate[required] radio"/>
              </label>
			  <label>55 ans et plus
                <input id="age5" name="age" type="radio" value="55" class="validate[required] radio"/>
              </label>
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>Situation familiale </legend>
              <div><br/>
              <label>Célibataire
                <input id="sf1" name="sf" type="radio" value="1" class="validate[required] radio" />
              </label>
              <label>Marié(e) avec enfants
                <input id="sf2" name="sf" type="radio" value="2" class="validate[required] radio"/>
              </label>
              <label>Marié(e) sans enfants
                <input id="sf3" name="sf" type="radio" value="3" class="validate[required] radio"/>
              </label>              
            </div>
          </fieldset>
        </div>
        
        <div class="ln">
          <fieldset>
            <legend>1.	Etes-vous actuellement couvert par  complémentaire santé & Prévoyance SAHETNA ?</legend>
            <div><br/>
			<label>Oui
               <input id="q11" name="couverture" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q12" name="couverture" type="radio" value="2" class="validate[required]  radio" maxlength="1"/>
            </label>
			<p></p>
			<label style="display: none;">Si non pour quelle raison
				<textarea id="q13" name="couverturewhy" rows="1" cols="50" style ="height: 20px; width: 740px;" title="Merci de préciser la raison"></textarea>
			</label>
            </div>
          </fieldset>
        </div>
		
        <div class="ln">
          <fieldset>
            <legend>2.	Etes-vous satisfait de l’offre complémentaire santé & Prévoyance SAHETNA ?</legend>
            <div><br/>
			<label>Oui
               <input id="q21" name="satisfactioncouverture" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q22" name="satisfactioncouverture" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			<p></p>
			<label style="display: none;">Si non pour quelle raison
				<textarea id="q23" name="satisfactioncouverturewhy" rows="1" cols="50" style ="height: 20px; width: 740px;" class="validate[required]"></textarea>
			</label>	
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>3.	Pensez-vous que le plan SAHETNA vous offre un bon rapport garanties / tarifs ?</legend>
            <div><br/>
				<label>Mauvais
					<input id="q31" name="garantiestarifs" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Plutôt mauvais
					<input id="q32" name="garantiestarifs" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Ne se prononce pas
					<input id="q33" name="garantiestarifs" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Plutôt bon
				   <input id="q34" name="garantiestarifs" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très bon
				   <input id="q35" name="garantiestarifs" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>4.	Concernant le taux de couverture de votre complémentaire santé, diriez-vous que vous en êtes… </legend>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q41" name="tauxcouverture" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q42" name="tauxcouverture" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q43" name="tauxcouverture" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q44" name="tauxcouverture" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q45" name="tauxcouverture" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
        <div class="ln">
          <fieldset>
            <legend>5.	Les plafonds de remboursement reflètent t’ils la réalité des montants déboursés ? </legend>
            <div><br/>
			<label>Oui
               <input id="q51" name="plafondsremboursement" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q52" name="plafondsremboursement" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			<label>Ne sait pas
               <input id="q53" name="plafondsremboursement" type="radio" value="-1" class="validate[required] radio" maxlength="1"/>
            </label>
			<p></p>
			<label style="display: none;">Si non quel est l’écart vs le montant déboursé
				<textarea id="q54" name="plafondsremboursementecart" rows="1" cols="50" style ="height: 20px; width: 740px;" class="validate[required]"></textarea>
			</label>	
            </div>
			
          </fieldset>
        </div>
		
        <div class="ln">
          <fieldset>
            <legend>6.	Pour chacun des soins suivants, pensez-vous être satisfaits du taux de couverture et des plafonds ?</legend>
            <label class="title">Honoraires Médicaux :</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6a1" name="Honoraires" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6a2" name="Honoraires" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6a3" name="Honoraires" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6a4" name="Honoraires" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6a5" name="Honoraires" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Pharmacie:</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6b1" name="Pharmacie" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6b2" name="Pharmacie" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6b3" name="Pharmacie" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6b4" name="Pharmacie" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6b5" name="Pharmacie" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Analyses et Radiologie</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6c1" name="Radiologie" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6c2" name="Radiologie" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6c3" name="Radiologie" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6c4" name="Radiologie" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6c5" name="Radiologie" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Dentaire</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6d1" name="Dentaire" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6d2" name="Dentaire" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6d3" name="Dentaire" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6d4" name="Dentaire" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6d5" name="Dentaire" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Optique</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6e1" name="Optique" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6e2" name="Optique" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6e3" name="Optique" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6e4" name="Optique" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6e5" name="Optique" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Chirurgie et hospitalisation</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6f1" name="Chirurgie" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6f2" name="Chirurgie" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6f3" name="Chirurgie" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6f4" name="Chirurgie" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6f5" name="Chirurgie" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Accouchement </label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6g1" name="Accouchement" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6g2" name="Accouchement" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6g3" name="Accouchement" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6g4" name="Accouchement" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6g5" name="Accouchement" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Assistance </label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q6h1" name="Assistance" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q6h2" name="Assistance" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q6h3" name="Assistance" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q6h4" name="Assistance" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q6h5" name="Assistance" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>7.	Les prestations couvertes par le Tiers payant (les cliniques et les prestataires de santé conventionnés) sont-elles satisfaisantes ?</legend>
            <p></p>
            <div><br/>
				<label class="samll-label">Pas du tout satisfaisantes
					<input id="q71" name="tierspayant" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Pas tellement satisfaisantes
					<input id="q72" name="tierspayant" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Relativement satisfaisantes
					<input id="q73" name="tierspayant" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Très satisfaisantes
				   <input id="q74" name="tierspayant" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Extrêmement satisfaisantes
				   <input id="q75" name="tierspayant" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		<div class="ln">
          <fieldset>
            <legend>8.	Le réseau tiers payant est t‘il accessible depuis votre région ?</legend>
            <p></p>
            <div><br/>
				<label class="samll-label">Pas du tout satisfaisantes
					<input id="q81" name="tierspayantaccessible" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Pas tellement satisfaisantes
					<input id="q82" name="tierspayantaccessible" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Relativement satisfaisantes
					<input id="q83" name="tierspayantaccessible" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Très satisfaisantes
				   <input id="q84" name="tierspayantaccessible" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Extrêmement satisfaisantes
				   <input id="q85" name="tierspayantaccessible" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>9.	Comment évaluez-vous la qualité de service et  la prise en charge par les prestataires de santé conventionnés ? </legend>
            <p></p>
            <div><br/>
				<label class="samll-label">Pas du tout satisfaisantes
					<input id="q91" name="serviceprestataires" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Pas tellement satisfaisantes
					<input id="q92" name="serviceprestataires" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Relativement satisfaisantes
					<input id="q93" name="serviceprestataires" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Très satisfaisantes
				   <input id="q94" name="serviceprestataires" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Extrêmement satisfaisantes
				   <input id="q95" name="serviceprestataires" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>10.	Pensez-vous que le délai de traitement de vos remboursements est satisfaisant ?</legend>
            <p></p>
            <div><br/>
				<label class="samll-label">Pas du tout satisfaisantes
					<input id="q10_1" name="remboursements" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Pas tellement satisfaisantes
					<input id="q10_2" name="remboursements" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Relativement satisfaisantes
					<input id="q10_3" name="remboursements" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Très satisfaisantes
				   <input id="q10_4" name="remboursements" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Extrêmement satisfaisantes
				   <input id="q10_5" name="remboursements" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
			
		<div class="ln">
          <fieldset>
            <legend>11.	Avez-vous déjà formulé une réclamation à propos de la complémentaire santé ?</legend>
            <div><br/>
			<label>Oui
               <input id="q11_1" name="reclamationcomplementaire" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q11_2" name="reclamationcomplementaire" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			<p></p>
			<label style="display: none;">Si oui,Quelle période, "Mois/Année" :
				<textarea id="q11_3" name="reclamationcomplementaireMoisAnnee" rows="1" cols="50" style ="height: 20px; width: 740px;" class="validate[required]"></textarea>
			</label>
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>12.	Vos réclamations sont-elles prises en charge rapidement ?</legend>
            <p></p>
            <div><br/>
				<label class="samll-label">Pas du tout satisfaisantes
					<input id="q12_1" name="prisechargereclamation" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Pas tellement satisfaisantes
					<input id="q12_2" name="prisechargereclamation" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Relativement satisfaisantes
					<input id="q12_3" name="prisechargereclamation" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Très satisfaisantes
				   <input id="q12_4" name="prisechargereclamation" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Extrêmement satisfaisantes
				   <input id="q12_5" name="prisechargereclamation" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>13.	Dans quelle mesure trouvez-vous raisonnable la contribution de l’employé à la complémentaire santé ? </legend>
            <p></p>
            <div><br/>
				<label class="samll-label">Pas du tout satisfaisantes
					<input id="q13_1" name="contribution" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Pas tellement satisfaisantes
					<input id="q13_2" name="contribution" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label class="samll-label">Relativement satisfaisantes
					<input id="q13_3" name="contribution" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Très satisfaisantes
				   <input id="q13_4" name="contribution" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label class="samll-label">Extrêmement satisfaisantes
				   <input id="q13_5" name="contribution" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>14.	Acceptez-vous d’augmenter votre part de contributions au plan SAHETNA pour participer à l’amélioration du dispositif ?</legend>
            <p></p>
            <div><br/>
			<label>Oui
               <input id="q14_1" name="augmentercontribution" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q14_2" name="augmentercontribution" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			
			<p></p>
			<label style="display: none;">Si oui précisez le montant additionnel
				<textarea id="q14_3" name="augmentercontributionoui" rows="1" cols="50" style ="height: 20px; width: 740px;" class="validate[required]"></textarea>
			</label>	
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>15.	Quelles prestations de santé devraient être renforcées selon vous ?</legend>
            <label class="title">Honoraires Médicaux :</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_a1" name="15_Honoraires" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_a2" name="15_Honoraires" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_a3" name="15_Honoraires" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_a4" name="15_Honoraires" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_a5" name="15_Honoraires" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Pharmacie:</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_b1" name="15_Pharmacie" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_b2" name="15_Pharmacie" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_b3" name="15_Pharmacie" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_b4" name="15_Pharmacie" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_b5" name="15_Pharmacie" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Analyses et Radiologie</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_c1" name="15_Radiologie" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_c2" name="15_Radiologie" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_c3" name="15_Radiologie" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_c4" name="15_Radiologie" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_c5" name="15_Radiologie" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Dentaire</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_d1" name="15_Dentaire" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_d2" name="15_Dentaire" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_d3" name="15_Dentaire" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_d4" name="15_Dentaire" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_d5" name="15_Dentaire" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Optique</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_e1" name="15_Optique" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_e2" name="15_Optique" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_e3" name="15_Optique" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_e4" name="15_Optique" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_e5" name="15_Optique" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Chirurgie et hospitalisation</label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_f1" name="15_Chirurgie" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_f2" name="15_Chirurgie" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_f3" name="15_Chirurgie" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_f4" name="15_Chirurgie" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_f5" name="15_Chirurgie" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Accouchement </label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_g1" name="15_Accouchement" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_g2" name="15_Accouchement" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_g3" name="15_Accouchement" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_g4" name="15_Accouchement" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_g5" name="15_Accouchement" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Assistance </label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_h1" name="15_Assistance" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_h2" name="15_Assistance" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_h3" name="15_Assistance" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_h4" name="15_Assistance" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_h5" name="15_Assistance" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
			<label class="title">Autre à préciser </label>
            <div><br/>
				<label>Pas du tout satisfait
					<input id="q15_h1" name="15_Autre" type="radio" value="1" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Pas tellement satisfait
					<input id="q15_h2" name="15_Autre" type="radio" value="2" class="validate[required] radio"  maxlength="1"/>
				</label>
				<label>Relativement satisfait
					<input id="q15_h3" name="15_Autre" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Très satisfait
				   <input id="q15_h4" name="15_Autre" type="radio" value="4" class="validate[required] radio" maxlength="1"/>
				</label>
				<label>Extrêmement satisfait
				   <input id="q15_h5" name="15_Autre" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
				</label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>16.	Pensez-vous être bien informé du plan SAHETNA? </legend>
            <p></p>
            <div><br/>
			<label>Oui
               <input id="q16_1" name="bieninforme" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q16_2" name="bieninforme" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>17.	Pensez-vous que le plan d’assistance* SAHETNA est intéressant pour les collaborateurs ? Souhaitez-vous maintenir l’offre ? </legend>
            <p></p>
            <div><br/>
			<label>Oui
               <input id="q17_1" name="planassistanceinteressant" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q17_2" name="planassistanceinteressant" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			
			<p></p>
			<label style="display: none;">Si non, Quelles sont les raisons ?
				<textarea id="q17_3" name="planassistanceinteressantraison" rows="1" cols="50" style ="height: 20px; width: 740px;" class="validate[required]"></textarea>
			</label>
			<p>* : En cas d’immobilisation du collaborateur à son domicile suite à une maladie, un accident, une hospitalisation ou un accouchement avec complication le collaborateur bénéficie des services à domicile à savoir (consultations, aide-ménagère ect……).</p>
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>18.	Quelle note globale sur 10 donneriez-vous au plan SAHETNA ? Cochez la case de la note. </legend>
            <p></p>
            <div><br/>
			<label>1
               <input id="q18_1" name="notation" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
             <label>2
               <input id="q18_2" name="notation" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
             <label>3
               <input id="q18_3" name="notation" type="radio" value="3" class="validate[required] radio" maxlength="1"/>
            </label>
             <label>4
               <input id="q18_4" name="notation" type="radio" value="4" class="validate[required] radio"  maxlength="1"/>
            </label>
            <label>5
              <input id="q18_5" name="notation" type="radio" value="5" class="validate[required] radio" maxlength="1"/>
            </label>
			<label>6
              <input id="q18_6" name="notation" type="radio" value="6" class="validate[required] radio" maxlength="1"/>
            </label>
			<label>7
              <input id="q18_7" name="notation" type="radio" value="7" class="validate[required] radio" maxlength="1"/>
            </label>
			<label>8
              <input id="q18_8" name="notation" type="radio" value="8" class="validate[required] radio" maxlength="1"/>
            </label>
			<label>9
              <input id="q18_9" name="notation" type="radio" value="9" class="validate[required] radio" maxlength="1"/>
            </label>
			<label>10
              <input id="q18_10" name="notation" type="radio" value="10" class="validate[required] radio" maxlength="1"/>
            </label>
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>19.	Souhaitez-vous bénéficier d’un plan préventif ? </legend>
            <p></p>
            <div><br/>
			<label>Oui
               <input id="q19_1" name="preventif" type="radio" value="1" class="validate[required] radio" maxlength="1"/>
            </label>
            <label>Non
               <input id="q19_2" name="preventif" type="radio" value="2" class="validate[required] radio" maxlength="1"/>
            </label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>20.	Selon vous quelles sont les actions prioritaires à intégrer dans le plan préventif ? </legend>
            <p></p>
            <div><br/><br>
			<label>Dépistage de maladies redoutées
               <input id="q20_1" name="actionsprioritaires1" type="checkbox" value="1" class="checkbox" maxlength="1"/>
            </label><br><br>
            <label>Dépistage des maladies lourdes et chroniques
               <input id="q20_2" name="actionsprioritaires2" type="checkbox" value="1" class="checkbox" maxlength="1"/>
            </label><br><br>
			<label>Traitement d’obésité et surpoids
               <input id="q20_3" name="actionsprioritaires3" type="checkbox" value="1" class="checkbox" maxlength="1"/>
            </label><br><br>
			<label>Nutrition et hygiène de vie
               <input id="q20_4" name="actionsprioritaires4" type="checkbox" value="1" class="checkbox" maxlength="1"/>
            </label><br><br>
			<label>Tabagisme 
               <input id="q20_5" name="actionsprioritaires5" type="checkbox" value="1" class="checkbox" maxlength="1"/>
            </label><br><br>
			<label>Autres : 
               <textarea id="q17_3" name="actionsprioritaires6" rows="1" cols="50" style ="height: 20px; width: 740px;"></textarea>
            </label>
			</div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>21.	Quels services complémentaires souhaiteriez-vous intégrer au plan SAHETNA ?</legend>
            <p></p>
            <div>
				<textarea id="qst21" name="qst21" rows="3" cols="50" style ="height: 64px; width: 740px;" class="validate[required]">
				
				</textarea>
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>22.	Quelles sont vos suggestions et propositions pour répondre au mieux à vos attentes à propos du service tiers payant ?</legend>
            <p></p>
            <div>
				<textarea id="qst22" name="qst22" rows="3" cols="50" style ="height: 64px; width: 740px;" class="validate[required]">
				
				</textarea>
            </div>
          </fieldset>
        </div>
		
		<div class="ln">
          <fieldset>
            <legend>23.	Avez-vous d’autre commentaires, questions ou préoccupations à formuler ?</legend>
            <p></p>
            <div>
				<textarea id="qst23" name="qst23" rows="3" cols="50" style ="height: 64px; width: 740px;" class="validate[required]">
				
				</textarea>
            </div>
          </fieldset>
        </div>
		
		<div style="margin: 10px 5px; padding-top: 12px;">
			<p>Nous vous remercions d'avoir pris le temps de remplir ce questionnaire.</p>
		</div>
        <div class="ln">
          <div><br/><br/>
            <label>
              <input id="button" type="button"  name="send" value=" Valider vos réponses " class="btn"/>
            </label>
            <input name="mat" type="hidden" value="<?php print $mat;?>" />
            <input name="date" type="hidden" value="<?php print date('Y-m-d');?>" />
          </div>
        </div>
      </div>
    </form>
    <div class="foot"></div>
  </div>
</center>
<div id="selected"></div>
</body>
</html>
