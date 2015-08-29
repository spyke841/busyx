<?php
$title = 'Dernières commandes';
$link[0] = '?p=accueil_client';
?>
<h1 class="entete">Dernières commandes</h2>
<div class="wrapper">
<section class="container">
  <article class="row">
    <div class="col-md-12">
      <div class="contenu">
        <h2>Commandes n'ayant pas encore fait l'objet d'un appel à facturation</h2>
        Vous n'avez pas encore généré de commande ferme pour la période en cours.
        <ul>
          <li><b>Pourquoi le CA de certaines commandes est-il à zéro ?</b><br>Les commandes dont le CA est à zéro sont des commandes qui ont été annulées par le client ou sur lesquelles nous avons eu un impayé.</li>
          <br><li><b>A quoi correspondent les trackers dont le nom commence par mid ou ml ?</b><br>Les trackers dont le nom commence par <b>mid</b> ou <b>ml</b> correspondent à des relances que nous faisons par mail auprès de vos clients pour les inciter à recommander.</li>
          <br><li><b>Pourquoi voit-on de temps en temps de nouvelles commandes concernant le mois précédent ?</b><br>La date indiquée dans les statistiques est la date de commande mais les commandes ne sont validées qu'après réception du paiement. Pour les CB, c'est instantané (sauf pour les montants importants ou nous faisons quelques vérifications). Par contre, pour les chèques, c'est un peu plus long. La commande peut donc être reçue un mois donné et payée (donc validée) sur le mois suivant.</li>
          <br><li><b>Pourquoi le chiffre d'affaires mensuel et les montants annoncés dans l'appel à facture ne correspondent pas toujours ?</b><br>L'appel à facture est un "instantané" de l'activité de votre compte affilié entre deux dates données : votre inscription ou le précédent appel à facture, et l'appel à facture de la période courante.
  Le montant de l'appel à facture est composé de 2 valeurs : le chiffre d'affaire réalisé dans la période concernée à laquelle on ajoute les régularisations (paiements recus pour des commandes plus anciennes, remboursement de commandes) .
  Les paiements différés peuvent être faits sur des commandes très anciennes (le différé le plus long que nous ayons constaté a été de 11 mois), les remboursements peuvent également concerner des commandes plus anciennes suite à des délais d'approvisionnement prolongés ou des demandes d'échange.
  L'ensemble de ces traitements différés seront cumulés dans les régularisations de l'appel à facture, et viendront en plus ou en moins du chiffre d'affaires des mois concernés, ce qui explique les écarts qui peuvent se manifester entre ces différents tableaux.</li>
        </ul>
      </div>
    </div>
  </article>
</section>
</div>
