/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
let cep_forn = document.querySelector('#cep_forn');
let endereco_forn = document.querySelector('#endereco_forn');
let cidade_forn = document.querySelector('#cidade_forn');
let complemento_forn = document.querySelector('#complemento_forn');
let bairro_forn = document.querySelector('#bairro_forn');
let estado_forn = document.querySelector('#estado_forn');



cep_forn.addEventListener('blur', function (e) {

    let cep_forn = e.target.value;
    let script = document.createElement('script');
    script.src = 'https://viacep.com.br/ws/' + cep_forn + '/json/?callback=popularForm';
    document.body.appendChild(script);

});

function popularForm(resposta) {

    if ("erro" in resposta) {
        alert('CEP não encontrado');
        return;
    }

    endereco_forn.value = resposta.logradouro;
    cidade_forn.value = resposta.localidade;
    bairro_forn.value = resposta.bairro;
    estado_forn.value = resposta.uf;
}




