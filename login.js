document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    const phoneNumber = document.getElementById('phone').value;

    // Make an AJAX request to check if the user is registered
    fetch('check_user.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `phone=${phoneNumber}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.registered) {
            // Redirect to sl.html if the user is registered
            window.location.href = 'SL.html';
        } else {
            // Redirect to child.html if the user is not registered
            window.location.href = 'child.html';
        }
    })
    .catch(error => console.error('Error:', error));
});