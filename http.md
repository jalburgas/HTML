Métodos HTTP principales
GET

    Propósito: Solicitar datos del servidor

    Uso: Obtener recursos, consultas, búsquedas

    Características: Los datos van en la URL, sin cuerpo en la solicitud

http

GET /usuarios?id=123 HTTP/1.1

POST

    Propósito: Enviar datos para crear un nuevo recurso

    Uso: Formularios, subir archivos, crear registros

    Características: Datos en el cuerpo de la solicitud

http

POST /usuarios HTTP/1.1
Content-Type: application/json

{"nombre": "Juan", "email": "juan@email.com"}

PUT

    Propósito: Reemplazar completamente un recurso existente

    Uso: Actualizaciones completas de recursos

    Características: Idempotente (misma petición = mismo resultado)

PATCH

    Propósito: Actualización parcial de un recurso

    Uso: Modificar solo algunos campos de un recurso

    Características: Más eficiente que PUT para cambios pequeños

DELETE

    Propósito: Eliminar un recurso

    Uso: Borrar registros, archivos, etc.

    Características: Generalmente no tiene cuerpo

Métodos adicionales
HEAD

    Similar a GET pero solo recibe las cabeceras (sin cuerpo)

    Útil para verificar si un recurso existe o su tamaño

OPTIONS

    Consulta qué métodos HTTP soporta un servidor

    Útil para CORS y descubrimiento de API
