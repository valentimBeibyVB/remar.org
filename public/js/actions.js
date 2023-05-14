'use strict'

const formRegisterUser = document.querySelector("#form-register-user");

formRegisterUser.addEventListener('submit', (e) => {
    e.preventDefault()
    const fd = new FormData(e.currentTarget)
    fetch('http://localhost/remar.ao/register-user.php', {
        method: 'POST',
        body: fd,
    })
        .then((response) => response.json())
        .then(data => {
            data.success
            alert(data.message)
        })
})

'use logar'
const formLogar = document.querySelector("#form-logar");

formRegisterUser.addEventListener('submit', (e) => {
    e.preventDefault()
    const fd = new FormData(e.currentTarget)
    fetch('http://localhost/remar.ao/logar.php', {
        method: 'POST',
        body: ld,
    })
        .then((response) => response.json())
        .then(data => {
            data.success
            alert(data.message)
        })
})

function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }