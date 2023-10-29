const checkBox = document.getElementById('newAuthorCheck');
checkBox.addEventListener("change", () => {
    const author = document.getElementById('newAuthor');
    const firstName = document.getElementById('newFirstName');
    const lastName = document.getElementById('newLastName');
    const middleName = document.getElementById('newMiddleName');

    if (checkBox.checked) {
        author.style.display = 'none';
        firstName.style.display = 'inline-block'
        lastName.style.display = 'inline-block'
        middleName.style.display = 'inline-block'
        author.required = false
        firstName.required = true;
        lastName.required = true;
    } else {
        author.style.display = 'inline-block';
        firstName.style.display = 'none'
        lastName.style.display = 'none'
        middleName.style.display = 'none'
        author.required = true
        firstName.required = false;
        lastName.required = false;
    }
});