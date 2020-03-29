
        
   
   



 
       var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
       var x=document.getElementById("menu");
       var y=document.getElementById("main");
       
      var j = jQuery.noConflict();


       if(!isMobile){
       var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
           j(".menu").css({"height": "20%"});
           j("#logo").css({"height": "20%"});
           j(".list > a").css({"font-size": "36px"})
          } else {
           
           j("#logo").css({"height": "20%"});
           j(".list > a").css({"font-size": "28px"})
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
            
        
        j(function() {
            est();
        })

        function est(){
          j(".estonian").css("display", "block");
          j(".english").css("display", "none");
          j(".finnish").css("display", "none");
          j(".russian").css("display", "none");
          
        }

       

        function eng(){
          j(".english").css("display", "block");
          j(".estonian").css("display", "none");
          j(".finnish").css("display", "none");
          j(".russian").css("display", "none");
          
          
        }

        function fin(){
          j(".finnish").css("display", "block");
          j(".english").css("display", "none");
          j(".estonian").css("display", "none");        
          j(".russian").css("display", "none");
        }

        function rus(){
          j(".russian").css("display", "block");
          j(".english").css("display", "none");
          j(".estonian").css("display", "none");        
          j(".finnish").css("display", "none");
        }



        j("a[href='#logo']").click(function() {
          j("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
        });
      
    


        function openNav() {
          var k=document.getElementsByClassName("fa fa-bars");
        

        if (isMobile) {
          x.style.width = "75%";
          x.style.marginLeft = "50%";
          j("#closebtn").css("display", "block");
          j(".icon").css("display", "none");

        } 

      }

      function closeNav(){
        
        j(".icon").css("display", "block");
        j("#closebtn").css("display", "none");
        x.style.width = "0";
      }