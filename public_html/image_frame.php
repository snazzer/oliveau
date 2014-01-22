<?
function imageFrame($caption,$when,$image,$alt,$link){
   echo '<div class="image_frame">
            <a href="'.$link.'">
               <div class="frame_image">
                   <img border="0" alt="'.$alt.'" width="240" height="180" src="'.$image.'">
               </div>
	       <div class="frame_caption"><center>'.$caption.'<div class="image_frame_when">'.$when.'</div></center></div>
            </a>
         </div>
   ';
}
?>
