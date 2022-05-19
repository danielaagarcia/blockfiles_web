# BFACSS

Base de CSS para la creación de sitios pertenecientes a Blockchain Federal Argentina. Está basado en [Bootstrap] (v.3.3.7).

En este repositorio podés descargar los archivos de BFACSS para trabajar de manera local.

## Template
El archivo 'boilertemplate.html'  sirve como base para el markup para cualquier desarrollo.

## Puesta en marcha
Copiar toda la carpeta 'dist' en su proyecto.

Incluir en el HEAD los siguientes archivos CSS:
  ```sh
  <link rel="stylesheet" type="text/css" media="screen" href="dist/css/vendor.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="dist/css/main.css" />    
  ```
Incluir en al final del BODY los siguientes archivos JS:
  ```sh
  <script src="dist/js/vendor.js"></script>
  <script src="dist/js/main.js"></script>
  ```
## Desarrollo
### Requisitos
Instalar [Node.js]  
Instalar dependencias: 
  ```sh
  npm install
  ```
### Utilizar carpeta DIST
En la carpeta 'dist' están los archivos finales.

### Comandos
* **"gulp watch"** para trabajar en los archivos
* **"gulp watchcss"** para trabajar solo en los SCSS 
* **"gulp deploy"** para compilar, minimizar y optimizar archivos

[Node.js]: https://nodejs.org/en/
[Bootstrap]: https://getbootstrap.com/docs/3.3/
