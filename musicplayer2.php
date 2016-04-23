<?php 
include("header.php"); ?>
<div id="left"><img src="images/tim6.png" class="img"/></div>
<div id="main" class="clearfix">

        <?php 
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {



?>


        <div class="musicBox"><center><?php 
include ("db.php"); ?>

<pre>
Want to try before you buy? Or maybe you left 
the most essential piece of your 
music collection at home? Lucky for you, you can listen 
to Tim's music for free with the music player below. Enjoy!</pre>

<BR /><BR />

<a href="musicplayer2.php?album_select=One Face at a Time" class="menuLink">One Face at a Time</a>


		
<?php

$album_select = $_GET['album_select'];

if ($album_select==""){
	$album_select="One Face at a Time";
	}


?>


<?php

$table = "albums";

$show_all = "SELECT * FROM $table WHERE album_name='$album_select'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<table border="1">');
print ('<tr><th>Track Name</th><th>Lyrics</th></tr>');

while ($row = mysql_fetch_array ($result))
{

$idnum = $row[ "idnum" ]."";
$track_name = $row[ "track_name" ]."";
$album_name = $row[ "album_name" ]."";

print ('<td>'.$track_name.'</td>');
print ('<td><audio controls="controls">');
print ('<source src="music sources/'.$album_name.'/'.$track_name.'.mp3" type="audio/mp3" />');
print ('<source src="music sources/'.$album_name.'/'.$track_name.'.ogg" type="audio/ogg" />');
print ('<a href="music sources/'.$album_name.'/'.$track_name.'.mp3"" class="menuLink"/>Download MP3</a>');
print ('</audio></td>');?>
<td><a href="javascript:void(0)"
onclick="window.open('music sources/<?php echo $album_name?>/lyrics/<?php echo $track_name?>.txt', 'dummyname', 'height=600,width=600', false)" class="menuLink">Lyrics</a></td>

<?php
$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}



}

print ('</table>');
print ('</center>');

?>



</div>

<div id="farright"></div>   

      <div id="footer"> 
      <?php include("footer.php"); ?>
  
</div> </div>
</body>
</html>





<?php  } 

else {  ?>
<div class="flashBox"><center>  

<pre>
Want to try before you buy? Or maybe you left 
the most essential piece of your 
music collection at home? Lucky for you, you can listen 
to Tim's music for free with the music player below. Enjoy!</pre>

<object width="674" height="900"> 
 
        <param name="movie" value="musicplayerAS3.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="bgcolor" value="#ffffff" /> 
        <embed src="musicplayerAS3.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="674" height="900" id="musicplayer" ></embed>

    </object></center> 
  


</div>

<div id="farright"></div>   

      <div id="footer"> 
      <?php include("footer.php"); ?>
  
</div> </div>
</body>
</html>

<?php } ?>


