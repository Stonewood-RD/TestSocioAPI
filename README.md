# Hola!

Este repositorio te muestra como usar el API para los socios de Stonewood.

Pasos para poder correr el app:

1) Crear un GitHub token.
   - Esto es necesario para poder referenciar unas librerias que se utilizan en el cometido.

2) Agregar el GitHub token a un archivo llamado `auth.json` en el tope del proyecto.
  - Este debe tener un formato asi:

````
{
    "github-oauth": {
        "github.com":     "PARA_CONSEGUIR_TU_TOKEN_VER_INSTRUCCIONES_EN_GITHUB"
    }
}
````

3)  Correr `composer install`

4)  Incluir su token de Stonewood App en el archivo `configure/env.php`

5)  Correr los archivos de PHP.
