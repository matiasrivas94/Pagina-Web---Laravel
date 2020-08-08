Pasos para la instalacion:
1. Tener instalado Laravel y Composer.
2. Clonar el poryecto a la maquina local(en donde quiera descargarlo).
	git clone + direccion del repositorio
	git clone https://github.com/matiasrivas94/PaginadWeb2

3.Renombrar el archivo .env.example a .env
4.Colocar los datos de la base de datos.
	DB_DATABASE=laraveldb1
	DB_USERNAME=root
	DB_PASSWORD=

5.Ir al a la carpeta del directorio y abrir la terminal, escribrir composer install o composer update, para que lea el archivo composer.json
Esperar a que termine el proceso.

6.Usar el comando php artisan key:generate para que genere la llave.
7.Instalar las dependencia con el commando npm install (estan en el archivo package.json)
8.Correr la migraciones con el comando art migrate y listo.
