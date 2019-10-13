# siba-oauth2
SIBA OAUTH2 SERVER

## 1. Objetivo:

Esta aplicación tiene como objetivo, servir de servidor de autenticación y autorización basado en OAuth2, para un entorno de microservicios, esto incluye:

- Administración de usuarios
- Administración de clientes
- Emisión de tokens (de autorización, de acceso y de "refresco")
- Validación de usuarios
- Validación de tokens de acceso mediante un endpoint de introspección como está definido en el RFC-7662 (https://tools.ietf.org/html/rfc7662), detalles en (https://www.oauth.com/oauth2-servers/token-introspection-endpoint/)

## 2. Este servidor corre bajo el entorno LAMP, con los componentes en las siguientes versiones:

- PHP 7.3.5 
- Apache/2.4.6
- Mysql 5.5

Todos estos componentes ya están disponibles en los siguientes containers de docker:

maomuriel/siba-auth:1.0.0
mysql:5.5

## 3. Software de aplicación: El software de aplicación utilizado para este producto de software, está basado en el framework Laravel Framework 5.8.35, con complemento de los paquetes:

- laravel/passport 7.5
- ipunkt/laravel-oauth-introspection 1.0

Se siguió la siguiente guía de instalación del framework y del paquete laravel/passport: https://tutsforweb.com/laravel-passport-create-rest-api-with-authentication/ y porteriormente, se instaló el paquete ipunkt/laravel-oauth-introspection para darle soporte al denominado endpoint de instrospección https://github.com/ipunkt/laravel-oauth-introspection

