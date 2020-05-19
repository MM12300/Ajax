function ajaxGetHTML(url,htmlID){
    //On crée l'objet xhr ( XMLTttpRequest() )
    //const car ne changera jamais, et aussi devient impossible à modifier
    const xhr = new XMLHttpRequest();

    //Ouverture et paramétrage de la requête => paramètre requête 'get' et url avec la méthode .open
    xhr.open('get', url);

    //On écoute si il charge ou si il y a une erreur
    //La fonction fléchée => anonyme car on l'utilisera pas après
    xhr.addEventListener('load', () => {
        //console.log du status de la réponse
        console.log(`Statut de la réponse à la requête AJAX : ${xhr.status} ${xhr.statusText}`);

        //on stocke la réponse de la requête dans une constante
        const response = xhr.response;

        //on crée une constante de notre container(div)
        const container = document.getElementById(htmlID);
        //On stocke dans le container la réponse de la requête
        container.innerHTML = response;
        //On fait un console log
        console.log("Fichier: "+ url +" Id HTML: " +  htmlID);
    });

    xhr.addEventListener('error', () => console.error('AJAX request failed'));

    xhr.send();
}


function ajaxGetJson(url,htmlID){
    
    const xhr = new XMLHttpRequest();

    xhr.open('get', url);

    xhr.addEventListener('load', () => {
        console.log(`Statut de la réponse à la requête AJAX : ${xhr.status} ${xhr.statusText}`);

        const jsonData = xhr.response;

        //Comme en HTML mais on doit parser les données du JSON pour avoir un objet
        const data = JSON.parse(jsonData);

        const container = document.getElementById();
        //On inject le JSON dans le HTML
        container.innerHTML = jsonData;
        
        // Traitement des données reçues par la fonction de callback
        console.log("Fichier: "+ url +" Id HTML: " +  htmlID);
        console.log(data);
    });

    xhr.addEventListener('error', () => console.error('AJAX request failed'));

    xhr.send();
}
