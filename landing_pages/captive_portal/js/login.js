// Function to handle login and redirect users based on their access code
function handleLogin(event) {
  event.preventDefault(); // Prevent the default form submission

  const accessCode = document.getElementById('password-field').value; // Get the access code entered by the user

  // Check the access code and redirect to respective landing page
  switch (accessCode) {
    case 'C0D3O': // Device Owner code
      window.location.href = 'deviceOwnerLandingPage.html';
      break;
    case 'C0D3A': // Admin User code
      window.location.href = 'adminLandingPage.html';
      break;
    case 'C0D3R': // Regular User code
      window.location.href = 'regular_user_landing_page.html';
      break;
    default:
      alert('Invalid access code. Please try again.');
  }
}
