
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard - admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-inter text-gray-800">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href=""><img width="80px" src="../img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href="../Pages/dashboard.php" class="text-gray-700 hover:text-gray-900 transition mt-1">dashboard</a>
                
                <!-- after enter  -->
                <div class="">
                <a href="/Gestion-d-un-un-Chef-Cuisinier/profiles/profile_admin.php"><img width="30px" class="rounded-full" src="../img/onsiteheadshot.jpg" alt="profilephoto" title="See Profile"></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl pt-36">
        <header class="flex justify-between items-center mb-10 bg-white rounded-xl shadow-soft p-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                <?php if(isset($_SESSION['first_name'], $_SESSION['last_name'])){ ?>
                <p class="text-gray-500"><?php echo "Welcome, Chef ". $_SESSION['first_name'] ." ".  $_SESSION['last_name'] . ""  ?></p>
                <?php } ?>
            </div>
            <div class="flex items-center space-x-4">
            </div>
        </header>

        <div class="grid md:grid-cols-3 gap-6">
            
            <div class="bg-white rounded-xl shadow-soft p-6 space-y-4">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Reservations Statistics</h2>
                <div class="space-y-3">
                    <div class="flex justify-between items-center bg-blue-50 p-3 rounded-lg">
                        <span class="text-gray-600">Total Reservations</span>
                        <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full font-bold">
                        <?php 
                        include '../connection/conn.php';
                        $total_sql = "SELECT COUNT(*) AS res_count FROM reservation";
                        $total_result = mysqli_query($conn, $total_sql);
                        if($total_result){
                            while($row = mysqli_fetch_assoc($total_result)){
                                echo $row['res_count'];
                            }
                        }
                        ?>
                        </span>
                    </div>
                    <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg">
                        <span class="text-gray-600">Reservations Accepted</span>
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-full font-bold">
                        <?php 
                        include '../connection/conn.php';
                        $total_acc = "SELECT COUNT(*) AS res_count FROM reservation WHERE reservation.status = 'acceptee'";
                        $total_result_acc = mysqli_query($conn, $total_acc);
                        if($total_result){
                            while($row = mysqli_fetch_assoc($total_result_acc)){
                                echo $row['res_count'];
                            }
                        }
                        ?>
                        </span>
                    </div>
                    <div class="flex justify-between items-center bg-red-50 p-3 rounded-lg">
                        <span class="text-gray-600">Reservations Refused</span>
                        <span class="bg-red-200 text-red-800 px-3 py-1 rounded-full font-bold">
                        <?php 
                        include '../connection/conn.php';
                        $total_ref = "SELECT COUNT(*) AS res_count FROM reservation WHERE reservation.status = 'refusee'";
                        $total_result_ref = mysqli_query($conn, $total_ref);
                        if($total_result){
                            while($row = mysqli_fetch_assoc($total_result_ref)){
                                echo $row['res_count'];
                            }
                        }
                        ?>
                        </span>
                    </div>
                    <div class="flex justify-between items-center bg-yellow-50 p-3 rounded-lg">
                        <span class="text-gray-600">Pending Reservations</span>
                        <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full font-bold">
                        <?php 
                        include '../connection/conn.php';
                        $total_pen = "SELECT COUNT(*) AS res_count FROM reservation WHERE reservation.status = 'en_attente'";
                        $total_result_pen = mysqli_query($conn, $total_pen);
                        if($total_result){
                            while($row = mysqli_fetch_assoc($total_result_pen)){
                                echo $row['res_count'];
                            }
                        }
                        ?>
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
                            <?php 
                                include '../connection/conn.php';

                                $sql = "SELECT COUNT(*) AS total_clients FROM clients";

                                $result = mysqli_query($conn, $sql);

                                if($result){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo $row['total_clients']-1;
                                    }
                                }
                                

                                
                            ?>
                            </p>
                            <p class="text-sm text-gray-600">Total registered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gestion des Réservations -->
        <div class="mt-8 bg-white rounded-xl shadow-soft p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-700">Pending Reservations</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-600 uppercase">
                        <tr>
                            <th class="px-4 py-3 rounded-tl-lg">Client</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Hour</th>
                            <th class="px-4 py-3">Persone</th>
                            <th class="px-4 py-3 rounded-tr-lg">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        ?>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-4 py-4">Omar Bourra</td>
                            <td class="px-4 py-4">15 chi chhar 2024</td>
                            <td class="px-4 py-4">19:00</td>
                            <td class="px-4 py-4">2</td>
                            <td class="px-4 py-4">
                                <div class="flex space-x-2">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                                        Accept
                                    </button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                        Refuse
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




<!-- Add Menu Modal -->
<div id="addMenuModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 overflow-auto">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Add New Menu</h2>
            <button onclick="closeAddMenuModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form id="menuForm" enctype="multipart/form-data" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Menu Name</label>
                <input type="text" name="menu_name" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Description</label>
                <textarea name="menu_description" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Image</label>
                <input type="file" name="menu_Image"  
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Price</label>
                <input type="number" name="menu_price" step="0.01" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Select Plates (Max 3)</label>
                <div class="space-y-2">
                    <?php
       
                    include '../connection/conn.php';
                    $sql = "SELECT * FROM plats";
                    $result = mysqli_query($conn, $sql);
        
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<label class="inline-flex items-center">';
                        echo '<input type="checkbox" name="plates[]" value="' . $row['plate_id'] . '" class="form-checkbox">';
                        echo '<span class="ml-2">' . $row['title'] . '</span>';
                        echo '</label>';
                        }
                    } else {
                        echo "<p>No plats available.</p>";
                    }
                    ?>
                </div>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Date Added</label>
                <input type="date" name="date_added" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex space-x-4 pt-4">
                <button type="submit" name="Menu_submit" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors duration-200">
                    Submit
                </button>
                <button type="button" onclick="closeAddMenuModal()" 
                    class="flex-1 bg-gray-300 text-gray-700 py-2 rounded-lg hover:bg-gray-400 transition-colors duration-200">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Add Plate Modal -->
