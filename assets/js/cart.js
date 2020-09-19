import '../scss/template/cart/index.scss'
import $ from 'jquery'
let minus = (e) => {
    let actuelValue = parseInt(document.getElementById('item-quantity').innerText);
    actuelValue--;
    document.getElementById('item-quantity').innerText = actuelValue.toString();
    event.preventDefault();
};

let plus = () => {
    let actuelValue = parseInt(document.getElementById('item-quantity').innerText);
    actuelValue++;
    document.getElementById('item-quantity').innerText = actuelValue.toString();
    event.preventDefault();
}