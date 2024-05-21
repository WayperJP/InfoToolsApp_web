<?php
// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "infotools"; // Nom de la base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête SQL pour récupérer les données du tableau "produit"
$sql = "SELECT * FROM produit";
$result = $conn->query($sql);

// Vérification s'il y a des résultats
if ($result->num_rows > 0) {
    // Affichage des données sous forme de tableau HTML
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prix</th>
    </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["numProduit"]."</td>";
        echo "<td>".$row["nomProduit"]."</td>";
        echo "<td>".$row["prixProduit"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 résultats";
}
// Fermer la connexion à la base de données
$conn->close();
?>