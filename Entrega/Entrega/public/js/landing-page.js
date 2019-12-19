var imagenes = [
    'img/coca.jpg',
    'img/pizza.jpg',
    'img/pochoclos.jpg'
  ]

  var indice = 0

  var back = document.querySelector('#anterior');

  var next = document.querySelector('#siguiente');

  back.addEventListener("click", function() {
    indice --;

    if(indice < 0){
      indice = imagenes.length - 1;
    }
    var imagen = document.querySelector("img.banner-nvidia");

    imagen.setAttribute("src", imagenes[indice])
   })

  next.addEventListener("click", function() {
    indice ++;
    if(indice >= imagenes.length){
      indice = 0;
    }
    var imagen = document.querySelector("img.banner-nvidia");

    imagen.setAttribute("src", imagenes[indice])
   })
