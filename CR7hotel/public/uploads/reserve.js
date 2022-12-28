let doc = document.querySelector('select');
let div = document.querySelector('.fromper');

doc.addEventListener('change', ()=>{
  let i=1;
  let num = Number(doc.value);
  div.innerHTML= '';
while (i<=num) {
    
    div.innerHTML+=
        `<div class="col-lg-3 mb-3 " id='terre'>
            <h1>les aconpanents</h1>
            <input type="text" class="text"  name='Nom' placeholder="Nom">
            <input type="text" name="name" placeholder="Prenom">
            <input type="text" name="des" placeholder="Date de naissance">
        </div>`

        i++
}
  
    // }if(doc.value==2){
    //     let formu = 
    //         `<div class="col-lg-3 mb-3 " id='terre'>
    //             <h1>les aconpanents</h1>
    //             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //             <input type="text" name="name" placeholder="Prenom">
    //             <input type="text" name="des" placeholder="Date de naissance">
    //         </div>
    //         <div class="col-lg-3 mb-3 " id='terre'>
    //             <h1>les aconpanents</h1>
    //             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //             <input type="text" name="name" placeholder="Prenom">
    //             <input type="text" name="des" placeholder="Date de naissance">
    //         </div>`
    
    //         div.innerHTML=formu;
    //     }
    //     if(doc.value==3){
    //         let formu = 
    //             `<div class="col-lg-3 mb-3 " id='terre'>
    //             <h1>les aconpanents</h1>
    //             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //             <input type="text" name="name" placeholder="Prenom">
    //             <input type="text" name="des" placeholder="Date de naissance">
    //         </div>
    //         <div class="col-lg-3 mb-3 " id='terre'>
    //             <h1>les aconpanents</h1>
    //             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //             <input type="text" name="name" placeholder="Prenom">
    //             <input type="text" name="des" placeholder="Date de naissance">
    //         </div>
    //         <div class="col-lg-3 mb-3 " id='terre'>
    //                 <h1>les aconpanents</h1>
    //                 <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                 <input type="text" name="name" placeholder="Prenom">
    //                 <input type="text" name="des" placeholder="Date de naissance">
    //         </div>`
        
    //             div.innerHTML=formu;
    //         }
    //         if(doc.value==4){
    //             let formu = 
    //                 `<div class="col-lg-3 mb-3 " id='terre'>
    //                     <h1>les aconpanents</h1>
    //                     <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                     <input type="text" name="name" placeholder="Prenom">
    //                     <input type="text" name="des" placeholder="Date de naissance">
    //                 </div>
    //                  <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>`
            
    //                 div.innerHTML=formu;
    //             }
    //             if(doc.value==5){
    //                 let formu = 
    //                     `<div class="col-lg-3 mb-3 " id='terre'>
    //                         <h1>les aconpanents</h1>
    //                         <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                         <input type="text" name="name" placeholder="Prenom">
    //                         <input type="text" name="des" placeholder="Date de naissance">
    //                     </div>
    //                     <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>`
                
    //                     div.innerHTML=formu;
    //                 }
    //                 if(doc.value==6){
    //                     let formu = 
    //                         `<div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>
    //                         <div class="col-lg-3 mb-3 " id='terre'>
    //                             <h1>les aconpanents</h1>
    //                             <input type="text" class="text"  name='Nom' placeholder="Nom">
    //                             <input type="text" name="name" placeholder="Prenom">
    //                             <input type="text" name="des" placeholder="Date de naissance">
    //                         </div>`
                    
    //                         div.innerHTML=formu;
    //                     }
    //     console.log(div);
})