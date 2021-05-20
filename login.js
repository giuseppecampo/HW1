function check(event){
    const identita= document.getElementById("user").value;
    const errorename = document.getElementById("errorename");
    const password = document.getElementById("pass").value;
    const errorepass = document.getElementById("errorepass");
    console.log("fuori");
    if(identita.length  >  0 && !/^[a-zA-Z0-9]{1,15}$/.test(identita)){
        console.log("dentro");
        errorename.innerHTML = "sono ammesse lettere e numeri";
        console.log("dentro htm");
        errorename.classList.remove("hidden");
        event.preventDefault();
    }
    if(password.length > 0 && !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password)){
        errorepass.innerHTML="sono ammesse lettere maiuscole, minuscole, numeri e caratteri speciali";
        errorepass.classList.remove("hidden");
        event.preventDefault();
    }
    else{
        errorename.classList.add("hidden");
        errorepass.classList.add("hidden");
        const formdata = new FormData();
        formdata.append("user", identita);
        formdata.append("pass", password);
        fetch("http://localhost/register.php",{
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
                if(jsonResponse.result=="notOK"){
                    
                }
            })
    }
}
const bottone = document.getElementById("buttons");
bottone.addEventListener("click", check);
