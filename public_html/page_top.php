<div class="page_container">
   <div class="top_header">
      <div style="height: 30px"></div>
      <div class="olive_au"><a href="index.php">olive au</a></div>
      <div class="top_header_menu">
         <div class="sub_header">user experience research and design</div>
         <div class="menu">
         <ul class="navlist">
<? 
   $currentFile = $_SERVER['PHP_SELF'];
   $currentFile = basename($currentFile);
   $portfolio_class = '';
   if ($currentFile == 'index.php'){
      $portfolio_class = 'selected';
   }
   $resume_class = '';
   if ($currentFile == 'resume.php'){
      $resume_class = 'selected';
   }
   $about_me_class = '';
   if ($currentFile == 'about_me.php'){
      $about_me_class = 'selected';
   }
?>
   	   <li><a class="<? echo $portfolio_class  ?>" href="index.php">portfolio</a> |</li>
   	   <li><a class="<? echo $resume_class ?>" href="resume.php">resume</a> |</li>
   	   <li><a class="<? echo $about_me_class ?>" href="about_me.php">about</a></li>
         </ul>
         </div>
      </div>
   </div>
   <div class="gradientH"></div>
   <div class="content">
      <div class="gradientV"></div>
