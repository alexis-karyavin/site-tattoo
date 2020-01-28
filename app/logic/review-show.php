<?php

    
    if($result = $link->query("SELECT * FROM comments")) {

        if($result->num_rows == 0) {
            echo "<div class='reviews-item'>";
            echo "<h2>Пока отзывов нет</h2>";
            echo '</div>';
            //Убираем скролл у блока
            echo '<script>document.querySelector(".reviews-show").style.overflowY = "none";</script>';
            return;
        }

        while($row = $result->fetch_assoc()) {
            echo "<div class='reviews-item'>";
            echo "<h2>". $row['name'] ."</h2>";
            echo "<div class='review-star-show'>";
            for($i=0; $i < $row['count_stars']; $i++) {
                echo "<i class='far fa-star'></i>";
            }
            echo '</div>';
            echo "<p>". $row['text'] ."</p>";
            echo '</div>';
        }
    }
?>