// Consumir a API do correio
// https://viacep.com.br/ws/08717400/json/

const cep = document.querySelector("#cep")

cep.addEventListener("change", (evento) => {
    let cepUsuario = evento.target
    console.log(cepUsuario.value);
    buscaCep(cepUsuario.value);
})

async function buscaCep(cep) {

    let consultaCep = await fetch(`https://viacep.com.br/ws/${cep}/json/`)
    console.log(consultaCep);

    let consultaCepJson = await consultaCep.json()
    console.log(consultaCepJson);


    let erroCep = document.querySelector("#erro")
    erroCep.innerHTML = ""

    try {
        let consultaCep = await fetch(`https://viacep.com.br/ws/${cep}/json/`)

        console.log(consultaCep);

        let consultaCepJson = await consultaCep.json()
        console.log(consultaCepJson);
        console.log(consultaCepJson.erro);

        if (consultaCepJson.erro) {
            throw Error("CEP inválido")
        }

        preencheCampos(consultaCepJson)
    }

    catch (erro) {
        console.log("Erro!");
        limpaCampos();
        erroCep.innerHTML = "<p> CEP inválido, tente novamente !! </p>"

    }
}

function preencheCampos(resultaCep) {
    let rua = document.querySelector("#rua")
    let bairro = document.querySelector("#bairro")
    let cidade = document.querySelector("#cidade")
    let estado = document.querySelector("#estado")

    rua.value = resultaCep.logradouro
    bairro.value = resultaCep.bairro
    cidade.value = resultaCep.cidade
    estado.value = resultaCep.uf
}

function limpaCampos() {
    let rua = document.querySelector("#rua")    
    let bairro = document.querySelector("#bairro")
    let cidade = document.querySelector("#cidade")
    let estado = document.querySelector("#estado")

    rua.value = ""
    bairro.value = ""
    cidade.value = ""
    estado.value = ""
}