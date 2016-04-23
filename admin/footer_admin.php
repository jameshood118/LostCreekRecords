<BR>
<img src="../images/background_03.png" />
<div class="uppermenu footer">
<a href="../index.php?action=home" class="menuLink">Home</a> | 
<a href="../index.php?action=albums" class="menuLink">Music</a> | 
<a href="../index.php?action=photo" class="menuLink">Photos</a> | 
<a href="../index.php?action=contact" class="menuLink">Contact</a> |
<a href="../index.php?action=links" class="menuLink">Links</a> |
<a href="../shop.php" class="menuLink">Shop</a> |
<a href="admin/admin.php" class="menuLink">Admin</a>
<BR />
<?php 
function autoUpdatingCopyright($startYear){
 
    // given start year (e.g. 2004)
    $startYear = intval($startYear);
 
    // current year (e.g. 2007)
    $year = intval(date('Y'));
 
    // is the current year greater than the
    // given start year?
    if ($year > $startYear)
        return $startYear .'-'. $year;
    else
        return $startYear;
}
?>
&copy; <?php echo autoUpdatingCopyright(2009);?> Timothy Watson. All Rights Reserved. Site By<a href="http://www.jameshood118.org"> Hood Studios</a></div>
