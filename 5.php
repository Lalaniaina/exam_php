

<?php
$conn = oci_connect('utilisateur', 'mot_de_passe', 'localhost/nom_de_votre_base');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$queryCategories = "SELECT * FROM CATEGORIE";
$stmtCategories = oci_parse($conn, $queryCategories);
oci_execute($stmtCategories);

if (isset($_POST['categorie'])) {
    $categorieId = $_POST['categorie'];
    $queryProduits = "SELECT * FROM PRODUIT WHERE id_cat = :categorieId";
    $stmtProduits = oci_parse($conn, $queryProduits);
    oci_bind_by_name($stmtProduits, ":categorieId", $categorieId);
    oci_execute($stmtProduits);
} else {
    $row = oci_fetch_array($stmtCategories, OCI_ASSOC);
    $categorieId = $row['ID_CAT'];
    $queryProduits = "SELECT * FROM PRODUIT WHERE id_cat = :categorieId";
    $stmtProduits = oci_parse($conn, $queryProduits);
    oci_bind_by_name($stmtProduits, ":categorieId", $categorieId);
    oci_execute($stmtProduits);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection de produit</title>
</head>
<body>
    <div id="categories">
        <h3>Choisissez une catégorie :</h3>
        <form action="" method="post">
            <select name="categorie" onchange="this.form.submit()">
                <?php
                while ($row = oci_fetch_array($stmtCategories, OCI_ASSOC)) {
                    echo "<option value='" . $row['ID_CAT'] . "'>" . $row['DESIGNATION'] . "</option>";
                }
                ?>
            </select>
        </form>
    </div>
    
    <div id="produits">
        <h3>Produits de la catégorie sélectionnée :</h3>
        <form action="" method="post">
            <select name="produit">
                <?php
                while ($row = oci_fetch_array($stmtProduits, OCI_ASSOC)) {
                    echo "<option value='" . $row['ID_PRO'] . "'>" . $row['DESIGNATION'] . "</option>";
                }
                ?>
            </select>
        </form>
    </div>
</body>
</html>

<?php
oci_free_statement($stmtCategories);
oci_free_statement($stmtProduits);
oci_close($conn);
?>
