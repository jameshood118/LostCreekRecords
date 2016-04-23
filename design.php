<?php header("Content-type: text/css"); 
// Days of the Week script

$day = date("l");

switch ($day){
case 'Sunday':
$daypicture="Sunday";
break;
case 'Monday':
$daypicture="Monday";
break;
case 'Tuesday':
$daypicture="Tuesday";
break;
case 'Wednesday':
$daypicture="Wednesday";
break;
case 'Thursday':
$daypicture="Thursday";
break;
case 'Friday':
$daypicture="Friday";
break;
case 'Saturday':
$daypicture="Saturday";
break;
}
// End of Days of the Week
?>

#musicplayer3 {
	position:relative;
	background-image:url(images/dad13.png);
    background-size:674px 900px;
    background-repeat:no-repeat;
    height:900px;
    width:674px;
   	float:left;
    line-height:-15em;
}

#lyrics {
position:absolute;
left:-300px;
top:-300px;
font-size:10px;
width:300px;
z-index:15;
-moz-column-count:2; /* Firefox */
-webkit-column-count:2; /* Safari and Chrome */
column-count:2;
column-width:100px;
column-gap:100px;
text-shadow: 1px 1px 1px #000;

}

#titles {
position:absolute;
left:360px;
top:350px;
}

#titles > a {
position:relative;
padding-left:15px;
top:5px;

}

img { 
border: 0; 
}

html, body, #wrap {
	height:auto;
	width:1280px;
	background:url(images/backgrounds/<?php echo $daypicture?>.jpg) no-repeat #957d54 top center;
   	font-family: Georgia, "Times New Roman", Times, serif;
	font-size:100%;
	margin:0 auto;
	}

body > #wrap {
	
	height: auto; 
	min-height: 100%;
    position:absolute;
    left:50px;
	top:5px;
    right:50px;
	bottom:150px;
}

#main {
	min-height:500px;
	width:1280px;
	height:auto;
	float:left;
	background-image:url(images/background_02.png);
	color:#fff;
	z-index:1;
	} 

.myBox {
	margin: .5in auto auto 4in;
	font-size:small;
    color: #fff;
	width: 40%;
	padding: 20px;
	border: 3px solid #252500;
	background-color: transparent;
	background-image:url(images/transparent.png);
	
}

.musicBox {
	margin: .5in auto auto 4in;
	color: #fff;
	width: 50%;
	min-height: 450px;
    padding: 20px;
	border: 3px solid #252500;
	background-color: transparent;
	background-image:url(images/transparent.png);
	
}

.musicBox3 {
	margin: .5in auto auto 4in;
	color: #fff;
	width: 50%;
	min-height: 900px;
    height:1200px;
    padding: 20px;
	background-color: transparent;
	
	
}

.photoBox {
	margin: .5in auto auto 4in;
	color: #fff;
	width: 40%;
	min-height: 450px;
    padding: 20px;
	border: 3px solid #252500;
	background-color: transparent;
	background-image:url(images/transparent.png);
	
}

.linkBox {
	font-size:small;
	color: #fff;
	margin: .5in auto auto 4in;
	width: 50%;
	padding: 20px;
	border: 3px solid #252500;
	background-color: transparent;
	background-image:url(images/transparent.png);
}

.flashBox {
	margin: .5in auto auto 4in;
	color: #fff;
	width: 670px;
	text-align: left;
	background-color: transparent;
	position:relative;
	z-index:100;

	}
	
.contactbox {
	margin: .5in auto auto 4in;
	color: #fff;
	width: 50%;
	padding: 20px;
	text-align: left;
	border: 3px solid #252500;
	background-color: transparent;
	background-image:url(images/transparent.png);
	
}

menuLink
{
	color:#abb9cb;
	font-style:italic;
}

a.menuLink, a.menuLink:visited
{
	color:#abb9cb;
	text-decoration: none;
	font-style:italic;
}

a.menuLink:hover
{
	color:#637c9b;
	text-decoration:underline;
	font-style:italic;
}


#header {
	text-align: center;
	height: 279px;
	width: 1280px;
	border: 0px;
	background-color: transparent;
	background-image:url(images/background_01.png);
    z-index:1;
		
}



#left {
	position:absolute;
	left:15px;
	top:250px;
	float:left;
	z-index:2;
	} 

.lcr {position:absolute;left:265px;top:15px;z-index:2;}
.home {position:absolute;left:60px;top:165px;z-index:2;}
.music { position:absolute; left:255px;top:115px;z-index:2;}
.photos { position:absolute; left:425px;top:115px;z-index:2;}
.shop { position:absolute; left:625px;top:115px;z-index:2;}
.contact { position:absolute; left:825px;top:115px;z-index:2;}
.links { position:absolute; left:1025px;top:115px;z-index:2;}


.img
{
position:absolute;
left:0px;
top:-25px;
z-index:2;
}

#farright {
	position:absolute;
	left:1000px;
	top:285px;
    width:200px;
	float:right;
	z-index:2;
	} 
    
#fb-foot, .fb-like-box  {
	position:absolute;
	left:-10px;
	top:50px;
	z-index:8;
}    
	
img.center {   

	display: block;   
	margin-left: auto;   
	margin-right: auto; 
}

.footer {
	position: relative;
	clear:both;
	text-align: center;
	color:#fff;
	font-size: x-small;
	background-color: transparent;
} 


.uppermenu {
	position: relative;
	margin-top: -65px; 
	height: 25px;
	clear:both;
	text-align: center;
	color:#fff;
	font-size: x-small;
	background-color: transparent;
} 
	
.footer A:link {text-decoration: none; color:#abb9cb; font-style:italic;}
.footer A:visited {text-decoration: none; color:#abb9cb; font-style:italic;}
.footer A:active  {text-decoration: none;  color:#bbb; font-style:italic;}
.footer A:hover {text-decoration: underline; color:#637c9b;}



p a{
	color: #006633;
	font-style: italic;
	font-weight: bold;
	}
p em {
	color:#FF0000;
}


pre {
font-size: large;
font-style: italic;
font-family: Georgia, "Times New Roman", Times, serif;

}
