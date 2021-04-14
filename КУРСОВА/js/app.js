// show cart
(function (){
    const cartInfo = document.getElementById('cart-info'); // show the actual cart
    const cart = document.getElementById('cart');

    cartInfo.addEventListener('click', function (){ // the function will be executed, when the event fires
     cart.classList.toggle('show-cart'); // showing and hiding the products list
    });
})();

// add items to the cart
(function (){
    const cartBtn = document.querySelectorAll('.store-item-icon');
    cartBtn.forEach(function (btn){
        btn.addEventListener('click',function (event){
            // console.log(event.target); //  target will let us know what element was clicked
            if(event.target.parentElement.classList.contains('store-item-icon')){ // the event only once when we click on the icon
             let fullPath = event.target.parentElement.previousElementSibling.src; // product image
             let pos = fullPath.indexOf('img') + 3; // remove img from the full path
             let partPath = fullPath.slice(pos);
        const  item = {}; // empty object
        item.img = `img-cart${partPath}`; // this is going to be the image that we are getting every time on a different icon where we are clicking
        let name = event.target.parentElement.parentElement.nextElementSibling.children[0].children[0].textContent;
                             // |    span   ||img-container||    card-body    ||card-text|
                item.name = name; // img cart + name
        let price = event.target.parentElement.parentElement.nextElementSibling.children[0].children[1].textContent;
        let finalPrice = price.slice(1).trim(); // remove extra white spaces

        item.price = finalPrice;
        //console.log(item);
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item','d-flex','justify-content-between','text-capitalize','my-3'); // classed in the div

    cartItem.innerHTML = `
            <img src="${item.img}" class="img-fluid rounded-circle" id="item-img" alt="">
            <div class="item-text">

              <p id="cart-item-title" class="font-weight-bold mb-0">${item.name}</p>
              <span>$</span>
              <span id="cart-item-price" class="cart-item-price" class="mb-0">${item.price}</span>
            </div>
            <a href="#" id='cart-item-remove' class="cart-item-remove">
              <i class="fas fa-trash"></i>
            </a>
          </div>
          `;
    // select cart
        const cart = document.getElementById('cart');
        const total = document.querySelector('.cart-total-container');

        cart.insertBefore(cartItem,total); // what we want to insert and where
        alert('Добавен в количката');
        showTotals();
    }

        });
    });
  // show totals
    function showTotals(){
        const total = [];
        const items = document.querySelectorAll('.cart-item-price');

        items.forEach(function (item){
            total.push(parseFloat(item.textContent)); // switching a string into a number
        });
        const totalMoney = total.reduce(function(total,item){ // total - what is returned at the end of reduce
                                                              // item - each and every item as we are looping through
            total += item;
          return total;
        },0);
        const finalMoney = totalMoney.toFixed(2); // how many number to be displayed after the dot

        document.getElementById('cart-total').textContent = finalMoney;
        document.querySelector('.item-total').textContent = finalMoney; // class -> querySelector
        document.getElementById('item-count').textContent = total.length;
    }
})();