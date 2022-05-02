function selectService(select) {
    if (select) {

        //recuperer tout les employés
        // classse taille = Nom, photo de profil et bouton Voir profil. 
        const tailles = document.querySelectorAll(".taille");

        tailles.forEach(taille => {
            console.log(select.value)
            //verif si chaque employé appartient à un service
            //si selection = tous affiche tous
            if (!select.value.includes(taille.dataset.service) && select.value !== "tous") {
                taille.style.display = "none"
            // si nn affiche
            } else {
                //afficher
                taille.style.removeProperty("display")
            }
        })
        displayService();
    }

    // function select(this) dans le html = pour selectioner le select à la fonction.



}

function displayService() {
	//afficher le nom de la valeur 
    var x = document.getElementById("choose").value;

    document.getElementById("demo").innerHTML = x;

}





