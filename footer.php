<BR>
<img src="images/background_03.png" />
<div class="uppermenu footer">

<center>
<a href="http://www.last.fm/user/timwatsonDC" target=_blank><img src="images/lastfm_red_small.gif"/></a>
<a href="https://www.facebook.com/pages/Lost-Creek-Records/182701295143763" target=_blank><img src="images/facebook-256.png" width="25" /></a>
</center>
<?php include("menu.php");?>

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
