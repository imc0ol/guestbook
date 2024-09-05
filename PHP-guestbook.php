<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<TITLE>PHP Guestbook Script</TITLE>
<meta name="description" content="PHP Guestbook Script">
<meta name="keywords" content="PHP Guestbook Script,Guestbook Script,php,mysql,dhtml, DHTML">
<SCRIPT LANGUAGE="JavaScript">
<!--
function textCounter(field, countfield, maxlimit) {
if (field.value.length > maxlimit){field.value = field.value.substring(0, maxlimit);}
else{countfield.value = maxlimit - field.value.length;}}
</script>
<style type="text/css">
BODY {margin-left:0; margin-right:0; margin-top:0;text-align:left;background-color:#ddd}
p, td {font:13px Verdana; color:black;}
h1 {font:bold 40px Verdana; color:blue;text-align:center}
h2 {font:bold 13px Verdana; color:blue;text-align:center}
</style>
</head>
<body>

<?php

include_once"config.php";

$sql="CREATE TABLE IF NOT EXISTS guestbook (
id int(4) NOT NULL auto_increment,
name varchar(42) NOT NULL default '',
email varchar(62) NOT NULL default '',
websiteURL varchar(62) NOT NULL default '',
comment longtext NOT NULL,
datetime varchar(42) NOT NULL default '',
PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=1";

mysql_query($sql);

mysql_close();

?>

<table width="654" border="1" align="center" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
<tr>
<td><b><h1>Please Sign Our Guestbook</h1></b></td>
</tr>
</table>
<table width="650" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
<tr>
<form id="form" name="form" method="post" action="add-a-guest-to-guestbook.php">
<td>
<table width="650" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
<tr>
<td align="right" width="190">Name: </td>
<td width="360"><input name="name" type="text" id="name" size="42" maxlength="42"></td>
<td width="50">&nbsp;</td>
</tr>
<tr>
<td align="right">Email: </td>
<td><input name="email" type="text" id="email" size="62" maxlength="62"></td>
<td width="50">&nbsp;</td>
</tr>
<tr>
<td align="right">Website URL: </td>
<td><input name="websiteURL" type="text" id="websiteURL" size="62" maxlength="62"></td>
<td width="50">&nbsp;</td>
</tr>
<tr>
<td align="right">Comment: </td>
<td><textarea name="comment" cols="40" rows="5" id="comment" onKeyDown="textCounter(this.form.comment,this.form.remLen,200)" onKeyUp="textCounter(this.form.comment,this.form.remLen,200)"></textarea></td><td valign='top'>
<input readonly type='text' name='remLen' size='3' maxlength='3' value="200"><br></td>
<td width="50">&nbsp;</td>
</tr>
<tr>
<td align="right">Captcha: </td>
<td><IMG SRC="login-question.png" WIDTH=294 HEIGHT=36 BORDER=0></td>
<td width="50">&nbsp;</td>
</tr>
<tr>
<td align="right">Answer: </td>
<td><input name="answer" type="text" id="answer" size="20" maxlength="42"></td>
<td width="50">&nbsp;</td>
</tr>
<tr>
<td valign="top">&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit" value="Reset"></td>
<td width="50">&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><b><h2><a href="view-our-guestbook.php">View Our Guestbook</a></h2></b></td>
</tr>
</table>

</body>
</html>
