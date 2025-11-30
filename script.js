// Handle form submission
document.getElementById("feedbackForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission
  
    // Get the feedback from the textarea
    const feedback = document.getElementById("feedback").value;
  
    // Display a success message
    const message = document.getElementById("message");
    message.textContent = "Thank you for your feedback!";
    message.style.color = "#28a745"; // Green color for success
  
    // Clear the textarea
    document.getElementById("feedback").value = "";
  
    // Remove the success message after 3 seconds
    setTimeout(() => {
      message.textContent = ""; // Clear the message
    }, 3000); // 3000 milliseconds = 3 seconds
  });
  
  // Handle logout button click
  document.getElementById("logoutButton").addEventListener("click", function () {
    // Redirect to login.html
    window.location.href = "login.html";
  });