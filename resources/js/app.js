/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');

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


// 



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



document.querySelectorAll('#delete').forEach((button) => {
  button.addEventListener("click", () => {
const child = document.getElementById("product-photo-inputs-area2");
const parent = document.getElementById("delete");

// Delete child
parent.parentNode.removeChild(child);
});
})

document.querySelectorAll('.add-button').forEach((button) => {
    button.addEventListener("click", () => {
        const form = button.closest(".add-form");
        const route = form.querySelector("[name=route]").value;
        const id = form.querySelector("[name=product_id]").value;
        const count = form.querySelector("[name=count]").value;
        form.querySelector("[name=count]").value = 0;

        axios.post('add-js', {
                product_id: id,
                count: count
        })
            .then(function(response) {
                const cart = document.querySelector('#cart-count');
                cart.innerHTML = response.data.html;

                console.log(response);
            })
            .catch(function(error) {
                console.log(error);
            });


    });
})
// quantity +/-
const quantities = document.querySelectorAll('.quantity');

[...quantities].forEach(function(quantity) {
  const minusButton = quantity.querySelector('.minus-btn');
  const plusButton = quantity.querySelector('.plus-btn');
  const inputField = quantity.querySelector('.input-btn');

  minusButton.addEventListener('click', function minusProduct() {
    const currentValue = Number(inputField.value);
    if (currentValue > 0) {
      inputField.value = currentValue - 1;
    } else inputField.value = 0
  });

  plusButton.addEventListener('click', function plusProduct() {
    const currentValue = Number(inputField.value);
    inputField.value = currentValue + 1;
  });

});


//SWIPER

// import Swiper styles
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/swiper-bundle.css';
Swiper.use([Navigation, Pagination]);

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
      effect: 'fade',
  
  // direction: 'horizontal',
  loop: true,
  speed:1500,
  grabCursor: true,
  watchSlidesProgress: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  
})




