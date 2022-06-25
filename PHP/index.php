<?php 
$reviews = file_get_contents('reviews.json');
$reviews = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $reviews), true );
  
        if(isset($_POST['filter_data']))
        {
            
        $PrioritizebyText = $_POST['prioritizetext'];
        $OrderByRating = $_POST['orderbyrating'];
        $Rating = $_POST['minimumrating'];
        $OrderByDate = $_POST['orderbydate'];

         if ($PrioritizebyText == "Yes") {

        foreach($reviews as $review=>$value) {

          if(in_array(explode(" ", $reviews[$review]["reviewFullText"]), $value)) {
             switch ($Rating) {
                case "$Rating == 5":
                    if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                       sort($reviews);
                       
                    }
                    else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                         
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                         
                    } 
                    break;
                    case "$Rating == 4":
                    if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                      rsort($reviews);
                       }
                    else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                       rsort($reviews);
                       
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    break;
                    case "$Rating == 3":
                    if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                      rsort($reviews);
                       }
                    else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                       rsort($reviews);
                       
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    
                    break;
                    case "$Rating == 2":
                    if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                      rsort($reviews);
                       }
                    else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                       rsort($reviews);
                       
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                
                    break;
                    case "$Rating == 1":
                    if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '1' and $reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                       rsort($reviews);
                        }
                    else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                       rsort($reviews);
                       
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                        if($reviews[$reviews_length]["rating"] == '1' and $reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '4' and  $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                        if($reviews[$reviews_length]["rating"] == '1' and $reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '4' and  $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                        sort($reviews);
                        
                    }
                    }
                    break;

             }
                
         

        }
        }  
        else 
        switch ($Rating) {
           case "$Rating == 5":
               if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                    }
               else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               
               break;
               case "$Rating == 4":
               if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                 rsort($reviews);
                  }
               else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                  rsort($reviews);
                  
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               
               break;
               case "$Rating == 3":
               if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                 rsort($reviews);
                  }
               else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                  rsort($reviews);
                  
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               break;
               case "$Rating == 2":
               if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                  rsort($reviews);
                  }
               else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                  rsort($reviews);
                  
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               
               break;
            case "$Rating == 1":
               if ($OrderByRating == "Highest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '1' and $reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                  rsort($reviews);
                   }
               else if ($OrderByRating == "Highest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                  rsort($reviews);
                  
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Oldest first") {
                   if($reviews[$reviews_length]["rating"] == '1' and $reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '4' and  $reviews[$reviews_length]["rating"] == '5' and max($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               else if ($OrderByRating == "Lowest first" and $OrderByDate=="Newest first") {
                   if($reviews[$reviews_length]["rating"] == '1' and $reviews[$reviews_length]["rating"] == '2' and $reviews[$reviews_length]["rating"] == '3' and $reviews[$reviews_length]["rating"] == '4' and $reviews[$reviews_length]["rating"] == '4' and  $reviews[$reviews_length]["rating"] == '5' and min($reviews[$reviews_length]["reviewCreatedOnDate"]))
                   sort($reviews);
                   
               }
               }
             print_r($reviews);
            }
               
            

?>


<!DOCTYPE html>
<html lang="=en">
<head>
    <meta charset="utf8">
    <style>
    #Filter_button {
        background-color: #1E90FF;
        width: 50px;
        height: 30px;
        border: none;
        color:white;
    }
    </style>
</head>
 
    <body>
<div class="Filter">
<h3>Filter Reviews</h3>
<form id="filter_body" action="index.php" method="post">
    <label for="orderbyrating">Order by rating:</label><br>
    <select id="orderbyrating" name="orderbyrating" style="width:200px; height:25px" >
        <option value="Highest first">Highest first</option>
        <option value="Lowest first">Lowest first</option>
    </select> <br>
    <label for="minimumrating">Minimum rating:</label> <br>
    <select id="minimumrating1" name="minimumrating" style="width:200px; height:25px">
        <option value="5" name="5">5</option>
        <option value="4" name="4">4</option>
        <option value="3" name="3">3</option>
        <option value="2" name="2">2</option>
        <option value="1" name="1">1</option>
    </select> <br>
    <label for="orderbydate">Order by date:</label><br>
    <select id="orderbydate" name="orderbydate" style="width:200px; height:25px">
        <option value="Newest First">Newest First</option>
        <option value="Oldest First">Oldest First</option>
    </select><br>
    <label for="prioritizebytext">Prioritize by text:</label><br>
    <select id="prioritizebytext" name="prioritizetext" style="width:200px; height:25px">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select><br><br>
    <button value="Filter" name="filter_data" id="Filter_button">Filter</button>
</form>


</div>
</body>
 

