// Get references to the HTML elements
const registrationForm = document.getElementById("registrationForm");
const firstNameInput = document.getElementById("firstName");
const lastNameInput = document.getElementById("lastName");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
//const togglePassword = document.getElementById("togglePassword");
const message = document.getElementById("message");


// Function to toggle password visibility
/*function togglePasswordVisibility() {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        togglePassword.textContent = "Hide Password";
    } else {
        passwordInput.type = "password";
        togglePassword.textContent = "Show Password";
    }
}
*/
// // Add click event listener to toggle password visibility
// togglePassword.addEventListener("click", function() {
//     togglePasswordVisibility();
// });

// Add submit event listener to the form
registrationForm.addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent the form from submitting by default

    // Validate form input
    const firstName = firstNameInput.value.trim();
    const lastName = lastNameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();

    if (!firstName || !lastName || !email || !password) {
    //if (password===NULL) {
        message.textContent = "Please fill out all fields.";
        message.style.color = "red";
        message.style.display = "block";
    } else if (password.length < 8) {
        message.textContent = "Password must be at least 8 characters.";
        message.style.color = "red";
        message.style.display = "block";
    } else {
        registrationForm.submit();//save this for php later
        //message.textContent = "Registration successful!";
        //message.style.color = "green";
        //message.style.display = "block";
    }
});

// Add a mouseover event listener to the email input
emailInput.addEventListener("mouseover", function() {
    emailInput.style.backgroundColor = "red"; // Change the text color to red
});

// Add a mouseout event listener to reset the color when the mouse leaves the input
emailInput.addEventListener("mouseout", function() {
    emailInput.style.backgroundColor = ""; // Reset to the default color
});