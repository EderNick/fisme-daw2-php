# 💻 Desarrollo de Aplicaciones Web II – Repositorio Central

¡Bienvenidos al repositorio del curso **Desarrollo de Aplicaciones Web II**!

En este repositorio se irán publicando, de manera organizada, los diferentes proyectos y ejercicios que desarrollamos durante las sesiones de laboratorio.

Cada carpeta corresponde a una sesión o etapa del proyecto trabajado en clase.

Ejemplo:

```text
fisme-daw2-php/
│
├── sesion-01/
├── sesion-02/
├── sesion-03/
├── sesion-04/
└── sesion-07/
│   └── proyecto-php-mvc/
└── ...
```

Repositorio del curso:

```text
https://github.com/EderNick/fisme-daw2-php
```

---

# 🚀 ¿Cómo descargar solamente el proyecto trabajado en clase?

No es necesario descargar todo el repositorio.

Si desea trabajar únicamente con el proyecto correspondiente a una sesión, puede descargar solamente esa carpeta utilizando **DownGit**.

## 📥 Paso 1. Ubicar el proyecto

Ingrese al repositorio:

```text
https://github.com/EderNick/fisme-daw2-php
```

Luego ingrese a la carpeta correspondiente a la sesión.

Por ejemplo:

```text
sesion-07/proyecto-php-mvc
```

---

## 📋 Paso 2. Copiar la URL de la carpeta

Una vez dentro de la carpeta del proyecto, copie la URL completa que aparece en la barra de direcciones del navegador.

Ejemplo:

```text
https://github.com/EderNick/fisme-daw2-php/tree/main/sesion-07/proyecto-php-mvc
```

---

## 📦 Paso 3. Descargar con DownGit

Ingrese a:

```text
https://downgit.github.io/#/home
```

Pegue la URL de la carpeta que copió desde GitHub.

Luego presione:

```text
Download
```

Se descargará un archivo `.zip` que contiene únicamente la carpeta seleccionada.

---

# 🗂️ Paso 4. Descomprimir el proyecto

Descomprima el archivo descargado.

Obtendrá una carpeta similar a:

```text
proyecto-php-mvc
```

Puede cambiar el nombre de la carpeta si lo desea.

Por ejemplo:

```text
mi-proyecto-php
```

Se recomienda utilizar:
- letras minúsculas;
- guiones;
- sin espacios;
- sin tildes.

---

# 📁 Paso 5. Copiar el proyecto a XAMPP

Copie la carpeta del proyecto dentro de:

```text
C:\xampp\htdocs
```

Por ejemplo:

```text
C:\xampp\htdocs\mi-proyecto-php
```

La estructura quedaría aproximadamente así:

```text
C:\
└── xampp
    └── htdocs
        └── mi-proyecto-php
            ├── Config/
            ├── Controllers/
            ├── Libraries/
            ├── Models/
            ├── Views/
            ├── index.php
            └── .htaccess
```

---

# ▶️ Paso 6. Iniciar XAMPP

Abra el panel de control de **XAMPP**.

Inicie:

```text
Apache
```

Si el proyecto utiliza base de datos, también debe iniciar:

```text
MySQL
```

---

# 🌐 Paso 7. Abrir el proyecto en el navegador

Si su carpeta se llama:

```text
mi-proyecto-php
```

abra el navegador e ingrese:

```text
http://localhost/mi-proyecto-php/
```

Por ejemplo:

```text
http://localhost/mi-proyecto-php/users
```

El flujo MVC puede ser:

```text
URL
 ↓
Front Controller
 ↓
UsersController
 ↓
index()
 ↓
View
```

---

# ⚙️ IMPORTANTE: revisar BASE_URL

Algunos proyectos del curso utilizan una constante:

```php
BASE_URL
```

dentro del archivo:

```text
Config/Config.php
```

Por ejemplo:

```php
const BASE_URL = "http://localhost/DAW2/Sem_07/proyecto-php/";
```

Si cambió el nombre o la ubicación de la carpeta del proyecto, deberá modificar esta dirección.

Por ejemplo, si colocó el proyecto en:

```text
C:\xampp\htdocs\mi-proyecto-php
```

deberá utilizar:

```php
const BASE_URL = "http://localhost/mi-proyecto-php/";
```

La dirección configurada en `BASE_URL` debe coincidir con la ubicación desde donde abre el proyecto en el navegador.

---

# 🗄️ Proyectos que utilizan base de datos

Cuando el proyecto utilice **MySQL / PDO**, deberá verificar que:

```text
Apache → iniciado
MySQL  → iniciado
```

Si el proyecto incluye un archivo `.sql`, deberá importarlo utilizando:

```text
http://localhost/phpmyadmin
```

Luego revise los datos de conexión definidos en:

```text
Config/Config.php
```

Por ejemplo:

```php
const DB_HOST = "localhost";
const DB_NAME = "proyecto_php";
const DB_USER = "root";
const DB_PASS = "";
const DB_CHARSET = "utf8";
```

---

# 🧑‍💻 Abrir el proyecto en Visual Studio Code

En Visual Studio Code seleccione:

```text
Archivo
   ↓
Abrir carpeta
```

y abra:

```text
C:\xampp\htdocs\mi-proyecto-php
```

A partir de allí podrá revisar y modificar el código desarrollado durante la clase.

---

# 🔄 Flujo recomendado

```text
1. INGRESAR AL REPOSITORIO
          ↓
2. BUSCAR LA SESIÓN
          ↓
3. ENTRAR A LA CARPETA DEL PROYECTO
          ↓
4. COPIAR LA URL
          ↓
5. DESCARGAR CON DOWNGIT
          ↓
6. DESCOMPRIMIR
          ↓
7. COPIAR A C:\xampp\htdocs
          ↓
8. INICIAR APACHE / MYSQL
          ↓
9. REVISAR BASE_URL
          ↓
10. ABRIR EN VS CODE
          ↓
11. EJECUTAR EN localhost
```

---

# ⚠️ Recomendaciones

- No trabaje directamente dentro del archivo `.zip`.
- Primero descomprima completamente el proyecto.
- Coloque el proyecto dentro de `C:\xampp\htdocs`.
- Evite nombres de carpetas con espacios o tildes.
- Verifique que Apache esté iniciado.
- Si utiliza PDO/MySQL, verifique también MySQL.
- Revise siempre `BASE_URL` cuando cambie el nombre de la carpeta.
- Revise los datos de conexión a la base de datos antes de ejecutar el proyecto.
- Utilice el código del repositorio como referencia del trabajo desarrollado durante las sesiones de clase.

---

## 👨‍🏫 Curso

**Desarrollo de Aplicaciones Web II – V ciclo**

**Docente:** Mg. Eder N. Figueroa Piscoya
