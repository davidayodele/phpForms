<!doctype html>
<html lang='zxx'>

<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<style type="text/css">
</style> 

<script src="https://cdn.tiny.cloud/1/13ijok7yx7shpshmj50c4kryl4r5ga5k8loqovuq48fejqfb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript" src="tinymce\js\tinymce\tinymce.js"></script>

<script type="text/javascript">
/*tinyMCE.init({
    theme:"advanced",
    mode:"textareas",
    plugins:"fullpage",
    theme_advanced_buttons3_add:"fullpage"
});*/

tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker, jbimages',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
});
/*
tinymce.init({
    imageupload_url: "uploads/",
    selector: "textarea",
    theme: "modern",
    language: "en",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor imageupload"
    ],
    content_css: "css/content.css",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons imageupload", 
    relative_urls: false
}); */
</script>

</head>

<body>
<a href="usr_pg.php">User Page</a> &nbsp;
<a href="adm_pg.php">Admin Page</a>
<!-- tinymce api_key: 13ijok7yx7shpshmj50c4kryl4r5ga5k8loqovuq48fejqfb -->
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
