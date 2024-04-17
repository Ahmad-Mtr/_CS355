document.getElementById('authForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Here, you can perform authentication logic, for demonstration purpose let's just check if username and password are not empty
    if (username.trim() === '' || password.trim() === '') {
        document.getElementById('message').innerText = 'Please enter username and password.';
    } else {
        // Here, you can send a request to your server for authentication
        // For demonstration purpose, let's just show a success message
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerText = 'Login successful!';
    }
});
