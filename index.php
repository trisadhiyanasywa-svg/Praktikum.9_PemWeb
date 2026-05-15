<?php
session_start(); 
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include_once "includes/header.php";
include_once "includes/menu.php";
?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3">
            <?php include_once "includes/sidebar.php"; ?>
        </div>
        <div class="col-md-9">
            <?php include_once "includes/main.php"; ?>
        </div>
    </div>
</div>

<?php
include_once "includes/footer.php"; // Di sini JS Bootstrap akan terpanggil
?>