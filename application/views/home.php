<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" />
    <title>Welkom <?= $this->session->userdata('username') ?></title>
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
    <style>
        
/* CSS Document */

*
{
	margin:0;
	padding:0;
}
#login-form
{
	margin-top:70px;
}
table
{
	border:solid #dcdcdc 1px;
	padding:25px;
	box-shadow: 0px 0px 1px rgba(0,0,0,0.2);
}
table tr,td
{
	padding:15px;
	//border:solid #e1e1e1 1px;
}
table tr td input
{
	width:97%;
	height:45px;
	border:solid #e1e1e1 1px;
	border-radius:3px;
	padding-left:10px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	background:#f9f9f9;
	transition-duration:0.5s;
	box-shadow: inset 0px 0px 1px rgba(0,0,0,0.4);
}

table tr td button
{
	width:100%;
	height:45px;
	border:0px;
	background:rgba(12,45,78,11);
	background:-moz-linear-gradient(top, #595959 , #515151);
	border-radius:3px;
	box-shadow: 1px 1px 1px rgba(1,0,0,0.2);
	color:#f9f9f9;
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	font-weight:bolder;
	text-transform:uppercase;
}
table tr td button:active
{
	position:relative;
	top:1px;
}
table tr td a
{
	text-decoration:none;
	color:#00a2d1;
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
}

/* css voor home pagina, na het inloggen  */

*
{
	margin:0;
	padding:0;
}
#header
{
	width:100%;
	height:60px;
	background:rgba(00,11,22,33);
	color:#9fa8b0;
	font-family:Verdana, Geneva, sans-serif;
}
#header #left
{
	float:left;
	position:relative;
}
#header #left label
{
	position:relative;
	top:5px;
	left:100px;
	font-size:35px;
}
#header #right
{
	float:right;
	position:relative;
}
#header #right #content
{
	position:relative;
	top:20px;
	right:100px;
	color:#fff;
}
#header #right #content a
{
	color:#00a2d1;
}


#body
{
	text-align:center;
	margin-top:150px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:36px;
}

/* css voor navigatiebalk */

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

/* Kalender CSS */
table.calendar{ 
	border-left:1px solid #999;
}
tr.calendar-row	{ 

}
td.calendar-day	{
 	min-height:80px;
 	font-size:11px; 
 	position:relative; 
}
* html div.calendar-day { 
	height:80px; 
}
td.calendar-day:hover	{ 
	background:#eceff5; 
}
td.calendar-day-np	{ 
	background:#eee; 
	min-height:80px; 
}
* html div.calendar-day-np { 
	height:80px; 
}
td.calendar-day-head { 
	background:#ccc; 
	font-weight:bold; 
	text-align:center; 
	width:120px; 
	padding:5px; 
	border-bottom:1px solid #999; 
	border-top:1px solid #999; 
	border-right:1px solid #999; 
}
div.day-number		{ 
	background:#999; 
	padding:5px; 
	color:#fff; 
	font-weight:bold; 
	float:right; 
	margin:-5px -5px 0 0; 
	width:20px; 
	text-align:center; 
}
/* shared */
td.calendar-day, td.calendar-day-np { 
	width:120px; 
	padding:5px; 
	border-bottom:1px solid #999; 
	border-right:1px solid #999; 
}

    </style>
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
    <h1><img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Light_green_check.svg" width="30" height="30"/> Proficiat! U bent succesvol aangemeld</h1>
    </center>

  </body>
</html>
