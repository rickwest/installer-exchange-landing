// Bootstrap Javascript
import 'bootstrap/js/dist/modal';

// Javascript to handle form submission
import axios from 'axios';

document.getElementById('user_handle_reservation_submit').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('user_handle_reservation_email').classList.remove('is-invalid');
    document.getElementById('user_handle_reservation_handle').classList.remove('is-invalid');
    document.getElementById('user_handle_reservation_email_feedback').innerText = '';
    document.getElementById('user_handle_reservation_handle_feedback').innerText = '';


    axios.post('/users/handles/reservations', {
        email: document.getElementById('user_handle_reservation_email').value,
        handle: document.getElementById('user_handle_reservation_handle').value,
        trade: document.getElementById('user_handle_reservation_trade').value
    })
        .then(function (response) {
            document.getElementById('successfully-reserved_handle').innerText = response.data.handle;
            document.getElementById('reserve-your-handle-success').style.display = 'block';
            document.getElementById('reserve-your-handle').style.display = 'none';
        })
        .catch(function (error) {
            if (error.response) {
                let data = error.response.data;
                Object.keys(data.errors.children).forEach(function (key) {
                    if (data.errors.children[key].hasOwnProperty('errors')) {
                        document.getElementById('user_handle_reservation_' + key ).classList.add('is-invalid');
                        document.getElementById('user_handle_reservation_' + key + '_feedback').innerText = data.errors.children[key].errors[0]
                    }
                });
            }
        });
});