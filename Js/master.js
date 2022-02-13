$(document).ready(function () {

});


function editarProd(id) {
    $.ajax({
        type: "POST",
        url: '../Controllers/ctrl_productos.php',
        data: {
            idProd: id
        },
        success: function (data) {
            console.log(data)
            $('#modalEditar').html(data);
        }
    });
};
function deleteProd(id){
    $.ajax({
    type: "POST",
    url: '../Controllers/ctrl_productos.php',
    data: {
        idProd: id,
        delete:true
    },
    success: function (response) {
        alert(response);
        location.reload();
    }
    });


};
function comprar(id){
    let select = $("#select"+id).val();
    $.ajax({
    type: "POST",
    url: '../Controllers/ctrl_ventas.php',
    data: {
        idProd: id,
        cantidad:select
    },
    success: function (response) {
        alert(response);
        location.reload();
    }
    });


};