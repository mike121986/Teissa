let useToggleMenu = 0;
let nameClassMenu = 'sn';
function toggleMenuTeiisa(clase){
    if(useToggleMenu == 0){
        useToggleMenu = 1;
        nameClassMenu = clase;
        openSubmenu(clase);
       
    }else{ 
        if(nameClassMenu != clase){
            outMenuTeissa(nameClassMenu,clase);
        }
    }
}

function outMenuTeissa(closeClase,classToChange){
    $("."+closeClase).css('display','none');
    nameClassMenu = classToChange;
    openSubmenu(classToChange);

}

function openSubmenu(claseOpen){
    $("."+claseOpen).css('display','block');
}