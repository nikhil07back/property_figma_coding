var swiper = new Swiper(".property-image-slider", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});

document.querySelectorAll('.tagify-input').forEach(element => {
new Tagify(element);
});

let table = new DataTable('#data-table');

const handleSelectAllTableRows = (event) => {

    let tableRow = event.target.parentNode.parentNode.parentNode.parentNode.querySelectorAll('tbody tr');

    if (event.target.checked) {
        tableRow.forEach((row) => {
            row.querySelector('td:first-child input[type=checkbox]').checked = true;
        })
    }
    else {
        tableRow.forEach((row) => {
            row.querySelector('td:first-child input[type=checkbox]').checked = false;
        })
    }
    
}

$(document).click(function(){
    $(".dropdown-menu").hide();
  });
  
  /* Clicks within the dropdown won't make
     it past the dropdown itself */
  $(".dropdown").click(function(e){
    $('.dropdown-menu').hide();
    e.stopPropagation();
    $(this).find('.dropdown-menu').show();
  });


// $('.dropdown').click(function () {
//     $('.dropdown-menu').hide();
//  });

//  $('.dropdown').focusout(function () {
//     $('.dropdown-menu').hide();
//  });

