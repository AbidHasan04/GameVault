<div class="RelatedGames">
        <p class="RelatedGameTitle">Related Games</p>



    <div href="#" class="RelatedGameDetails">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 60;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">

        <a href="#" class="RelatedName">
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 60;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>
        </a>

        <p class="RelatedPrice">TK 
            <?php $sql = "SELECT Price FROM product WHERE ProductID = 60;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?>
        </p>   
    </div>
    <div href="#" class="RelatedGameDetails">

        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 67;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <a href="#" class="RelatedName">
        <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 67;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>
        </a>
        <p class="RelatedPrice">TK 
            <?php $sql = "SELECT Price FROM product WHERE ProductID = 67;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
    </div>
    <div href="#" class="RelatedGameDetails">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 50;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <a href="#" class="RelatedName"> <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 50;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?></a>
        <p class="RelatedPrice">TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 50;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>
    <div href="#" class="RelatedGameDetails">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 50;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <a href="#" class="RelatedName"> <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 50;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?></a>
        <p class="RelatedPrice"> TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 50;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>
    <div href="#" class="RelatedGameDetails">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 48;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <a href="#" class="RelatedName"> <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 48;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?></a>
        <p class="RelatedPrice">TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 48;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>
    <div href="#" class="RelatedGameDetails">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 59;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <a href="#" class="RelatedName"> <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 59;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?></a>
        <p class="RelatedPrice">TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 59";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>

    </div>