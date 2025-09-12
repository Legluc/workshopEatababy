<?php
// public/api/menu_preview.php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../../includes/db.php'; // doit définir $pdo (PDO)



function getImagePath(PDO $pdo, string $table, string $nameColumn, string $imgColumn, string $name): ?string
{
    $sql = "SELECT {$imgColumn} AS img FROM {$table} WHERE {$nameColumn} = :name LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':name' => $name]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row['img'] ?? null;
}

// Récup params (ex: ?bebe=bebe-japonaise&ingredient=farofa)
// Idéalement, utilise des slugs cohérents avec ta BDD (pas d'espaces ni accents).
$bebe       = isset($_GET['bebe']) ? trim($_GET['bebe']) : '';
$ingredient = isset($_GET['ingredient']) ? trim($_GET['ingredient']) : '';

$response = ['ok' => true, 'errors' => [], 'data' => []];

// On ne rend que ce qui est demandé
if ($bebe !== '') {

    $pdo = dbconnect();
    $imgBebe = getImagePath($pdo, 'bebe', 'nom_bebe', 'image_bebe', $bebe);
    if ($imgBebe) {
        $response['data']['bebe'] = $imgBebe;
    } else {
        $response['ok'] = false;
        $response['errors'][] = "Bébé introuvable: {$bebe}";
    }
}

if ($ingredient !== '') {
    $imgIng = getImagePath($pdo, 'ingredients', 'nom_ingredient', 'image_ingredients', $ingredient);
    if ($imgIng) {
        $response['data']['ingredient'] = $imgIng;
    } else {
        $response['ok'] = false;
        $response['errors'][] = "Ingrédient introuvable: {$ingredient}";
    }
}

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
