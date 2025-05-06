$(document).ready(function () {
    console.log("Welcome Sahil!");
});

$(document).ready(function () {
    $("#resi_proj").owlCarousel({
        loop: true, // Infinite loop
        margin: 15, // Space between items
        nav: true, // Navigation arrows
        // dots: true, // Pagination dots
        autoplay: true, // Auto scroll
        autoplayTimeout: 3000, // 3 sec delay
        autoplayHoverPause: true, // Pause on hover
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});

$(document).ready(function () {
    $("#comm_proj, #regi_proj_list2, #commercial_uc, #commercial_rom, #commercial_all").owlCarousel({
        loop: false,
        margin: 15,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});

$(document).ready(function () {
    $("#milestones, #awards_slider, #regi_proj_list, #regi_proj_list4, #regi_proj_list1").owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});


// residential and commercial

$('#delivery_list_2022, #delivery_list_2021, #delivery_list_2020, #delivery_list_2019, #delivery_list_2018, #delivery_list_2015, #delivery_list_2014, #delivery_list_2013, #delivery_list_2010, #delivery_list_2009, #delivery_list_2008').owlCarousel({
    loop: false,
    margin: 15,
    nav: false,
    responsive: {
        0: {
            items: 2
        }
    }
})

$(document).ready(function () {

    $(".more_content").hide();

    $('.show_hide').on("click", function () {

        $(".more_content").slideToggle("slow");
        $('.show_hide').toggleClass('');

    });
})

$(document).ready(function () {

    $("#show_content_1").hide();

    $('#faq_1').on("click", function () {

        $("#show_content_1").slideToggle("slow");
        $('#faq_1 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).ready(function () {

    $("#show_content_2").hide();

    $('#faq_2').on("click", function () {

        $("#show_content_2").slideToggle("slow");
        $('#faq_2 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).ready(function () {

    $("#show_content_3").hide();

    $('#faq_3').on("click", function () {

        $("#show_content_3").slideToggle("slow");
        $('#faq_3 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).ready(function () {

    $("#show_content_4").hide();

    $('#faq_4').on("click", function () {

        $("#show_content_4").slideToggle("slow");
        $('#faq_4 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).ready(function () {

    $("#show_content_5").hide();

    $('#faq_5').on("click", function () {

        $("#show_content_5").slideToggle("slow");
        $('#faq_5 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).ready(function () {

    $("#show_content_6").hide();

    $('#faq_6').on("click", function () {

        $("#show_content_6").slideToggle("slow");
        $('#faq_6 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).ready(function () {

    $("#show_content_7").hide();

    $('#faq_7').on("click", function () {

        $("#show_content_7").slideToggle("slow");
        $('#faq_7 i').toggleClass('fa-plus fa-minus');

    });
})

$(document).on('click', '[data-type="roombook"]', function (e) {
    e.preventDefault();

    let id = $(this).data('room-id');
    let userId = $(this).data('user-id');
    let roomPrice = $(this).data('room-price');

    $.ajax({
        type: 'post',
        data: {
            'roomid': id,
            'userId': userId,
            'roomPrice': roomPrice,
        },
        url: 'http://localhost/phpProjects/realstate_website/pages/addtocart.php',
        success: function (response) {
            if (response) {
                $('#cartCount').text(response)
                console.log(response);
            }
        }
    })
})

$(document).on('click', '[data-type="add"]', function (e) {
    e.preventDefault();

    let id = $(this).data('room-id');
    let userId = $(this).data('user-id');
    let roomPrice = $(this).data('room-price');

    let quantityDiv = $(this).closest('.card-body').find('.quantity');
    let subtotalDiv = $(this).closest('.card-body').find('.subtotal');

    $.ajax({

        type: 'post',

        data: {
            'roomid': id,
            'userId': userId,
            'roomPrice': roomPrice,
        },

        url: 'http://localhost/phpProjects/realstate_website/pages/addition.php',

        success: function (response) {
            let data = JSON.parse(response);
            quantityDiv.text('Quantity : '+ data.quantity);
            subtotalDiv.text('Sub Total Price : ₹ ' + data.subtotal);
        }
    })
})

$(document).on('click', '[data-type="sub"]', function (e) {
    e.preventDefault();

    let id = $(this).data('room-id');
    let userId = $(this).data('user-id');
    let roomPrice = $(this).data('room-price');

    let quantityDiv = $(this).closest('.card-body').find('.quantity');
    let subtotalDiv = $(this).closest('.card-body').find('.subtotal');

    $.ajax({

        type: 'post',

        data: {
            'roomid': id,
            'userId': userId,
            'roomPrice': roomPrice,
        },

        url: 'http://localhost/phpProjects/realstate_website/pages/subtraction.php',

        success: function (response) {

            let data = JSON.parse(response);
            quantityDiv.text('Quantity : ' + data.quantity);
            subtotalDiv.text('Sub Total Price : ₹ ' + data.subtotal);
            
        }
    })
})

$(document).on('click', '[data-type="payment"]', function (e) {
    e.preventDefault();

    let userId = $(this).data('user-id');
    
    $.ajax({
        type: 'post',
        data: {
            'userId': userId,
        },
        url: 'http://localhost/phpProjects/realstate_website/pages/proceedtopay.php',
        success: function (response) {
            if (response) {
                $('#cartCount').text(response)
            }
        }
    })
})
