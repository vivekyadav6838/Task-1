document.getElementById('accessoryForm').addEventListener('submit', function (event) {
    // Validate email format
    const email = document.getElementById('email').value;
    if (!isValidEmail(email)) {
        alert('Please enter a valid email address.');
        event.preventDefault();
        return;
    }

    // Validate phone number format
    const phoneNumber = document.getElementById('phoneNumber').value;
    if (!isValidPhoneNumber(phoneNumber)) {
        alert('Please enter a valid phone number.');
        event.preventDefault();
        return;
    }
});

// Email validation function (you can use a more robust regex)
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// Phone number validation function (you can customize based on your requirements)
function isValidPhoneNumber(phoneNumber) {
    return /^\d{10}$/.test(phoneNumber);
}
