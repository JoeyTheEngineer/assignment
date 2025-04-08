'use strict';
//all initial elements
const payAmountBtn = document.querySelector('#payAmount');
const decrementBtn = document.querySelectorAll('#decrement');
const quantityElem = document.querySelectorAll('#quantity');
const incrementBtn = document.querySelectorAll('#increment');
const priceElem = document.querySelectorAll('#price');
const totalElem = document.querySelector('#total');
//loop for add event on multiple increment and decrement button
for(let i=0; i<incrementBtn.length; i++){
    incrementBtn[i].addEventListener('click', function(){
        let increment = Number(this.previousElementSibling.textContent);
        increment++;
        this.previousElementSibling.textContent = increment;
        totalCalc();
    });

    decrementBtn[i].addEventListener('click',function(){
        let decrement = Number(this.nextElementSibling.textContent);
       //minus decrement variable value by 1 based on condition
        decrement <= 1 ? 1 : decrement--;
        this.nextElementSibling.textContent = decrement;
        totalCalc();
    });
}
//function for calculating total amount of product price
const totalCalc = function(){
    let total = 0;

    for(let i=0; i<quantityElem.length; i++){
        total += Number(quantityElem[i].textContent * Number(priceElem[i].textContent)
    );
}
    totalElem.textContent = total
    payAmountBtn.textContent = total;
}