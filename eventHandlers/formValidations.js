function hasValue(componentId, errorMessage){
    var element = document.getElementById(componentId);
    var value = element.value;
    var hasValue = value !== null && value !== undefined && value !== '';
    if (hasValue){
        RemoveFormError(element, componentId);
        return true;
    }

    AddFormError(element, componentId, errorMessage);
    return false;
}

function RemoveFormError(element, componentId){
    document.getElementById(componentId+"_error").innerHTML = "";
    classNames = element.className.split(" ");
    var finalClassnames = "";
    classNames.forEach(function(className) {
        if(className !== "formInputError"){
            finalClassnames += className;
            finalClassnames += " ";
        }
    });
    element.className = finalClassnames.trim();
}

function AddFormError(element, componentId, errorMessage){
    console.log(componentId);
    document.getElementById(componentId+"_error").innerHTML = errorMessage;
    element.className =  element.className + " formInputError";
}

function UpdateFormSubmitButton(buttonId){
    var buttonElement = document.getElementById(buttonId);
    var formErrors = document.getElementsByClassName('formInputError'); 
    if(formErrors && formErrors.length > 0){
        buttonElement.className = "formDisableButton";
    } else {
        buttonElement.className = "";
    }
}