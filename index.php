<?php
include "db.php";

$requete_sql = "SELECT * FROM article";
$result = $conn->query($requete_sql);
$produits = [];
while ($row = $result->fetch_assoc()) {
    $produits[] = $row;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>IRT Network page d'achat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <h2>Choix des articles</h2>
        <select id="select-article">
            <option value="">-- Choisir un article --</option>
            <?php foreach ($produits as $produit): ?>
                <option value='<?php echo json_encode($produit); ?>'>
                    <?php echo htmlspecialchars($produit["nom_article"]); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <button onclick="ajouterArticle()">Valider</button>
    </div>

    <div class="liste-droite">
        <h2>Articles sélectionnés</h2>
        <table id="table-articles">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <div class="total">
            <p>Total achat : <span id="total-achat">0</span> €</p>
            <p>Total vente : <span id="total-vente">0</span> €</p>
            <p>Bénéfice théorique : <span id="total-profit">0</span> €</p>
        </div>
    </div>

    <script src='script.js'></script>
</body>
</html>
