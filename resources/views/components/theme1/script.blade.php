<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="{{ LoadAssets('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ LoadAssets('js/bootstrap.min.js') }}"></script>
<script src="{{ LoadAssets('js/owl.carousel.js') }}"></script>
<script src="{{ LoadAssets('js/bootsnav.js') }}"></script>

<!-- // toastify -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
$(".owl-brand").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [
        "<img src='images/prev-icon.png'/>",
        "<img src='images/next-icon.png'/>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        600: {
            items: 3
        },
        800: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
});
</script>

<script>
function Notify(msg, status) {
    Toastify({
        text: msg,
        className: "info",
        duration: 2000,
        close: true,
        gravity: "bottom", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        style: {
            background: status ? "green" : "red",
        }
    }).showToast();

}

function addToCart(product_id, qty = 1, attributes_id = '') {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '{{ route("addUpdateToCart") }}',
        method: 'POST',
        data: {
            qty: qty,
            attributes_id: attributes_id,
            product_id: product_id,
        },
        success: function(response) {
            $('.lblCart').html(response.total_count_html);
            Notify('Item Added To Cart !', true);

        },
        error: function(error) {
            Notify(error.message, false);
        }
    });

}


function showfunction(slug) {
    var Callurl = `{{ url('showproduct')}}/` + slug;

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: Callurl,
        data: {
            slug: slug,
        },
        success: function(response) {
            $("#product-detail-modal").html(response);
            $('#productModalShow').modal('show');
        },
        error: function(error) {},
    });
}
</script>