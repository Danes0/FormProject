function clearForm() {
    // Get all input elements in the form
    var inputs = document.getElementsByTagName('input');
    
    // Loop through all input elements
    for (var i = 0; i < inputs.length; i++) {
        // Check if the input type is text, email, or number
        if (inputs[i].type === 'text' || inputs[i].type === 'email' || inputs[i].type === 'number') {
            // Clear the value of the input field
            inputs[i].value = '';
        }
    }
}

