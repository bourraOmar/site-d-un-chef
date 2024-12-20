


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-inter text-gray-800">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="Gestion-d-un-un-Chef-Cuisinier/index.php"><img width="80px" src="../img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href='dashbord.php' class="text-gray-700 hover:text-gray-900 transition mt-1">dashboard</a>
                <!-- sign up - log in  -->
                <div class="relative left-7 hidden">
                <a href="Autentification pages/login.php" class="bg-gray-900 text-white pr-12 px-4 py-2 rounded-full hover:bg-gray-700 transition">Sign up</a>
                <a href="Autentification pages/login.php" class="bg-gray-400 text-white px-4 py-2 rounded-full hover:bg-gray-500 transition relative right-12">Log in</a>
                </div>
                <!-- after enter  -->
                <div class="">
                <a href=""><img width="30px" class="rounded-full" src="../img/onsiteheadshot.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-24">

        <div class="container mx-auto max-w-4xl px-4 py-8">
        
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            
            <div class="bg-gray-100 p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">My Profile</h2>
                <div class="space-x-3 flex">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit Profile
                    </button>
                    
                    <form action="logOut.php" method="POST">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                Disconnect
                            </button>
                    </form>
                    </a>
                </div>
            </div>

            
            <div class="h-48 bg-cover bg-center" style="background-image: url('img/slide-02.jpg')">
                
            </div>

           
            <div class="px-6 py-4 relative">
                
                <img width="150px" src="img/chefs-03.jpg" alt="Chef Profil" class="absolute bottom-36  left-1/2 transform -translate-x-1/2 rounded-full border-4 border-white shadow-lg">
                

                <div class="text-center pt-24">
                <?php if(isset($_SESSION['name'], $_SESSION['prenom'])) { ?>
                    <h1 class="text-3xl font-bold text-gray-800">
                        <?php echo"Chef ". $_SESSION['name'] . " " . $_SESSION['prenom'] ."" ?>
                    </h1>
                <?php } ?>
                    <p class="text-gray-600 mt-2">Star Chef | Gourmet Cuisine</p>
                    <div class="mt-2 text-gray-500">
                        <span>Paris, France</span>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            
            <div class="bg-white shadow-lg rounded-lg p-6 md:col-span-2 relative">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">About Me</h2>
                <p class="text-gray-600">
                Chef Mouha is a culinary artist with a passion for creating innovative, mouth-watering dishes that highlight the freshest, locally-sourced ingredients. With over 20 years of experience in renowned kitchens around the world, Chef Mouha has honed their craft in a diverse array of cuisines, blending traditional techniques with modern flair.
                </p>
            </div>

            
            <div class="bg-white shadow-lg rounded-lg p-6 relative">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Expertise</h2>
                <p> <span class="font-bold">Cooking Techniques:</span> Expertise in various cooking techniques such as grilling, roasting, sautéing, braising, poaching, and baking. <br>
                    <span class="font-bold">Knife Skills:</span> Proficiency in chopping, dicing, julienning, and filleting. <br>
                    <span class="font-bold">Sauce Making:</span> Knowledge of creating sauces (béchamel, hollandaise, demi-glace, etc.) and their variations. <br>
                    <span class="font-bold">Plating and Presentation:</span> Artistic presentation of dishes to enhance their visual appeal. <br></p> 
            </div>
        </div>
    </div>

?>
</body>
</html>
