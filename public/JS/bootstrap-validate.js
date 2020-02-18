const Fname = document.getElementById('Fname')
const Lname = document.getElementById('Lname')
const Email = document.getElementById('Email')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
            let messages = []
            if (Fname.value === '' || Fname.value == null) {
                messages.push('Invalid input, please enter your First Name.')
            }

            if (Lname.value === '' || Lname.value == null) {
                messages.push('Invalid input, please enter your Last Name.')
            }

            if (Email.value === '' || Lname.value == null) {
                messages.push('Invalid input, please enter a valid Email adress.')
            }
            if (messages.length > 0) {
                e.preventDefault()
                errorElement.innerText = messages.join('')
            }
});