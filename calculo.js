function CalculaPrecioTotal() {
    var Precio = parseFloat(document.getElementById('txt_PreProducto').value);
    var PrecioConImpuesto = 1.16 * Precio;
    var PrecioTotal = PrecioConImpuesto + 30;
    document.getElementById('lbl_Impuestos').textContent = 'El impuesto del producto es:  ' + (0.16 * Precio);
    document.getElementById('lbl_MontoPagar').textContent = 'El total a pagar sería de: ' + PrecioTotal;
}