let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: 'Macbook Pro 16',
        tag: 'macbookpro16',
        price: 15000,
        inCart: 0
    },
    {
        name: 'Iphone 13 Pro',
        tag: 'iphone13pro',
        price: 5000,
        inCart: 0
    },
    {
        name: 'Apple Watch 7',
        tag: 'applewatch7',
        price: 3500,
        inCart: 0
    },
    {
        name: 'AirPods Pro',
        tag: 'airpodspro',
        price: 1000,
        inCart: 0
    },
]

for (let i=0; i<carts.length; i++){
    carts[i].addEventListener('click', () =>{
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function cartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers'); 

    productNumbers = parseInt(productNumbers);

    if(productNumbers){
       localStorage.setItem('cartNumbers', productNumbers + 1); 
    }else{
        localStorage.setItem('cartNumbers', 1);
    } 

    setItems(product);

}
    function setItems(product) {
        let cartItems = localStorage.getItem('productsInCart');
        cartItems = JSON.parse(cartItems);

        if(cartItems !== null){
            if(cartItems[product.tag] == undefined){
                cartItems = {
                   ...cartItems,
                   [product.tag]: product 
                }
            }
            cartItems[product.tag].inCart += 1; 
        }else{
            product.inCart = 1;
            cartItems = {
                [product.tag]: product
            }
        }
        
        
        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
    }

    function totalCost(product){

        let cartCost = localStorage.getItem('totalCost');

        if(cartCost != null){
            cartCost = parseInt(cartCost);
            localStorage.setItem("totalCost", cartCost + product.price);
        }else{
            localStorage.setItem("totalCost",product.price);
        }
        
    }

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products-container");
    
    console.log(cartItems);
    if(cartItems && productContainer){
        productContainer = '';
        Object.values(cartItems).map(item => {
            productContainer += `
            <div class="products">
                <icon-icon name="close-circle"></icon-icon>
                <img src="./img/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            `
        });
    }
}

displayCart();