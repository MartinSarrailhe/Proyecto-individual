var imagenes = [
    'img/netflix.png',
    'img/descuentos.jpg',
    'img/cine.jpg'
  ]

  var indice = 0

  var back = document.querySelector('#anterior');

  var next = document.querySelector('#siguiente');

  back.addEventListener("click", function() {
    indice --;

    if(indice < 0){
      indice = imagenes.length - 1;
    }
    var imagen = document.querySelector("img.pochoclos");

    imagen.setAttribute("src", imagenes[indice])
   })

  next.addEventListener("click", function() {
    indice ++;
    if(indice >= imagenes.length){
      indice = 0;
    }
    var imagen = document.querySelector("img.pochoclos");

    imagen.setAttribute("src", imagenes[indice])
   })
