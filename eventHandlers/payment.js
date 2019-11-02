function PaymentButtonClick(){
    
    paymentUserEmailHandler();
    paymentUserTelephoneHandler();
    paymentCardNumberHandler();
    paymentCardHolderHandler();
    paymentCardExpiryDateHandler();
    paymentCardSecurityCodeHandler();

    var isDisabled = UpdateFormSubmitButton('makePaymentButton');
    if(isDisabled){
        return;
    }

    var button = document.getElementById('makePaymentButton');
    button.type = 'submit';
    button.click();
}

function paymentUserEmailHandler(){
    var componentId = "paymentUserEmail";
    var hasEmail = hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');

    return hasEmail;
}

function paymentUserTelephoneHandler(){
    var componentId = "paymentUserTelephone";
    var isValidTelephone = 
        hasValue(componentId, "&#42;Invalid telephone number") &&
        hasNumericValue(componentId, "&#42;Invalid telephone number") &&
        hasPostivieNumericValue(componentId, "&#42;Invalid telephone number") && 
        hasExactLength(componentId, 8, "&#42;Telephone number must consist of exactly 8 numbers");
    UpdateFormSubmitButton('makePaymentButton');

    return isValidTelephone;
}

function paymentCardNumberHandler(){
    var componentId = "paymentCardNumber";
    hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
}

function paymentCardHolderHandler(){
    var componentId = "paymentCardHolder";
    hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
}

function paymentCardExpiryDateHandler(){
    var componentId = "paymentCardExpiryDate";
    hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
}

function paymentCardSecurityCodeHandler(){
    var componentId = "paymentCardSecurityCode";
    hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
}