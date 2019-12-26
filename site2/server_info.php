<?php
// $_SERVER SUPERGLOBAL

// Creates server array
$serv1 = [
  'Host Server Name' => $_SERVER['SERVER_NAME'], // The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.
  'Host Server Addr' => $_SERVER['SERVER_ADDR'], // The IP address of the server under which the current script is executing.
  'Host Header info' => $_SERVER['HTTP_HOST'], // Contents of the Host: header from the current request, if there is one.
  'Host Server Software' => $_SERVER['SERVER_SOFTWARE'], // Server identification string, given in the headers when responding to requests.
  'Host Server Protocol' => $_SERVER['SERVER_PROTOCOL'], // Name and revision of the information protocol via which the page was requested; e.g. 'HTTP/1.0';
  'Host Request Method' => $_SERVER['REQUEST_METHOD'], // Which request method was used to access the page; e.g. 'GET', 'HEAD', 'POST', 'PUT'.
  'Host Document Root' => $_SERVER['DOCUMENT_ROOT'],  // The document root directory under which the current script is executing, as defined in the server's configuration file.
  'Remote Server Addr' => $_SERVER['REMOTE_ADDR'], // The IP address from which the user is viewing the current page.
  'Host Server Port' => $_SERVER['SERVER_PORT'], // The port on the server machine being used by the web server for communication. For default setups, this will be '80'; using SSL, for instance, will change this to whatever your defined secure HTTP port is
  'Present Page' => $_SERVER['PHP_SELF'], // The filename of the currently executing script, relative to the document root.
  'Script Name' => $_SERVER['SCRIPT_NAME'], // // The relative pathname of the currently executing script.
  'Script filename' => $_SERVER['SCRIPT_FILENAME'], // The absolute pathname of the currently executing script.
  'Server Admin' => $_SERVER['SERVER_ADMIN'] // The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file. If the script is running on a virtual host, this will be the value defined for that virtual host.
];

echo($serv1['Host Server Name']."<br>"); // output: localhost
echo($serv1['Host Header info']."<br>"); // output: localhost
echo($serv1['Host Server Software']."<br>"); // output: Apache/2.4.34 (Win32) OpenSSL/1.1.0i PHP/7.2.9
echo($serv1['Host Server Protocol']."<br>"); // output: HTTP/1.1
echo($serv1['Host Request Method']."<br>"); // output: GET
echo($serv1['Host Document Root']."<br>"); // output: C:/myDrive/GitPortable/XamppUSB/htdocs
echo($serv1['Remote Server Addr']."<br>"); // output: ::1
echo($serv1['Host Server Port']."<br>"); // output: 80
echo($serv1['Present Page']."<br>"); // output: /phpForms/site2/server_info.php
echo($serv1['Script Name']."<br>"); // output: /phpForms/site2/server_info.php
echo($serv1['Script filename']."<br><br>"); // output: C:/myDrive/GitPortable/XamppUSB/htdocs/phpForms/site2/server_info.php



// Creates client array
$client1 = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'], // Contents of the User-Agent: header from the current request, if there is one. This is a string denoting the user agent being which is accessing the page. A typical example is: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Among other things, you can use this value with get_browser() to tailor your page's output to the capabilities of the user agent.
    'Client IP' => $_SERVER['REMOTE_ADDR'], // The IP address from which the user is viewing the current page
    'Client Port' => $_SERVER['REMOTE_PORT'] // The port being used on the user's machine to communicate with the web server.
];

echo($client1['Client System info']."<br>"); // output: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36 OPR/65.0.3467.72
echo($client1['Client IP']."<br>"); // output: ::1
echo($client1['Client Port']."<br>"); // output: 51402

?>
