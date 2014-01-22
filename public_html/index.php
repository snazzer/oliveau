<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title>Olive Au - Portfolio</title>
<link rel="stylesheet" href="fonts/printclearly/stylesheet.css" type="text/css" charset="utf-8">
<?include 'css_js.php'?>
<?include 'image_frame.php' ?>
</head>
<body>
    <?include 'page_top.php'?>
            <? 
               imageFrame('Royal Ontario Museum','September 2011 - Present',
                          'images/rom_tn.jpg',
                          'Royal Ontario Museum',
	                  'portfolio_item.php?item=0');
               imageFrame('Bata Shoe Museum','January 2011 - Present',
                          'images/bata_museum_tn.jpg',
                          'Bata Shoe Museum',
	                  'portfolio_item.php?item=1');
?>
   <div style="display: table;" class="about_me_big">
     <div style="display:table-cell; vertical-align:middle;">
I aspire to design experiences that better reflect the real practices and needs of people by  uncovering how technologies are used in everyday life.
     </div>
    </div>
<?
               imageFrame('Drumeba Inc.','August 2011 - Present',
                          'images/drumeba_tn.jpg',
                          'Drumeba Inc.',
	                  'portfolio_item.php?item=2');
               imageFrame('Staying In Touch','September 2011 - December 2011',
                          'images/staying_in_touch_tn.jpg',
                          'Staying In Touch',
	                  'portfolio_item.php?item=3');
               imageFrame('Waterfall Harp','March 2001',
                          'images/waterfall_tn.jpg',
                          'Waterfall Harp',
	                  'portfolio_item.php?item=4');
            ?>
   <?include 'page_bottom.php'?>
</body>
</html>
