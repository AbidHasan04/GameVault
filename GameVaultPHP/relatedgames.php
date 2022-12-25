<div class="RelatedGames">
        <p class="RelatedGameTitle">Related Games</p>



    <div href="#" class="RelatedGameDetails" style ="vertical-align:top; border-style:none">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 8;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">

        <form action="GVGameDetailsPage.php" method="post" style = " width: 100px; height: 45px;"> <input style="background-color:black; color:aliceblue;" name="nam1" type="submit" value="
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 8;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>"></form>

        <p class="RelatedPrice">TK 
            <?php $sql = "SELECT Price FROM product WHERE ProductID = 8;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?>
        </p>   
    </div>
    <div href="#" class="RelatedGameDetails"style ="vertical-align:top; border-style:none">

        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
       <form action="GVGameDetailsPage.php" method="post" style = " width: 100px; height: 45px;"> <input style="background-color:black; color:aliceblue" name="nam1" type="submit" value="
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>"></form>
        <p class="RelatedPrice">TK 
            <?php $sql = "SELECT Price FROM product WHERE ProductID = 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
    </div>
    <div href="#" class="RelatedGameDetails"style ="vertical-align:top; border-style:none">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 2;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <form action="GVGameDetailsPage.php" method="post" style = " width: 100px; height: 45px;"> <input style="background-color:black; color:aliceblue;" name="nam1" type="submit"  value="
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 2;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>"></form>
        <p class="RelatedPrice">TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 2;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>
    <div href="#" class="RelatedGameDetails"style ="vertical-align:top; border-style:none">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 3;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <form action="GVGameDetailsPage.php" method="post" style = " width: 100px; height: 45px;"> <input style="background-color:black; color:aliceblue" name="nam1" type="submit" value="
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 3;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>"></form>
        <p class="RelatedPrice"> TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 3;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>
    <div href="#" class="RelatedGameDetails"style ="vertical-align:top; border-style:none">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 5;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <form action="GVGameDetailsPage.php" method="post" style = " width: 100px; height: 45px;"> <input style="background-color:black; color:aliceblue" name="nam1" type="submit"  value="
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 5;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>"></form>
        <p class="RelatedPrice">TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 5;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>
    <div href="#" class="RelatedGameDetails"style ="vertical-align:top; border-style:none">
        <img src=" <?php $sql = "SELECT ImageLink FROM product WHERE ProductID = 12;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" class="RelatedImg">
        <form action="GVGameDetailsPage.php" method="post" style = " width: 100px; height: 45px;"> <input style="background-color:black; color:aliceblue" name="nam1" type="submit" value="
            
            <?php $sql = "SELECT ProdName FROM product WHERE ProductID = 12;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?>"></form>
        <p class="RelatedPrice">TK <?php $sql = "SELECT Price FROM product WHERE ProductID = 12";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
        
    </div>

    </div>