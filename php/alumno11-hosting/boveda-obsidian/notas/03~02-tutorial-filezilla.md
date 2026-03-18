# Tutorial: Configurar cuenta FTP de [[03~02~01-filezilla|Filezilla]]
## Crear cuenta FTP:
- Archivo > Gestor de sitios > Nuevo sitio
	- Nombre del sitio: 00-hosting-almtk-2026
	- Pestaña general
		- Protocolo: FTP
		- Servidor: cp7036.webempresa.eu
		- Puerto: 21
		- Modo de acceso: Normal
		- Usuario: alumno00@consolelog.es
		- Contraseña: WepanelAlu#00
	- Pestaña avanzado
		- Directorio remoto predeterminado: \\\\DUCTOR\\Cursos$\\desarrollo\\26almtk00\\IFCD0210\\php\\alumno00-hosting\\personal
	- Pestaña Opciones de transferencia:
		- Limitar el número de conexiones simultáneas: 1
- Edición > Opciones
	- Pestaña de conexión:
		- Tiempo de espera en segundos: 100 (para evitar constantes re-conexiones)
	- Pestaña Interfaz:
		- Evitar que el sistema entre en espera (stand by) durante la transferencia y otras operaciones
## Conectar y publicar
- Botón Conectar
- Botón derecho sobre el archivo prueba.txt > subir