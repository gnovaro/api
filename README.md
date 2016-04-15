# api
cualelijo.com API Integration code, docs and examples
Version: 1.0.0

## Enviroments
sandbox (Only for test integration purposes)

http://api-sandbox.cualelijo.com

live (Production)

http://api.cualelijo.com

## API Key
Register your company on our website you get an unique API_KEY for your site api calls.

API Calls examples:
http://APIURL/API_KEY/method/params

http://api-sandbox.cualelijo.com/3bc39b44acd7f44ec215ba905d26ceac0ecff679d10bae2dd814aea715e2c803/reviews/PEABODY%20PE-KV8213

JSON Response
```javascript
{
   "Success":true,
   "Average":{
      "Rating":3.6,
      "Count":5
   },
   "Reviews":[
      {
         "Title":null,
         "Created":"2016-04-01 21:26:06",
         "Modified":"2016-04-01 21:26:06",
         "CustomerName":"Juan Crippa",
         "CustomerMail":"",
         "Rating":4,
         "Review":"Me encanta, fue amor a primera vista. Es una pava literalmente, pero el&eacute;ctrica. Tiene la forma de la pava tradicional en vez de esas jarras jugueras horribles que se ven por todos lados. Hay que tener en cuenta que el dise&ntilde;o tambi&eacute;n lo vale, por eso es m&aacute;s caro, no entiendo la gente que se queja del precio. Estaba disponible en rojo, acero inoxidable y turquesa, pero obvio me llev&eacute; la de acero inoxidable. Funciona perfecta y es tan simple como usar una pava com&uacute;n. ",
         "Response":null
      },
      {
         "Title":null,
         "Created":"2016-04-01 21:26:06",
         "Modified":"2016-04-01 21:26:06",
         "CustomerName":"Dario Garrone",
         "CustomerMail":"",
         "Rating":3,
         "Review":"Le regal&eacute; a mi novia este modelo en rojo hace poco, tard&oacute; unos minutos en darse cuenta que era el&eacute;ctrica. Funciona bien, calienta r&aacute;pido y es m&aacute;s que c&oacute;moda para cebar mate, como una pava de las met&aacute;licas pero m&aacute;s moderna. Es m&aacute;s cara que una de dise&ntilde;o com&uacute;n, pero despu&eacute;s tiene capacidad para casi dos litros y un term&oacute;metro que te indica la temperatura en la zona inferior. ",
         "Response":null
      },
      {
         "Title":null,
         "Created":"2016-04-01 21:26:06",
         "Modified":"2016-04-01 21:26:06",
         "CustomerName":"Ver&oacute;nica Paenza",
         "CustomerMail":"",
         "Rating":4,
         "Review":"Fant&aacute;stica. Combina la utilidad de la pava el&eacute;ctrica con un dise&ntilde;o moderno pero vintage por tener forma de pava tradicional. Tiene un term&oacute;metro, base giratoria 360 grados y pod&eacute;s esconderle el cable para que no se vea. Complet&iacute;sima, la recomiendo sin dudas. ",
         "Response":null
      },
      {
         "Title":null,
         "Created":"2016-04-01 21:26:06",
         "Modified":"2016-04-01 21:26:06",
         "CustomerName":"Natalia Maciel",
         "CustomerMail":"",
         "Rating":4,
         "Review":"Muy linda pava, en color turquesa. Funciona bien. Lo que pasa es que aunque es de acero inoxidable, ten&eacute;s que tener cuidado con las manchas, m&aacute;s que nada de alimentos, porque cuesta mucho sac&aacute;rselas y no pod&eacute;s rasparla porque se arruina. Tengo otros electrodom&eacute;sticos de Peabody, siempre hace unos dise&ntilde;os muy lindos y modernos. ",
         "Response":null
      },
      {
         "Title":null,
         "Created":"2016-04-01 21:26:06",
         "Modified":"2016-04-01 21:26:06",
         "CustomerName":"Manuel Rodr&iacute;guez",
         "CustomerMail":"",
         "Rating":3,
         "Review":"C&oacute;moda, pr&aacute;ctica, divina. La uso para el ante m&aacute;s que nada, la temperatura sale perfecta y es posible hasta cebar con la pava porque tiene un pico muy bueno, no se derrama. Tiene term&oacute;metro y un corte autom&aacute;tico cuando entra en ebullici&oacute;n, porque para el t&eacute; tampoco es necesario que hierva. Recomendada por m&iacute; y toda mi familia. ",
         "Response":null
      }
   ]
}
```
