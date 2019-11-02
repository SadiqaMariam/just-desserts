function hasValue(componentId, errorMessage){
    var element = document.getElementById(componentId);
    var value = element.value;
    var hasValue = value !== null && value !== undefined && value !== '';
    hasValue 
        ? RemoveFormError(element, componentId)
        : AddFormError(element, componentId, errorMessage);

    return hasValue;
}

function hasNumericValue(componentId, errorMessage){
    var element = document.getElementById(componentId);
    var value = element.value;
    var hasNumericValue = Number.isInteger(parseFloat(value));
    hasNumericValue 
        ? RemoveFormError(element, componentId)
        : AddFormError(element, componentId, errorMessage);

    return hasNumericValue;
}

function hasPostivieNumericValue(componentId, errorMessage){
    var element = document.getElementById(componentId);
    var value = element.value;
    var hasPostivieNumericValue = parseInt(value) > 0;
    hasPostivieNumericValue 
        ? RemoveFormError(element, componentId)
        : AddFormError(element, componentId, errorMessage);

    return hasPostivieNumericValue;
}

function hasExactLength(componentId, exactLength, errorMessage){
    var element = document.getElementById(componentId);
    var value = element.value;
    var hasExactLength = value.length === exactLength;
    hasExactLength 
        ? RemoveFormError(element, componentId)
        : AddFormError(element, componentId, errorMessage);

    return hasExactLength;
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
    document.getElementById(componentId+"_error").innerHTML = errorMessage;
    element.className =  element.className + " formInputError";
}

function UpdateFormSubmitButton(buttonId){
    var isDisabled = false;  
    var buttonElement = document.getElementById(buttonId);
    var formErrors = document.getElementsByClassName('formInputError'); 
    if(formErrors && formErrors.length > 0){
        buttonElement.className = "formDisableButton";
        isDisabled = true;
    } else {
        buttonElement.className = "";
    }

    return isDisabled;
}