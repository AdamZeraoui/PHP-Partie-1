<h1>Exercice 10</h1>

<p>À partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billet de 10 € et 5 €, de pièces de 2 € et de 1 €.<br></p>

<h2>Résultat</h2>

<?php

$mpay = 152;
$mv = 200;
$rpay = $mv-$mpay; //montant pour les calcule//
$irpay= $mv-$mpay; //montant pour la mémoire//
$mo10 = 0;
$mo5 =0;
$mo2 = 0;
$mo1 =0;

while ($rpay >= 10){ //Le while = Tant que.Ne pas oublier de dire à $rpay d'enlever la valeur.//
    $rpay=$rpay-10;
    $mo10++;
}
while ($rpay>=5){
    $rpay=$rpay-5;
    $mo5++;
}
while ($rpay>=2){
    $rpay=$rpay-2;
    $mo2++;
}
while ($rpay>=1){
    $rpay=$rpay-1;
    $mo1++;
}
if($mo10>1){ //ajout de pluriel pour le mon "billet" et "pièce"//
    $s10="s";
}else $s10="";
if($mo2>1){
    $s2="s";
}else $s2="";




echo "Montant à payer : $mpay € <br> Montant versé : $mv €<br>Reste à payer : $irpay € <br>*******************************<br>
Rendue de monnai : <br> $mo10 billet$s10 de 10 € - $mo5 billet de 5 € - $mo2 pièce$s2 de 2 € - $mo1 pièce de 1€";

//Teste solution plus simple après explication de modulo//

echo "<h3><i> Solution plus simple </h3></i>";

$mp=152;
$mv2=200;
$rp=$mv2-$mp;
$irp=$mv2-$mp;
$m10=intdiv($rp,10);    //sert à diviser mais ne donne que l'entier//
$rp=$rp%10;             //sert à donner le reste de la division, Le reste s'appel le Modulo// 
$m5=intdiv($rp,5);
$rp=$rp%5;
$m2=intdiv($rp,2);
$rp=$rp%2;
$m1=intdiv($rp,1);
$rp=$rp%1;

if($m10>1){ //ajout de pluriel pour le mon "billet" et "pièce"//
    $S10="s";
}else $S10="";
if($m2>1){
    $S2="s";
}else $S2="";

echo "Montant à payer : $mp € <br> Montant versé : $mv2 €<br>Reste à payer : $irp € <br> ****************************<br>
Rendu de monnai : <br> $m10 billet$S10 de 10€ - $m5 billet de 5€ - $m2 pièce$S2 de 2€ - $m1 pièce de 1€";