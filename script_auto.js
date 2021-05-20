function onJSON(json){
    const b =document.getElementById("box");
    var i=0;
    for (evento of json){
      i++;
    const a=document.createElement("div");
    const title= createTitle(evento.titolo);
   const image= createImg(evento.immagine);
   const paragrafo=createParagraph(evento.descrizione);
    a.appendChild(title);
    a.appendChild(image);
    a.appendChild(paragrafo);
    b.appendChild(a);
  }}
  function onResponse(response){
    return response.json();
  }
  fetch("http://localhost/fetch_auto.php").then(onResponse).then(onJSON);

  function check(event){
    const Car= document.getElementById("automobile").value;
    const Nome= document.getElementById("nome").value;
    const tipo= "Automobile";
    const formdata = new FormData();
    formdata.append("tipo", Car);
    formdata.append("name", Nome);
    formdata.append("servizio", tipo);
    const part= " ";
    const arrivo= " ";
    formdata.append("part_airport", part);
    formdata.append("dest_airport", arrivo);
    fetch("http://localhost/insert_client_hotel.php",{
            method: "post",
            body: formdata}).then(function(response) {
                if (response.status >= 200 && response.status < 300) {
                   return response.text()
                }
                throw new Error(response.statusText)
            })
            .then(function(response) {
                var jsonResponse = JSON.parse(response);
                console.log(jsonResponse);
                window.location.replace("gestione_prenotazione.php");
                if(jsonResponse.result=="notOK"){
                    
                }
            })
    
}
  function createTitle(testo){
    const h1 = document.createElement("h1");
    h1.innerText = testo;
    return h1;
}
function createImg(src, width, height){
    const img = document.createElement("img");
   img.setAttribute("src",src);
   img.setAttribute("width",width="350");
   img.setAttribute("height",height="250");
    return img;
}
function createParagraph(testo){
    const p = document.createElement("p");
    p.innerText = testo;
    return p;
}
const bottone = document.getElementById("buttons");
bottone.addEventListener("click", check);