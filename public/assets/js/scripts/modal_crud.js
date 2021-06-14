 $(document).ready(function () {
    $.ajaxSetup({ cache: false });
    $('a[is-modal]').on('click', function (e) {
        $('#contentModal').load(this.href, function () {
            $('#modalGenerico').modal({ keyboard: true }, 'show');
        });
        return false;
    });
    $('#modalGenerico').on('hidden.bs.modal', function () {
        $('#contentModal').html('');
    });
});