1. Modelo Cliente-Servidor

Es una arquitectura de comunicación donde dos partes interactúan:

    Cliente: Es quien hace una solicitud. Ejemplo: tu navegador (Chrome, Firefox) pidiendo una página web.

    Servidor: Es quien recibe la solicitud, la procesa y envía una respuesta. Ejemplo: el ordenador remoto que aloja la web de Google.

Características:

    El cliente inicia la comunicación.

    El servidor espera pasivamente solicitudes.

    Un servidor puede atender a muchos clientes.

    Ejemplo cotidiano: cuando entras a una web, tu navegador (cliente) pide la página al servidor de esa web.

2. Servicio Web

Es un tipo especial de servicio ofrecido por un servidor para que aplicaciones (no personas directamente) se comuniquen entre sí vía web.
Permite que programas de distintos lenguajes o sistemas intercambien datos.

Tipos comunes:

    SOAP: Usa XML y es muy estricto.

    REST: Más moderno y flexible, usa JSON normalmente.

Ejemplo: Cuando una app del clima pide datos a un servidor de meteorología, está usando un servicio web.
3. Protocolos web principales

Son reglas que definen cómo se formatean y transmiten los mensajes.
Protocolo	Uso principal
HTTP/HTTPS	Transferencia de páginas web y datos. HTTPS es la versión segura (cifrada).
TCP	Garantiza que los datos lleguen completos y en orden. Base de HTTP.
IP	Se encarga de direccionar y enrutar paquetes.
WebSocket	Comunicación bidireccional en tiempo real (chats, juegos).
FTP	Transferencia de archivos.
DNS	Traduce nombres de dominio (ej. google.com) a direcciones IP.
Ejemplo completo (cuando visitas una web)

    Tu cliente (navegador) usa DNS para convertir "www.ejemplo.com" en una IP.

    Abre una conexión TCP con el servidor en esa IP.

    Envía una solicitud HTTP (ej. GET /index.html).

    El servidor web responde con el contenido (HTML, CSS, etc.).

    El navegador interpreta y muestra la página.

Resumen visual
text

[Cliente] --solicitud HTTP--> [Servidor web]
         <--respuesta HTML--

Y si es un servicio web entre aplicaciones:
text

[Aplicación A] --solicitud REST/SOAP--> [Servidor de servicios web]
              <--respuesta JSON/XML----


