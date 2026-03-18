@echo off
:: Evita que se muestren los comandos en la consola mientras se ejecutan

setlocal
:: Inicia un entorno local de variables para evitar que afecten al sistema o a otros scripts
:: Es útil para evitar que variables temporales (como %BASE%) afecten al entorno global del sistema o de otros scripts.
:: Todo lo que se declare entre 'setlocal' y 'endlocal' es temporal y se descarta al salir de ese bloque.


:: Montar temporalmente una ruta de red como unidad Z:
:: Descomentar y adaptar si es necesario
:: pushd \\servidor\carpeta\compartida

set /p BASE="Introduce el nombre de la carpeta base: "
:: Solicitar nombre de carpeta base al usuario y guardarlo en la variable BASE

mkdir "%BASE%"
:: Crear carpeta base con el nombre proporcionado

mkdir "%BASE%\assets"
:: Crear subcarpeta assets dentro de la carpeta base

mkdir "%BASE%\assets\img"
mkdir "%BASE%\assets\js"
mkdir "%BASE%\assets\php"
mkdir "%BASE%\assets\style"

type nul > "%BASE%\index.html"
:: Crear archivo index.html vacío en la carpeta base

type nul > "%BASE%\assets\js\script.js"
type nul > "%BASE%\assets\style\style.css"

echo Estructura creada correctamente.
:: Mostrar mensaje de confirmación

endlocal
:: Finaliza el entorno local de variables iniciado con 'setlocal'.
:: Esto revierte cualquier cambio hecho a las variables de entorno dentro del script.


pause
:: Espera a que el usuario pulse una tecla antes de cerrar la ventana
