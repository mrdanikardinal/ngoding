// const judul = document.getElementById('judul');
// judul.innerHTML='danikardinal';
// const sectionA = document.querySelector("section#a");
// sectionA.innerHTML='Hello world';





// const judul = document.querySelector('#judul');
// judul.style.color='lightblue';
// judul.style.backgroundColor ='salmon';


// const judul = document.getElementsByTagName('h1')[0];
// const a = document.querySelector('section#a a');

// const p2 = document.querySelector('.p2');
// p2.classList.add('label');
//=======================================================
//DOm Manupulation

//buat elemen baru
const pBaru= document.createElement('p');
const teksPBaru= document.createTextNode('Ini paragraf bar');
//simpan tulisan ke dalam paragraf
pBaru.appendChild(teksPBaru);
//simpan pBaru diakhir section a
//buat elemen baru
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);
const liBaru = document.createElement('li');
const teksLiBaru= document.createTextNode('Item Baru');
liBaru.appendChild(teksLiBaru);
const ul =document.querySelector('section#b ul');
const li2= ul.querySelector('li:nth-child(2)');
ul.insertBefore(liBaru,li2);

// method remove
const link =document.getElementsByTagName('a')[0];
sectionA.removeChild(link);

// replace method

const sectionB= document.getElementById('b');
const p4 = sectionB.querySelector('p');

const h2Baru= document.createElement('h2');
const teksH2Baru= document.createTextNode('Judul baru');

h2Baru.appendChild(teksH2Baru);

sectionB.replaceChild(h2Baru,p4);
pBaru.style.backgroundColor ='lightgreen';
liBaru.style.backgroundColor ='lightgreen';
h2Baru.style.backgroundColor ='lightgreen';






