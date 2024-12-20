
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

  <title>Restaurant Baldi</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
            'dancing': ['Dancing Script', 'cursive']
          }
        }
      }
    }
  </script>
</head>

<body class="font-poppins bg-gray-200">
  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 px-5 z-50 bg-white shadow-md">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-4">
        <a href="index.html" class="logo">
          <img src="img/klassy-logo.png" alt="Klassy Cafe Logo" class="h-12">
        </a>
        <nav>
          <ul class="flex space-x-6">
            <li class="cursor-pointer hover:text-amber-600 transition"><a href="index.php">Home</a></li>
            <li class="cursor-pointer hover:text-amber-600 transition"><a href="menu.php">Menu</a></li>
            <li class="cursor-pointer hover:text-amber-600 transition"><a href="contact.php">Contact Us</a></li>
            <li class="cursor-pointer" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
              </svg></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- Form log in -->
  <form class="bg-white mx-96 mt-44 my-24 p-24 rounded-lg shadow-md" method="POST">
    <h4 class="text-2xl font-bold mb-6">Log In</h4>
    <div class="grid md:grid-cols-1 gap-4">
      <label for="">Email</label>
      <input type="email" placeholder="Your Email Address" name="email" required
        class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-amber-600">
      <label for="">Password</label>
      <input type="password" placeholder="Password" name="password" required
        class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-amber-600">
    </div>
    <button type="submit"
      class="w-full mt-4 bg-amber-600 text-white py-3 rounded-lg hover:bg-amber-700 transition">
      Log In
    </button>
    <p class="text-center mt-4">Don't have an account? <a href="signUp.php" class="text-blue-500">Create account</a></p>
  </form>
  <?php
  include 'connect.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM client WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

   
    if (mysqli_num_rows($result) > 0) {
      $clients = mysqli_fetch_assoc($result);
      $_SESSION['client_id'] = $clients['id_client'];
      $_SESSION['last_name'] = $clients['name'];
      $_SESSION['first_name'] = $clients['prenom'];
      $_SESSION['email'] = $clients['email'];
      if ($clients['email'] === $email && password_verify($password, $clients['password'])){
        if($clients['id_client'] === 21){
          header("Location: dashbord.php");
        }else{
          header("Location: menu.php");
        }
        exit;
      }
    } else {
      echo "<script>alert('Email ou mot de passe incorrect.')</script>";
    }
  }

  ?>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="mx-auto px-4">
      <div class="grid md:grid-cols-2">
        <div class="flex justify-center">
          <a href="index.html">
            <img src="img/white-logo.png" alt="Klassy Cafe Logo" class="h-12">
          </a>
        </div>
        <div class="text-center md:text-right">
          <p>© Copyright Klassy Cafe Co.</p>
          <p>Design: TemplateMo</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="login-validation.js"></script>
</body>

</html>