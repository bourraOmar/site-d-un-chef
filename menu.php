


<!DOCTYPE html>
  <html lang="en">

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

  <body class="font-poppins">
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
              <li class="cursor-pointer" href="signIn.php"><a href="signIn.php"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                    <path
                      d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                  </svg></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <!-- Main Banner -->
    <div class="pt-24 bg-[url('img/bg.jpg')] bg-no-repeat bg-cover px-[15%]  h-[100%]">
      <div class="container mx-auto p-4 py-20">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div class="text-center md:text-left">
            <h4 class="text-2xl font-bold text-amber-600">KlassyCafe</h4>
            <h6 class="text-xl mb-4">THE BEST EXPERIENCE</h6>
            <h4 class="text-9xl font-bold text-amber-600">Menu</h4>
          </div>
        </div>
      </div>
    </div>

    <!-- Menu Section -->
    <section id="reservation" class="py-16 bg-gray-100">
      <div class="grid grid-cols-3 gap-8 items-center mx-auto px-24">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-lg w-full" src="img/menu-item-01.jpg" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">tajin l7am bil bar9o9 </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-600 rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 ">
              Reserver
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-lg w-full" src="img/menu-item-03.jpg" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">bayd w maticha</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Reserver
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
          <a href="#">
            <img class="rounded-lg w-full" src="img/menu-item-02.jpg" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">bayd w maticha</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Reserver
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

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
  </body>

  </html>