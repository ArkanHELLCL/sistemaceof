# Sistema CEOF

Sistema en PHP que permite manejar usuarios y perfiles con el fin de desplegar informacion contable y financiera de diversos clientes. Los datos son cargados a traves de un proceso que levanta un csv y los inserta en las tablas mysql del sistema. Liego de la carga los datos quedan disponibles para que el usuario pueda navegar a trave de ellos en forma de tablas y/o gráficos dinámicos que le permitan, de una manera facil he intuitiva, visualizar sus números y movimientos durante un periodo de tiempo.

## Instalación

Para instalar y configurar el proyecto, sigue estos pasos:

1. Clona el repositorio:
    ```sh
    git clone https://github.com/ArkanHELLCL/workflow-ui.git
    ```
2. Navega al directorio del proyecto:
    ```sh
    cd tu-repositorio
    ```
2. Levanta el proyecto con vscode:
    ```sh
    code .
    ```
    o con tu ide favorita

### 2024
### **Diciembre**
**14/12**

1. Creación del repositorio, primera versión
2. Conexion a la base de datos local
3. Incorporción de una plantilla de dashboard
4. Manejo de sesiones para proteger rutas.
5. Creación de un login con conexion a mysql con manejo de session y encriptación de contraseña

**15/12**

1. Creación de procedimientos almacenados en la base de datos

**16/12**

1. Creación de procedimiento para recupera contraseña con token y tiempo de expiración
2. Creacion demodulos y paginas para recordar contraseña
3. Mejoras en estilo de login y dashboard