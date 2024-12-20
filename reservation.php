<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
    rel="stylesheet">

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

<body class="bg-gray-50 text-gray-800">
    

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
            <li class="cursor-pointer"><a href="signIn.php"><svg xmlns="http://www.w3.org/2000/svg"
                  height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                  <path
                    d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                </svg></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

    
    <section class="container mx-auto px-4 py-16 mt-20">
       
        <?php
        include 'connect.php';
        
        if(isset($_GET['id_menu'])) {
            $menu_id = $_GET['id_menu'];
            
            
            $menu_sql = "SELECT * FROM menu WHERE id_menu = $id_menu";
            $menu_result = mysqli_query($conn, $menu_sql);
            $menu = mysqli_fetch_assoc($menu_result);
            
            if($menu) {
                echo '<div class="mb-12">
                    <h1 class="text-3xl font-bold mb-4">' . $menu['name'] . '</h1>
                    <p class="text-gray-600 mb-4">' . $menu['description'] . '</p>
                    <div class="flex items-center gap-4">
                        <span class="text-2xl font-bold text-gray-900">' . $menu['price'] . '€</span>
                        <span class="text-gray-500"><i class="far fa-clock mr-2"></i>' . $menu['date_added'] . '</span>
                    </div>';
                
                if($menu['menu_image_url']) {
                    echo '<img src="' . $menu['menu_image_url'] . '" alt="' . $menu['name'] . '" class="w-full h-64 object-cover rounded-xl mt-6">';
                }
                echo '</div>';
                
        
                $plats_sql = "SELECT p.* FROM plats p 
                             INNER JOIN menu_plats mp ON p.plate_id = mp.plate_id 
                             WHERE mp.menu_id = $menu_id";
                $plats_result = mysqli_query($conn, $plats_sql);
                
                echo '<div class="grid md:grid-cols-2 gap-8">';
                
                while($plat = mysqli_fetch_assoc($plats_result)) {
                    echo '<div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-start gap-4">
                            <div class="w-1/3">';
                    if($plat['plats_image']) {
                        echo '<img src="' . $plat['plats_image'] . '" alt="' . $plat['title'] . '" class="w-full rounded-lg object-cover">';
                    } else {
                        echo '<img src="/api/placeholder/200/150" alt="' . $plat['title'] . '" class="w-full rounded-lg object-cover">';
                    }
                    echo '</div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold mb-2">' . $plat['title'] . '</h3>
                                <p class="text-gray-600 mb-4">' . $plat['description'] . '</p>
                                <span class="text-gray-900 font-semibold">' . $plat['price'] . '€</span>
                            </div>
                        </div>
                    </div>';
                }
                
                echo '</div>';
                
                
                if(isset($_SESSION['id_client']) && $_SESSION['id_client'] != 21 ) {
                    echo '<div class="mt-12 bg-white rounded-xl shadow-lg p-8 max-w-2xl mx-auto">
                        <h2 class="text-2xl font-bold mb-6">Make a Reservation</h2>
                        <form action="../Pages/process_reservation.php" method="POST">
                            <input type="hidden" name="menu_id" value="' . $menu_id . '">
                            <input type="hidden" name="client_id" value="' . $_SESSION['id_client'] . '">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 mb-2">Reservation Date</label>
                                    <input type="datetime-local" name="date_reservation" required 
                                           class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-gray-900">
                                </div>
                                <button type="submit" class="w-full bg-gray-900 text-white py-3 rounded-full hover:bg-gray-700 transition">
                                    Submit Reservation
                                </button>
                            </div>
                        </form>
                    </div>';
                } else {
                    echo '<div class="mt-12 text-center">
                        <p class="text-gray-600 mb-4">Please log in to make a reservation</p>
                        <a href="../Autentification pages/login.php" class="bg-gray-900 text-white px-8 py-3 rounded-full hover:bg-gray-700 transition">
                            Log in
                        </a>
                    </div>';
                }
            } else {
                echo '<p class="text-center text-gray-600">Menu not found.</p>';
            }
        } else {
            echo '<p class="text-center text-gray-600">No menu selected.</p>';
        }
        ?>
    </section>
    

  <!-- Footer -->
  <footer class="relative  bottom-0 left-0 bg-gray-900 text-white py-8">
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
    
</body>
</html>