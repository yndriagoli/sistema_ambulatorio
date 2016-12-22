const d = document;
/*
* Arreglo con todos los li y los submenus ul
*/
const item = d.getElementsByClassName("item");
const subMenu = d.getElementsByClassName("sub-menu");
var list = new Array();
contItemSubmenu = 0;

/*
* Se cargan las funciones JS
*/
window.onload = function() {
  /*
  *cargar arreglo para los acordeones
  */
  for(let i = 0; i < (item.length * 2); i++ ) {
     list[i] = item[contItemSubmenu];
     i += 1;
     list[i] = subMenu[contItemSubmenu];
     contItemSubmenu++;
  }

  for (let i = 0; i < list.length ; i+=2) {
    list[i].onclick = function() {
      list[i].classList.toggle("activo");
      list[i+1].classList.toggle("show");
    }
  }

}
