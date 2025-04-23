<?php
require_once "./functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="bg-dark text-white text-center py-4 mb-4">
        <h1> La Mia Collezione di Dischi</h1>
    </header>

    <main class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php
            foreach($cds as $cd) {
                echo '
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="' . htmlspecialchars($cd['cover']) . '" class="card-img-top" alt="Copertina di ' . htmlspecialchars($cd['title']) . '">
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($cd['title']) . '</h5>
                            <p class="card-text mb-1"><strong>Artista:</strong> ' . htmlspecialchars($cd['artist']) . '</p>
                            <p class="card-text mb-1"><strong>Anno:</strong> ' . htmlspecialchars($cd['year']) . '</p>
                            <p class="card-text"><strong>Genere:</strong> ' . htmlspecialchars($cd['genre']) . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
        <hr>

    <h2>Aggiungi un nuovo disco</h2>
    <form action="server.php" method="POST" class="row g-3">
      <div class="col-md-6">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" required>
      </div>
      <div class="col-md-6">
        <label for="artist" class="form-label">Artista</label>
        <input type="text" class="form-control" name="artist" required>
      </div>
      <div class="col-md-6">
        <label for="cover" class="form-label">URL Copertina</label>
        <input type="url" class="form-control" name="cover" placeholder="https://..." required>
      </div>
      <div class="col-md-3">
        <label for="year" class="form-label">Anno</label>
        <input type="number" class="form-control" name="year" required>
      </div>
      <div class="col-md-3">
        <label for="genre" class="form-label">Genere</label>
        <input type="text" class="form-control" name="genre" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Aggiungi Disco</button>
      </div>
    </form>
    </main>

</body>
</html>