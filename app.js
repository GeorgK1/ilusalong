
        
   
   



 
       var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;

       if(!isMobile){
       var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
           $(".menu").css({"height": "20%"});
           $("#logo").css({"height": "20%"});
           $(".list > a").css({"font-size": "36px"})
          } else {
           $(".menu").height(50); 
           $("#logo").css({"height": "20%"});
           $(".list > a").css({"font-size": "28px"})
          }
          prevScrollpos = currentScrollPos;
        }
      }
     
        
        // Initialize and add the map
        function initMap() {
          // The location of ilusalong
          var melon = {lat: 59.442241, lng: 24.765689};
          // The map, centered at ilusalong
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 18, center:melon});
          // The marker, positioned at ilusalong
          var marker = new google.maps.Marker({position: melon, map: map});
        }
            
        $("a[href='#logo']").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
        });
      
        function openNav() {
          document.getElementById("menu").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
          document.getElementById("menu").style.width = "0";
        }