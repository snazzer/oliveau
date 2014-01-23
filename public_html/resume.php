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
   $objective = array(
       array( 
              'title'=>'', 
              'summary'=>'I aim to design experiences that better reflect the real practices and needs of people by uncovering
how technologies are used in everyday life.',
              'where'=>'',
              'when'=>'', 
              'item_list'=>array(),
              'item_line'=>'',
            ),
       ); 
   $work = array(
       array( 
              'title'=>'Information Architect', 
              'summary'=>'My team at IBM Interactive Boston was tasked to develop an accelerated vision for the online rebranding effort for a major financial institution. This vision was to include a new \'concept\' that would drive the way users perceive the brand and interact with the site, a high-level reorganization of the information architecture, and wireframes that would illustrate the vision.',
              'where'=>'IBM Interactive, Toronto and Boston',
              'when'=>'Sept. 2012 - Present', 
              'item_list'=>array( 
                 'Interviewed executives in order to elicit business objectives, critical success factors, target audiences, and an understanding of the new brand.',
                 'Facilitated a client workshop with stakeholders in order to gather a prioritized list of business requirements.',
                 'Developed user journeys and personas that were approved by both executives and other stakeholders.',
                 'Sketched designs and created UI wireframes in Axure for desktop and mobile to communicate design concepts to stakeholders.',
              ),
              'item_line'=>'',
            ), 
       array( 
              'title'=>'UX Researcher', 
              'summary'=>'I was contracted by UX Guys to research the different video gaming motivations, online habits, social behaviours and lifestyles of both gamers and non-gamers. The project, for their client EA Sports, was to develop personas based on research involving 50 participants.',
              'where'=>'UX Guys – contract, Calgary',
              'when'=>'Mar. 2013 - Apr. 2013', 
              'item_list'=>array( 
                 'Conducted semi-structured interviews, using web conferencing, with 30 (of 50) participants.',
                 'Analyzed data collected from interviews and online diaries to reveal six user types.',
                 'Created three sports video gaming and three non-sports video gaming personas.',
              ),
              'item_line'=>'',
            ), 
       array (
              'title'=>'Research Assistant', 
              'summary'=>'I was tasked to conduct a research study to assess the effectiveness and usability of Drumeba, a drumming toy designed to encourage and teach social interaction to children with autism.',
              'where'=>'University of Toronto - Dr. Rhonda McEwen, Toronto', 
              'when'=>'May 2011 - May 2012', 
              'item_list'=>array( 
                 'Developed and managed research test plan for user trials.',
                 'Developed user questionnaires, journals, observer surveys, semi-structured interview guides, and videos guides.',
                 'Conducted user trial in lab setting with 12 participants.',
              ),
              'item_line'=>'',
            ), 
       array (
              'title'=>'Information Architect', 
              'summary'=>'At the time of the contract, my team was building an administrative dashboard for the latest version of Hospital Watch Live, a software suite that automates real-time infection control surveillance.',
              'where'=>'Infonaut Inc. - contract, Toronto', 
              'when'=>'Oct. 2011 - Feb. 2012', 
              'item_list'=>array( 
                 'Conducted focus groups with members of the development team, business teams, and end-users to collect user requirements.',
                 'Developed iterative high-fidelity HTML prototypes and gathered feedback during JAD sessions.',
              ),
              'item_line'=>'',
	),
       array (
              'title'=>'Research Assistant', 
              'summary'=>'I developed an annotated bibliography on the topic of social media use within corporations and methods of encouraging participation.',
              'where'=>'University of Toronto - Dr. Kelly Lyons, Toronto', 
              'when'=>'Sept. 2010 - May 2011',               
              'item_list'=>array( 
              ),
              'item_line'=>'',
	),
       array( 
              'title'=>'Accessibility Specialist', 
              'summary'=>'Working with the Human Ability and Accessibility Center, my team worked with various clients who wished to integrate accessibility design standards into their application development processes.',
              'where'=>'IBM Interactive, Toronto',
              'when'=>'Apr. 2007 - Aug. 2010', 
              'item_list'=>array( 
                 'Collaborated with usability teams to design accessibility into wireframes.',
                 'Conducted usability and accessibility test with participants with disabilities and provided prioritized remediation recommendations.',
                 'Developed policies and style guides to ensure integration of accessibility into development lifecycle.',
                 'Developed and delivered accessibility training to multiple clients.',
              ),
              'item_line'=>'',
            ), 
       array (
              'title'=>'IT Specialist', 
              'summary'=>'The eAMS team provides middleware and application maintenance support to various clients. Activities included requirements gathering, proposal writing, time estimating, front-end and java back-end development for multiple clients. In addition, I developed processes that the eAMS team follows for its daily activities.',
              'where'=>'IBM GBS - eApplication Maintenance Services, Toronto', 
              'when'=>'Sept. 2003 - Aug. 2006', 
              'item_list'=>array( 
              ),
              'item_line'=>'',
       ),
   );

   $skills = array(
                   array(
                     'title'=>'User Research',
                     'summary'=>'',
                     'when'=>'',
                     'where'=>'',
                     'item_list'=>array(),
                     'item_line'=>'Usability testing and analysis; personas; in-depth interviews; surveys; questionnaires; diary studies; electronic sampling method; rapid ethnography; participant observation; mobile probes; heuristic evaluation; participatory design; Morae'
                   ),
                   array(
                     'title'=>'UX Design',
                     'summary'=>'',
                     'when'=>'',
                     'where'=>'',
                     'item_list'=>array(),
                     'item_line'=>'Lo, medium, high fidelity prototypes; wireframes (Axure, PowerPoint, HTML, Pencil); wizard-of-oz'
                   ),
                   array(
                     'title'=>'Accessibility',
                     'summary'=>'',
                     'when'=>'',
                     'where'=>'',
                     'item_list'=>array(),
                     'item_line'=>'Accessibility guidelines; JAWS; AIS; Webking 6.0; IBM aDesigner; HiSoft AccVerify; CapScribe'
                   ),
                   array(
                     'title'=>'Programming',
                     'summary'=>'',
                     'when'=>'',
                     'where'=>'',
                     'item_list'=>array(),
                     'item_line'=>'J2EE; Java; HTML; CSS; SQL; DB2; Eclipse; Hibernate v3.2.6; Apache; Android
Framework'
                   )
                );

   $publications = array(
                      array(
                         'title'=>'2012',
                         'when'=>'',
                         'summary'=>'',
                         'when'=>'',
                         'where'=>'',
                         'item_list'=>array(),
                         'item_line'=>'Cober, R., Au, O., Son, J. (2012). Using a participatory approach to design a technology-enhanced museum tour for visitors who are blind. In <i>Proceedings of the 2012 iConference (iConference \'12).</i> ACM, New York, NY, USA, 592-594.</i>'
                      ),
                      array(
                         'title'=>'2009',
                         'when'=>'',
                         'summary'=>'',
                         'where'=>'',
                         'item_list'=>array(),
                         'item_line'=>'Au, O., Curtis-Davidson, B. (2009). Designing & Developing for Accessibility Throughout the Life-Cycle. In <i>Proceedings of CSUN Annual International Technology and Persons with Disabilities Conference.</i>',
                   )
                );

   $education = array(
                   array(
                      'title'=>'University of Toronto',
                      'item_line'=>'',
                      'when'=>'2012',
                      'where'=>'',
                      'item_list'=>array(),
                      'summary'=>'Master of Information, Beta Pi Mu'
                   ),
                   array(
                     'title'=>'University of Calgary',
                     'item_line'=>'',
                     'where'=>'',
                     'when'=>'2003',
                     'item_list'=>array(),
                     'summary'=>'Bachelor of Science in Computer Science',
                   )
                );

    $ps = array(
            array(
               'title'=>'Things I love',
               'summary'=>'',
               'when'=>'',
               'where'=>'',                    
               'item_list'=>array(),
               'item_line'=>'Traveling; hiking; skiing; scrabble; board games; high tea; piano; whistling'
            )
          );

   $all = array(
      'Objective'=>$objective,
      'Work'=>$work,
      'Education'=>$education,
      'Skills'=>$skills,
      'Publications'=>$publications,
      'P.S.'=>$ps
   );
