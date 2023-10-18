let button = document.getElementById("regButton");
button.onclick = dataValidation;

function dataValidation() {
    let firstName = document.getElementById("firstName").value.trim();
    let lastName = document.getElementById("lastName").value.trim();
    let middleName = document.getElementById("middleName").value.trim();
    let login = document.getElementById("login").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirmPassword = document.getElementById("passwordConfirm").value.trim();

    if (password != confirmPassword) {
        errorLabel("Пароли не совпадают");
    }
    else if (firstName == "" || lastName == "" || middleName == "" || login == "" || password == "" || confirmPassword == "") {
        errorLabel("Заполните все поля");
    }
    else {
        document.getElementById("submitButton").click();
    }
}

function errorLabel(reason) {
    if (document.getElementById("errorLabel") != null) {
        document.getElementById("errorLabel").remove();
    }

    let label = document.createElement("label");
    label.id = "errorLabel";
    label.innerHTML = `${reason}`;
    label.classList.add("errorLabel");
    document.getElementById("regButton").parentNode.appendChild(label);
}