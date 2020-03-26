$(document).ready(function() {
    
	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    var hours = today.getHours();
    var minutes = today.getMinutes();
    var seconds = today.getSeconds();
    var meridiem = " AM";
	
	function showTime() {
	    
	    var utc_offset = -0; // Arizona = UTC-0700 
	    var today = new Date();
        var dd = today.getDate(); // today.getUTCDate();  // gets UTC date instead of local
        if (dd < 10){
          dd = "0" + dd;
        }
        var mm = today.getUTCMonth()+1; //January is 0!
        if (mm < 10){
          mm = "0" + mm;
        }
        var yyyy = today.getUTCFullYear();
        //var hours = today.getUTCHours();
        var hours = today.getHours();
        hours = hours + utc_offset;
        if (hours < 10){
          hours = "0" + hours;
        }
        var minutes = today.getUTCMinutes();
        if (minutes < 10){
          minutes = "0" + minutes;
        }
        var seconds = today.getUTCSeconds();
        if (seconds < 10){
          seconds = "0" + seconds;
        }
        var meridiem = " AM";
        if (hours > 12){
          hours = hours - 12;
          meridiem = " PM";
        }
        today =  mm + '/' + dd + '/' + yyyy + ' - ' + hours + ':' + minutes + ':' + seconds + meridiem;
	    document.getElementById('scsn_year').innerHTML = " " + yyyy;
	}
	
	showTime();
	
	setInterval(showTime, 86400000); /*5000ms = 5s => 12*5000 = 60,000ms = 60s => 24*60*60,000 = 86,400,000*/
});