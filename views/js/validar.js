
function solo_numeros(evt)
{
  var nav4 = window.Event ? true : false;
  var key = nav4 ? evt.which : evt.keyCode;
  var caract = new Array('1','2','3','4','5','6','7','8','9','0','.');
  var ban = false;
  for(var w=0;w<caract.length;w++){if (caract[w] == String.fromCharCode(key) || key == 8 || key == 0){ban = true;break;}}

  if (ban == true){return true;}else{return false;}
}


function solo_letras(e) {
    tecla = (document.all) ? e.keyCode : e.which;
  //alert(tecla);
    if (tecla==8 || tecla==0) return true;
    patron =/[ú áéíóÁÉÍÓÚQWERTYUIOPASDFGHJKLÑZXCVBNMqwertyuiopasdfghjklñzxcvbnm]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function solo_alfa(e) {
    tecla = (document.all) ? e.keyCode : e.which;
  //alert(tecla);
    if (tecla==8 || tecla==0) return true;
    patron =/[ ´QWERTYUIOPASDFGHJKLÑZXCVBNMqwertyuiopasdfghjklñzxcvbnm1234567890]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

