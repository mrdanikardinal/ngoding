/*

// Dom selection
// 1.getElementById(); -> mengembalikan elemen

const judul= document.getElementById('judul');
judul.style.color='green';
judul.style.backgroundColor='#ccc';
judul.innerHTML ='Haloo Dani kardinal';

// 2.document.getElementsByTagName()-> mengembalikan HTMLCollections;
// for looping
// const p = document.getElementsByTagName('p');
// for (let i=0; i<p.length; i++){
// p[i].style.backgroundColor = 'lightgreen';
// }

// p[0].style.backgroundColor = 'lightblue';
// p[1].style.backgroundColor = 'lightblue';
// p[2].style.backgroundColor = 'lightblue';
// p[3].style.backgroundColor = 'lightblue';
const h1 = document.getElementsByTagName('h1')[0];
h1.style.fontSize ='50px';

// 3.document.getElementsByClassName()-> mengembalikan HTMLCollection;
const p1 = document.getElementsByClassName('p1');
p1[0].innerHTML = 'Ini diubah dari javascript';

// 4.document.query.Selector()-> Mengembalikan Elemen
// const p4 = document.querySelector('#b p');
// p4.style.color='blue';
// p4.style.fontSize= '20px';
// const li2 = document.querySelector('section#b ul li:nth-child(2)');
// li2.style.backgroundColor='yellow';
const p = document.querySelectorAll('p');
for(let i =0; i<p.length;i++){
    p[i].style.backgroundColor='yellow';
}

*/
const sectionB = document.getElementById('b');
const p4= sectionB.querySelector('p');
p4.style.backgroundColor='orange';


