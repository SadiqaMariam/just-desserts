function PaymentButtonClick(){
    
    paymentUserEmailHandler();
    paymentUserTelephoneHandler();
    paymentCardNumberFirstHandler();
    paymentCardNumberSecondHandler();
    paymentCardNumberThirdHandler();
    paymentCardNumberFourthHandler();
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

function paymentCardNumberFirstHandler()  { paymentCardNumberHandler("paymentCardNumberFirst"); }
function paymentCardNumberSecondHandler() { paymentCardNumberHandler("paymentCardNumberSecond"); }
function paymentCardNumberThirdHandler()  { paymentCardNumberHandler("paymentCardNumberThird"); }
function paymentCardNumberFourthHandler() { paymentCardNumberHandler("paymentCardNumberFourth"); }
function paymentCardNumberHandler(componentId){
    var isValidCardNumber = 
        hasValue(componentId, "&#42;Invalid card number") && 
        hasNumericValue(componentId, "&#42;Invalid card number") &&
        hasPostivieNumericValue(componentId, "&#42;Invalid card number") && 
        hasExactLength(componentId, 4, "&#42;Requires 4 numbers");
    UpdateFormSubmitButton('makePaymentButton');

    return isValidCardNumber;
}

function paymentCardHolderHandler(){
    var componentId = "paymentCardHolder";
    var hasName = hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');
    
    return hasName;
}

function paymentCardExpiryDateHandler(){
    var componentId = "paymentCardExpiryDate";
    var hasDate = hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('makePaymentButton');

    return hasDate;
}

function paymentCardSecurityCodeHandler(){
    var componentId = "paymentCardSecurityCode";
    var isValidSecurityCode =
        hasValue(componentId, "&#42;Invalid security code") && 
        hasNumericValue(componentId, "&#42;Invalid security code") &&
        hasPostivieNumericValue(componentId, "&#42;Invalid security code") && 
        hasExactLength(componentId, 3, "&#42;Requires 3 numbers");
    UpdateFormSubmitButton('makePaymentButton');

    return isValidSecurityCode;
}