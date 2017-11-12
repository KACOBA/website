<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Administration</title>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1,Transition=4)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=1,Transition=5)">
<meta http-equiv="Site-Enter" content="revealTrans(Duration=2,Transition=23)">
<meta http-equiv="Site-Exit" content="revealTrans(Duration=2,Transition=23)">
<meta name="generator" content="Kimsom-Corporation">
<style type="text/css">
div#container
{
   width: 378px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   text-align: center;
   margin: 0;
}
.style2 {font-weight: bold; color: #0000FF;}
.style3 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif; }
.style5 {font-family: Georgia, "Times New Roman", Times, serif; }
.style6 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 14px; }
.style7 {font-family: Geneva, Arial, Helvetica, sans-serif; color: #000000; }
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000">


<div id="container">
<div id="wb_Shape2" style="position:absolute;left:3px;top:40px;width:351px;height:579px;z-index:1;" align="center">
  <p>&nbsp;</p>
  <div id="layer" style="position:absolute;left:2px;top:229px;width:350px;height:221px;z-index:6;" align="left"> 
    <p><font style="font-size:12px;font-family:Tunga;" color=#1C4884></font> H
      EN Project</p>
    <p>I am a person who matters</p>
    <p>Women's Initiatives</p>
    <p>Youth Initiatives</p>
    <p>Alcoholic Anonymous</p>
    <p>Community and Home Based Health Care         </p>
    <span class="style6">
<script language="JavaScript" type="text/javascript">
    </script>
        </span> <span class="style6">
        <script language="JavaScript" type="text/javascript"></script>
        </span><span class="style5">
          <script language="JavaScript" type="text/javascript"></script>
        </span><span class="style4">
          <script language="JavaScript" type="text/javascript"></script>
        </span><span class="style3">
          <script language="JavaScript" type="text/javascript"></script>
        </span>
        <script language="JavaScript" type="text/javascript">var now = new Date();
   var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
   var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
   var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
   var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();

   today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;

   basicdate.innerHTML = today;
    </script>
  </div><p><img src="file:///D|/NGOBI/Project PCM/013.JPG" alt="nm" width="154" height="133"></p>
</div>
<div id="wb_Image1" style="position:absolute;left:265px;top:518px;width:87px;height:102px;z-index:2;" align="left">
<img src="file:///D|/NGOBI/Project PCM/images/images_01.jpg" id="Image1" alt="" align="top" border="0" style="width:87px;height:102px;"></div>
<div id="wb_JavaScript1" style="position:absolute;left:2px;top:574px;width:262px;height:46px;z-index:5;" align="left">
  <font style="font-size:12px;font-family:Tunga;" color=#153B79>
  <div class="style7" id="basicclock">We believe that the implementation of the eight (8) Millennium Development Goals (MDGs) </div>
  </font>
<script language="JavaScript" type="text/javascript">
function clock() 
{
   var digital = new Date();
   var hours = digital.getHours();
   var minutes = digital.getMinutes();
   var seconds = digital.getSeconds();
   if (minutes <= 9) minutes = "0" + minutes;
   if (seconds <= 9) seconds = "0" + seconds;
   dispTime = hours + ":" + minutes + ":" + seconds;

   basicclock.innerHTML = dispTime;
   setTimeout("clock()", 1000);
}
clock();
</script>
</div>
<div id="wb_JavaScript2" style="position:absolute;left:11px;top:231px;width:344px;height:33px;z-index:6;" align="left">
<font style="font-size:12px;font-family:Tunga;" color=#1C4884></font>
<div class="style6" id="basicdate"><font color="#1C4884">KACOBA offices are located in Kampala Read more </font></div>

<span class="style6">
<script language="JavaScript" type="text/javascript">
   </script>
</span>
<span class="style6">
<script language="JavaScript" type="text/javascript"></script>
</span><span class="style5"><script language="JavaScript" type="text/javascript"></script>
</span><span class="style4"><script language="JavaScript" type="text/javascript"></script>
</span><span class="style3"><script language="JavaScript" type="text/javascript"></script>
</span>
<script language="JavaScript" type="text/javascript">var now = new Date();
   var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
   var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
   var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
   var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();

   today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;

   basicdate.innerHTML = today;
</script>
</div>
<div align="center" class="style2" id="wb_Shape3" style="position:absolute;left:3px;top:41px;width:350px;height:36px;z-index:7;">One of the HIV/AIDS victims in Jinja </div>
</div>
<p>
  <?php 
$Bogid=$_POST['Bogid'];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$lname=$_POST['lname'];
$nation=$_POST['nation'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$contrib=$_POST['contrib'];
$residence=$_POST['residence'];
$religion=$_POST['religion'];
$allow=$_POST['allow'];
$Bogid=addslashes($Bogid);
$fname=addslashes($fname);
$sname=addslashes($sname);
$lname=addslashes($lname);
$nation=addslashes($nation);
$age=addslashes($age);
$sex=addslashes($sex);
$contrib=addslashes($contrib);
$residence=addslashes($residence);
$religion=addslashes($religion);
$allow=addslashes($allow);
$db=mysql_pconnect("localhost","root","");
if(!$db)
{
echo "Database connection failure";
exit;
}
mysql_select_db("pil_db");
$query="insert into bogs 
values('".$Bogid."','".$fname."','".$sname."','".$lname."','".$nation."','".$age."','".$sex."','".$contrib."','".$residence."','".$religion."','".$allow."')";

$result=mysql_query("$query");
if($result)
{
echo mysql_affected_rows().' '.'BOGs Registered to Pilkington college Muguluka.';
exit;
}
else
{
echo "BOG Registration failure. Please Try Again";
exit;
}
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>