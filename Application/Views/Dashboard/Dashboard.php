<?php 
session_start();
$ID = $_SESSION['ID'];
$EMAIL = $_SESSION['EMAIL'];
$NAME = $_SESSION['NAME'];

if(!isset($NAME)){
    header('Location: ../../index.php');
}else{
    include("../../Database/db.php");
}

include("Components/Menu.php");
?>

<link rel="stylesheet" href="../../assets/Dashboard/css/cards.css">

<link rel="stylesheet" href="../../assets/Dashboard/css/float-btn.css">

<link rel="stylesheet" href="../../assets/Dashboard/css/modal.css">

<a href="#" id="myBtn" class="float">
    <i class="bx bx-plus my-float"></i>
</a>

        
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>Creador de secretos</h1>

        <form action="Processes/create.php" method="POST" enctype="multipart/form-data">
            <div class="">
            <input type="date" name="DATE" placeholder="Cuando ocurrió?">
            </div>

            <div class="">
            <input type="text" name="TITLE" placeholder="Titulo">
            </div>

            <div class="">
                <textarea name="DESCRIPTION" placeholder="Descripción"></textarea>
            </div>

            <div class="">
                <input type="text" name="VALUE" placeholder="Valor del secreto">
            </div>

            <div class="">
                <input type="file" name="PHOTO" placeholder="">
            </div>

            <button type="submit">Crear</button>
        </form>


    </div>

</div>

<main>



    <h1 class="main-title">Secretos</h1>
    <section class="scrollable">
        

            <div class="container grid-container--fill">
<?php
    $query = "SELECT * FROM secrets WHERE USER_ID = $ID";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($result)){

    
?>

            <div class="post">
                <div class="header_post">
                    <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['PHOTO']) ?>" alt="">
                </div>

                <div class="body_post">
                    <div class="post_content">

                        <h1><?php echo $row['TITLE'] ?></h1>
                        <h6><?php echo $row['DATE'] ?></h6>
                        <p><?php echo $row['DESCRIPTION'] ?></p>

                        <div class="container_infos">
                            <div class="postedBy">
                                <span>PRECIO</span>
                                <?php echo $row['VALUE'] ?>
                            </div>

                            <div class="container_tags">
                                <span>CONTROLES</span>
                                <div class="tags">
                                    <ul>
                                        <li><a href="Processes/edit.php?secretId=<?php echo $row['ID'] ?>">EDITAR</a></li>
                                        <li><a  href="Processes/delete.php?secretId=<?php echo $row['ID'] ?>">ELIMINAR</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php } ?>
        </div>

    </section>

</main>







<?php include("Components/Footer.php"); ?>