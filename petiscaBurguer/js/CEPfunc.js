/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
let cep_func = document.querySelector('#cep_func');
let endereco_func = document.querySelector('#endereco_func');
let cidade_func = document.querySelector('#cidade_func');
let complemento_func = document.querySelector('#complemento_func');
let bairro_func = document.querySelector('#bairro_func');
let estado_func = document.querySelector('#estado_func');



cep_func.addEventListener('blur', function (e) {

    let cep_func = e.target.value;
    let script = document.createElement('script');
    script.src = 'https://viacep.com.br/ws/' + cep_func + '/json/?callback=popularForm';
    document.body.appendChild(script);

});

function popularForm(resposta) {

    if ("erro" in resposta) {
        alert('CEP não encontrado');
        return;
    }

    endereco_func.value = resposta.logradouro;
    cidade_func.value = resposta.localidade;
    complemento_func.value = resposta.complemento;
    bairro_func.value = resposta.bairro;
    estado_func.value = resposta.uf;
}




