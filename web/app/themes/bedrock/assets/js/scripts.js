jQuery(document).ready(function($) {
  // HEADER SCROLLING
    $('.nav-link').addClass('text-white');
    $(window).scroll(function() {
      var scrollPos = $(window).scrollTop(),
      navbar = $('#navbar');
      logo = $('#logo');
      logoScroll = $('#logo-scrolled');

      if (scrollPos > 20) {
        navbar.addClass('bg-light');
        logo.addClass('d-none');
        logo.removeClass('d-inline-block');
        logoScroll.removeClass('d-none');
        logoScroll.addClass('d-inline-block');
        $('.nav-link').removeClass('text-white');
        $('.nav-link').addClass('text-dark');
      } else {
        navbar.removeClass('bg-light');
        logo.removeClass('d-none');
        logo.addClass('d-inline-block');
        logoScroll.addClass('d-none');
        logoScroll.removeClass('d-inline-block');
        $('.nav-link').removeClass('text-dark');
        $('.nav-link').addClass('text-white');
      }
    });
    // SEARCH FORM
    $.getJSON("https://tarekraafat.github.io/autoComplete.js/demo/db/generic.json", function(data) {
        autoCompleteData = [];
        for (var i = 0, len = data.length; i < len; i++) {
          autoCompleteData.push(data[i].food + ", " + data[i].cities + ", " + data[i].animals);
        }
        const autoCompleteJS = new autoComplete({
          selector: "#autoComplete",
          placeHolder: "Chercher un aliment, une ville ou un animal...",
          data: {
              src: autoCompleteData,
              cache: true,
          },
          resultsList: {
              element: (list, data) => {
                  if (!data.results.length) {
                      // Create "No Results" message element
                      const message = document.createElement("div");
                      // Add class to the created element
                      message.setAttribute("class", "no_result");
                      // Add message text content
                      message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                      // Append message element to the results list
                      list.prepend(message);
                  }
              },
              noResults: true,
          },
          resultItem: {
              highlight: true
          },
          events: {
              input: {
                  selection: (event) => {
                      const selection = event.detail.selection.value;
                      autoCompleteJS.input.value = selection;
                  }
              }
          }
      });
    });

    // PARTNERS SLIDER
    $('.partners').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
});