const checkBox = document.getElementById('newAuthorCheck');
checkBox.addEventListener("change", () => {
    const author = document.getElementById('author');
    const firstName = document.getElementById('firstName');
    const lastName = document.getElementById('lastName');
    const middleName = document.getElementById('middleName');

    if (checkBox.checked) {
        author.style.display = 'none';
        firstName.style.display = 'inline-block'
        lastName.style.display = 'inline-block'
        middleName.style.display = 'inline-block'
    } else {
        author.style.display = 'inline-block';
        firstName.style.display = 'none'
        lastName.style.display = 'none'
        middleName.style.display = 'none'
    }
});