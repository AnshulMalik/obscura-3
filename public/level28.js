var i=0;
var k=[71,73,86,69,32,77,69,32,84,72, 69, 32, 65, 78, 83, 87, 69, 82];
var flag=false;
$('html').keydown( function(e) {
    var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
    if(key == k[i]) 
    {
    	i++;
    	flag=true;
    }
    else
    	i=0;
    if(i==k.length )
    {
alert("www.reddit.com/r/obscuraconflu");
}
});
