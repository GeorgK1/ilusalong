
        
        $(document).ready(function() {
            $('.slider-2').slick({
                infinite: false,
                arrows: true,
                dots: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                mobileFirst: true,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
            })
        })
       
   



 
       
       var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
           $(".menu").css({"height": "25%"});
           $("#logo").css({"height": "30%"});
           $("li, a").css({"font-size": "40px"})
          } else {
           $(".menu").height(50); 
           $("#logo").css({"height": "20%"});
           $("li, a").css({"font-size": "28px"})
          }
          prevScrollpos = currentScrollPos;
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
      