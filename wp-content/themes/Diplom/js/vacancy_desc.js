const descriptions = document.querySelectorAll('.vacancy_description, .adventage__description');
const openButtons = document.querySelectorAll('.open_description');


openButtons.forEach((el, index) => {
    el.addEventListener('click', function(){
        if(descriptions[index].style.display === 'block'){
            close_desc(this, index);
        } else {
            open_desc(this, index);
        }
    });
});

function open_desc(elem, index){
    descriptions[index].style.display = 'block';
    elem.style.transform = 'rotate(45deg)';
}

function close_desc(elem, index){
    descriptions[index].style.display = 'none';
    elem.style.transform = 'rotate(90deg)';
}


