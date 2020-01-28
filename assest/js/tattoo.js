var buttonBurger = document.querySelector('.container-burger');
var buttonShowImage = document.querySelectorAll('.portfolio-item-btn');
var containerPopup = document.querySelector('.container-popup');

var flag = false;

buttonBurger.addEventListener('click', function(e){
    var menuList = document.querySelector('.container-menu-mobile > .menu-list-mobile');
        menuList.classList.toggle('on');
});


var arrStars = {
   input : document.querySelectorAll('#reviewStars-input > input'),
   label : document.querySelectorAll('#reviewStars-input > label')
};

document.querySelector('#reviewStars-input').addEventListener('mouseover', function(e){
    [].forEach.call(arrStars.input, function(elem) {

        elem.addEventListener('click', function(event){
                if(flag) {
                    [].forEach.call(arrStars.label, function(elem) {
                        if(elem.classList.contains('star-active')){
                            elem.classList.remove('star-active');
                        }
                    });
                }
                var id = elem.getAttribute('value');
                for (var j = 0; j <= id; j++) {
                    arrStars.label[j].classList.add('star-active');
                    flag = true;
                    document.querySelector('#countStars').setAttribute('value', id);
                }
        });
    
        elem.addEventListener('mouseover', function(event){
            var id = elem.getAttribute('value');
            for (var j = 0; j <= id; j++) {
                arrStars.label[j].classList.add('star-active');
            }
        });  
    });

    [].forEach.call(arrStars.label, function(elem) {

        elem.addEventListener('click', function(event){
                if(flag) {
                    [].forEach.call(arrStars.label, function(elem) {
                        if(elem.classList.contains('star-active')){
                            elem.classList.remove('star-active');
                            flag = true;
                        }
                    });
                }
                var id = elem.getAttribute('value');
                for (var j = 0; j <= id; j++) {
                    arrStars.label[j].classList.add('star-active');
                    flag = true;
                }
        });
    
        elem.addEventListener('mouseover', function(event){
            var id = elem.getAttribute('value');
            for (var j = 0; j <= id; j++) {
                arrStars.label[j].classList.add('star-active');
            }
        });    
    });
});

document.querySelector('#reviewStars-input').addEventListener('mouseout', function(e){
    if (!flag) {
        [].forEach.call(arrStars.label, function(elem) {
            if(elem.classList.contains('star-active')){
                elem.classList.remove('star-active');
            }
        });
    }
});

