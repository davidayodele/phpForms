function CommandLine(str) {
    // code goes here  
    var input = [];  
    var parts = str.split("=");  
    var subpart;  
    var keys = [];  
    var vals = [];  
    var i = 0;
    parts.forEach(item => {    
        //console.log(item)    
        subpart = item.split(" ")        
        //console.log(subpart[subpart.length - 1])        
        keys[i] = subpart[subpart.length - 1]    
        vals[i] = item.substring(0, (item.length - keys[i].length) - 1)        
        console.log(keys[i].length)    
        console.log(vals[i].length)     
        console.log("")        
        i++  
    });
   return str;
}   
// keep this function call here 
console.log(CommandLine(readline()));