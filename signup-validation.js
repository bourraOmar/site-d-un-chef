
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  
  const regex = {
      name: /^[a-zA-Z\s]{3,30}$/, 
      email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, 
      password: /^[A-Za-z\d@$!%*?&]{8,}$/  
  };

  form.addEventListener('submit', function(e) {
      const firstName = document.getElementById('first-name').value;
      const lastName = document.getElementById('last-name').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (!regex.name.test(firstName)) {
          e.preventDefault();
          alert('First name should contain only letters and be 3-30 characters long');
          return;
      }

      if (!regex.name.test(lastName)) {
          e.preventDefault();
          alert('Last name should contain only letters and be 3-30 characters long');
          return;
      }

      if (!regex.email.test(email)) {
          e.preventDefault();
          alert('Please enter a valid email address');
          return;
      }

      if (!regex.password.test(password)) {
          e.preventDefault();
          alert('Password must be at least 8 characters long');
          return;
      }
  });
});