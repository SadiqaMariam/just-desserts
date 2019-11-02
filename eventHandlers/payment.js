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
    hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
}

function paymentUserTelephoneHandler(){
    var componentId = "paymentUserTelephone";
    hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
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