<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Email Template</title>
<style>
body{
	color:#424141;
	font-size:12px;
	text-align:left;
	margin:10px;
	font-family:sans-serif;
}
</style>
</head>
<body>
<?php include("include/analyticstracking.php"); ?>
<table width='65%' border='0' cellspacing='2' cellpadding='5'>
<tr>
<th colspan='2' align='left' scope='row'><strong>Contact Lead from Team Computers Pvt. Ltd</strong></th>
</tr>
<tr>
<th colspan='2' align='left' scope='row'>&nbsp;</th>
</tr>
<tr>
<th width='21%' align='left' scope='row'>Name</th>
<td width='79%' align='left'>: <?php echo $name; ?></td>
</tr>
<tr>
<th align='left' scope='row'>Contact</th>
<td align='left'>: <?php echo $contact; ?></td>
</tr>
<tr>
<th align='left' scope='row'>Email</th>
<td align='left'>: <?php echo $email; ?></td>
</tr>
<tr>
<th align='left' scope='row'>Your Organisation</th>
<td align='left'>: <?php echo $organisation; ?></td>
</tr>
<tr>
  <th align='left' scope='row'>Message</th>
  <td align='left' valign="top">: <?php echo $message; ?></td>
</tr>
<tr>
<th colspan='2' align='left' scope='row'>&nbsp;</th>
</tr>
<tr>
<th colspan='2' align='left' scope='row'>
    - Support Team <br>Team Computers Pvt. Ltd
</th>
</tr>
<tr>
<td colspan='2' align='left' scope='row'>&nbsp;</td>
</tr>
</table>
</body>
</html>