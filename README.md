1. Instalar XAMPP
Lo primero de todo es descargar XAMPP en nuestro PC, que es una versión gratuita y fácil de instalar del servidor Apache (el que usan la mayoría de los hosting).

Y además puedes descargarlo para Windows, Linux y OS X.

 

Con sólo instalar este programa ya te crea un «entorno de pruebas» con todo lo necesario: un servidor, su propio gestor de base de datos, PHP, etc.

 

Descargar XAMPP
En mi caso me he descargado la versión que usa PHP 7, que es la versión que tienen la mayoría de proveedores de hosting.

 

👀 Ojo, NO te descargues la última versión 8.1.1 porque usa una versión de PHP que por ahora está «demasiado» actualizada para WordPress.

 

Así que ves a esta página donde XAMPP tiene sus versiones anteriores y descárgate la versión 8.0.14 / PHP 8.0.14 que esa SÍ que funciona bien.

 

En resumidas cuentas, lo que hace XAMPP es instalar una especie de servidor web en tu ordenador, como si tu PC fuera el hosting donde vas a alojar una copia de tu WordPress que sólo podrás ver tú.

 

1) Haz doble clic en el fichero que te has descargado para empezar la instalación de XAMPP.

 

Si usas Windows te aconsejo que mejor hagas clic encima del fichero con el botón derecho del ratón para que te salga el menú y elijas la opción Ejecutar como administrador.

 

Instalar XAMPP como administrador
 

2) Te aparecerá una ventana de bienvenida como ésta en la que sólo tienes que hacer clic en el botón Next.

 

Instalación de XAMPP
 

3) En la siguiente pantalla puedes elegir los componentes de XAMPP que quieras instalar.

Puedes dejarlo con todo seleccionado por defecto o seleccionar sólo lo que necesites. En este caso como mínimo necesitas seleccionar Apache, MySQL, PHP y phpMyAdmin.

Después haz clic en el botón Next.

 

Componentes de la instalación de XAMPP
 

4) Aquí puedes elegir la carpeta donde se instalará XAMPP y todos los componentes que hayas seleccionado antes.

En Windows la carpeta de instalación por defecto es C:\xampp.

Haz clic en el botón Next.

 

Carpeta de instalación de XAMPP
 

5) Esta ventana simplemente te indica si quieres más información sobre los módulos de Bitnami que puedes instalar en XAMPP.

Puedes deseleccionar esta opción sin problema.

Haz clic en Next.

 

Información sobre Bitnami para XAMPP
 

6) Aquí te avisa de que la instalación ya está lista para ejecutarse, así que sólo tienes que hacer clic en Next.

 

Instalación de XAMPP preparada
 

Y acto seguido verás esta otra ventana con el progreso de la instalación.

Cuando haya terminado podrás hacer clic en el botón Next.

 

Instalando XAMPP
 

7) Por último verás una ventana avisando de que la instalación se ha completado con éxito.

Y hay una opción seleccionada por si quieres abrir ya el panel de control de XAMPP.

Haz clic en el botón Finish.

 

Instalación de XAMPP completada
 

¡Y ya tienes XAMPP instalado! 🙂

 

 

2. Panel de control de XAMPP
La primera vez nada más abrir el panel de control de XAMPP te saldrá una opción para elegir el idioma entre el inglés o el alemán. Elige el inglés (si quieres) y haz clic en Save.

 

Elección del idioma de XAMPP
 

Ahora verás el panel de control con todos los elementos instalados.

Puede parecer algo lioso, pero con saber lo que voy a explicarte ahora verás que es más que suficiente:

 

Panel de control de XAMPP
 

1) Haciendo clic sólo en estos 2 botones Start ya tendrías lo necesario para instalar tu WordPress en local. Con el primero arrancas el servidor Apache, y con el segundo arrancas el gestor de base de datos.

Una vez arrancados verás que se pondrán de color verde y podrás pararlos cuando quieras haciendo clic en los botones de Stop.

 

Servidor arrancado con Apache y MySQL
 

2) Con el botón Explorer puedes ir directamente a la carpeta donde hayas instalado XAMPP, que en Windows por defecto ya has visto que es C:\xampp.

 

3) El botón Quit es simplemente para cerrar el panel de control de XAMPP.

 

4) Y en este apartado inferior se irán mostrando mensajes sobre el estado del servidor local, si se ha arrancado bien Apache o MySQL, si ha habido algún error, etc.

 

Así que ya sabes, ahora sólo tienes que arrancar Apache y MySQL haciendo clic en los botones de Start…

 

¡Y ya tienes tu servidor local funcionando! 🙂

 

Recuerda que siempre que quieras acceder a tu servidor local o ver tu WordPress en local, tienes que tener Apache y MySQL arrancados en el panel de control.

 

