# Sophia - Tema personalizado para Moodle

Sophia es un tema moderno y elegante para Moodle que mejora la experiencia de aprendizaje con un diseño enfocado en la usabilidad y estética.

## Características

- Diseño moderno y elegante con barra lateral oscura
- Paleta de colores personalizable
- Mejor visualización de cursos y actividades
- Optimizado para todas las pantallas (responsive)
- Compatible con Moodle 4.x

## Instalación

1. Descargar el repositorio como ZIP o clonar
2. Renombrar la carpeta principal a "sophia" (si es necesario)
3. Mover la carpeta a `[ruta_moodle]/theme/`
4. Acceder a tu sitio Moodle como administrador
5. Seguir la notificación de instalación o ir a "Administración del sitio" > "Notificaciones"
6. Confirmar la instalación

## Configuración

Para configurar el tema:

1. Ir a "Administración del sitio" > "Apariencia" > "Temas" > "Sophia"
2. Personalizar los ajustes según tus preferencias:
   - Subir logo personalizado
   - Cambiar colores del tema
   - Añadir CSS personalizado

## Personalización avanzada

El tema puede personalizarse más mediante:

- Edición de archivos SCSS (`scss/pre.scss` y `scss/post.scss`)
- Modificación de plantillas Mustache en la carpeta `templates/`
- Personalización del layout en `layout/`

## Estructura del tema

```
theme/sophia/
├── classes/               # Clases PHP
├── lang/                  # Archivos de idioma
├── layout/                # Layouts de páginas
├── pix/                   # Imágenes
├── scss/                  # Estilos SCSS
├── templates/             # Plantillas Mustache
├── config.php             # Configuración principal
├── lib.php                # Funciones del tema
├── settings.php           # Opciones configurables
└── version.php            # Información de versión
```

## Créditos

- Desarrollado por OnBotGo
- Basado en el tema Boost de Moodle

## Licencia

Este tema está licenciado bajo GNU GPL v3.