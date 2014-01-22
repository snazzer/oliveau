<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head><title>Olive Au - Resume</title>
<?include 'css_js.php'?>
<link rel="stylesheet" type="text/css" href="resume.css" />
</head>
<body>
    <?include 'page_top.php'?>
<?
   $work = array(
       array( 
              'title'=>'Accessibility Specialist', 
              'where'=>'IBM GBS - Interaction Design, Toronto', 
              'when'=>'Apr. 2007 - Present', 
              'item_list'=>array( 
                 'Assessed the usability and accessibility of many client applications, and provided remediation recommendations.', 
                 'Developed policies to ensure integration of accessibility into development lifecycle.', 
                 'Developed and delivered accessibility training to multiple clients.', 
              ) 
            ), 
       array (
              'title'=>'Research Assistant', 
              'where'=>'University of Toronto - Dr. Rhonda McEwen, Toronto', 
              'when'=>'May 2011 - May 2012', 
              'item_list'=>array( 
                 'Developed, managed, and executed research test plan for user trials and product evaluation. User questionnaires, journals, observer surveys, semi-structured interview questions, and videos were used.',
              ) 
            ), 
       array (
              'title'=>'Information Architect', 
              'where'=>'Infonaut Inc., Toronto', 
              'when'=>'Oct. 2011 - Feb. 2012', 
              'item_list'=>array( 
                 'Developed wireframes of the infections control UIs in Hospital Watch Live v2.0.  JAD sessions were held in order to collect feedback on prototype and gather other user requirements.',
              ) 
	),
       array (
              'title'=>'Research Assistant', 
              'where'=>'University of Toronto - Dr. Kelly Lyons, Toronto', 
              'when'=>'Sept. 2010 - May 2011', 
              'item_list'=>array( 
                 'Developed an annotated bibliography on the topic of social media use within corporations and methods of encouraging participation.',
              ) 
	),

array (
              'title'=>'IT Specialist', 
              'where'=>'IBM GBS - eApplication Maintenance Services, Toronto', 
              'when'=>'Sept. 2003 - Aug. 2006', 
              'item_list'=>array( 
                 'Requirements gathering, proposal writing, time estimating, application architecture, training developers, front-end and java back-end development for multiple clients.',
		'Developed processes that the eAMS GIW team follows for its daily activities.',  
              ) 
	),
        array (
              'title'=>'Webmaster', 
              'where'=>'IBM Toronto Software Lab - CAS, Markham', 
              'when'=>'May 2001 - Aug. 2002', 
              'item_list'=>array( 
                 'Collaborated with a multi-disciplinary team to define requirements, design, develop, and maintain the CASCON conference web application.  Conducted user study to enhance usability. ',  
              ) 
	)
           );

   $technical = array(
                   array(
                     'title'=>'',
                     'when'=>'User Research',
                     'item_line'=>'Usability testing and analysis; personas; in-depth interviews; surveys; questionnaires; diary studies; electronic sampling method; rapid ethnography; participant observation; mobile probes; heuristic evaluation; participatory design; Morae'
                   ),
                   array(
                     'title'=>'',
                     'when'=>'UX Design',
                     'item_line'=>'Lo, medium, high fidelity prototypes; wireframes (Axure, PowerPoint, HTML, Pencil); wizard-of-oz'
                   ),
                   array(
                     'title'=>'',
                     'when'=>'Accessibility',
                     'item_line'=>'Accessibility guidelines; JAWS; AIS; Webking 6.0; IBM aDesigner; HiSoft AccVerify; CapScribe'
                   ),
                   array(
                     'title'=>'',
                     'when'=>'Programming',
                     'item_line'=>'J2EE; Java; HTML; CSS; SQL; DB2; Eclipse; Hibernate v3.2.6; Apache; Android
Framework'
                   )
                );

   $publications = array(
                      array(
                         'title'=>'',
                         'when'=>'2012',
                         'item_line'=>'Cober, R., Au, O., Son, J. (2012). Using a participatory approach to design a technology-enhanced museum tour for visitors who are blind. In <i>Proceedings of the 2012 iConference (iConference \'12).</i> ACM, New York, NY, USA, 592-594.</i>'
                      ),
                      array(
                         'title'=>'',
                         'when'=>'2009',
                         'item_line'=>'Au, O., Curtis-Davidson, B. (2009). Designing & Developing for Accessibility Throughout the Life-Cycle. In <i>Proceedings of CSUN Annual International Technology and Persons with Disabilities Conference.</i>',
                   )
                );

   $education = array(
                   array(
                      'title'=>'Master of Information',
                      'when'=>'Sept. 2010 - Present',
                      'item_line'=>'University of Toronto, Toronto, Ontario'
                   ),
                   array(
                     'title'=>'Bachelor of Science in Computer Science',
                     'when'=>'2003',
                     'item_line'=>'University of Calgary, Calgary, Alberta'
                   )
                );

    $ps = array(
            array(
               'title'=>'',
               'when'=>'Things I love',
               'item_line'=>'Traveling; hiking; skiing; scrabble; board games; high tea; piano; whistling'
            )
          );

   $all = array(
      'Work'=>$work,
      'Education'=>$education,
      'Skills'=>$technical,
      'Publications'=>$publications,
      'P.S.'=>$ps
   );
?>
<div class="resume">
   <div class="resume_item">
     <div class="resume_lhc" style="width: 100%; margin-top: 5px;">
Objective     
     </div>
     <div class="resume_rhc" style="width: 100%;">
I aim to design experiences that better reflect the real practices and needs of people by uncovering
how technologies are used in everyday life.
     </div>
   </div>

<?
$all_keys = array_keys($all);
for ($k = 0; $k < count($all_keys); $k++){
   $coll = $all[ $all_keys[$k] ];
?>
   <div class="resume_item">
     <div class="resume_lhc">
        <? echo $all_keys[$k];?>
     </div> 
     <div class="resume_rhc"
          style='width: 100%; float:clear;'
     >
<?
   for ($i = 0; $i < count($coll); $i++){
      $it = $coll[$i];
?>
      <div class="work_item">
            <div class="resume_when"><? echo $it['when'] ?></div>
            <div style="float: left; width: 600px; margin: 0 0 10px 0;">
            <span class="resume_what"><? echo $it['title'] ?></span>
      
            <span class="resume_where"><? if ($it['where']!='' ){echo '| '.$it['where'];} ?>
            </span>

            <div class="resume_text">
            <? echo $it['item_line']; ?>
               <ul class="resume_list">
<?
      for ($j = 0; $j < count($it['item_list']); $j++){
         $it2 = $it['item_list'][$j];
?>
                  <li><? echo $it2 ?></li>
<?
      }
?>
               </ul>
            </div>
         </div>
      </div>
<?
   }
?>
     </div>
   </div>
<?
}
?>
</div>
    <div style="font-size: 13pt; width:400px; text-align:center; clear:both; margin: 0 auto;"><a href="OliveAuResume.pdf">Download PDF Resume</a></div>
    <?include 'page_bottom.php'?>
</body>
</html>
