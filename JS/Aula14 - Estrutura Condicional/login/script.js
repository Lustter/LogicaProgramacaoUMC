function verificarLogin () {

    let usuario = document.querySelector("#usuario").value.toLowerCase();
    let senha = document.querySelector("#senha").value;
    let mensagem = document.querySelector("#mensagem")

    if (usuario == "lusni" && senha == "55647301"){
        mensagem.innerHTML = "Login bem-sucedido!";
        mensagem.style.color = "green";
    }

    else {
        mensagem.innerHTML = "Usuário ou senha incorretos";
        mensagem.style.color = "red";
    }
}