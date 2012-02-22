<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Photos of the Day</title>
<style type="text/css">
*{margin:0;padding:0;}
body{background:#f4f4f4;min-width: 742px; }
div {display:block;}

#header{width:100%;height:45px;background:#fff;padding:10px 20px;position:fixed;top:0;z-index:500;}


#content {
	position: relative;
	min-height: 500px;
	margin: 60px auto 0;
}

/*
.box {
  margin: 10px;
  padding: 5px;
  background: #D8D5D2;
  font-size: 11px;
  line-height: 1.4em;
  float: left;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
}
*/
.box {
	float:left;
	margin:10px;
	position: relative;
	width: 250px;
	font-size: 11px;
	box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
	-moz-box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	-webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
	background:#fff;
}
.box:hover {
	box-shadow: 0 3px 5px rgba(34, 25, 25, 0.4);
	-moz-box-shadow: 0 3px 4px rgba(34, 25, 25, 0.4);
	-webkit-box-shadow: 0 3px 5px rgba(34, 25, 25, 0.4);
}
/*
.col3 { width: 250px; }
.col3 img { max-width: 250px; }
*/
.box img {max-width: 230px;}
.box .lazy {
	min-height: 75px;
	background-color: #fff;
}
.img img {
display: block;
margin: 0 auto;
padding: 10px 10px 0 10px;
	background-color: white;
}
.img p {
	padding:5px 10px 10px 0;
	text-align:right;
}
#ColumnContainer {
position: relative;
min-height: 500px;
margin: 70px auto 0 auto;
width:auto;
max-width:1440px;
min-width:340px;

}
/*
#wrapper {position: relative; width: auto; min-width: 742px; margin: 0 auto; border: none;padding:0 0 0 20px;}
*/


/************************
	Comments
************************/
	.comments {width:250px;}
	
	.comments ul {
	}
	
	.comments ul li {
		background:#f9f9f9;
		padding:10px;
		list-style:none;
		border-bottom:1px solid #bfbfbf;
	}
	
</style>
</head>

<body>
<div id="header">
	<h1>Photos of the Day</h1>
</div>

<div id="wrapper">
	<div id="nav">
	navigation
	</div>
	
	<div id="ColumnContainer">
		<?php 
		$i=0;
		while ($i<100){
		?>
		<div class="box col3">
			<div class="img">
				<img class="lazy" src="sample-content/<?php echo rand(1, 40); ?>.jpg" data-original="sample-content/<?php echo rand(1, 40); ?>.jpg" width=250 />
				<p>img title</p>
			</div>
			<div class="comments">
				<ul>
					<li>This is a much longer comment then the rest of them!<p>It even includes a paragraph break!!!</li>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/lazyload.js" type="text/javascript"></script>
<script src="js/jquery.masonry.min.js"></script>
<script src="js/jquery.infinitescroll.min.js"></script>
<script>
	//$("#ColumnContainer").css("width",$(window).width());
	/*
	$(function() {
		$("img.lazy").show().lazyload({
			effect : "fadeIn",
			threshold : 200
		});
    });
      */
  $(function(){
    
    var $container = $('#ColumnContainer');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.box',
  		isAnimated: true
      });
    });
    
    $container.infinitescroll({
      navSelector  : '#page-nav',    // selector for the paged navigation 
      nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
      itemSelector : '.box',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No more pages to load.',
          img: 'http://i.imgur.com/6RMhx.gif'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
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
</script>
</body>
</html>
