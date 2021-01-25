<h3> Instalación: </h3>

docker-compose-up <br>
docker-compose exec php php  /var/www/html/artisan migrate <br>
docker-compose exec php php  /var/www/html/artisan db:seed --class=TicketSeeder --force <br>
docker-compose exec php php  /var/www/html/artisan db:seed --class=EmailSeeder --force <br> <br>


Rutas: <br>
 
http://localhost:8080/searchTicketsByEmail/{cualquier_parametro} //Devuelve el listado de los Codigos de acuerdo a Email, ademas te muestra el status
del codigo del ticket (Expirado o Vigente) <br><br>

http://localhost:8080/searchTicket/{cualquier_parametro} //Devuelve el listado de los emails de acuerdo a Codigo, ademas te muestra el status
del codigo del ticket (Expirado o Vigente) <br>