?>
<div class="resume">
<?
$all_keys = array_keys($all);
for ($k = 0; $k < count($all_keys); $k++){
   $section = $all_keys[$k];
   $coll = $all[ $all_keys[$k] ];
?>
   <div class="resume_item">
     <div class="resume_rhc"
          style='width: 100%; float:clear;'
     >
<?
   for ($i = 0; $i < count($coll); $i++){
      $it = $coll[$i];
?>
      <div class="work_item">
            <div class="resume_section">
<?    if ($i == 0) {
         echo $section;
      }
      else{
         echo '&nbsp';
      }
?>
            </div> 

            <div style="float: left; width: 600px; margin: 0 0 10px 0;<? if ($i != 0) echo 'padding-top: 15px;'?>" >
            <span class="resume_what" > <? echo $it['title'] ?></span>      
            <span class="resume_where"><? if ($it['where']!='' ){echo '@ '.$it['where'];} ?>
            </span>

            <div class="resume_text">
            <? if ($it['when'] != ''){ ?>
            <div class="resume_when" <? if ($it['summary'] == '') echo 'style="padding-bottom: 0px;"'; ?> ><? echo $it['when'] ?></div>
            <? } ?>
            <? if ($it['summary'] != ''){ ?>
            <div class="resume_summary"><? echo $it['summary'] ?></div>
            <? } ?>
            <? echo $it['item_line']; ?>

<? if (count($it['item_list']) > 0) { ?>
            <div class="resume_list">
               Activities:
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
<? } ?>
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
