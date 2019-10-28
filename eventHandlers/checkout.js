function checkoutQtyHandler(productId){
    var qty = document.getElementById("checkoutQtyInput_"+productId).value;
    var pricePerUnitHtml = document.getElementById("checkoutPrice_"+productId).innerHTML;
    var pricePerUnitHtmlComponents = pricePerUnitHtml.split("$");
    var pricePerUnit = pricePerUnitHtmlComponents[1].trim();
    var subTotal = (qty * pricePerUnit).toFixed(2);
    document.getElementById("checkoutSubTotalPrice_"+productId).innerHTML = "S$ "+subTotal;
    console.log(subTotal);
}