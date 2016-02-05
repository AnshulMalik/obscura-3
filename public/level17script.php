
<?php
use App\Users;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	
	var img = $('.icon-offline');
      var right = function() {
        img.animate({left: '+=5'}, 1);
      }
      var left = function() {
        img.animate({left: '-=5'}, 1);
      }
      var up = function() {
        img.animate({top: '-=5'}, 1);
      }
      var down = function() {
        img.animate({top: '+=5'}, 1);
      }

      $(document).on('keydown', function(e) {
        switch(e.keyCode) {
          case 37 :
            left();
            break;
          case 38:
            up();
            break;
          case 39 :
            right();
            break;
          case 40:
            down();
            break;
        }
        if(img.position().left > window.innerWidth * .90) {
          window.location = "/level18?key="+<?php echo Auth::id(); ?>;
        }
      });


</script>
</body>
</html>