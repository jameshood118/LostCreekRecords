<?php 
include("header.php"); ?>
<div id="left"><img src="images/tim6.png" class="img"/></div>
<div id="main" class="clearfix">


        
        <div class="myBox"><?php 
include ("db.php");

$table = "products" ;

$show_all = "SELECT * FROM $table ORDER BY idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<center><table cellpadding="10">');

while ($row = mysql_fetch_array ($result))

{

$idnum = $row[ "idnum" ]."";
$price = $row[ "price" ]."";
$description = $row[ "description" ]."";
$name = $row[ "name" ]."";
$picture = $row[ "picture" ]."";

?>
<td align=center colspan="3">
<?php if(file_exists('images/products/'.$picture.'' )){
print ('<img src="images/products/'.$picture.'" width=300 />');
}else{
echo "";} ?></td>
<tr><td align=center> 
<?php 

$qauntity=$_POST['qaunt_select'];

if ($qauntity==""){
	$qauntity="1";
	}

?>
<form action="" method="post">
  <select name="qaunt_select">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  <input type="submit" value="Quantity"> 
</form>
<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/761208917106448" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm" target="_top">
    <input name="item_name_1" type="hidden" value="<?php echo $name ?>"/>
    <input name="item_description_1" type="hidden" value="<?php echo $description ?>"/>
	<input name="item_quantity_1" type="hidden" value="<?php echo $qauntity ?>"/>
    <input name="item_price_1" type="hidden" value="<?php echo $price ?>"/>
    <input name="item_currency_1" type="hidden" value="USD"/>
    <input name="_charset_" type="hidden" value="utf-8"/>
    <input alt="" src="https://checkout.google.com/buttons/buy.gif?merchant_id=761208917106448&amp;w=117&amp;h=48&amp;style=trans&amp;variant=text&amp;loc=en_US" type="image"/>
</form>


</td><td align=center>
<a href="http://itunes.apple.com/us/album/one-face-at-a-time/id474614407?uo=4" target="itunes_store"><img src="http://ax.phobos.apple.com.edgesuite.net/images/web/linkmaker/badge_itunes-lrg.gif" title="Buy at Itunes" style="border: 0;"/></a>
</td><td align=center>
<div style='width:117px; height:57px; margin:0; padding:0; border:0; background-image:url(http://www.cdbaby.com/Images/Links/BlackScratch-Buy_Album_nothumb.png);'><a href='http://www.cdbaby.com/cd/timwatson1' style='display:block; width:117px; height:57px; margin:0; border:0;' target="_blank" title="Buy at CDBaby"></a></div>



</td></tr>

      
     

<?php
$number=$number+1;

if ($number>1){
print ('</tr>');
$number=0;
}


} 

print ('</center></table>');


?>


</div>

</div>

<div id="farright"></div>   

      <div id="footer"> 
      <?php include("footer.php"); ?>
  
</div> </div>
</body>
</html>