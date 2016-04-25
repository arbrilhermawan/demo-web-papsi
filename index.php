<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page="home";
}
switch($page){
	case "home":
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/home.php");
		include("footer.php");
	break;
	case "post1":
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/post1.php");
		include("footer.php");
	break;
	case "post3":
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/post3.php");
		include("footer.php");
	break;
	case "post4":
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/post4.php");
		include("footer.php");
	break;
	case "post5":
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/post5.php");
		include("footer.php");
	break;
	case "post6":
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/post6.php");
		include("footer.php");
	break;
	
	default:
		$title="arbril hermawan";
		include("header.php");
		include("menu.php");
		include("halaman/error.php");
		include("footer.php");
	break;	
}

?>