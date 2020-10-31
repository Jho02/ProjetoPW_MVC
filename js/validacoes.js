$(document).ready(function () {
    $('#login').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "ErroUser") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("user");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("userErro");
                        exibirErro.className = "invalid-feedback d-block bg-transparent col-12";
                        exibirErro.innerHTML = "Por favor, digite seu nome de usuário ou email";
                        titulo.focus();
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";
                        }, 5000);
                    }, 0);
                }
                if (data == "ErroPass") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("pass");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("passErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite sua senha";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);

                }
                 if(data == "falhaLogin"){
                     Swal.fire({
                         icon: 'error',
                         confirmButtonColor: '#1a962a',
                         text: 'Usuário ou senha Inválidos',
                         showConfirmButton: true,
                         confirmButtonText: "Tentar Novamente"
                        
                       })
                 } 

                if (data == "SucessoUsuario") {
                    Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1900,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: 'Logado com sucesso'
                    })
                }
                if (data == "SucessoUsuario") {
                    timerr = setTimeout(userLogin, 1900);

                    function userLogin() {
                        window.location.replace("../../view/home");
                    }
                }
                if (data == "SucessoADM") {
                    window.location.replace("view/Administracao");
                }
            }
        }); //Fim do Ajax
        return false;
    }); //Function de dentro
}); //Function de fora
$(document).ready(function () {
    $('#cadastroUsuario').submit(function () {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data == "erroName") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("name");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("nameErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite seu nome";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroCpf") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("email");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("emailErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite seu email";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroEmail") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("email");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("emailErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite seu email";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroCpf") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("cpf");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("cpfErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite seu CPF";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroNameUser") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("userName");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("userNameErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite seu Nome de Usuário";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroPass") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("passCadaster");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("passErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Por favor, digite sua senha";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroConfrimPass") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("confirPass");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("confirErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "Confirme a senha";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "erroPassConfirm") {
                    var timerr = setTimeout(function () {
                        var titulo = document.getElementById("confirPass");
                        titulo.className = "form-control is-invalid";
                        var exibirErro = document.getElementById("confirErro");
                        exibirErro.className = "invalid-feedback  col-12";
                        exibirErro.innerHTML = "As senhas não conferem";
                        setTimeout(function () {
                            clearTimeout(timerr);
                            exibirErro.innerHTML = "";
                            titulo.className = "form-control";

                        }, 5000);

                    }, 0);
                }
                if (data == "sucesso") {
                    Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: 'Cadastrado Com Sucesso!'
                    })
                }

            }

        });
        return false;
    });
});