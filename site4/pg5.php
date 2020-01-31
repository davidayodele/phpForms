<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 5 - AJAX</title>
    <script>
    function suggest(str) {
        console.log(str);
        if(str.length < 1){
            document.getElementById('output').innerHTML = "";
            document.getElementById('msgBox').value = "";
        } else {
            //AJAX request
            var xml_http = new XMLHttpRequest();
            xml_http.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    document.getElementById('output').innerHTML = this.responseText;
                    document.getElementById('msgBox').value = this.responseText;
                }
            }
            xml_http.open("GET", "suggest.php?q="+str, true);
            xml_http.send();
        }
    }
    </script>
</head>
<body>
<div class="containter">
<h2>Dynamic Search</h2>
<form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>">
<input class="form-control" type="text" name="search" placeholder="Enter a search item" onkeyup="suggest(this.value)">
<br>
<input type="text" name="name" placeholder="Enter name">
<br>
<input type="tel" name="phone" placeholder="Enter Phone">
<br>
<textarea id="msgBox" name="msg" placeholder="Enter your msg">
</textarea>
<br>
<input type="submit" name="submit_btn" value="Submit">
</form>
<p>Suggestions: <span id="output"></span>
</p>
</div>
</body>
</html>