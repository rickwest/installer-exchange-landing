// Bootstrap Javascript
import 'bootstrap/js/dist/modal';
import 'bootstrap/js/dist/collapse';

// Javascript to handle form submission
import axios from 'axios';

document.addEventListener('DOMContentLoaded', () => {
    axios.get('http://subease-landing.test/handles/installer/reservations/count')
        .then((response) => {
            document.getElementById('reservation_count').innerText = response.data.count;
        })
});

let emailInput = document.getElementById('user_handle_reservation_email');
let handleInput = document.getElementById('user_handle_reservation_handle');

document.getElementById('user_handle_reservation_submit').addEventListener('click', (event) => handleForm(event, false));
// document.getElementById('user_handle_reservation_contractor_submit').addEventListener('click', (event) => handleForm(event, true));

const handleForm = (event, contractor) => {
    event.preventDefault();
    emailInput.classList.remove('is-invalid');
    handleInput.classList.remove('is-invalid');

    axios
        .post('http://subease-landing.test/handles/installer/reservations', {
            email: emailInput.value,
            handle: handleInput.value,
            specialism: document.getElementById('user_handle_reservation_specialism').value,
            contractor: contractor
        })
        .then((response) => {
            document.getElementById('successfully-reserved_handle').innerText = response.data.handle;
            document.getElementById('reserve-your-handle-success').style.display = 'block';
            document.getElementById('reserve-your-handle').style.display = 'none';
        })
        .catch((error) => {
            if (error.response) {
                let data = error.response.data;
                Object.keys(data.errors.children).forEach((key) => {
                    if (data.errors.children[key].hasOwnProperty('errors')) {
                        document.getElementById('user_handle_reservation_' + key ).classList.add('is-invalid');
                        document.getElementById('user_handle_reservation_' + key + '_feedback').innerText = data.errors.children[key].errors[0]
                    }
                });
            }
        });
};

emailInput.addEventListener('change', () => {
    if (emailInput.classList.contains('is-invalid')) {
        emailInput.classList.remove('is-invalid')
    }
});

handleInput.addEventListener('change', () => {
    if (handleInput.classList.contains('is-invalid')) {
        handleInput.classList.remove('is-invalid')
    }
});