<!doctype html>
<html lang='zxx'>

<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<style type="text/css">
</style> 
</head>

<body>
<a href="usr_pg.php">User Page</a> &nbsp;
<a href="adm_pg.php">Admin Page</a>

<h2>Admin Panel</h2>
<p>Edit page here:</p>
<br>
<br>

<form id="content_form" method="post" action="post_content.php"><!-- content will be sent to post_content.php -->
<textarea rows=15 cols="50" width="50%" name="content" id="text_area"><?php include ('file.txt'); /*Allows viewing current contents*/?></textarea> <!-- leave on same line to avoid space insertion -->
<br>
<input id="submit" type="submit" value="Save"/>
</form>

</body>
</html>
