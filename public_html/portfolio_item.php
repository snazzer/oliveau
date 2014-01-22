<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?
   include 'rom.data';
   include 'drumeba.data';
   include 'bata.data';
   include 'touch.data';
   include 'waterfall.data';

   $portfolio_items = array($rom_info,$bata_info,$drumeba_info,$touch_info,$waterfall_info);

   $item_id = intval($_GET['item']);
   $max_id = count($portfolio_items)-1;
   if ($max_id < 0) $max_id = 0;

   if ($item_id > $max_id ) $item_id = 0;
   
   $prev_id = $item_id-1;
   if ($prev_id < 0) $prev_id = $max_id;
   $next_id = $item_id+1;
   if ($next_id > $max_id) $next_id = 0;

   $image_width = 480;
   $image_height = 360;

?>
<html>
<head><title>Olive Au - <? echo $portfolio_items[$item_id]['title']; ?></title>
<?include 'css_js.php'?>
<?include 'image_frame.php' ?>
<script type="text/javascript">
   function onImageClick(set,elem){
      $('#image_set_'+set+'>div').hide();
      $('#image_'+set+'_'+elem).show();
   }
   var VideoIdList = []
   var VideoPlayers = []

</script>
</head>
<body>
   <?include 'page_top.php'?>
      <div style="clear:both; margin: 0 0 20px 5px; float:left;">
         <h1><? echo $portfolio_items[$item_id]['title']; ?></h1>
           <? echo $portfolio_items[$item_id]['intro']; ?>
      </div>
      <div style="float:right;">
         <a href="portfolio_item.php?item=<? echo strval($prev_id) ?>">previous</a> | <a href="portfolio_item.php?item=<? echo strval($next_id) ?>">next</a>
      </div>
<?
   $items = $portfolio_items[$item_id]['items'];
   $video_count = 0;
   for ($i = 0; $i < count($items); $i++){
?>
      <div style="clear: both;">
            <div style="width: 40%; float: left; margin: 0 10px">
               <h3 style="font-weight: bold"><? echo $items[$i]['title'] ?></h3>
               <p><? echo $items[$i]['data'] ?></p>
            </div>
            <div style="width: <? echo $image_width ?>px; float: left;">
<?
      $images = $items[$i]['images'];
      if (count($images)){
?>
               <div class="image_set_main" id="image_set_<? echo strval($i) ?>" style="width: 100%">
<?
         $image_keys = array_keys( $images );
         for ($j=0; $j<count($image_keys);$j++){
            $display = 'none';
            if ($j == 0 ){
               $display = '';
            }
?>
                   <div id="<? echo 'image_'.strval($i).'_'.strval($j) ?>" 
                      style="display: <? echo $display ?>">
<?
               if (strpos($images[$image_keys[$j]],'http://www.youtube.com/')===0){
                  $video_count++;
                  $video_id_parsed = explode('=',$images[$image_keys[$j]]);
                  $video_id = $video_id_parsed[1];
?>
                      <div id="<? echo $video_id ?>"></div>
                      <script type="text/javascript">
                           VideoIdList.push('<? echo $video_id ?>')
                      </script>
<?
               }
               else{
?>
                      <img height="<? echo $image_height ?>"
                           alt="<? echo $image_keys[$image_keys[$j]] ?>" 
                           src="images/<? echo $images[$image_keys[$j]] ?>">
<?
               }
?>
                   </div>
<?
         }
?>
               </div>
<?
         if (count($images) > 1){
?>
               <div class="image_slider">
<?
            for ($j=0; $j<count($image_keys);$j++){
?>
                  <div class="image_slider_item" onclick="javascript:onImageClick('<? echo strval($i) ?>','<? echo strval($j) ?>')">
<?
               if (strpos($images[$image_keys[$j]],'http://www.youtube.com/')===0){
                  $parts = explode('=',$images[$image_keys[$j]]);
?>
                     <img width="100px" height="75px" alt="<? echo $image_keys[$j] ?>" src="http://img.youtube.com/vi/<? echo $parts[1] ?>/1.jpg">
<?
               }
               else{
?>
                     <img width="100px" height="75px" alt="<? echo $image_keys[$j] ?>" src="images/<? echo $images[$image_keys[$j]] ?>">
<?
               }
?>
                  </div>
<?
            }
?>
               </div>
<?
         }
         else{
?>
               <div style="height: 20px;"></div>
<?
         }
      }
?>
            </div>
      </div>
<?
   }
   if ($video_count > 0){
?>
   <script type="text/javascript">
      // Load the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      
      function onYouTubePlayerAPIReady() {
         for (var i = 0; i < VideoIdList.length; i++){
            var player = new YT.Player(VideoIdList[i], {
			  height: '<? echo $image_height ?>',
			  width: '<? echo $image_width ?>',
			  videoId: VideoIdList[i]
			  });
            VideoPlayers.push(player)
         }
      }
   </script>
<?
   }
?>
   <?include 'page_bottom.php'?>
</body>
</html>
