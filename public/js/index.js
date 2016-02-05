var tl= new TimelineLite();

TweenLite.set("path",{strokeWidth:1,stroke:"white 	",fill:"rgba(0,0,0,0)"});


tl.from("path",3,{drawSVG:"0%"})
  .to("path",2,{fill:"rgba(255, 255, 255, .6)",stroke:"rgba(0, 0, 0, .6)"})

  setInterval(function(){ 
  	tl.to("path", 1.5, {fill: "rgb("+ Math.ceil( Math.random() * 255) + ", " + Math.ceil( Math.random() * 255) + ", " + Math.ceil( Math.random() * 255) + ")"});


  }, 1500);


