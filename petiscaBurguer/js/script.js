/**
 * Comment
 */

function cancelar() {
    window.location.href = "../indexGerente.php";
}

function cancelarLogin() {
    window.location.href = "../index.php";
}

function sair() {
    window.location.href = "logout.php";
}

function finalizarCompra() {
    alert('Compra finalizada!');
    var cartItems = document.querySelectorAll('.cart-item');
    for (var i = 0; i < cartItems.length; i++) {
        cartItems[i].remove();
    }
    var totalElement = document.querySelector('.total-price');
    totalElement.innerText = 'Total: R$0.00' ;
}

//máscaras

//máscaras cliente

function masc_cpf_cli() {
    //máscara CPF cliente
    var cpf_cli = document.getElementById('cpf_cli');
    if (cpf_cli.value.length === 3 || cpf_cli.value.length === 7) {
        cpf_cli.value += '.';
    } else if (cpf_cli.value.length === 11) {
        cpf_cli.value += '-';
    }
}

function masc_tel_cel_cli() {
    //máscara telefone cliente
    var tel_cel_cli = document.getElementById('tel_cel_cli');
    if (tel_cel_cli.value.length === 0) {
        tel_cel_cli.value += '(';
    } else if (tel_cel_cli.value.length === 3) {
        tel_cel_cli.value += ')';
    } else if (tel_cel_cli.value.length === 9) {
        tel_cel_cli.value += '-';
    }
}

//máscaras fornecedor

function masc_cep_forn() {
    //máscara telefone fornecedor
    var cep_forn = document.getElementById('cep_forn');
    if (cep_forn.value.length === 5) {
        cep_forn.value += '-';
    }
}

function masc_tel_cel_forn() {
    //máscara telefone fornecedor
    var tel_cel_forn = document.getElementById('tel_cel_forn');
    if (tel_cel_forn.value.length === 0) {
        tel_cel_forn.value += '(';
    } else if (tel_cel_forn.value.length === 3) {
        tel_cel_forn.value += ')';
    } else if (tel_cel_forn.value.length === 9) {
        tel_cel_forn.value += '-';
    }
}

//máscaras funcionário

function masc_cpf_func() {
    //máscara CPF funcionário
    var cpf_func = document.getElementById('cpf_func');
    if (cpf_func.value.length === 3 || cpf_func.value.length === 7) {
        cpf_func.value += '.';
    } else if (cpf_func.value.length === 11) {
        cpf_func.value += '-';
    }
}

function masc_rg_func() {
    //máscara RG funcionário
    var rg_func = document.getElementById('rg_func');
    if (rg_func.value.length === 1 || rg_func.value.length === 5) {
        rg_func.value += '.';
    }
}

function masc_cep_func() {
    //máscara cep funcionário
    var cep_func = document.getElementById('cep_func');
    if (cep_func.value.length === 5) {
        cep_func.value += '-';
    }
}

function masc_tel_cel_func() {
    //máscara telefone funcionário
    var tel_cel_func = document.getElementById('tel_cel_func');
    if (tel_cel_func.value.length === 0) {
        tel_cel_func.value += '(';
    } else if (tel_cel_func.value.length === 3) {
        tel_cel_func.value += ')';
    } else if (tel_cel_func.value.length === 9) {
        tel_cel_func.value += '-';
    }
}

function masc_pis_pasep_func() {
    //máscara pis pasep funcionário
    var pis_pasep_func = document.getElementById('pis_pasep_func');
    if (pis_pasep_func.value.length === 3 || pis_pasep_func.value.length === 9) {
        pis_pasep_func.value += '.';
    } else if (pis_pasep_func.value.length === 12) {
        pis_pasep_func.value += '-';
    }
}

function masc_cert_nascimento_func() {
    //máscara certidão de nascimento
    var cert_nascimento_func = document.getElementById('cert_nascimento_func');
    if (cert_nascimento_func.value.length === 6 || cert_nascimento_func.value.length === 9
            || cert_nascimento_func.value.length === 12 || cert_nascimento_func.value.length === 17
            || cert_nascimento_func.value.length === 19 || cert_nascimento_func.value.length === 25
            || cert_nascimento_func.value.length === 29 || cert_nascimento_func.value.length === 37) {
        cert_nascimento_func.value += ' ';
    }
}

function masc_cert_casamento_func() {
    //máscara certidão de casamento
    var cert_casamento_func = document.getElementById('cert_casamento_func');
    if (cert_casamento_func.value.length === 6 || cert_casamento_func.value.length === 9
            || cert_casamento_func.value.length === 12 || cert_casamento_func.value.length === 17
            || cert_casamento_func.value.length === 19 || cert_casamento_func.value.length === 25
            || cert_casamento_func.value.length === 29 || cert_casamento_func.value.length === 37) {
        cert_casamento_func.value += ' ';
    }
}


//máscara login

function masc_login() {
    //máscara CPF funcionário
    var login = document.getElementById('login');
    if (login.value.length === 3 || login.value.length === 7) {
        login.value += '.';
    } else if (login.value.length === 11) {
        login.value += '-';
    }
}

// validador CPF

//Validador Cpf Cliente
function TestaCPF(cpf_func) {
    cpf_func = cpf_func.replace(/\D+/g, '').replace('-', '');
    var Soma;
    var Resto;
    Soma = 0;
    if (cpf_func === "00000000000") {
        return alert("CPF inválido!");
    } else if (cpf_func === "") {
        return 0;
    }

    for (i = 1; i <= 9; i++) {
        Soma = Soma + parseInt(cpf_func.substring(i - 1, i)) * (11 - i);
    }
    Resto = (Soma * 10) % 11;

    if ((Resto === 10) || (Resto === 11)) {
        Resto = 0;
    }
    if (Resto !== parseInt(cpf_func.substring(9, 10))) {
        return alert("CPF inválido!");
    }

    Soma = 0;
    for (i = 1; i <= 10; i++) {
        Soma = Soma + parseInt(cpf_func.substring(i - 1, i)) * (12 - i);
    }

    Resto = (Soma * 10) % 11;

    if ((Resto === 10) || (Resto === 11)) {
        Resto = 0;
    }
    if (Resto !== parseInt(cpf_func.substring(10, 11))) {
        return alert("CPF inválido!");
    }
}

