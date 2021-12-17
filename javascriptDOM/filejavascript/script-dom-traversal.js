// Events Handling

// const close = document.querySelector('.close');
// const card = document.querySelector('.card');

// close.addEventListener('click', function(){
//     card.style.display = 'none';
// });


// DOM Traversal
// 1. parentElement
// 2. parentNode
// 3. nextSibling
// 4. nextElementSibling
// 5. previousSibling
// 6. previousElementSibling

const close = document.querySelectorAll('.close');
// for (let i =0; i < close.length; i++){
//     close [i].addEventListener('click', function (event){
//         // close[i].parentElement.style.display= 'none';
//         // console.log(event);
//         event.target.parentElement.style.display ='none';
//     });
// }

close.forEach(function(el){
    el.addEventListener ('click', function(e){
      e.target.parentElement.style.display ='none';
    });
});


const nama = document.querySelector('.nama');
console.log(nama.previousElementSibling);