<div id="addPlateModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Add New Plate</h2>
            <button onclick="closeAddPlateModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form id="plateForm" enctype="multipart/form-data" method="POST" action="" class="space-y-4">
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Plate Name</label>
                <input type="text" name="plate_name" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Description</label>
                <textarea name="plate_description" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Price</label>
                <input type="number" name="plate_price" step="0.01" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Image</label>
                <input type="file" name="plate_image" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex space-x-4 pt-4">
                <button type="submit" name="plate_submit" class="flex-1 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors duration-200">
                    Submit
                </button>
                <button type="button" onclick="closeAddPlateModal()" 
                    class="flex-1 bg-gray-300 text-gray-700 py-2 rounded-lg hover:bg-gray-400 transition-colors duration-200">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>


<script>
    
    function openAddMenuModal() {
        document.getElementById('addMenuModal').classList.remove('hidden');
    }

    function closeAddMenuModal() {
        document.getElementById('addMenuModal').classList.add('hidden');
    }

    function openAddPlateModal() {
        document.getElementById('addPlateModal').classList.remove('hidden');
    }

    function closeAddPlateModal() {
        document.getElementById('addPlateModal').classList.add('hidden');
    }

    
    window.onclick = function(event) {
        const menuModal = document.getElementById('addMenuModal');
        const plateModal = document.getElementById('addPlateModal');
        
        if (event.target === menuModal) {
            closeAddMenuModal();
        }
        if (event.target === plateModal) {
            closeAddPlateModal();
        }
    }


</script>

<?php 
include '../connection/conn.php';


// for plates
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['plate_submit'])){
    $name = $_POST['plate_name'];
    $description = $_POST['plate_description'];
    $price = $_POST['plate_price'];

        
    if (isset($_FILES["plate_image"]) && !empty($_FILES["plate_image"]["name"])) {
        
        $uploadDir = "../uploads/";
        $newPathImage = $uploadDir . basename($_FILES["plate_image"]["name"]);
        $extension = pathinfo($newPathImage, PATHINFO_EXTENSION);
        $allowedExtensions = array('png', 'jpg', 'jpeg', 'gif', 'svg', 'webp');
        
        
        if (in_array(strtolower($extension), $allowedExtensions)) {
            move_uploaded_file($_FILES["plate_image"]["tmp_name"], $newPathImage);
            
            if (empty($name) || empty($description) || empty($newPathImage) || $price <= 0) {
                echo "<script>alert('Invalid input.');</script>";
                
                return;
            }
            
            $sql = "INSERT INTO plats (title, description, plats_image, price)
            VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssd" , $name, $description, $newPathImage, $price);
            if(mysqli_stmt_execute($stmt)){
                echo "<script>
                alert('plate created successfully!');
                 window.location.href = '../Pages/dashboard.php';
                </script>";
            }
    
        
}
}
}

?>

<?php
include '../connection/conn.php';

// For Menu
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Menu_submit'])) {
    
    $menuName = trim($_POST['menu_name']);
    $menuDescription = trim($_POST['menu_description']);
    $menuPrice = floatval($_POST['menu_price']);
    $dateAdded = $_POST['date_added'];
    $selectedPlates = $_POST['plates'] ?? [];
    
    if (isset($_FILES["menu_Image"]) && !empty($_FILES["menu_Image"]["name"])) {
        
        $uploadDir = "../uploads/";
        $newPathImage = $uploadDir . basename($_FILES["menu_Image"]["name"]);
        $extension = pathinfo($newPathImage, PATHINFO_EXTENSION);
        $allowedExtensions = array('png', 'jpg', 'jpeg', 'gif', 'svg', 'webp');

        
        if (in_array(strtolower($extension), $allowedExtensions)) {
            move_uploaded_file($_FILES["menu_Image"]["tmp_name"], $newPathImage);


            $sql = "INSERT INTO Menus (name, description, menu_image_url, price, date_added) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssds", $menuName, $menuDescription, $newPathImage, $menuPrice, $dateAdded);
            if(mysqli_stmt_execute($stmt)){
                echo "<script>
                alert('Menu created successfully!');
                 window.location.href = '../Pages/dashboard.php';
                </script>";
            }
            
        
            $menuId = mysqli_insert_id($conn);

            $insertPlatesSql = "INSERT INTO menu_plats (menu_id, plate_id) VALUES (?, ?)";
            $plateStmt = mysqli_prepare($conn, $insertPlatesSql);
            foreach ($selectedPlates as $plateId) {
                mysqli_stmt_bind_param($plateStmt, "ii", $menuId, $plateId);
                mysqli_stmt_execute($plateStmt);
            }
        
            
            
        }
    }else{
        echo "haskahda";
    }
}
?>


<?php } else {
    header('Location: ../index.php');
    exit();
}
?>



</body>
</html>