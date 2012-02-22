<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Test</title>
	
	<style type="text/css">
	* {margin:0;padding:0;font-family: Arial;}
	body { background-color: #d6d6d6; }
	
	#header {
		margin:0 auto;
		padding:20px;
		width:auto;
		background: url('assets/green_bkg.jpg') repeat-x;
		box-shadow: 0 0px 3px rgba(34, 25, 25, 0.4);
		-moz-box-shadow: 0 0px 2px rgba(34, 25, 25, 0.4);
		-webkit-box-shadow: 0 0px 3px rgba(34, 25, 25, 0.4);
	}
	#header h1 {color: #fff;}
	
	#header #nav {
		float: right;
		position: relative;
		top: -37px;
	}
	#menu {margin-right:20px;}
	#header #nav ul li {
		display: inline-block;
	}
	#header #nav ul li:hover{
		
	}
	#header #nav ul li a {
		margin: 0 10px;
		background: white;
		padding: 6px 6px 4px;
		border-radius: 7px;
		-webkit-border-radius: 7px;
		-moz-border-radius: 7px;
		color: black;
		text-decoration: none;
		display: block;
		box-shadow: 1px 2px 1px 1px rgba(34, 25, 25, 0.4);
		-moz-box-shadow: 1px 2px 1px 1px rgba(34, 25, 25, 0.4);
		-webkit-box-shadow: 1px 2px 1px 1px rgba(34, 25, 25, 0.4);
		font-size: 16px;
	}
	#header #nav ul li a:hover{
		background: #000;
		color:#fff;
	}
	select#mobileMenu_menu.mobileMenu {
		display: inline-block;
		margin: 5px 30px;
		font-size: 15px;
		border-color: green;
		padding: 15px;
		background: yellowGreen;
	}
	
	#wrapper{width:100%;margin:0 auto;position:relative;}
	#content{margin:20px auto;position:relative;min-height: 500px;text-align: center;}
	div {display: block;}
	.box {
		position:relative;
		margin:10px;
		box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
		-moz-box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
		-webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
		background:#fff;
		width:250px;
		display: inline-block;
	}
	.box:hover {
	box-shadow: 0 3px 5px rgba(34, 25, 25, 0.4);
	-moz-box-shadow: 0 3px 4px rgba(34, 25, 25, 0.4);
	-webkit-box-shadow: 0 3px 5px rgba(34, 25, 25, 0.4);
	}
	.img img{
		padding:10px 10px 0 10px;
		min-height: 75px;
	}
	.img p {
	padding:5px 10px 10px 0;
	text-align:right;
	font-size: 12px;
	}
	
/************************
	Comments
************************/
	.comments {width:250px;text-align: left;font-size:11px;}
	
	.comments ul {
	}
	
	.comments ul li {
		background:#f9f9f9;
		padding:10px;
		list-style:none;
		border-bottom:1px solid #bfbfbf;
	}
	.comments ul li p {margin-top: 10px;}
	
	
	
	.corner-stamp {padding-bottom: 10px;float:right;background: red;}
	</style>
</head>

<body>
<div id="wrapper">

	<div id="header">
		<h1>Post-Gazette Photos of the Day</h1>
		
		<div id="nav">
			<ul id="menu">
				<li><a href="#">SPORTS</a></li>
				<li><a href="#">LOCAL</a></li>
				<li><a href="#">PEOPLE</a></li>
				<li><a href="#">SCENERY</a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div class="box corner-stamp">
			<div class="img">
				<img class="lazy" src="sample-content/<?php echo rand(1, 40); ?>.jpg" width="230" alt="test" />
				</div>
		</div>
		
		<?php 
		$i=0;
		while ($i<25){
		?>
		<div class="box">
			<div class="img">
				<img class="lazy" src="sample-content/<?php echo rand(1, 40); ?>.jpg" width="230" alt="test" />
				<p>img title</p>
			</div>
			<div class="comments">
				<ul>
					<li>This is a much longer comment then the rest of them!<p>It even includes a paragraph break!!!</p></li>
					<li>comment</li>
					<li>comment</li>
				</ul>
			</div>
		</div>
		<?php 
			$i++;
		}
		?>

		
		
	</div>

</div>

<div id="page-nav" style="clear:both;">
  <a href="index4.php"></a>
</div>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.masonry.min.js" type="text/javascript"></script>
<script src="js/jquery.infinitescroll.min.js" type="text/javascript"></script>
<script src="js/jquery.mobilemenu.js" type="text/javascript"></script>


<script type="text/javascript">
 
  
  $(document).ready(function(){
  	
  	$('ul#menu').mobileMenu({
	  switchWidth: 960,                   //width (in px to switch at)
	  topOptionText: 'Select a Category',     //first option text
	  indentString: '&nbsp;&nbsp;&nbsp;'  //string for indenting nested items
	});
     
    var $container = $('#content');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.box',
        isAnimated: true,
        isFitWidth: true,
        cornerStampSelector: '.corner-stamp'
        //gutterWidth: 10
      });
    });  
            
	 $container.infinitescroll({
	      navSelector  : "#page-nav",    // selector for the paged navigation 
	      nextSelector : "#page-nav a",  // selector for the NEXT link (to page 2)
	      itemSelector : ".box",     // selector for all items you'll retrieve
	      debug			: true,
	      dataType		: "html",
	      loading: {
	          finishedMsg: 'No more pages to load.',
	          img: 'http://i.imgur.com/6RMhx.gif'
	        }
	      },
	      // trigger Masonry as a callback
	      function(newElements){
	        // hide new items while they are loading
	        var $newElems = $( newElements ).css({ opacity: 0 });
	        // ensure that images load before adding to masonry layout
	        $newElems.imagesLoaded(function(){
	          // show elems now they're ready
	          $newElems.animate({ opacity: 1 });
	          $container.masonry( 'appended', $newElems, true ); 
	        });
	      }
	    );
  
  
 
  }); 
  $(window).resize(function(){
  	//$("#header").width($("#content").width());
  });
</script>

</body>
</html>