function onJSON(json){
    const b =document.getElementById("box");
    b.innerHTML = '';
    var i=0;
    for (evento of json){
      i++;
    const a=document.createElement("div");
    const servizio= createTitle(evento.servizio);
    const type= createTitle(evento.type);
    const departure= createTitle(evento.partenza);
    const destination= createTitle(evento.arrivo);
  const elimina = document.createElement("a");
  elimina.dataset.id_evento = evento.type;
  elimina.textContent = "Elimina";
  elimina.classList.add("small");
  elimina.addEventListener("click", eliminaEvento);
    a.appendChild(servizio);
    a.appendChild(type);
    a.appendChild(departure);
    a.appendChild(destination);
    a.appendChild(elimina);
    b.appendChild(a);
  }}
  function onResponse(response){
    return response.json();
  }
  fetch("http://localhost/fetch_cerca.php").then(onResponse).then(onJSON);

  function check(event){  
    const Nome= document.getElementById("nome").value;
    const formdata = new FormData(); 
    formdata.append("name", Nome);
    
    fetch("http://localhost/fetch_cerca.php",{
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
                onJSON(jsonResponse);
                if(jsonResponse.result=="notOK"){
                    
                }
            })
           
    
}
  function createTitle(testo){
    const h2 = document.createElement("p");
    h2.innerText = testo;
    return h2;
}
function eliminaEvento(event)
{
    const id_evento = event.currentTarget.dataset.id_evento;
    fetch("http://localhost/fetch_elimina.php?id_evento=" + id_evento).then(aggiorna);
    event.preventDefault();
}
function aggiorna(){
  const b =document.getElementById("box");
  b.classList.add("hidden");
}
const bottone = document.getElementById("buttons");
bottone.addEventListener("click", check);