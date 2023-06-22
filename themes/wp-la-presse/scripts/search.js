let input = document.querySelector(".barre-recherche");
let searchTimeout = setTimeout(console.log("launch"),0);

let newDiv = document.createElement("div");
newDiv.classList.add("not-visible");

let boutonFermer = document.createElement("button");
boutonFermer.innerHTML = "x";

document.body.appendChild(newDiv);
newDiv.appendChild(boutonFermer);

let list = document.createElement("section");
newDiv.appendChild(list);

boutonFermer.addEventListener("click", () => {
    newDiv.classList.remove("visible");
    newDiv.classList.add("not-visible");
    document.body.classList.remove("stop-scrolling");
})



input.addEventListener("input", () =>{
    infoClavier();
    newDiv.classList.add("visible");
    newDiv.classList.remove("not-visible")
    document.body.classList.add("stop-scrolling");
});

function infoClavier(){
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout( Resultat(),500);
}

function Resultat(){
    let ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'http://localhost/wordpress-course/wp-la-presse/wp-json/wp/v2/posts?search=' + input.value);
    ourRequest.onload = function() {
    if (ourRequest.status >= 200 && ourRequest.status < 400) {
        let data = JSON.parse(ourRequest.responseText);
        showContent(data);
    } else {
        console.log("We connected to the server, but it returned an error.");
    }
    };

    ourRequest.onerror = function() {
    console.log("Connection error");
    };

    ourRequest.send();
}


function showContent(data){
    console.log(data)
    if(data.length >= 1){
        newDiv.removeChild(list);
        list = document.createElement("section");
        newDiv.appendChild(list);
    
        data.forEach(e => {
            let container = document.createElement("div");
            let titre = document.createElement("a");
            let excerpt = document.createElement("p")
    
            titre.innerHTML = e.title.rendered;
            titre.href = e.link;
    
            excerpt.innerHTML = e.excerpt.rendered; 
    
            container.classList.add("container-search");
            container.appendChild(titre);
            container.appendChild(excerpt);
            list.appendChild(container);
        });
    } else{
        newDiv.removeChild(list);
        list = document.createElement("section");
        list.innerHTML = "Il n'y a pas d'article correspondant...";
        newDiv.appendChild(list);
    }
}