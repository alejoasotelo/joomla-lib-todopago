# joomla-lib-todopago
Libreria y plugin de TodoPago para instalar en Joomla.
1. Se crea el zip de la libreria y del plugin.
2. Se instalan en joomla
3. Se habilita el plugin y listo.

# Para qué sirve?
Sirve para usar el sdk php de TodoPago sin tener que añadir la libreria con composer en las extensiones. Creando la libreria queda instalado joomla y por lo tanto se puede reutilizar en otros componentes, modulos o plugins. De esta manera se evita tener diferentes versiones de TodoPago (en este caso) en las diferentes extensiones que utilicen dicho sdk.

# Como se usa?
Desde cualquier extension (siempre y cuando el plugin esté habilitado). Ej:

    $http_header = array('Authorization'=>'PRISMA 912EC803B2CE49E4A541068D495AB570');
    $mode = 'test';
    $connector = new TodoPago\Sdk($http_header, $mode); // $mode: "test" para testing, "prod" para producción

# Documentación de SDK PHP de TodoPago
* https://github.com/TodoPago/SDK-PHP

# Dudas o Colaboraciones
Cualquier duda o colaboración pueden encontrame en http://alejosotelo.com.ar o sino creando algun issue. 
