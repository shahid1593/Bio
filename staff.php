<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-size: 14px;
}
</style>
</head>

<body style="text-align: center; font-size: 10px;">
<p>
  <label></label>
<img src="images/2533062977749241.jpg" width="143" height="143" alt=""/></p>
<p>&nbsp;</p>
<h1><strong><u>ATTENDANCE PREVIEW</u></strong></h1>
<form id="form3" name="form3" method="post">
<marquee ALIGN="Top" LOOP="infinite" BGCOLOR="white" DIRECTION="left" HEIGHT="30" WIDTH="400">
    <strong style="color: #010101"> <span style="font-size: 16px">&quot;WELCOME STAFF&quot;</span></strong>
  </marquee>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="656" height="18" border="1" align="center">
    <tbody>
      <tr>
        <th width="75" scope="col">Name</th>
        <th width="72" scope="col">Adm No:</th>
        <th width="64" scope="col">Date</th>
        <th width="55" scope="col">Subject1</th>
        <th width="41" scope="col">Hour1</th>
        <th width="55" scope="col">Subject2</th>
        <th width="41" scope="col">Hour2</th>
        <th width="55" scope="col">Subject3</th>
        <th width="59" scope="col">Hour3</th>
      </tr>
    </tbody>
  </table>
  <p><?PHP
$db=mysql_connect('localhost','root','');
$conn=mysql_select_db("Biometric", $db);
$user=$_REQUEST['username'];

$r1=mysql_query("select * from attendance", $db);
While($row=mysql_fetch_array($r1))
{
?>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
  <table width="656" height="26" border="2" align="center">
    <tr>
      <td width="75"><?php echo $row['Name'];?></td>
      <td width="72"><?php echo $row['Adm_No'];?></td>
      <td width="64"><?php echo $row['Date'];?></td>
      <td width="56"><?php echo $row['Sub1'];?></td>
      <td width="44"><?php echo $row['Hour1'];?></td>
      <td width="56"><?php echo $row['Sub2'];?></td>
      <td width="44"><?php echo $row['Hour2'];?></td>
      <td width="56"><?php echo $row['Sub3'];?></td>
      <td width="61"><?php echo $row['Hour3'];?></td>
    </tr>
  </table>
  <p>
  <?php
}?>
</p>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <blockquote>
                            <blockquote>
                              <blockquote>
                                <p>&nbsp;</p>
                                <p>
                                  <input name="reset" type="reset" id="reset" onClick="MM_goToURL('parent','login.php');return document.MM_returnValue" value="Logout">
                                </p>
                              </blockquote>
                            </blockquote>
                          </blockquote>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
  <p>&nbsp;</p>
</form>
</body>
</html>