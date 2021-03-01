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

// Nurse caret 
const nurseCaret = document.querySelector("#nurseCaret");
const nurseMenu = document.querySelector("#nurseMenu");

nurseCaret.addEventListener('click', ()=>{
    if(nurseMenu.classList.contains('hidden')){
        nurseMenu.classList.remove('hidden');
        nurseCaret.classList.add('transform');
        nurseCaret.classList.add('rotate-90');
        nurseCaret.classList.add('transition');
    }else{
        nurseMenu.classList.add('hidden');
        nurseCaret.classList.remove('transform');
        nurseCaret.classList.remove('roate-90');
    }
});

// Pharmacist caret 
const pharmacistCaret = document.querySelector("#pharmacistCaret");
const pharmacistMenu = document.querySelector("#pharmacistMenu");

pharmacistCaret.addEventListener('click', ()=>{
    if(pharmacistMenu.classList.contains('hidden')){
        pharmacistMenu.classList.remove('hidden');
        pharmacistCaret.classList.add('transform');
        pharmacistCaret.classList.add('rotate-90');
        pharmacistCaret.classList.add('transition');
    }else{
        pharmacistMenu.classList.add('hidden');
        pharmacistCaret.classList.remove('transform');
        pharmacistCaret.classList.remove('roate-90');
    }
});