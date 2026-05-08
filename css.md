Paso 0: ¿Qué es CSS?

CSS (Cascading Style Sheets) es el lenguaje que usamos para dar estilo a una página web.
Si HTML es la estructura (los huesos), CSS es la ropa, los colores y la presentación (la piel, la ropa, el maquillaje).

Ejemplo básico:

    HTML sin CSS: texto negro sobre fondo blanco, en una columna.

    HTML con CSS: podemos poner colores, tamaños, posiciones, animaciones, etc.

Paso 1: Cómo se escribe CSS

CSS se compone de reglas. Cada regla tiene:

    Un selector (qué elemento html quieres estilizar)

    Una declaración entre llaves { } con propiedades y valores.

css

selector {
  propiedad: valor;
  otra-propiedad: otro-valor;
}

Ejemplo real:
css

p {
  color: red;
  font-size: 20px;
}

Esto significa:

    "A todas las etiquetas <p> (párrafos) ponles el texto rojo y tamaño 20 píxeles".

Paso 2: Cómo conectar CSS con HTML

Hay 3 formas principales:
1. CSS en línea (no recomendado para casi nada)
html

<p style="color: blue;">Texto azul</p>

2. CSS interno (dentro del HTML)
html

<style>
  p {
    color: green;
  }
</style>

3. CSS externo (la mejor práctica)

Creas un archivo estilos.css:
css

p {
  color: purple;
}

Y lo enlazas en el HTML:
html

<link rel="stylesheet" href="estilos.css">

✅ Así separas estructura (HTML) de presentación (CSS).
Paso 3: Selectores CSS (para elegir a quién afectas)
Selector	Ejemplo	Significado
Etiqueta	p	Todos los <p>
Clase	.mi-clase	Todos los elementos con class="mi-clase"
ID	#mi-id	El elemento con id="mi-id" (único)
Universal	*	Todos los elementos
Descendiente	div p	Los <p> dentro de un <div>

Ejemplo con clases (muy común):
html

<p class="destacado">Este texto será rojo</p>
<p>Este no</p>

css

.destacado {
  color: red;
}

Paso 4: Propiedades básicas de CSS
Colores y texto
css

color: blue;               /* color del texto */
background-color: yellow;  /* fondo */
font-size: 16px;           /* tamaño letra */
font-family: Arial;        /* tipo letra */
text-align: center;        /* alineación */
font-weight: bold;         /* negrita */

Tamaños y espacios
css

width: 200px;      /* ancho */
height: 100px;     /* alto */
margin: 10px;      /* espacio externo (fuera del borde) */
padding: 15px;     /* espacio interno (dentro del borde) */
border: 1px solid black; /* borde */

Modelo de caja (importante)

Todo elemento HTML es una "caja" que tiene (de dentro a fuera):

    Contenido (texto/imagen)

    Padding (relleno interior)

    Border (borde)

    Margin (margen exterior)

Paso 5: Un ejemplo completo paso a paso

HTML (index.html):
html

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <h1>Mi primera página con CSS</h1>
  <p class="importante">Este párrafo es importante</p>
  <p>Este es un párrafo normal</p>
  <div id="caja">Soy una caja</div>
</body>
</html>

CSS (estilo.css):
css

/* Cambia el fondo de toda la página */
body {
  background-color: #f0f0f0;
  font-family: Arial;
}

/* Estilo para el título */
h1 {
  color: navy;
  text-align: center;
}

/* Clase importante */
.importante {
  color: red;
  font-weight: bold;
  border-left: 5px solid red;
  padding-left: 10px;
}

/* ID caja */
#caja {
  width: 200px;
  height: 200px;
  background-color: yellow;
  border: 2px solid black;
  margin: 20px auto;
  text-align: center;
  line-height: 200px; /* centra verticalmente */
}

Paso 6: Cascada y herencia (por eso se llama Cascading)

    Cascada: Si varias reglas afectan al mismo elemento, gana la más específica (ID > clase > etiqueta) o la última que aparece.

    Herencia: Algunas propiedades (como color o font-family) se heredan de padres a hijos.

Ejemplo de cascada:
css

p { color: blue; }        /* menos específico */
.destacado { color: red; } /* más específico */

Si un <p class="destacado">, será rojo (gana la clase).
Paso 7: Unidades comunes

    px – píxeles (fijo)

    em / rem – relativos al tamaño de fuente

    % – porcentaje del contenedor padre

    vh / vw – porcentaje del alto/ancho de la ventana

Ejemplo:
css

.container {
  width: 80%;       /* 80% del padre */
  font-size: 1.2em; /* 20% más grande que el padre */
}

Paso 8: Layout básico (posicionamiento)
display: block / inline / flex

    block → ocupa todo el ancho, salto de línea (<div>, <p>)

    inline → solo su contenido, no salta línea (<span>, <a>)

    flex → modo moderno para alinear cosas fácilmente

css

.menu {
  display: flex;
  justify-content: space-between;
}

position: static / relative / absolute / fixed

    relative → se mueve respecto a su lugar original

    absolute → se mueve respecto al contenedor con position: relative

    fixed → se queda fijo aunque hagas scroll

Paso 9: Herramientas para practicar

    Abre las Herramientas de Desarrollador en tu navegador (F12) → pestaña "Elements" / "Styles". Puedes editar CSS en vivo.

    Juega en CodePen, JSFiddle o VS Code con vista previa en vivo.

Paso 10: Mini ejercicio para que pruebes ahora mismo

Crea un archivo index.html y uno style.css:

index.html
html

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <button class="btn">Haz clic</button>
</body>
</html>

style.css
css

.btn {
  background-color: blue;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: darkblue;
}

➡️ Verás un botón azul que se oscurece al pasar el mouse.
Resumen rápido

    CSS da estilo a HTML.

    Regla = selector + { propiedad: valor; }

    Se conecta con <link> o <style>.

    Selectores: etiqueta, .clase, #id.

    Propiedades comunes: color, fondo, tamaño, margin, padding.

    El modelo de caja es clave.

    La cascada significa que gana la regla más específica.