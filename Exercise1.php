<?php
  // Définition de la classe Calculatrice
  class Calculatrice {
    // Méthode pour calculer la somme de deux nombres
    public function addition($a, $b) {
      return $a + $b;
    }

    // Méthode pour calculer le produit de deux nombres
    public function multiplication($a, $b) {
      return $a * $b;
    }
  }

  // Instanciation de la classe Calculatrice
  $calculatrice = new Calculatrice();

  // Appel de la méthode addition pour calculer la somme de 10 et 5
  $somme = $calculatrice->addition(10, 5);

  // Appel de la méthode multiplication pour calculer le produit de 10 et 5
  $produit = $calculatrice->multiplication(10, 5);

  // Affichage des résultats
  echo "La somme de 10 et 5 est : $somme\n";
  echo "Le produit de 10 et 5 est : $produit";
?>
