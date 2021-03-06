
function ProductOrderDetailsButtonClick(){
    var qtyElements = document.getElementsByClassName('productOrderQtyInput');
    console.log(qtyElements);
    for(var qtyIndex=0; qtyIndex<qtyElements.length; qtyIndex++){
        qtyElements[qtyIndex].setAttribute('form', 'productOrderForm');
    }

    var button = document.getElementById('productOrderSummaryButton');
    button.type = 'submit';
    button.click();
}

function productOrderQtyHandler(productId){
    var componentId = "productOrderQtyInput_"+productId;
    if(!hasValue(componentId, "&#42;Required") ||
       !hasNumericValue(componentId, "&#42;Invalid quantity") || 
       !hasPostivieNumericValue(componentId, "&#42;Quantity must be <br> more than zero"))
    {
        UpdateFormSubmitButton('productOrderSummaryButton');
        return;
    }

    UpdateFormSubmitButton('productOrderSummaryButton');
    updateSubTotalForProduct(componentId, productId);
    updateTotalPrice();
}

function updateSubTotalForProduct(componentId, productId){
    var qty = document.getElementById(componentId).value;
    var pricePerUnitHtml = document.getElementById("productOrderPrice_"+productId).innerHTML;
    var pricePerUnit = getValueFromMoneyComponent(pricePerUnitHtml);
    var subTotal = (qty * pricePerUnit).toFixed(2);
    document.getElementById("productOrderSubTotalPrice_"+productId).innerHTML = "S$ "+subTotal;
}

function updateTotalPrice(){
    var gstPercentage = 7;
    var subTotalHtmls = document.getElementsByClassName("productOrderSubTotalPrice");
    var total = 0.0;
    for(i=0; i<subTotalHtmls.length; i++){
        var subTotal = parseFloat(getValueFromMoneyComponent(subTotalHtmls[i].innerHTML));
        total = total + subTotal;
    }

    var gstAmount = ((total * gstPercentage) / 100).toFixed(2);
    var netTotal = total + parseFloat(gstAmount);

    document.getElementById("productOrderSummaryTotal").innerHTML = "S$"+total.toFixed(2);
    document.getElementById("productOrderSummaryGst").innerHTML = "S$"+gstAmount;
    document.getElementById("productOrderSummaryNetTotal").innerHTML = "S$"+netTotal.toFixed(2);
}

function getValueFromMoneyComponent(htmlContent){
    var htmlComponents = htmlContent.split("$");
    return htmlComponents[1].trim();
}