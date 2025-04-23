<?php
$json_text = file_get_contents('./cds.json');

$cds = json_decode($json_text, true);
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
    </main>

</body>
</html>