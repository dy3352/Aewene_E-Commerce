<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aewene E-Commerce</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Fungsi untuk mengarahkan pengguna ke halaman utama
        function redirectToHome() {
            if (performance.navigation.type === 1) { // Cek jika refresh
                window.location.href = "index.php"; // Arahkan ke halaman index (home)
            }
        }

        // Jalankan fungsi saat halaman dimuat
        window.onload = redirectToHome;
    </script>
</head>
<body>
    <header>
        <h1 class="title">Aewene E-Commerce</h1>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="new_arrival.php">New Arrival</a></li>
                <li><a href="collections.php">Collections</a></li>
            </ul>
        </nav>
    </header>
    <div class="center-nav">
        <!-- Konten halaman utama Anda di sini -->
    </div>
</body>
</html>
