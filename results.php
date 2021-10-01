
<?php include('header.php') ?>
    <main class="results">
        <?php
            $number = $_POST['number'];
            $cards = null;

            for ($i=1; $i <= 20; $i++) {
                $result = $number * $i;
                $cards .="<div class='card container d-flex'>
                            <div class='card-front m-auto'>
                                $number x $i
                            </div>
                            <div class='card-back m-auto'>
                                $result
                            </div>
                          </div>";
            }
            echo $cards;
        ?>
    </main>