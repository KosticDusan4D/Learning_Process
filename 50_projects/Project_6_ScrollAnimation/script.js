const boxes = document.querySelectorAll('.box');

window.addEventListener('scroll', showBoxes);

showBoxes();

function showBoxes(){

    const triggerBottom =  window.innerHeight*0.8;

    boxes.forEach(box => {
        const boxTop = box.getBoundingClientRect().top;

        if(boxTop < triggerBottom){
            box.classList.add('show');
        }
        else{
            box.classList.remove('show');
        }
    })
}