En Windows puedes arrancarlos directamente haciendo clic con el botón derecho del ratón en el icono de la barra de tareas.

Icono de XAMPP en la barra de tareas
Menú de XAMPP en la barra de tareas
 

 

3. Crear una base de datos para WordPress
Antes de instalar WordPress en local (ya sea una instalación nueva o la migración de un WordPress a tu servidor local), necesitas crear una base de datos nueva.

 

Para eso vamos a usar phpMyAdmin, que es la herramienta que administra las bases de datos de MySQL en nuestro servidor local.

 

Para entrar a phpMyAdmin puedes hacerlo desde el panel de control de XAMPP haciendo clic en el botón Admin de MySQL, o puedes entrar directamente desde tu navegador a http://localhost/phpmyadmin/.

 

Entrar a phpMyAdmin desde el panel de control de XAMPP
URL para entrar a phpMyAdmin en local
 

1) Nada más entrar al gestor de bases de datos de phpMyAdmin verás una ventana como ésta.

En la parte izquierda verás las bases de datos que hay creadas por defecto en tu servidor local.

 

Gestión de bases de datos de MySQL con phpMyAdmin
 

2) En este mismo apartado de la izquierda, haz clic en Nueva. Verás que en la parte derecha ahora te dejará elegir el nombre de la nueva base de datos (yo he puesto nuevabd) y en Cotejamiento elige la opción utf8mb4_general_ci (te la elige pro defecto).

Haz clic en el botón Crear.

 

Creando una base de datos nueva con phpMyAdmin
 

3) Ahora en el apartado de la izquierda ya tendrás tu nueva base de datos creada.

El usuario para poder gestionarla (esto te hará falta luego cuando instales WordPress) es root, que es el usuario principal que crea XAMPP, y por defecto el usuario root no tiene password.

 

Nueva base de datos creada con phpMyAdmin
 

¡Y ya tienes tu base de datos creada! 😀

 

 

4. Instalar WordPress en local con XAMPP
Ahora toca instalar WordPress en XAMPP con el servidor local ya arrancado desde el panel de control.

 

Voy a explicarte cómo puedes hacerlo según sea tu caso, así que elige la opción que necesitas:

a) Quiero instalar un WordPress nuevo desde cero en local

b) Quiero migrar un WordPress de remoto a local

 

a) Instalar WordPress desde cero
Una vez que tienes tu servidor arrancado y la nueva base de datos creada, vas a ver que instalar WordPress en local es muy sencillo siguiendo estos pasos:

 

 

1) Lo primero que debes hacer es descargarte el fichero .zip con la última versión de WordPress desde la página oficial de WordPress.

 

Descargar WordPress.org
 

Mueve este fichero a la carpeta C:\xampp\htdocs\ que es la carpeta de XAMPP que hace de servidor local.

 

Carpeta de instalación de WordPress en local

 

2) Tienes que descomprimir el fichero para que extraiga el contenido directamente en C:\xampp\htdocs\.

Así se creará una carpeta nueva llamada «wordpress» que contiene todo lo necesario para instalar tu WordPress desde cero.

 

3) Ahora ya puedes entrar en http://localhost/wordpress/ desde tu navegador (que sería la carpeta «wordpress» que acabas de crear).

Automáticamente te llevará a la pantalla de bienvenida para empezar la instalación y configuración de WordPress desde cero.

Haz clic en el botón ¡Vamos a ello!

 

Instalación de WordPress en localhost
 

4) En la pantalla siguiente tienes que meter los datos de la base de datos que creaste en el punto 3 tal y como están en la imagen.

Recuerda que el usuario root no tiene contraseña, así que deja este campo vacío.

Después haz clic en el botón Enviar.

 

Instalación de WordPress en local: configuración de la base de datos
 

Si la configuración de la base de datos ha ido bien verás un mensaje como éste.

Ahora haz clic en Ejecutar la instalación.

 

Ejecutar instalación de WordPress en local
 

5) Aquí tienes que rellenar los datos para la instalación de WordPress, como el título de tu nuevo sitio, el nombre del usuario que quieres crear para administrarlo, su password, etc.

Puedes seleccionar la opción Disuadir a los motores de búsqueda de indexar este sitio si quieres, aunque en verdad ni Google ni nadie podrá ver tu sitio estando en local (si no quieres, claro).

Después haz clic en Instalar WordPress.

 

Datos para la instalación de WordPress en local
 

6) Si todo ha ido bien verás un mensaje como éste en el que te avisa de que WordPress se ha instalado correctamente.

Ahora puedes hacer clic en el botón Acceder para ir a la ventana de login de tu WordPress.

 

WordPress instalado correctamente
 

