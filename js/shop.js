let cart = JSON.parse(localStorage.getItem('cart')) || [];

function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart));
}




function addToCart(id, name, price){
    const item = cart.find(p => p.id === id);
    if(item){
        item.qty +=1;

    }else {
        cart.push({id, name, price, qty:1});
    }
    saveCart();
    renderCart();

}

function cnangeQty(id, delta){
    const item = cart.dinf(p => p.id === id);
    if (!item) return;
    item.qty += delta;
    if(item.qty <= 0) cart = cart.filter(p=> p.id !== id);
    saveCart();
    renderCart();
} 

function removeFromCart(id){
    cart = cart.filter(p => p.id !== id);
    saveCart();
    renderCart();
}

function renderCart(){
    
}