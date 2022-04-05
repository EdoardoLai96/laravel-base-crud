require('./bootstrap');


let _delete_buttons = document.getElementsByClassName("_delete_button")








for(let i = 0; i < _delete_buttons.length; i++){
    _delete_buttons[i].addEventListener("click", function(event){
        if(!confirm("Sei sicuro di voler eliminare questo fumetto?")){
            event.preventDefault();
        }
    })
}
