# Realizacion de un CRUD - laravel
 - Para realizar un crud se ha realizado basado en el tutorial:
        ```
        https://youtu.be/6KX4r03FrR0
        ```

## Pasos
1) Crear el modelo con el comando:
  ```sh
  docker-compose exec app php artisan make:model Empleado -mcr
  ```
2) Modificar el archivo migration creado en la carpeta database:

  **/laravel-app/database/migrations/** 2021_03_11_005758_create_empleados_table.php
  ```sh
  Agregar los campos (Nombre, apellidos, correo, foto):
    $table->id();
    ... 
    $table->string('Nombre');
    $table->string('ApellidoPaterno');
    $table->string('ApellidoMaterno');
    $table->string('Correo');
    $table->string('Foto');
    ...
  ```
3) correr el comando:;
    ```sh
    docker-compose exec app php artisan migrate
    ```
    Resultado:
    - Migrating: 2021_03_11_005758_create_empleados_table
    - Migrated:  2021_03_11_005758_create_empleados_table (55.48ms)
