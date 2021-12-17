function getpilihanComputer(){
    const com = Math.random();
    if (com < 0.34) return 'gajah';
    if (com >= 0.34 && com < 0.67) return 'orang';
    return 'semut';
}

function getHasil(com,player){
    if (player == com) return 'SERI';
    if (player == 'gajah') return (com == 'orang') ? 'MENANG' : 'KALAH';
    if (player == 'orang')return (com == 'gajah') ? 'KALAH' : 'MENANG';
    if (player == 'semut') return (com == 'orang') ? 'KALAH' : 'MENANG';     
}

function putar(){

    const imgComputer = document.querySelector('.img-komputer');
    const gambar = ['gajah','semut','orang'];
    let i =0;
    const waktuMulai= new Date().getTime();
    setInterval (function(){
            if(new Date().getTime()-waktuMulai >1000){
                clearInterval;
                return;
            }
            imgComputer.setAttribute('src', 'img/' +gambar[i++]+'.png');
            if (i==gambar.length){
                i=0;
            }
    },100)
}
//======= cara mengunakan forEach untuk pilihan player
const pilihan = document.querySelectorAll('li img');
pilihan.forEach(function(pilih){
    pilih.addEventListener('click', function(){
        const pilihanComputer = getpilihanComputer();
        const pilihanPlayer   = pilih.className;
        const hasil = getHasil(pilihanComputer,pilihanPlayer);
        putar();
        setTimeout(function(){
            const imgComputer = document.querySelector('.img-komputer');
            imgComputer.setAttribute('src','img/'+ pilihanComputer + '.png');
            const info = document.querySelector('.info');
            info.innerHTML= hasil;
        },1000);
    });
});









/*
=== cara menyeleksi satu persatu===
const pGajah = document.querySelector('.gajah');
pGajah.addEventListener('click', function(){
const pilihanComputer = getpilihanComputer();
const pilihanPlayer   = pGajah.className;
const hasil = getHasil(pilihanComputer,pilihanPlayer);

const imgComputer = document.querySelector('.img-komputer');
imgComputer.setAttribute('src','img/'+ pilihanComputer + '.png');

const info = document.querySelector('.info');
info.innerHTML= hasil;

// console.log ('com : ' + pilihanComputer);
// console.log ('player : ' + pilihanPlayer);
// console.log(hasil);

});

const pOrang = document.querySelector('.orang');
pOrang.addEventListener('click', function(){
const pilihanComputer = getpilihanComputer();
const pilihanPlayer   = pOrang.className;
const hasil = getHasil(pilihanComputer,pilihanPlayer);

const imgComputer = document.querySelector('.img-komputer');
imgComputer.setAttribute('src','img/'+ pilihanComputer + '.png');

const info = document.querySelector('.info');
info.innerHTML= hasil;

// console.log ('com : ' + pilihanComputer);
// console.log ('player : ' + pilihanPlayer);
// console.log(hasil);

});

const pSemut = document.querySelector('.semut');
pSemut.addEventListener('click', function(){
const pilihanComputer = getpilihanComputer();
const pilihanPlayer   = pSemut.className;
const hasil = getHasil(pilihanComputer,pilihanPlayer);

const imgComputer = document.querySelector('.img-komputer');
imgComputer.setAttribute('src','img/'+ pilihanComputer + '.png');

const info = document.querySelector('.info');
info.innerHTML= hasil;

// console.log ('com : ' + pilihanComputer);
// console.log ('player : ' + pilihanPlayer);
// console.log(hasil);

});
*/

