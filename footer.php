<div class="box side">
       
            <h3>Search🔎  |   <a class="side" href="show_all.php">Show All</a></h3>
            
            <i>Type part of the title / author name if desired</i>
            
            <hr />
            
            <!-- Start of Title Search -->
    
            <form method="post" action="title_search.php" enctype="multipart/form-data" >
            
                <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />
                
                <input class="submit" type="submit" name="find_title" value="Search" />
                
            </form>
    
            <!-- End of Title Search -->
    
            <hr />
    
                        
            <!-- Start of author Search -->
    
            <form method="post" action="author_search.php" enctype="multipart/form-data" >
            
                <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />
                
                <input class="submit" type="submit" name="find_author" value="Search" />
                
            </form>
    
            <!-- End of author Search -->
            
            <hr />
            
    
            <!-- Start of genre Search -->
    
            <form method="post" action="genre_search.php" enctype="multipart/form-data" >
            
                <select name="genre" required>
                    <option value="" disabled selected>Genre...</option>
                    <?php 
                    
//                    $find_query=mysqli_query($dbconnect, $find_sql);
//                    $find_rs=mysqli_fetch_assoc($find_query);
                    
                    // retrieve unique values in genre column...
                    $genre_sql="SELECT DISTINCT `Genre`
                                FROM `2020_L1_Prac_Review`
                                ORDER BY Genre ASC";
                    $genre_query=mysqli_query($dbconnect, $genre_sql;
                    $gemre_rs=mysqli_fetch_assoc($find_query;
                    
                    do {
                    
                        ?>
                    
                    <option value="<?php echo $genre_rs['Genre']; ?>"><?php echo $genre_rs['Genre']; ?></option>
                    
                    <?php
                    
                    } // end of genre option retrieval
                    
                    while($genre_rs=mysqli_fetch_assoc($genre_query));
                                                 
                    ?>
                    
                    
         
                </select>
                
                <input class="submit" type="submit" name="find_genre" value="Search" />
                
            </form>
    
            <!-- End of genre Search -->       
    
            <hr />
    
            <!-- Start of ratings form -->
    
            <form method="post" action="rating_search2.php" enctype="multipart/form-data">
            
                <select class="half_width" name="amount">
                    
                    <option value="exactly" selected>Exactly...</option>
                    <option value="more">At least...</option>
                    <option value="less">At most...</option>
                    
                </select>
                
                <select class="half_width" name="stars">
                    <option value=1>&#9733;</option>
                    <option value=2>&#9733;&#9733;</option>
                    <option value=3>&#9733;&#9733;&#9733;</option>
                    <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>
                
                    <input type="submit" class="submit" name="find_rating" value="Search" />            
            </form>
    
            <!-- End of ratings form -->
    
            <hr />
       
        </div> <!-- / side bar -->

        <div class="box footer">
            
            CC Iszac Jarvis 2020
            
        </div>    <!-- / footer -->
   
    </div>  <!-- / wrapper  -->
   
</body>