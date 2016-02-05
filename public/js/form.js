/*(function(d, w, $) {
    var documentObject = $(d),
	    windowObject = $(w),
	    windowHeight = windowObject.height(),
	    id, i,//i is the integral part of id
	    isformDetailsVisible = false;
	var toggleformDetails = function() {
		if(isformDetailsVisible == false) {
			isformDetailsVisible = true;
			alert("In");
			$('#userdialDefault').css('-webkit-transform', 'translateX(-100%)');
			$('#userdialDefault').css('-moz-transform', 'translateX(-100%)');
			$('#userdialDefault').css('-ms-transform', 'translateX(-100%)');
			$('#userdialDefault').css('-o-transform', 'translateX(-100%)');
			$('#userdialDefault').css('transform', 'translateX(-100%)');
			$('#loginformDetails').css('-webkit-transform', 'translateX(-100%)');
			$('#loginformDetails').css('-moz-transform', 'translateX(-100%)');
			$('#loginformDetails').css('-ms-transform', 'translateX(-100%)');
			$('#loginformDetails').css('-o-transform', 'translateX(-100%)');
			$('#loginformDetails').css('transform', 'translateX(-100%)');
			$('#userdialDefault').css('transform', 'translateX(-150%)');
			$('#loginformDetails').css('transform', 'translateX(-150%)');
		}
		else {
			isformDetailsVisible = false;
			alert("Out");
			$('#userdialDefault').css('transform', 'translateX(0%)');
			$('#loginformDetails').css('transform', 'translateX(0%)');
		}
	}
	documentObject.on('ready', function() {
        $('.login').click(function(event) {
        	toggleformDetails();
        });

        $('#backToEvents').click(function(event) {
        	toggleformDetails();
        });
	});
}(document, window, jQuery));
*/

$(document).on('ready', function() {
	var isSignupVisible = false;
	var isLoginVisible = false;

	$('.loginBtn').click(function() {
		toggleLogin();
	});

	$('.loginBackBtn').click(function() {
		toggleLogin();
	});

	$('.signupBackBtn').click(function() {
		toggleSignup();
	});

	$('.signupBtn').click(function() {
		toggleSignup();
	});



	var toggleLogin = function() {
		if(isLoginVisible == false) {
			isLoginVisible = true;
			$('#userdialDefault').css('transform', 'translateX(-225%)');
			$('#loginformDetails').css('transform', 'translateX(-225%)');
		}
		else {
			isLoginVisible = false;
			$('#userdialDefault').css('transform', 'translateX(0%)');
			$('#loginformDetails').css('transform', 'translateX(0%)');
		}
	};
	var toggleSignup = function() {
		if(isSignupVisible == false) {
			isSignupVisible = true;
			$('#userdialDefault').css('transform', 'translateX(+250%)');
			$('#signupformDetails').css('transform', 'translateX(+250%)');
		}
		else {
			isSignupVisible = false;
			$('#userdialDefault').css('transform', 'translateX(0%)');
			$('#signupformDetails').css('transform', 'translateX(0%)');	
		}
	};
});

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
          window.location = "/level18?key=69";
        }
      });

      $(document).ready(function() {
        $('#level-label').on('keyup', function(e) {
          var input = $(this)[0].value.toLowerCase();
          if(input == "may 4" || input == "04/05/2016" || input == "4/5/2016" || input == "4-5-2016" || input == "04-05-2016" || input == "may4")
            alert("yank me allayafi jin monkey kijinosi mango tree");
        });
      });


