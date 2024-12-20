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

    <!-- header -->
    <div class="relative mt-4 mx-8 grid md:grid-cols-3 gap-6">
            
            <div class="bg-white rounded-xl shadow-soft p-6 space-y-4">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Reservations Statistics</h2>
                <div class="space-y-3">
                    <div class="flex justify-between items-center bg-blue-50 p-3 rounded-lg">
                        <span class="text-gray-600">Total Reservations</span>
                        <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full font-bold">
                        1
                        </span>
                    </div>
                    <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg">
                        <span class="text-gray-600">Reservations Accepted</span>
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-full font-bold">
                        1
                        </span>
                    </div>
                    <div class="flex justify-between items-center bg-red-50 p-3 rounded-lg">
                        <span class="text-gray-600">Reservations Refused</span>
                        <span class="bg-red-200 text-red-800 px-3 py-1 rounded-full font-bold">
                        1
                        </span>
                    </div>
                    <div class="flex justify-between items-center bg-yellow-50 p-3 rounded-lg">
                        <span class="text-gray-600">Pending Reservations</span>
                        <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full font-bold">
                        1
                        </span>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-soft p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Remote</h2>
                <div class="flex flex-col gap-4 items-start">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600" onclick="openAddPlateModal()">
                        ADD PLATS
                    </button>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600" onclick="openAddMenuModal()">
                        ADD MENU
                    </button>
                </div>
            </div>

            <!-- Clients -->
            <div class="bg-white rounded-xl shadow-soft p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Clients</h2>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-100 text-purple-800 p-4 rounded-lg">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-800">
                            8
                            </p>
                            <p class="text-sm text-gray-600">Total registered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
      
      <!-- Gestion des Réservations -->

    <div class="relative overflow-x-auto m-7 shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right bg-amber-500">
        <thead class="text-base text-white uppercase bg-amber-500">
          <tr>
            <th scope="col" class="px-6 py-5">
              Client name
            </th>
            <th scope="col" class="text-center px-6 py-5">
              Date
            </th>
            <th scope="col" class="text-center px-6 py-5">
              Hour
            </th>
            <th scope="col" class="text-center px-6 py-5">
              Persone
            </th>
            <th scope="col" class="text-center px-6 py-5">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class=" bg-gray-50 border-b">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
              Ahmed lucas
            </th>
            <td class="text-center px-6 py-4">
              15/11/2025
            </td>
            <td class="text-center px-6 py-4">
              30:80
            </td>
            <td class="text-center px-6 py-4">
              2999
            </td>
            <td class="flex justify-center px-6 py-4 gap-2">
              <a href="#" class="font-medium text-white rounded-full px-1 bg-blue-600 hover:underline">Accepte</a>
              <a href="#" class="font-medium text-white rounded-full px-1 bg-red-600 hover:underline">Refuse</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <!-- Footer -->
    <footer class="relative  bottom-0 left-0 w-full bg-gray-900 text-white py-8">
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