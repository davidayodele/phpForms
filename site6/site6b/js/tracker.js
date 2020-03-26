/* #### Caching of JS file may occur ##### */ 

var submitted=false;
var str = '';
var n = -1;

function _(id){ return document.getElementById(id); }
//function __(id){ return document.getElementsByClassName(id); }

var i = _("status_msg");
var j = _("successMessage");

function build_table() {
    console.log('building table...');
    $('#log').load('includes/log.php');
    console.log('table build success!');
}

$(document).ready(function(){
    console.log("tracker.js is loaded");
    _("submit_btn").disabled = true;
    build_table();
    //document.form1.action = "https://docs.google.com/forms/d/e/1FAIpQLSet-bBBZI1AKQCF3tzlMY5fBbwp6TooZxkE2drW023vpCZ9jQ/formResponse"    // First target
    //document.form1.target = "hidden_iframe";    // Open in a iframe                
}); // END Document Ready
  

var imNotARobot = function() {
    console.info("Captcha box was clicked");
    _("submit_btn").disabled = false;
    var name = $("#name").val();
    var fullName = name.split(' '),
    firstName = fullName[0],
    lastName = fullName[fullName.length - 1];

    $.ajax({
        url: 'recaptcha_scsn2.php',
        type: "POST",
        data: "name=" + name + "&g-recaptcha-response=" + grecaptcha.getResponse(),
        success: function(data) {
            str = grecaptcha.getResponse();
            console.log(grecaptcha.getResponse());
            //document.getElementById("status_msg").innerHTML = n;
            n = str.indexOf("03A");
            if (n >= 0) {
                if ($(".status_msg")[0]){
                    // Do something if class exists
                    $( "#status_msg" ).removeClass();
                    $("#status_msg").addClass( "successMessage" );
                } else {
                    // Do something if class does not exist
                }
                document.getElementById("status_msg").innerHTML = "Captcha check complete!";
                document.getElementById("status_msg").className = "successMessage";
            }
        }
    })
};

// Form submit function
$('#contactForm').submit(function(e){    
//function validateFormOnSubmit() {
    //e.preventDefault(); // Stop from submitting a form
    console.log("submission control success");
    var form = $(this);
    form.attr('action', 'https://docs.google.com/forms/d/e/1FAIpQLSet-bBBZI1AKQCF3tzlMY5fBbwp6TooZxkE2drW023vpCZ9jQ/formResponse');
    var loc = $('#input_loc').val();
    var typ = $('#input_typ').val();
    var pay = $('#input_pay').val();
    var desc = $('#input_desc').val();
    var name = $("#name").val();
    var fullName = name.split(' '),
    firstName = fullName[0],
    lastName = fullName[fullName.length - 1];

    //console.log(loc);
    var data_s = form.serialize(); // Seriale form 
    //form.submit();
    $.ajax({
        url : 'includes/log.php', /// send ajax request to this file
        data: data_s, // set ajax request to serialized data
        type: 'POST', // form must be submitted in order for POST data to exist!
        success: function() {                
            switch (true) {
                case (n >= 0 && _("catcher_id").value == ""): // && str.indexOf("[success] => 1") > 0
                _("status_msg").innerHTML = "";
                console.log("ajax request success");
            
                //$('#contactForm').attr('action', 'https://docs.google.com/forms/d/e/1FAIpQLSet-bBBZI1AKQCF3tzlMY5fBbwp6TooZxkE2drW023vpCZ9jQ/formResponse');     
        
                build_table(); // Rebuild log table
                console.log("Table build success!");
                loc = "";  // Empty input Field
                typ = "";  // Empty input Field
                pay = "";  // Empty input Field
                desc = "";  // Empty input Field
        
                //$('#contactForm').attr('action', "<?php echo($_SERVER['PHP_SELF']); ?>");
                
                _("submit_btn").value = _("input_loc").value;
                submitted = true;
                i.className += "successMessage";                
                _("status_msg").innerHTML = "Thank you, " + firstName + "! Your job post will be displayed shortly! Check your email for a receipt";
                //_("successMessage").innerHTML = "Thank you, " + firstName + "! Your job post will be displayed shortly!";
                _("submit_btn").disabled = true;
                return true;
                break;
                
                case (n < 0):
                i.className += "status_msg";
                i.className -= "successMessage";
                _("status_msg").innerHTML = reason.length + " " + n + ' Please click the "captcha" box';
                _("submit_btn").disabled = true;
                return false;
                break;
                
                default:
                    return false;
            } // END success cases
        } // END success
    }); // END ajax
}); // END form submit function