
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
      if (colonneType || colonneLibelle) {
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


  function sortATable(numcol, element){
    //Déclaration des variables
    var sort = "asc";
    var table = element
    console.log(element);
    var rows = table.rows;
    var shouldSwitch = false;
    var switchcount  = 0;
    switching = true;

    while(switching){
      for(i=1; i < (rows.length - 1); i++){

        el1 = rows[i].getElementsByTagName("td")[numcol];
        el2 = rows[i + 1].getElementsByTagName("td")[numcol];
  
        console.log(el1, el2);
  
        if(sort == "asc"){ // On regarde si le tri doit être ascendant 
          console.log(el1.innerHTML,el2.innerHTML);
          if (el1.innerHTML.toLowerCase() > el2.innerHTML.toLowerCase()) {
            console.log("test");
            shouldSwitch = true;
            break;
          }
        }else{// Sinon il sera descendant
          if (el1.innerHTML.toLowerCase() < el2.innerHTML.toLowerCase()) {
  
            shouldSwitch = true;
            break;
          }
        }
      }
  
      if (shouldSwitch) {
        // Si un switch des elements doit être fait
        console.log("test");
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
  
        switchcount ++;
      } else {
        /* If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again. */
        if (switchcount == 0 && sort == "asc") {
          sort = "desc";
          switching = true;
        }
      }
    }



  }




  function addActivity() {
    $('#activities_field_list').append('<div class="form-group row">'+
    '<div class="col-sm-12">'+
        '<div class="row">'+
            '<div class="col-md-6">'+
                '<label class="form-label" for="description">Description</label>'+
                '<input class="form-control" id="description" type="text">'+


            '</div> '+
            '<div class="col-md-6">'+
                
            '</div></div></div></div>').hide().fadeIn();
}
