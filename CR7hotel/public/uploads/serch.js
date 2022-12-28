let select = document.querySelector('select');
let barre = document.getElementById('type');
console.log(select.value);
let choix = select.value;
select.addEventListener("change", () =>{
   
        if(choix=='Suite') {
            barre.innerHTML=`<a>Home</a>`;
        }else{
            barre.innerHTML= "";
        }
    
})

// //-------Popup message 
// let btnreserve = document.querySelector('#reserve');
// let dialog = document.querySelector('dialog');
// let items = document.querySelectorAll('.rev')
// console.log(items);
// for(let i=0; i<items.length;i++){
// items[i].addEventListener('click', () =>{
  
//         dialog.showModal();    
//         setTimeout(()=>{dialog.close()}, 3000);
// })}