let selector = document.querySelector('select');
console.log(selector);

let fer= document.getElementById('suite');
selector.addEventListener('change', ()=>{
    let option = selector.value;
    console.log(option);
    if (option == 'Suite') {
        fer.classList.add('active');
    }
    if (option != 'Suite') {
        fer.classList.remove('active');
    }
})
// let sel = document.querySelector('.select');
// console.log(selector);
// let der= document.getElementById('suite');
// selector.addEventListener('change', ()=>{
//     let option = selector.value;
//     if (option == 'Suite') {
//         fer.classList.add('active');
//     }
//     if (option != 'Suite') {
//         fer.classList.remove('active');
//     }
// })

let num = document.querySelectorAll('input')[2];
let btn = document.getElementById('btn-res');
console.log(num.value);
btn.addEventListener("click", ()=>{
    console.log(num.value);
})
//-----------ADD CODE TO the Body

// selector.addEventListener("click", ()=>{
//     
// });