Usa el nombre de usuario y la contraseña que elegiste antes. Haz clic en el botón Acceder y entrarás al escritorio de tu nuevo WordPress.

 

Login de WordPress
 

Y entrando desde http://localhost/wordpress/ podrás ver cómo queda tu sitio.

 

Escritorio y vista de WordPress instalado en local
 

¡Y ya tienes WordPress instalado en local! 🙂

 

→ Ir a la conclusión final ←

 

 

b) Migrar WordPress de remoto a local
Para hacer la migración de un WordPress de remoto a local (de tu hosting a tu ordenador) voy a explicarte las 2 fases por las que hay que pasar:

b-1) Clonar WordPress

b-2) Migrar WordPress a local

 


b-1) Clonar WordPress
Lo primero que hay que hacer es clonar tu WordPress, es decir, crear un paquete que contenga una copia exacta de tu sitio para luego migrar ese paquete a tu servidor local.

 

Esto también se suele hacer para mantener backups o copias de seguridad de tu WordPress, y para eso hay plugins muy buenos como XCloner, Updraftplus, WP Cloner o Duplicator.

En este tutorial voy a enseñarte a hacer un clon de tu WordPress con Duplicator, porque la verdad es que es de los más fáciles de usar.

 

1) Lo primero es buscar e instalar el plugin Duplicator en el WordPress que quieres migrar a tu servidor local.

 

Instalar y activar el plugin Duplicator
 

2) Una vez instalado y activado, te aparecerá un nuevo menú en tu WordPress llamado Duplicator.

No hace falta que configures nada, puedes dejarlo todo tal y como viene por defecto.

Haz clic en la opción Paquetes.

 

Menú de Duplicator en WordPress
 

3) En esta ventana verás los paquetes, copias de seguridad o «clones» que hagas de tu WordPress.

Aquí haz clic arriba a la derecha en el botón Crear nuevo.

 

Crear un paquete nuevo en Duplicator
 

4) En la primera ventana para crear el paquete puedes elegir el nombre que tendrá el paquete.

 

Nombre del nuevo paquete en Duplicator
 

También puedes elegir dónde se guardará el nuevo paquete. Por defecto se guarda en tu hosting en la carpeta wp-snapshots.

 

Almacenamiento del nuevo paquete en Duplicator
 

Puedes configurar qué quieres empaquetar, si quieres meter todo, sólo la base de datos, si quieres excluir alguna carpeta en concreto, algún tipo de fichero, etc.

 

En mi caso verás que lo empaqueto todo excepto la carpeta donde se guarda la caché de mi WordPress porque esto lo generará luego el plugin de caché que uso (te recomiendo que hagas lo mismo si usas un plugin de caché).

 

Archivos a empaquetar en Duplicator
 

Y también te permite configurar el fichero instalador con los datos de la base de datos. Lo puedes dejar como está porque se puede configurar luego cuando se haga la migración.

 

Configuración del instalador del paquete en Duplicator
 

Una vez configurado todo, puedes hacer clic en el botón Siguiente.

 

5) Verás que durante unos segundos (depende de la velocidad de tu hosting) analizará tu sitio y te mostrará el resultado del análisis.

 

Por lo general, basta con que la parte de Servidor web y Configuración PHP estén en Good y que no haya ningún error (aunque haya otras partes con advertencias Warn) para que puedas crear el paquete.

 

Si te sale alguna advertencia (como las que me salen a mí en la imagen) puedes seleccionar la opción de Sí, ¡Continuar con el proceso de construcción! y hacer clic en el botón Crear para crear el paquete de todas formas.

 

Análisis completo para la creación del paquete en Duplicator
 

6) Aparecerá una ventana avisándote de que se está creando el paquete. Aquí es normal que tarde un rato porque tiene que comprimir la base de datos y todos los ficheros de tu WordPress.

 

Cuando termine, y si todo ha ido bien, verás un mensaje de Paquete completado y 2 botones azules. Haz clic en los 2 porque así te descargará en tu PC el fichero instalador y el paquete comprimido.

 

Paquete completado con éxito en Duplicator
 

¡Y ya tienes clonado tu WordPress! 🙂

 

 


b-2) Migrar WordPress a local
Lo siguiente que hay que hacer es migrar tu WordPress a local, y para eso simplemente tenemos que instalar en nuestro servidor local el paquete que hemos creado en el paso anterior.

 

Recuerda arrancar antes tu servidor local desde el panel de control de XAMPP para poder hacer la migración de WordPress.

 

1) Dentro de C:\xampp\htdocs\ crea la carpeta donde quieres migrar tu WordPress. Por ejemplo, puedes crear una carpeta nueva llamada «wordpress».

 

En mi caso concreto, como es la migración de este blog, voy a instalar el paquete en una carpeta con el nombre del blog:

