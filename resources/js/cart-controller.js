let cantidad = document.querySelector(".update-cart")

cantidad.addEventListener("change", function (e) {
    e.preventDefault();

    var ele = document.querySelector(this);

    $.ajax({
        url: "{{ route('update.cart') }}",
        method: "patch",
        data: {
            _token: '{{ csrf_token() }}', 
            id: ele.parents("tr").attr("data-id"), 
            quantity: ele.parents("tr").querySelector(".quantity").value
        },
        success: function (response) {
           window.location.reload();
        }
    });
});

document.querySelector(".remove-from-cart").click(function (e) {
    e.preventDefault();

    var ele = document.querySelector(this);

    if(confirm("Are you sure want to remove?")) {
        $.ajax({
            url: "{{ route('remove.from.cart') }}",
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id")
            },
            success: function (response) {
                window.location.reload();
            }
        });
    }
});