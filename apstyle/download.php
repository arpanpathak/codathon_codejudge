<!DOCTYPE html>
<html>
<head>
	<title>Testing apstyle framweorks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<script src="js/apstyle.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<nav class="nav fixed-top">
		<ul>
		<li class="nav-title"><a>Navigation Menu</a></li>
			<button class="fold" data-fold="#myNav"> &#9776; </button>
			<div class="folded" id="myNav">
			
  			<li><a href="index.php">Home</a></li>
  			<li><a href="#" class="active-blue">Download</a></li>
  			<li><a href="#option3">Option3</a></li>
  			<li><a href="#option4">Option4</a></li>
  			<li class="dropdown">
    			<a href="#" class="dropbtn">Dropdown </a>
    			<div class="dropdown-content">
      			<span>Link 1</span>
      			<span>Link 2</span>
      			<span>Link 3</span>
    			</div>
  			</li>
  			<li class="dropdown">
    			<a href="#" class="dropbtn">Dropdown2 </a>
    			<div class="dropdown-content">
      			<span>Menu1</span>
      			<span>Menu2</span>
      			<span>Link 3</span>
    			</div>
  			</li>
  			<span style="float: right;"><input type="search" placeholder="search">
  			</span>
  			</div>
		</ul>
	</nav>
</head>
<body>
  <div class="block">
  <h1 style="margin-top: 50px;">ApStyle Framework</h1>
  <div class="row">
    <div class="col6 panel"> 
      <h1 >Download ApStyle</h1>
      <hr />
      <p> ApStyle is a front end <strong>JAVASCRIPT</strong> and <strong>CSS</strong>
         web development
        framework that makes the life of web developer and designer a lot more
        easier.Every thing can be done by using inbuilt classes and styles.
        You will not have to write a single piece of css code in your project.So you
        can build your project very quickely.Also you need not to worry about scaling of components.The framework will automatically scale all the components according to every device and every thing will look very beautiful, neat and clean<button class="rounded primary" style="float: right;" data-scroll="#comparison"><b>⇩</b> Click Here to download</button></p>
    </div>

    <div class="col6 panel-light panel"> 
      <h1 >How to use</h1>
      <hr>
      <p> Just import ta code in your project.It's done.Now you can use inbuilt style clases
      </p>
      <b>Add these two lines at the head of your code: </b>
        <xmp>
          <script src="js/apstyle.js"></script>
          <link rel="stylesheet" type="text/css" href="css/main.css">
        </xmp>
      <b>It's done! Now don't forget to set viewport: </b>
        <xmp>
          <meta name="viewport" content="width=device-width,
           initial-scale=1.0"></meta>
        </xmp>
    </div>
  </div>

</body>