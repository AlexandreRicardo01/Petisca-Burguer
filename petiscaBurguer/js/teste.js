/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 const testeCpf = document.getElementById('cpf_cli');
 
 testeCpf.addEventListener('keypress', () => {
 let testeCpfLength = testeCpf.value.length;
 
 if(testeCpfLength === 3 || testeCpfLength === 7){
 testeCpfLength.value += '.';
 }else if(testeCpfLength === 11){
 testeCpfLength.value += '-';
 }
 });
 */
/*
 function masc_cpf(){
 var cpf_cli = document.getElementById('cpf_cli');
 if(cpf_cli.value.length === 3 || cpf_cli.value.length === 7){
 cpf_cli.value += '.'; 
 }else if(cpf_cli.value.length === 11){
 cpf_cli.value += '-';
 }
 }
 */
/*
 function TestaCPF(cpf_cli) {
 cpf_cli = cpf_cli.replace(/\D+/g, '').replace('-', '');
 var Soma;
 var Resto;
 Soma = 0;
 if (cpf_cli === "00000000000") {
 return false;
 }else if(cpf_cli === ""){
 return 0;
 }
 
 for (i = 1; i <= 9; i++) {
 Soma = Soma + parseInt(cpf_cli.substring(i - 1, i)) * (11 - i);
 }
 Resto = (Soma * 10) % 11;
 
 if ((Resto === 10) || (Resto === 11)) {
 Resto = 0;
 }
 if (Resto !== parseInt(cpf_cli.substring(9, 10))) {
 return alert(false);
 }
 
 Soma = 0;
 for (i = 1; i <= 10; i++) {
 Soma = Soma + parseInt(cpf_cli.substring(i - 1, i)) * (12 - i);
 }
 
 Resto = (Soma * 10) % 11;
 
 if ((Resto === 10) || (Resto === 11)){
 Resto = 0;
 }
 if (Resto !== parseInt(cpf_cli.substring(10, 11))){
 return alert(false);
 }
 }
 */