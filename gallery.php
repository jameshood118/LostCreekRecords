<?php 
include("header.php"); ?>

<div id="left"><img src="images/tim5.png" class="img" /></div>
<div id="main" class="clearfix">
<div class="photoBox">
<?php

// define number of columns in table
define('COLS', 6);
// set maximum number of records per page
define('SHOWMAX', 6);
// create a connection to MySQL

include("db.php"); 

$table = "gallery" ;

$getTotal = 'SELECT COUNT(*) FROM gallery WHERE view="yes"';
// submit query and store result as $totalPix

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

$total = mysql_query($getTotal);
$row = mysql_fetch_row($total);
$totalPix = $row[0];
// set the current page
$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 0;
// calculate the start row of the subset
$startRow = $curPage * SHOWMAX;
// prepare SQL to retrieve subset of image details
$sql = "SELECT * FROM gallery WHERE view='yes' ORDER BY image_id ASC LIMIT $startRow,".SHOWMAX;
// submit the query (MySQL original)
$result = mysql_query($sql) or die(mysql_error());
// extract the first record as an array
$row = mysql_fetch_assoc($result);
// get the name for the main image
if (isset($_GET['image'])) {
  $mainImage = $_GET['image'];
  }
else {
  $mainImage = $row['name'];
  }
// get the dimensions of the main image
$imageSize = getimagesize('images/gallery/'.$mainImage);
?>
Displaying <?php echo $startRow+1;
		  if ($startRow+1 < $totalPix) {
		    echo ' to ';
			if ($startRow+SHOWMAX < $totalPix) {
			  echo $startRow+SHOWMAX;
			  }
			else {
			  echo $totalPix;
			  }
			}
		  echo " of $totalPix";
		  ?>
          <table id="thumbs">
                <tr>
                    <!--This row needs to be repeated-->
                    <?php
					// initialize cell counter outside loop
					$pos = 0;
		            do {
					  // set caption if thumbnail is same as main image
		              if ($row['name'] == $mainImage) {
		                $caption = $row['caption'];
			            }
		             ?>
                    <td><center><a href="<?php echo $_SERVER['PHP_SELF']; ?>?image=<?php echo $row['name']; ?>&amp;curPage=<?php echo $curPage; ?>"><img src="images/gallery/thumbs/<?php echo $row['name']; ?>" alt="<?php echo $row['caption']; ?>" width="80" height="54" /></a></center></td>
                    <?php
		  			$row = mysql_fetch_assoc($result);
					// increment counter after next row extracted
		 			$pos++;
		  			// if at end of row and records remain, insert tags
					if ($pos%COLS === 0 && is_array($row)) {
		    		  echo '</tr><tr>';
					  }
		  			} while($row);  // end of loop
		  			// new loop to fill in final row
					while ($pos%COLS) {
		    		  echo '<td>&nbsp;</td>';
					  $pos++;
				      }
		 			 ?>
                </tr>
                <!-- Navigation link needs to go here -->
                <tr>
                    <td><?php
				    // create a back link if current page greater than 0
				    if ($curPage > 0) {
					  echo '<a href="'.$_SERVER['PHP_SELF'].'?curPage='.($curPage-1).'"><img src="images/backward.png" width="95%"></a>';
					  }
				    // otherwise leave the cell empty
				    else {
					  echo '&nbsp;';
					  }
				    ?>
                    </td>
                    <?php
				    // pad the final row with empty cells if more than 2 columns
				    if (COLS-2 > 0) {
					  for ($i = 0; $i < COLS-2; $i++) {
					    echo '<td>&nbsp;</td>';
					    }
					  }
				    ?>
                    <td>
					<?php
				    // create a forwards link if more records exist
				    if ($startRow+SHOWMAX < $totalPix) {
					  echo '<a href="'.$_SERVER['PHP_SELF'].'?curPage='.($curPage+1).'"><img src="images/forward.png" width="95%"></a>';
					  }
				    // otherwise leave the cell empty
				    else {
					  echo '&nbsp;';
					  }
				    ?>
                    </td>
                </tr>
            </table>
            <div id="main_image">
   <p><center><a href="javascript:void(0)"
onclick="window.open('images/gallery/<?php echo $mainImage; ?>', 'dummyname', 'height=600,width=600', false)"><img src="images/gallery/<?php echo $mainImage; ?>" alt="<?php echo $caption; ?>" width="400"/></a></p>
                <p><?php echo $caption; ?></center></p>
            </div>
        </div>





<div id="farright"></div> 

        
      <div id="footer"> 
       <?php include("footer.php"); ?>
    
</div> 
</body>
</html>