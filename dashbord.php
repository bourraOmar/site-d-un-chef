<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>
<header class="fixed top-0 left-0 right-0 px-5 z-50 bg-white shadow-md">
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
          <a href="index.html" class="logo">
            <img src="img/klassy-logo.png" alt="Klassy Cafe Logo" class="h-12">
          </a>
          <nav>
            <ul class="flex space-x-6">
              <li class="cursor-pointer"><a href="profilAdmin.php">
                  <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                      alt="user photo">
                  </button>
                </a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
      
    <!-- Main Banner -->
    <div class="pt-24 bg-[url('img/reservation-bg.jpg')] bg-no-repeat bg-cover px-[15%]  h-[100%]">
      <div class="mx-auto p-4 py-20">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div class="text-center md:text-left">
            <h4 class="text-2xl  font-bold text-amber-600">KlassyCafe</h4>
            <h6 class="text-xl mb-4 text-white">THE BEST EXPERIENCE</h6>
            <h4 class="text-9xl font-bold text-amber-600">Dashboard</h4>
          </div>
        </div>
      </div>
    </div>

</body>
</html>