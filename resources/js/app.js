/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const productPhotoInput= '<hr><br><input type="file" name="photo[]"></input>';
const addPhotoButton = document.querySelector('#add-product-photo');
const deletePhotoButton = document.querySelector('#delete-product-photo');
const productPhotoInput2= '<button id="delete-product-photo" type="button" class="btn btn-warning">delete photo</button>';
const productPhotoInputsArea = document.querySelector('#product-photo-inputs-area');
const productPhotoInputsArea2 = document.querySelector('#product-photo-inputs-area');

// if(addPhotoButton){
//     addPhotoButton.addEventListener("click", ()=>{
//         const input=document.createElement('span');
//         input.innerHTML=productPhotoInput;
//         productPhotoInputsArea.appendChild(input);
 
//         const input2=document.createElement('span');
//         input2.innerHTML=productPhotoInput2;
//         productPhotoInputsArea2.appendChild(input2);
//     });
//             // deletePhotoButton.addEventListener("click", ()=>{
//             // });
// }




if(addPhotoButton){
    function addProduct() {
        const input=document.createElement('span');
        input.innerHTML=productPhotoInput;
        productPhotoInputsArea.appendChild(input);
        const input2=document.createElement('span');
        input2.innerHTML=productPhotoInput2;
        input2.onclick = removeHobby;
        productPhotoInputsArea2.appendChild(input2);
        // div.appendChild();
    }
    function removeHobby() {
        //   // remove this button and its input
        productPhotoInputsArea2.removeChild(this.previousElementSibling);
        productPhotoInputsArea.removeChild(this);
        }
        document.getElementById('add-product-photo').addEventListener('click', addProduct);
        document.getElementById('delete-product-photo').addEventListener('click', removeHobby);
        
}




// var div = document.getElementById('product-photo-inputs-area');

// function addProduct() {
//     var input=document.createElement('input');
//     // input.innerHTML=productPhotoInput;
//     input.placeholder = "More hobbies";
//     button = document.createElement('button');
  
// //   input.placeholder = "More hobbies";
//   button.innerHTML = 'X';
//   // attach onlick event handler to remove button
//   button.onclick = removeHobby;
  
//   div.appendChild(input);
//   div.appendChild(button);
// }

// function removeHobby() {
//   // remove this button and its input
//   div.removeChild(this.previousElementSibling);
//   div.removeChild(this);
// }

// // attach onclick event handler to add button
// document.getElementById('add').addEventListener('click', addProduct);
// // attach onclick event handler to 1st remove button
// document.getElementById('delete-product-photo').addEventListener('click', removeHobby);