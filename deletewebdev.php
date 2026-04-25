<?php require_once 'core/dbConfig.php'; require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php $user = getApplicantByID($pdo, $_GET['id']); ?>
        <h1>Are you sure you want to delete <?php echo $user['first_name']; ?>?</h1>
        <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <input type="submit" name="deleteBtn" value="Yes, Delete">
            <a href="index.php">Cancel</a>
        </form>
    </div>
</body>
</html>