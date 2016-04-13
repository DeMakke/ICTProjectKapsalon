<!--*********************** KALENDER pagina na inloggen ***************************-->
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" />
    <title>Welkom <?= $this->session->userdata('username') ?></title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/assets/css/style.css">
  </head>
  <body>
    <div id="header">
	   <div id="left">
      <label>Admin Pagina</label>
     </div>
     <div id="right">
    	 <div id="content">
        	Welkom <?= $this->session->userdata('username') ?>&nbsp;, <a href="<?= site_url('home/logout') ?>">Logout</a>
       </div>
     </div>
    </div>
  <ul>
    <li><a href="home">Home</a></li>
    <li><a href="kalender">Kalender</a></li>
    <li><a href="klanten">Klanten</a></li>
    <li><a href="afspraak">Afspraak maken</a></li>
  </ul>
  <br/>
  <center>
    <?php
    /* date settings */
$month = (int) ($_GET['month'] ? $_GET['month'] : date('m'));
$year = (int)  ($_GET['year'] ? $_GET['year'] : date('Y'));

/* select month control */
/*$select_month_control = '<select name="month" id="month">';
for($x = 1; $x <= 12; $x++) {
  $select_month_control.= '<option value="'.$x.'"'.($x != $month ? '' : ' selected="selected"').'>'.date('F',mktime(0,0,0,$x,1,$year)).'</option>';
}
$select_month_control.= '</select>';*/

/* select year control */
/*$year_range = 7;
$select_year_control = '<select name="year" id="year">';
for($x = ($year-floor($year_range/2)); $x <= ($year+floor($year_range/2)); $x++) {
  $select_year_control.= '<option value="'.$x.'"'.($x != $year ? '' : ' selected="selected"').'>'.$x.'</option>';
}
$select_year_control.= '</select>';*/

/* "next month" control */
$next_month_link = '<a href="?month='.($month != 12 ? $month + 1 : 1).'&year='.($month != 12 ? $year : $year + 1).'" class="control">Volgende Maand >></a>';

/* "previous month" control */
$previous_month_link = '<a href="?month='.($month != 1 ? $month - 1 : 12).'&year='.($month != 1 ? $year : $year - 1).'" class="control"><<  Vorige Maand</a>';

/* bringing the controls together */
$controls = '<form method="get">'.$select_month_control.$select_year_control.$previous_month_link.'     '.$next_month_link.' </form>';

echo $controls;
      /* draws a calendar */
function draw_calendar($month,$year){

  /* draw table */
  $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

  /* table headings */
  $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
  $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

  /* days and weeks vars now ... */
  $running_day = date('w',mktime(0,0,0,$month,1,$year));
  $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
  $days_in_this_week = 1;
  $day_counter = 0;
  $dates_array = array();

  /* row for week one */
  $calendar.= '<tr class="calendar-row">';

  /* print "blank" days until the first of the current week */
  for($x = 0; $x < $running_day; $x++):
    $calendar.= '<td class="calendar-day-np"> </td>';
    $days_in_this_week++;
  endfor;

  /* keep going with days.... */
  for($list_day = 1; $list_day <= $days_in_month; $list_day++):
    $calendar.= '<td class="calendar-day">';
      /* add in the day number */
      $calendar.= '<div class="day-number">'.$list_day.'</div>';

      /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
      $calendar.= str_repeat('<p> </p>',2);
      
    $calendar.= '</td>';
    if($running_day == 6):
      $calendar.= '</tr>';
      if(($day_counter+1) != $days_in_month):
        $calendar.= '<tr class="calendar-row">';
      endif;
      $running_day = -1;
      $days_in_this_week = 0;
    endif;
    $days_in_this_week++; $running_day++; $day_counter++;
  endfor;

  /* finish the rest of the days in the week */
  if($days_in_this_week < 8):
    for($x = 1; $x <= (8 - $days_in_this_week); $x++):
      $calendar.= '<td class="calendar-day-np"> </td>';
    endfor;
  endif;

  /* final row */
  $calendar.= '</tr>';

  /* end the table */
  $calendar.= '</table>';
  
  /* all done, return result */
  return $calendar;
}

if ($month == 1){                       //Zet maandnummers om naar maandnamen
  $monthNaam = "<h1>Januari</h1>";
  echo $monthNaam;
}
if ($month == 2){
  echo "<h1>Februari</h1>";
}
if ($month == 3){
  echo "<h1>Maart</h1>";
}
if ($month == 4){
  echo "<h1>April</h1>";
}
if ($month == 5){
  echo "<h1>Mei</h1>";
}
if ($month == 6){
  echo "<h1>Juni</h1>";
}
if ($month == 7){
  echo "<h1>Juli</h1>";
}
if ($month == 8){
  echo "<h1>Augustus</h1>";
}
if ($month == 9){
  echo "<h1>September</h1>";
}
if ($month == 10){
  echo "<h1>Oktober</h1>";
}
if ($month == 11){
  echo "<h1>November</h1>";
}
if ($month == 12){
  echo "<h1>December</h1>";
}
/* sample usages */
echo $monthNaam + $year;
echo draw_calendar($month,$year);



     ?>
    </center>

  </body>
</html>