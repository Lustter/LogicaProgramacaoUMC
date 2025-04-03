function calcularPagamento() {


    let formaPagamento = document.querySelector("#formaPagamento").value
    let valorTotal = parseFloat(document.querySelector("#valorCompra").value)
    console.log(formaPagamento, valorTotal);
    let resultado = document.querySelector("#resultado")
    let valorFinal

    if (valorTotal <= 0 || isNaN(valorTotal)) {
        resultado.innerHTML = "Por favor informe um valor valido (positivo)"
    }

    else {
        switch (formaPagamento) {
            case "pix":
                valorFinal = valorTotal * 0.9
                resultado.innerHTML = `O valor final total é igual a R$ ${valorFinal.toFixed(2)}`;
                break

            case "debito":
                valorFinal = valorTotal * 0.95
                resultado.innerHTML = `O valor final total é igual a R$ ${valorFinal.toFixed(2)}`;
                break

            case "credito":
                resultado.innerHTML = `O valor final total é igual a R$ ${valorTotal.toFixed(2)}`;
                break

            default:
                resultado.innerHTML = "Informe uma forma de pagamento válida";
                break

        }
    }
}

