var lupa = document.querySelector('.glyphicon ');
    var elemento = document.getElementById('search');
    var label = document.getElementById('label-search');

    elemento.addEventListener('focus', function (event) {
      var div = document.getElementById('searchdiv');
      event.target.style.color = '#fff';
      div.style.border = '1px solid #ed5353';
      lupa.style.color = "#fff";
      event.target.style.transition = 'background-color 0.5s linear';
      div.style.transition = 'border 0.5s linear';
      lupa.style.transition = 'color 0.5s linear';
    }, true);


    elemento.addEventListener('blur', function (event) {
      var div = document.getElementById('searchdiv');
      lupa.style.color = "#1D1F21";
      div.style.border = '1px solid #202020';
    }, true);

    $(document).ready(function () {

      // Slide topo owl carousel 
      $("#owl-demo").owlCarousel({

        autoPlay: true,
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 1000,
        singleItem: true,
        pagination: true
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
      });


      // Slide topo owl carousel 
      $("#owl-demo-video").owlCarousel({

        autoPlay: false,
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 1000,
        singleItem: true,
        pagination: false
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
      });


    });