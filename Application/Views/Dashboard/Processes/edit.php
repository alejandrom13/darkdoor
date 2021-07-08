<?php 

include("../../../Database/db.php");

$SECRET_ID = $_GET['secretId'];
$query = "SELECT * FROM secrets WHERE ID = $SECRET_ID";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
?>


<form action="update.php?secretId=<?php echo $SECRET_ID ?>" method="POST" enctype="multipart/form-data">
            <div class="">
            <input type="date" name="DATE" value="<?php echo $row['DATE'] ?>" placeholder="Cuando ocurrió?">
            </div>

            <div class="">
            <input type="text" name="TITLE" value="<?php echo $row['TITLE'] ?>"  placeholder="Titulo">
            </div>

            <div class="">
                <textarea name="DESCRIPTION"  placeholder="Descripción"><?php echo $row['DESCRIPTION'] ?></textarea>
            </div>

            <div class="">
                <input type="text" name="VALUE" value="<?php echo $row['VALUE'] ?>"  placeholder="Valor del secreto">
            </div>

            <div class="">
                <input type="file" name="PHOTO"  placeholder="">
            </div>

            <button type="submit">Editar</button>
</form>
