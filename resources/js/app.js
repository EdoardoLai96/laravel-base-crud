require('./bootstrap');



let delete_comic = document.getElementById("delete_comic")
let edit_comic = document.getElementById("edit_comic")



edit_comic.addEventListener("click",function(){
    if(!confirm('Sei sicuro di voler modificare questo fumetto?')){
        event.preventDefault();
    }
})