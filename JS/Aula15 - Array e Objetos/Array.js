let produtos = [
    {nome: "Teclado", categoria: "Periférico", preco: 200},
    {nome: "Mouse", categoria: "Periférico", preco: 150},
    {nome: "Computador", categoria: "Eletrônico", preco: 5000},
    {nome: "Monitor", categoria: "Eletrônico", preco: 750}
]   

//lista de produtos
//precorrer lista de array com objetos
produtos.forEach((produto) => {
    console.log(`${produto.nome} - R$ ${produto.preco}`);
})

//fazer calculo de itens dentro de um array
const total = produtos.reduce((soma, produto) => soma + produto.preco, 0)
console.log(`O valor total de todos os produto é ${total}`);

//ofertando descontos MAP
const produtosComDesconto = produtos.map(produto => ({
    nome: produto.nome,
    preco: produto.preco * 0.9
}))

console.log(produtosComDesconto);


//filtrando itens

const produtosEletronicos = produtos.filter(produto => produto.categoria === "Periférico")
console.log(produtosEletronicos);

//desafio

console.log('Produtos Periféricos');


const totalPerifericosSoma = produtos
    .map(produto => ({nome: produto.nome, categoria: produto.categoria, preco: produto.preco * 0.95}))
    .filter(produto => produto.categoria === "Periférico")
    .reduce((soma, produto) => soma + produto.preco, 0);

console.log('R$', totalPerifericosSoma);

console.log('Produtos Eletrônicos');

const totalEletronicoSoma = produtos
    .map(produto =>({nome: produto.nome, categoria: produto.categoria, preco: produto.preco * 0.90}))
    .filter(produto => produto.categoria === 'Eletrônico')
    .reduce((soma, produto) => soma + produto.preco, 0);

console.log('R$', totalEletronicoSoma);


