<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 15px 0;
}

header h1 {
    margin: 0;
    font-size: 2em;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.hero {
    background-color: #f4f4f4;
    padding: 50px 0;
    text-align: center;
}

.hero h2 {
    margin-top: 0;
    font-size: 2.5em;
}

.categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.category {
    flex: 1 1 calc(33.333% - 20px);
    box-sizing: border-box;
    margin: 10px;
    text-align: center;
    transition: transform 0.2s;
}

.category img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

.category h3 {
    margin: 10px 0 0;
}

.category:hover {
    transform: scale(1.05);
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}

footer p {
    margin: 0;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Toko Online</h1>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Jelajahi Kategori Produk Kami</h2>
                <p>Temukan produk terbaik dari berbagai kategori yang kami tawarkan.</p>
            </div>
        </section>

        <section class="categories">
            <div class="container">
                <div class="category">
                    <img src="path/to/pakuy.jpg" alt="Kategori 1">
                    <h3>Kategori 1</h3>
                </div>
                <div class="category">
                    <img src="path/to/image2.jpg" alt="Kategori 2">
                    <h3>Kategori 2</h3>
                </div>
                <div class="category">
                    <img src="path/to/image3.jpg" alt="Kategori 3">
                    <h3>Kategori 3</h3>
                </div>
                <div class="category">
                    <img src="path/to/image4.jpg" alt="Kategori 4">
                    <h3>Kategori 4</h3>
                </div>
                <div class="category">
                    <img src="path/to/image5.jpg" alt="Kategori 5">
                    <h3>Kategori 5</h3>
                </div>
                <div class="category">
                    <img src="path/to/image6.jpg" alt="Kategori 6">
                    <h3>Kategori 6</h3>
                </div>
                <!-- Tambahkan kategori lain sesuai kebutuhan -->
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Toko Online. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
