let totalPrice = 0;
let totalItems = 0;
let cntItem = document.querySelectorAll('#text');
let price = document.querySelectorAll('#price');

for (let i = 0; i < cntItem.length; i++) {
    totalPrice += (parseInt(cntItem[i].innerHTML) * parseInt(price[i].innerHTML));
    totalItems += parseInt(cntItem[i].innerHTML);
}
console.log(totalPrice);
let showItems = document.getElementById('display-total-items');
showItems.textContent = totalItems;
let showPrice = document.getElementsByClassName('display-price');
for (i = 0; i < showPrice.length; i++) {
    showPrice[i].textContent = totalPrice;
}