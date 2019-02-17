$(document).ready(function () {

    $(this).on("click", ".addCartProv", function () {
        var productId = $(this).parent().find('.productId').html();

        $.ajax({

            url: "/user/admin/carritoProv/" + productId,
            type: "get",
            success: function (data) {
                $('.totalItemsCartProv').text(data);
            },
            error: function () {
                alert("Error agregando al qqqq carrito!!!!");
            }
        });
        //realizarCompraProv();
    });

    $('.masProv').click(function () {
        var productId = $(this).parent().attr('id').split('udsProv')[1];
        var price = $(this).parent().find('.priceDBProv').html();

        $.ajax({
            url: "/user/admin/carritoProv/" + productId,
            type: "get",
            success: function (data) {
                var valor = $('#udsProv' + productId).find('.valorProv');
                var val = parseInt(valor.html()) + 1;
                valor.html(val);
                //calcular el precio calculado del producto
                var sellPrice = showProductSellPrice(val, price);
                $('#price' + productId).text(sellPrice);
                realizarCompraProv();
            }
        });

    });
    $('.menosProv').click(function () {
        var productId = $(this).parent().attr('id').split('udsProv')[1];
        var price = $(this).parent().find('.priceDBProv').html();
        $.ajax({
            url: "/user/admin/carritoProv/" + productId + "/menos",
            type: "get",
            success: function (data) {
                var valor = $('#udsProv' + productId).find('.valorProv');
                var val = parseInt(valor.html());
                if (val > 1) {
                    val = val - 1;
                    valor.html(val);
                    //calcular el precio calculado del producto
                    var sellPrice = showProductSellPrice(val, price);
                    $('#price' + productId).text(sellPrice);

                    $('.totalItemsCartProv').text(data);
                    realizarCompraProv();
                } else if (val === 1) {
                    $.ajax({
                        url: "/user/admin/carritoProv/borrar/" + productId,
                        type: "get",
                        success: function (dataDel) {
                            realizarCompraProv();
                            $('#udsProv' + productId).parent().parent().fadeOut(function () {
                                $(this).remove();
                                realizarCompraProv();
                                $('.totalItemsCartProv').text(dataDel);
                            });
                        }
                    });
                }
            },
            error: function () {
                alert("Error ajax agregando al carrito!!!!");
            }
        });

    });
    $('.borrarLineaProv').click(function () {

        var td1 = $(this).parent().parent().find('td:eq(2)');
        td1.parent().css('background-color', 'turquoise');
        var productId = td1.find('span:eq(0)').attr('id').split('udsProv')[1];
        var price = $(this).parent().parent().find('.subtotalProv').text();
        $.ajax({
            url: "/user/admin/carritoProv/borrar/" + productId,
            type: "get",
            success: function (data) {

                $('#udsProv' + productId).parent().parent().fadeOut(function () {
                    $(this).remove();
                    realizarCompraProv();
                });
                /**
                 * Muestra el precio  total de los productos
                 */

                $('.totalItemsCartProv').text(data);

            }
        });

    });
});

function realizarCompraProv() {

    var total = 0;
    var tax = 0;

    $('.subtotalProv').each(function () {
        total += parseFloat($(this).html());
    });
    var subtotal = total / 1.21;
    var tax = subtotal * 0.21;
    $('#totalPriceProv').html(total.toFixed(2));
    $('#totalTaxProv').html(tax.toFixed(2));
    $('#totalBeforeTaxProv').html(subtotal.toFixed(2));
}
