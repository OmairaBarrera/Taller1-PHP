let myFormulario = document.querySelector("#myFormulario");
let myHeaders = new Headers({"Content-Type" : "application/json"});
let config = {
    headers: myHeaders,
}
myFormulario.addEventListener("submit", async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    config.body = JSON.stringify(data);
    config.method = "POST";
    let res = await (await (await fetch("api.php", config)).json());
    document.querySelector("pre").innerHTML = res.mensaje;
    console.log(res);
})