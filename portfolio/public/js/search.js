
  function search_group() {
    // Déclaration des variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search_group"); //
    filter = input.value.toUpperCase();
    table = document.getElementById("table_group");
    tr = table.getElementsByTagName("tr");


    // Bouclage sur les lignes du tableau
    for (i = 0; i < tr.length; i++) {
      colonneType = tr[i].getElementsByTagName("td")[0]; //get la cellule de la colonne type sur la ligne n
      colonneLibelle = tr[i].getElementsByTagName("td")[1]; //get la cellule de la colonne libelle sur la ligne n
      if (td) {
        type = colonneType.textContent || colonneType.innerText; //Get la valeur de la cellule type
        libelle = colonneLibelle.textContent || colonneLibelle.innerText; //Get la valeur de la cellule libelle


        //On regarde si la ligne contient une des deux valeurs
        if ((type.toUpperCase().indexOf(filter) > -1) ||  libelle.toUpperCase().indexOf(filter) > -1) { // Si oui on l'affiche
          tr[i].style.display = "";
        } else { // Sinon on ne l'affiche pas
          tr[i].style.display = "none";
        }
      }
    }
  }
