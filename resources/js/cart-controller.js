const inputResta = document.getElementsByName('resta');
const inputSuma = document.getElementsByName('suma');
const trash = document.querySelectorAll('.remove-from-cart');

inputResta.forEach(el => {
    el.addEventListener('click', function() {
        this.parentNode.querySelector(".update-cart").stepDown(); 
         
        //console.log(this.parentNode.querySelector(".update-cart"));
        
        updateCart(this.parentNode.querySelector(".update-cart"));
    });
});

//document.querySelectorAll(".update-cart").dispatchEvent(ev);

inputSuma.forEach(el => {
    el.addEventListener('click', function() {
        this.parentNode.querySelector(".update-cart").stepUp();

        updateCart(this.parentNode.querySelector(".update-cart"));
    })
});

function updateCart(obj) {
    //console.log(obj.value);
    //console.log(obj.closest("li").getAttribute("id"));
    
    fetch('/update-cart', {
        method: 'PATCH',
        headers: { 
            'Content-Type': 'application/json',
            "Access-Control-Allow-Origin": "*",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token').getAttribute('content')
        },
        body: JSON.stringify({ 
            id: obj.closest("li").getAttribute("id"),
            quantity: obj.value,
        })
    })
    .then(response => {
        if (response.ok) {
            console.log('response ok');
        } else {
            console.log('response error');
        }
    })
    .then(data => {
        window.location.reload();
    })
    .catch(err => {
        console.log(err);
    })
    
}

trash.forEach(tr => {
    tr.addEventListener("click", function() {
        //console.log(tr.closest("li").getAttribute("id"));

        fetch('/remove-from-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "Access-Control-Allow-Origin": "*",
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token').getAttribute('content')
            },
            body: JSON.stringify({ 
                id: tr.closest("li").getAttribute("id"),
            })
        })
        .then(response => {
            if (response.ok) {
                console.log('response ok');
            } else {
                console.log('response error');
            }
        })
        .then(result => {
            window.location.reload();
        })
        .catch(err => {
            console.log(err);
        })
    });
});