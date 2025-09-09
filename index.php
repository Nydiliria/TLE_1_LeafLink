<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/css/style.css">
    <title>Homepage</title>
</head>
<body>
    
    <nav> <!-- add burger menu and profile -->
        <div class="burger" onclick="document.querySelector('.nav-links').classList.toggle('show')">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="nav-links">
            <a href="include/pages/new_plant.php">New Plant</a>
            <a href="include/pages/plant_archive.php">Plant Archive</a>
            <a href="include/pages/city_garden.php">City Garden</a>
        </div>
    </nav>
    
    <header>
    <div class="info-box">
        <h3>Plant of the Day</h3>
        <p>Monstera Deliciosa</p>
    </div>
    <div class="info-box">
        <h3>Tip</h3>
        <p>Water your plants early in the morning.</p>
    </div>
    <div class="info-box">
        <h3>Weather</h3>
        <p>Sunny, 22°C</p>
    </div>
    </header>
    
    <main> 
    <section class="fav-plants">
        <div class="fav-box">
            <h4>Alice's Favorite</h4>
            <p>Fiddle Leaf Fig</p>
        </div>
        <div class="fav-box">
            <h4>Bob's Favorite</h4>
            <p>Snake Plant</p>
        </div>
        <div class="fav-box">
            <h4>Carol's Favorite</h4>
            <p>Pothos</p>
        </div>
    </section>

    <section> <!-- Add news and tips -->

    </section>
</main>

    <footer> <!-- Add logo -->

    </footer>
    
</body>
</html>