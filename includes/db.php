<?php

// Connexion à la base de données
try {
    $bdd = new PDO("mysql:host=localhost;dbname=Eatababy;charset=utf8", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ajouterReservation($bdd);
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}

/**
 * Récupère tous les bébés disponibles depuis la base de données
 * @return array Liste des bébés
 */
function getAllBebes() {
    global $pdo;
    try {
        $stmt = $pdo->query("SELECT * FROM bebe");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des bébés : " . $e->getMessage();
        return [];
    }
}

/**
 * Récupère tous les ingrédients disponibles depuis la base de données
 * @return array Liste des ingrédients
 */
function getAllIngredients() {
    global $pdo;
    try {
        $stmt = $pdo->query("SELECT * FROM ingredients");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des ingrédients : " . $e->getMessage();
        return [];
    }
}

/**
 * Enregistre une commande de bébé avec ses ingrédients
 * @param int $id_table Numéro de la table
 * @param int $id_bebe ID du bébé choisi
 * @param array $ingredients_ids IDs des ingrédients choisis
 * @return bool Succès ou échec de l'opération
 */
function saveBebe($id_table, $id_bebe, $ingredients_ids) {
    global $pdo;
    
    try {
        $pdo->beginTransaction();
        
        // Récupérer les informations du bébé
        $stmt = $pdo->prepare("SELECT * FROM bebe WHERE id_bebe = ?");
        $stmt->execute([$id_bebe]);
        $bebe_info = $stmt->fetch();
        
        if (!$bebe_info) {
            throw new Exception("Bébé non trouvé");
        }
        
        // Insérer la commande de bébé
        $stmt = $pdo->prepare("INSERT INTO bebe (id_table, nom_bebe, image_bebe) VALUES (?, ?, ?)");
        $stmt->execute([
            $id_table,
            $bebe_info['nom_bebe'],
            $bebe_info['image_bebe']
        ]);
        
        $new_bebe_id = $pdo->lastInsertId();
        
        // Ajouter les ingrédients à la commande
        foreach ($ingredients_ids as $ingredient_id) {
            $stmt = $pdo->prepare("INSERT INTO bebe_ingredients (id_bebe, id_ingredient) VALUES (?, ?)");
            $stmt->execute([$new_bebe_id, $ingredient_id]);
        }
        
        $pdo->commit();
        return true;
        
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "Erreur lors de l'enregistrement de la commande : " . $e->getMessage();
        return false;
    }
}
?>