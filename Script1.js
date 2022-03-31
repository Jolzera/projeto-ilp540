
    // Exemplo de JavaScript inicial para desativar envios de formul�rio, se houver campos inv�lidos.
    (function () {
        'use strict';
    window.addEventListener('load', function () {
                // Pega todos os formul�rios que n�s queremos aplicar estilos de valida��o Bootstrap personalizados.
                var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
                var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}, false);
})();
