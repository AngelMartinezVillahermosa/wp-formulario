# ETIQUETAS Y ATRIBUTOS PARA LA CREACION DE FORMULARIOS

## Pre-instalacion 
Hay que tener;
-VSC
-Conexion a internet
-XAMPP
## Instalacion 
### COMO DESCARGAR XAMPP

Paso 1: Descarga
Las versiones con PHP 5.5, 5.6 o 7 se pueden descargar gratuitamente desde la página del proyecto


Paso 2: Ejecutar el archivo .exe
Una vez descargado el paquete, puedes ejecutar el archivo .exe haciendo doble clic en él.


Paso 3: Desactivar el programa antivirus
Serecomienda desactivar el programa antivirus hasta que todos los componentes estén instalados, ya que puede obstaculizar el proceso de instalación.


Paso 4: Desactivar el UAC
También el control de cuentas de usuario puede interferir en la instalación, ya que limita los derechos de escritura en la unidad de disco C:\. Para saber cómo desactivar temporalmente el UCA puedes dirigirte a las páginas de soporte de Microsoft.


Paso 5: Iniciar el asistente de instalación
Una vez superados estos pasos, aparece la pantalla de inicio del asistente para instalar XAMPP. Para ajustar las configuraciones de la instalación se hace clic en “Next”.


Paso 6: Selección de los componentes del software
En la rúbrica “Select components” se pueden excluir de la instalación componentes aislados del paquete de software de XAMPP. Se recomienda la configuración estándar para un servidor de prueba local, con la cual se instalan todos los componentes disponibles. Confirma la selección haciendo clic en “Next”.


Paso 7: Selección del directorio para la instalación
En este paso se escoge el directorio donde se instalará el paquete. Si se ha escogido la configuración estándar se creará una carpeta con el nombre XAMPP en C:\.


Paso 8: Iniciar el proceso de instalación
El asistente extrae los componentes seleccionados y los guarda en el directorio escogido en un proceso que puede durar algunos minutos. El avance de la instalación se muestra como una barra de carga de color verde.


Paso 9: Configurar Firewall
Durante el proceso de instalación es frecuente que el asistente avise del bloqueo de Firewall. En la ventana de diálogo puedes marcar las casillas correspondientes para permitir la comunicación del servidor Apache en una red privada o en una red de trabajo. Recuerda que no se recomienda usarlo en una red pública.


Paso 10: Cerrar la instalación
Una vez extraídos e instalados todos los componentes puedes cerrar el asistente con la tecla “Finish”. Para acceder inmediatamente al panel de control solo es necesario marcar la casilla que pregunta si deseamos hacerlo. 


### COMO DESCARGAR WORDPRESS EN XAMPP

1.- Descargar XAMPP para Mac
Tenemos la opción de descargar XAAMP para Mac o para Windows. Y además podemos elegir la versión de PHP.  Yo en mi servidor de Webempresa tengo instalada la versión de 7.1.9 de PHP y me funciona todo correcto. Así que voy ha intentar que mi servidor local se parezca lo máximo a mi servidor en internet y me voy a bajar la opción para Mac. Si tu eres usuario de Windows no hay problema. El proceso va a ser muy similar.

2.- Instalar XAMPP en Mac
Para instalar XAMPP en Mac descomprimimos el zip y pinchamos en el archivo .dmg. Lo siguiente será arrastrar XAMPP a nuestras aplicaciones.
Ya podemos abrir XAMPP desde nuestras aplicaciones y nuestro ordenador nos pedirá que metamos nuestros datos de administrador del sistema por seguridad. Esto es así porque XAMPP va a modificar algunos archivos del sistema para convertir nuestro ordenador en un servidor local.
Ahora se inicia el proceso y le damos a siguiente en las siguientes pantallas del instalador hasta llegar a una que nos dice si queremos la aplicación de Bitnami. Ésta la desmarcamos porque no nos interesa ya que, aunque nos haría la vida más fácil, sólo nos permitiría crear un site.


## Construido con 🛠️

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - El framework web usado
* [Maven](https://maven.apache.org/) - Manejador de dependencias
* [ROME](https://rometools.github.io/rome/) - Usado para generar RSS
* [VSC](https://code.visualstudio.com/) - Usado para editar código fuente y ejecutar comandos

