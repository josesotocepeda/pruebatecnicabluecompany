<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Acerca pruebatecnicabluecompany
El sistema es un laravel 8.0 con laravel/ui (boostrap) y el sistema de autenticación ui:auth
Para hacer correr el sistema:
1. Crear base de datos llamada 'laravel'
2. Configurar la base de datos en arhivo .env
3. composer install
4. npm install
5. php artisan migrate

Con eso parten el sistema desde cero, debiendo:
1. Crear una cuenta de usuario (http://localhost/crud/public/register)
2. Ingresar al sismtema con los datos registrados (http://localhost/crud/public/login)
2. Agregar categorias (http://localhost/crud/public/categorias/create)
3. Agregar productos (http://localhost/crud/public/productos/create)
4. Consumir los endpoints

Adjunto base de datos con data, por si quieres probar usuario de prueba del archivo sql:
email: jose.soto@test.com
pass:  12345678

API y sus respectivos end-point
1. Obtener listado de todos los productos del sistema
http://127.0.0.1:8000/api/productos

2. Consulta de producto
http://127.0.0.1:8000/api/productos/4

3. Listado de productos por categorías
http://127.0.0.1:8000/api/categoriasproducto