<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lost & Found</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="navbar">

        <div class="logo">
            Lost & Found
        </div>

        <nav class="nav-links">
            <a href="index.php" class="active">Hem</a>
            <a href="ads.php">Annonser</a>
            <a href="about.php">Om oss</a>
        </nav>

        <a href="create-ad.php" class="create-button">
            Skapa annons
        </a>

    </header>


    <main>

        <section class="hero">

            <h1>
                Hitta borttappade saker enklare
            </h1>

            <p>
                Sök bland förlorade och upphittade saker i ditt område.
            </p>

            <form class="search-box" action="ads.php" method="get">

    <input
        type="text"
        name="search"
        placeholder="Sök efter sak..."
    >

    <button type="submit">
        Sök
    </button>

</form>

        </section>


        <section class="filters">

    <select name="country">
        <option value="">Land</option>
        <option value="sweden">Sverige</option>
    </select>

    <select name="city">
        <option value="">Stad</option>
        <option value="trollhattan">Trollhättan</option>
        <option value="gothenburg">Göteborg</option>
    </select>

    <select name="category">
        <option value="">Kategori</option>
        <option value="electronics">Elektronik</option>
        <option value="keys">Nycklar</option>
        <option value="clothes">Kläder</option>
        <option value="bags">Väskor</option>
    </select>

    <button class="lost-filter">
        Förlorat
    </button>

    <button class="found-filter">
        Upphittat
    </button>

</section>


        <section class="ads-section">

            <h2>Senaste annonser</h2>

            <div class="ads-grid">

                <article class="ad-card">

                    <span class="status lost">
                        Förlorat
                    </span>

                    <h3>Svart ryggsäck</h3>

                    <p>Göteborg</p>

                    <p>
                        Svart ryggsäck borttappad nära centralstationen.
                    </p>

                    <a href="ad.php?id=1">
                        Visa annons
                    </a>

                </article>


                <article class="ad-card">

                    <span class="status found">
                        Upphittat
                    </span>

                    <h3>Nyckelknippa</h3>

                    <p>Trollhättan</p>

                    <p>
                        Nycklar hittades nära centrum.
                    </p>

                    <a href="ad.php?id=2">
                        Visa annons
                    </a>

                </article>

            </div>

        </section>

    </main>


    <footer>

        <p>
            © 2026 Lost & Found
        </p>

    </footer>

</body>

</html>








</body>
