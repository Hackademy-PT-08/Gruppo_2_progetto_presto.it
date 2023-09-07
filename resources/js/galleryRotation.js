const imgRotate = document.querySelector(".my-img-rotate");
const container = document.querySelector(".contain");

let x = 0;
let timer;

function init() {
    
    container.style.transform = `perspective(1000px) rotateY(${x}deg)`;
    
    timer = setTimeout(() => {
        
        
      x -= 45;
      init();
    }, 2500);
  

   
}



if(container){   
    function stopAnimation() {
        clearTimeout(timer);
        imgRotate.classList.add('grow-animation');
    }
    
    function restartAnimation() {
        init();
        imgRotate.classList.add('romove');
    }   
    
    init();
    container.addEventListener('mouseenter', stopAnimation);
    container.addEventListener('mouseleave', restartAnimation);
    
    
}




  
  
  
  
  
  