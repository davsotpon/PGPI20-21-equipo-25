# PGPI20-21-equipo-25

## Instrucciones para la instalación local de la aplicación Coronagym.
Programas: <br>
-XAMPP 7.2.34.<br>
-Wordpress 5.6

Instalación:<br>
1- Instalar XAMPP 7.2.34<br>
2- Descagar wordpress 5.6 (https://wordpress.org/download/).<br>
3- Descomprimir el archivo e introducirlo en xampp/htdocs.<br>
4- Abrir XAMPP y darle a "Start" en Apache y MSYQL.<br>
5- Abrir la consola de la base de datos pulsando "Admin" en MYSQL.<br>
6- Crear una base datos con nombre "coronagym"<br>
7- Introducir archivo "wp-config.php" en la carpeta "\htdocs\wordpress", depende de donde se tengo instalado XAMPP.<br>
8- Introducir en el buscador http://localhost/wordpress. Se ejecutará la instalación de wordpress.<br>
9- Importar la base de datos MySQL que encontramos en este repositorio wordpress/coronagym.sql<br>

También será necesario tener todos los plugin en sus respectivas versiones.
(Si alguien añade un nuevo plugin, que lo añada a la lista).<br>
-WooCommerce 4.8.0<br>
-WooCommerce Shipping & Tax 1.25.3<br>
-Ultimate Member 2.1.15<br>
-Paid Memberships pro 2.5.2<br>
-Paid Memberships Pro - WooCommerce Add On 1.7<br>

Usuario administrador <br>
user: admin<br>
pass: admin<br>

A continuacion se explica el funcionamiento basico del sistema:

- Pagina principal: Permite conocer mas acerca de la aplicacion y de los desarrolladores, ademas de permitir acceder a las redes sociales.
- Iniciar sesion: Permite iniciar sesion si no se esta iniciado. Tanbien permite registrarse en el sistema.
- Administrar: Permite administrar el sistema y acceder a informacion reservada a administradores o miembros. Solo estos dos tipos de ususaior pueden acceder a esta pagina.
- Contenido: Permite ver los productos disponibles dependiendo de si se posee suscripcion o no.
- Carrito: Permite ver los productos selecionados para su compra.
- Mi perfil: Permite ver la informacion del usuario y modificarla, ver su tipo de suscripcion y cancelarla, y ver sus facturas pasadas.
- Tipos de suscripcion: Permite ver todos los tipos de suscripcion y adquirirlas.
- Salir: Permite desconectarse del sistema.

Si el usuario no ha iniciado sesion, solo podra acceder a la pagina principal y aal inicio de sesion. 
