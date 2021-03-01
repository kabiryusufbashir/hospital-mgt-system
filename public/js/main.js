// User caret 
const user_caret = document.querySelector("#user_caret");
const user_caret_menu = document.querySelector("#user_caret_menu");
const caret = document.querySelector("#caret");

user_caret.addEventListener('click', ()=>{
    if(user_caret_menu.classList.contains('hidden')){
        user_caret_menu.classList.remove('hidden');
        caret.classList.add('transform');
        caret.classList.add('rotate-90');
        caret.classList.add('transition');
    }else{
        user_caret_menu.classList.add('hidden');
        caret.classList.remove('transform');
        caret.classList.remove('roate-90');
    }
});

// Doctor caret 
const doctorCaret = document.querySelector("#doctorCaret");
const doctorMenu = document.querySelector("#doctorMenu");

doctorCaret.addEventListener('click', ()=>{
    if(doctorMenu.classList.contains('hidden')){
        doctorMenu.classList.remove('hidden');
        doctorCaret.classList.add('transform');
        doctorCaret.classList.add('rotate-90');
        doctorCaret.classList.add('transition');
    }else{
        doctorMenu.classList.add('hidden');
        doctorCaret.classList.remove('transform');
        doctorCaret.classList.remove('roate-90');
    }
});