<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MY BBS.com</title>
        <link rel="stylesheet" media="screen and (max-width: 1180px)" href="phone.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css\index.css">
</head>

<body>
        <?php
          include 'navbar.php';
        ?>
        <div class="cover">
                <img src="img\redmedium.jpg" ;alt="Picture">
        </div>
        <section class="Moto">
                <p class="Line">Safe Baking</p>
                <p class="Line2">MY BBS BANKING</p>
        </section>
        <div id="services">
                <div class="box">
                        <img src="img\users.jpg" alt="All Users">
                        <h2 class="h-secondry center">View Users</h2>
                        <p class="center">
                        CLick on "View user" to see the Users list.</p>
                        <button><a href="User Transection.php">All Users</a></button>
                </div>
                <div class="box">
                        <img src="img\Transfer.jpg" alt="Bulk order">
                        <h2 class="h-secondry center">Balance Transfer</h2>
                        <p class="center">
                        CLick on "Balance tranfer" to transfer your balance.</p>
                        <button><a href="User Transection.php">Balance Transfer</a></button>
                </div>
                <div class="box">
                        <img src="img\history.jpg" alt="History">
                        <h2 class="h-secondry center">History</h2>
                        <p class="center">
                        CLick on "History" for Transections Details.</p>
                        <button><a href="transactionhistory.php">History</a></button>
                </div>
        </div>

        <footer>
                <p>&copy 2021. Made by Kashyap Singh Anuj <br> For the Project of The Sparks Foundation</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>