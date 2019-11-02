function feedbackButtonClick(){
    feedbackContactHandler();
    var isDisabled = UpdateFormSubmitButton('contactFeedbackButton');
    if(isDisabled){
        return;
    }

    var button = document.getElementById('contactFeedbackButton');
    button.type = 'submit';
    button.click();
}

function feedbackContactHandler(){
    var componentId = "contactFeedbackInput";
    var isValidFeedback = hasValue(componentId, "&#42;Required");
    UpdateFormSubmitButton('contactFeedbackButton');

    return isValidFeedback;
}