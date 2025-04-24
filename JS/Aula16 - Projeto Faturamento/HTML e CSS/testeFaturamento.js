// seleciona o TR produto
let produto = document.querySelectorAll('.produto')
console.log(produto);

for (let i = 0; i < produto.length; i++){
    // seleciona os TD que estao no TR produto
    let valorUnitProduto = produto[i].querySelector('.info-valor-unidade').textContent
    let quantidadeProduto = produto[i].querySelector('.info-quantidade').textContent
    let valorTotalProduto = produto[i].querySelector('.info-valor-total')
    
    // console.log(valorUnitProduto);
    console.log(quantidadeProduto);
    // console.log(valorTotalProduto);
    
    //excluir o R$
    let valorUnitProdutoLimpo = valorUnitProduto.replace(/R\$\ /, "")
    console.log(valorUnitProdutoLimpo);
    console.log(parseFloat(valorUnitProdutoLimpo) * parseInt(quantidadeProduto));
    
    valorTotalProduto.innerHTML = "R$" + (parseFloat(valorUnitProdutoLimpo) * parseInt(quantidadeProduto)).toFixed(2)
}
    
    