

    <main class="results">
        <?php
            $number = $_POST['number'];
            $cards = null;

            for ($i=1; $i <= 100; $i++) {
                $result = $number * $i;
                $cards .="<div class='card'>
                            <div class='card-front'>
                                $number x $i
                            </div>
                            <div class='card-back'>
                                $result
                            </div>
                          </div>";
            }
            echo $cards;
        ?>
    </main>