C:\xampp\htdocs\miposicionamientoweb\

 

Carpeta para la migración de WordPress a local
2) Mueve a esta carpeta nueva que has creado los 2 ficheros que te descargaste al clonar tu WordPress:

– installer.php

– <el_nombre_que_le_diste>_archive.zip

 

Carpeta con el WordPress clonado de remoto
 

3) Entra al directorio web desde tu navegador usando la URL

http://localhost/<nombre_carpeta_nueva>/

Si por ejemplo a la carpeta la nombraste «wordpress», tendrás que entrar a http://localhost/wordpress/ (en mi caso es http://localhost/miposicionamientoweb/).

Aquí verás los 2 ficheros que has movido a la carpeta. Haz clic en el installer.php para empezar la migración.

 

Directorio web donde migrar WordPress
 

4) En la pantalla verás el primer paso del instalador que genera automáticamente el plugin Duplicator para hacer la migración.

 

En el apartado Archive simplemente te muestra información del paquete con tu WordPress clonado (título del sitio, tamaño y nombre del fichero, etc.).

 

Paso 1 del instalador de Duplicator: archivo
 

En Validation muestra si todo está bien o si hay algo que pueda fallar a la hora de empezar la migración (si la carpeta tiene permisos de escritura, la versión de PHP, etc.).

 

Paso 1 del instalador de Duplicator: validación
 

En Options eliges por ejemplo si quieres descomprimir tú mismo el fichero .zip o que lo haga automáticamente el instalador con PHP (lo recomendable).

Puedes dejarlo tal y como está.

 

Paso 1 del instalador de Duplicator: opciones
 

Y en Notices simplemente te muestra algunos avisos y términos del instalador.

Sólo tienes que seleccionar la opción de abajo y hacer clic en Next.

 

Paso 1 del instalador de Duplicator: avisos
 

5) Durante unos segundos (depende del tamaño del fichero) verás un aviso de que está desplegando el paquete, y acto seguido te mostrará el segundo paso del instalador: la configuración de la base de datos.

 

Aquí déjalo todo como viene por defecto y simplemente rellena los 3 campos que te señalo en la imagen:

– El nombre que le diste a la base de datos que creaste en el punto 3.

– El usuario root que gestiona la base de datos.

– La contraseña de root que aquí lo dejamos vacío.

 

Paso 2 del instalador de Duplicator: base de datos
 

 

Haz clic en el botón Test Database para comprobar que se conecta correctamente a la base de datos.

 

Paso 2 del instalador de Duplicator: prueba de base de datos
Verás un mensaje de Success como que la prueba de conexión ha ido bien.

 

Paso 2 del instalador de Duplicator: resultado prueba de base de datos
 

Ahora haz clic en el botón Next. Te saldrá una ventana para que confirmes los datos de la base de datos y empezar su instalación.

Haz clic en Yes.

 

Paso 2 del instalador de Duplicator: confirmar instalación base de datos
 

6) Durante un rato (depende del tamaño de la base de datos) verás un aviso de que se está instalando la base de datos. En cuanto termine, te mostrará el tercer paso del instalador: la actualización de la base de datos.

 

En el apartado New Settings puedes cambiar algunas cosas como la ruta del WordPress que estás migrando o el título del sitio.

Como ves, no hace falta cambiar nada porque ya está todo bien por defecto.

 

Paso 3 del instalador de Duplicator: actualización ajustes base de datos
 

En el apartado Options puedes ajustar otros detalles como por ejemplo crear un nuevo usuario para administrar tu WordPress, cambiar las URLs del sitio que va a reemplazar en la base de datos, desactivar algún plugin, etc.

Puedes dejarlo todo tal y como viene por defecto y hacer clic en el botón Next.

Paso 3 del instalador de Duplicator: actualización opciones base de datos
7) Y ya estamos en el cuarto y último paso del instalador: la comprobación de la migración. Se trata de verificar que todo está correctamente.

 

Haciendo clic en el botón Show Report verás una tabla con información sobre la instalación de la base de datos y otros posibles avisos o mensajes de error de la migración.

Y haciendo clic sobre el botón Site Login te llevará a la página de login de tu WordPress recién migrado en local.

 

Paso 4 del instalador de Duplicator: comprobación de migración
 

Una vez dentro del escritorio de tu WordPress verás un aviso de que la migración ha sido un éxito.

Así que ya puedes hacer clic en los botones Remove Installation Files y Limpiar la caché del proceso para limpiar la instalación.

 

Migración de WordPress a local completada con éxito
 

Por último sólo te queda entrar en tu WordPress local desde http://localhost/<nombre_carpeta> y comprobar que todo está bien.

Espero que te haya gustado mi tutorial Danny :) <3