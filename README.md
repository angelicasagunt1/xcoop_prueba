Instalación:

docker-compose-up 
docker-compose exec php php  /var/www/html/artisan migrate
docker-compose exec php php  /var/www/html/artisan db:seed --class=TicketSeeder --force
docker-compose exec php php  /var/www/html/artisan db:seed --class=EmailSeeder --force


Rutas:
 
http://localhost:8080/searchTicketsByEmail/{ingresar cualquier parametro} //Devuelve el listado de los Codigos de acuerdo a Email, ademas te muestra el status
del codigo del ticket (Expirado o Vigente) 

http://localhost:8080/searchTicket/{ingresar cualquier parametro} //Devuelve el listado de los emails de acuerdo a Codigo, ademas te muestra el status
del codigo del ticket (Expirado o Vigente) 
