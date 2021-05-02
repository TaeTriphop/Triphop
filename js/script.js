const switchToggle=document.querySelector('input[type="checkbox"]');

const toggleIcon=document.getElementById('toggle-icon');

const nav=document.getElementById('nav');

const image1=document.getElementById('image1');
const image2=document.getElementById('image2');
const image3=document.getElementById('image3');


    function switchMode(e){
        if(e.target.checked){
            document.documentElement.setAttribute('data-theme','dark');
            darkMode();
            imageSwitchMode('dark');
        }else{
            document.documentElement.setAttribute('data-theme','light');
            lightMode();
            imageSwitchMode('light');
        }
    }

    function darkMode(){
    // toggleIcon.children[0].textContent="กลางคืน";
    toggleIcon.children[0].classList.replace('fa-sun','fa-moon');
    nav.style.backgroundColor='rgb(0 0 0 / 50%)';
}
function lightMode(){
    // toggleIcon.children[0].textContent="กลางวัน";
    toggleIcon.children[0].classList.replace('fa-moon','fa-sun');
    nav.style.backgroundColor='rgb(255 255 255 / 50%)';
    }

    function imageSwitchMode(mode){
        image1.src=`img/web1_${mode}.svg`
        image2.src=`img/web2_${mode}.svg`
        image3.src=`img/web3_${mode}.svg`
    }

    switchToggle.addEventListener('change',switchMode);