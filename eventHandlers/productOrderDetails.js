function checkoutQtyHandler(productId){
    var qty = document.getElementById("checkoutQtyInput_"+productId).value;
    var pricePerUnitHtml = document.getElementById("checkoutPrice_"+productId).innerHTML;
    var pricePerUnit = getValueFromMoneyComponent(pricePerUnitHtml);
    var subTotal = (qty * pricePerUnit).toFixed(2);
    document.getElementById("checkoutSubTotalPrice_"+productId).innerHTML = "S$ "+subTotal;
    updateTotalPrice();
}

function updateTotalPrice(){
    var gstPercentage = 7;
    var subTotalHtmls = document.getElementsByClassName("checkoutSubTotalPrice");
    var total = 0.0;
    for(i=0; i<subTotalHtmls.length; i++){
        var subTotal = parseFloat(getValueFromMoneyComponent(subTotalHtmls[i].innerHTML));
        total = total + subTotal;
    }

    var gstAmount = ((total * gstPercentage) / 100).toFixed(2);
    var netTotal = total + parseFloat(gstAmount);

    document.getElementById("checkoutSummaryTotal").innerHTML = "S$"+total.toFixed(2);
    document.getElementById("checkoutSummaryGst").innerHTML = "S$"+gstAmount;
    document.getElementById("checkoutSummaryNetTotal").innerHTML = "S$"+netTotal.toFixed(2);
}

function getValueFromMoneyComponent(htmlContent){
    var htmlComponents = htmlContent.split("$");
    return htmlComponents[1].trim();
}