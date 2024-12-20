
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  
  const regex = {
      email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,  
      password: /^[A-Za-z\d@$!%*?&]{8,}$/ 
  };

  form.addEventListener('submit', function(e) {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (!regex.email.test(email)) {
          e.preventDefault();
          alert('Please enter a valid email address');
          return;
      } 
  });
});