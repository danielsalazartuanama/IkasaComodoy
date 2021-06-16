//alert("'holaaa'")
$(document).ready(function () {
    $.ajaxSetup({ cache: false });
    $('a[is-modal]').on('click', function (e) {
        $('#contentModal').load(this.href, function () {
            $('#modalGenerico').modal({ keyboard: true }, 'show');
            crud();
        });
        return false;
    });
    $('#modalGenerico').on('hidden.bs.modal', function () {
        $('#contentModal').html('');
    });
});

function crud() {
    const myForm = document.querySelector('#myForm');

    myForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const action = myForm.getAttribute('action');
        const data = new FormData(myForm);

        fetch(action, { method: 'POST', body: data })
            .then(rpta => {
                return rpta.json();
            })
            .then(response => {
                switch (response.success) {
                    case 1:
                        alert(response.message);
                        location.href = response.redirection;
                        break;
                    case 0:
                        alert(response.message);
                        break;
                    case -1:
                        renderError(response.message, 'mis_errores');
                        break;
                }
            });
    });
}

function renderError(errors, id_item) {
    let err = Object.values(errors);
    let lista = "<ul class='text text-error'>";
    for (let i = 0; i < err.length; i++) {
        lista += "<li> * " + err[i] + "</li>";
    }
    lista += "</ul>";
    document.getElementById(id_item).innerHTML = lista;
}

