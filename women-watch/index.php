<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's watch list</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <div class="navbar">

        <p class="brand-title">ROLEX</p>
        <a href="../Landing Page/index.html"><p class="home">HOME</p></a>
        <a href="#"><p class="best">Best Seller</p></a>
        <a href="../menwatchlist/index.html"><p class="men">Men</p></a>
        <a href="../women-watch/index.html"><p class="actived" class="women">Women</p></a>

    </div>

    <div class="content">
        <p class="page-title">Women's Watch list</p>

        <div class="watch-list">
            <table>
                <tr>
                    <td>
                    <?php
        $query = " select * from hero_page where id='1'";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <a href=""><div class="watch">
                <img src="../image/<?php echo $data['gambar']; ?>">
            </div></a>
            <p><?php echo $data['nama']; ?></p>
        <p ><?php echo $data['harga']; ?></p>
        <?php
        }
?>
                        <!-- <a href=""><div class="watch">
                            <img  src="../image/jam1.png">
                        </div></a>
                        <p>Rolex GMT-Master II</p>
                        <p>$30.000</p> -->
                    </td>
                    <td>
                        <div class="watch">
                            <img  src="">
                        </div>
                        <p>Sea Dweller</p>
                        <p>$17.000</p>
                        
                    </td>
                    <td>
                        <div class="watch">
                            <img  src="">
                        </div>
                        <p>Rolex Oyster Perpetual</p>
                        <p>$16.000</p>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="watch">
                            <img  src="">
                        </div>
                        <p>Rolex GMT-Master II</p>
                        <p>$30.000</p>
                    </td>
                    <td><div class="watch">
                        <img  src="">
                    </div>
                    <p>Rolex GMT-Master II</p>
                    <p>$30.000</p></td>
                    <td><div class="watch">
                        <img  src="">
                    </div>
                    <p>Rolex GMT-Master II</p>
                    <p>$30.000</p></td>
                </tr>
                <tr>
                    <td><div class="watch">
                        <img  src="">
                    </div>
                    <p>Rolex GMT-Master II</p>
                    <p>$30.000</p></td>
                    <td><div class="watch">
                        <img  src="">
                    </div>
                    <p>Rolex GMT-Master II</p>
                    <p>$30.000</p></td>
                    <td><div class="watch">
                        <img  src="">
                    </div>
                    <p>Rolex GMT-Master II</p>
                    <p>$30.000</p></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="footer">
        <p class="footer-title">ROLEX</p>
        <div class="contact">
            <ul class="footer1">
                <a href=""><li><i class="fa-brands fa-facebook-f"></i></li></a>
                <a href=""><li><i class="fa-brands fa-twitter"></i></li></a>
                <a href=""><li><i class="fa-brands fa-instagram"></i></li></a>
                <a href=""><li><i class="fa-regular fa-envelope"></i></li></a>
            </ul>
        </div>
       </div>
    </div>
</body>
</html>