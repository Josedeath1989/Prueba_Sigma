# Prueba_Sigma
Prueba de desarrollo Web Jose Luis Sierra Ramirez


Nombre: Jose Luis Sierra Ramirez
Telegono: 3143494973
E-mail: josedeath1989@gmail.com
Ciudad: Bogota

Actividades de la Purbeas

 1. Prueba técnica de montaje y maquetación 
 
  Requerimiento:

●	Utilizando Bootstrap 4, CSS (Sass preferiblemente) y HTML5 maquetar el landing
●	El landing debe ser responsive desde 375px en adelante, la distribución de los elementos queda a criterio del desarrollador asegurando que la renderización sea legible
●	Hacer uso de gulp o webpack es opcional pero favorece el resultado final.

  2. Prueba técnica de funcionalidad 
  
  Requerimiento:

Apoyado en alguna tecnología JS (Jquery, Angular, React, Vue) y/o otra de lado servidor (PHP, Python, Ruby, Node) desarrollar la lógica para:

●	Consumir desde esta url https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json los nombres de los departamentos y ciudades correspondientes a Colombia.
●	Mostrar los departamentos en la primera lista seleccionable, las ciudades deberán cargar en la segunda lista según el departamento que haya seleccionado. (Es importante que no pueda seleccionar ciudades que no correspondan al departamento seleccionado previamente)
●	Hacer las validaciones necesarias del formulario para el envío de la información (Cantidad de caracteres, tipo de dato, etc)
●	Registrar los siguientes datos en una base de datos:
●	Nombre (Cadena, 50 caracteres máximo)
●	Correo (Alfanumérico, 30 caracteres máximo)
●	Departamento (Cadena, 30 caracteres máximo)
●	Ciudad (Cadena, 50 caracteres máximo)
●	Al enviar la información correctamente mostrar un modal con el mensaje: “Tu información ha sido recibida satisfactoriamente”
