# Mantenimiento Residencial - Proyecto Web

Proyecto académico de Negocios Electrónicos 2026-1 desarrollado por el Equipo 5.

## Descripción

Sitio web para una empresa de servicios de mantenimiento residencial que ofrece soluciones integrales para casas y departamentos. El proyecto incluye servicios de plomería, electricidad, pintura, jardinería, limpieza y carpintería.

## Equipo de Desarrollo

- **Chilpa Navarro Alan Salvador**
- **Muñoz Norberto David Julian**  
- **Quintero Montero Francisco Joshua**

## Características Principales

### Servicios Ofrecidos
- **Plomería**: Reparación de fugas, instalación de tuberías, destapado de drenajes
- **Electricidad**: Instalación eléctrica, contactos, apagadores, luminarias
- **Pintura**: Interior y exterior, texturas decorativas, impermeabilización
- **Jardinería**: Mantenimiento de jardines, poda, diseño de áreas verdes
- **Limpieza**: Residencial completa, alfombras, vidrios, post-construcción
- **Carpintería**: Fabricación y reparación de muebles, puertas, closets

### Funcionalidades Web
- Diseño responsivo y moderno
- Interactividad con JavaScript (efectos hover, resaltado de texto)
- Formulario de solicitud de servicios
- Sistema de reportes de solicitudes
- Galería de trabajos realizados
- Sección de testimonios de clientes
- Video de presentación
- Información del equipo de trabajo

## Estructura del Proyecto

```
negocios/
├── index.php              # Página principal
├── solicitud.php          # Formulario de solicitud de servicios
├── reporte.php            # Reporte de solicitudes
├── galeria.php            # Galería de imágenes de trabajos
├── nosotros.php           # Información del equipo
├── css/
│   └── styles.css         # Hojas de estilo
├── js/
│   └── app.js             # Scripts JavaScript
├── imgs/
│   ├── favicon.ico        # Icono del sitio
│   ├── logo.jpg           # Logo de la empresa
│   ├── plomeria.jpg       # Imágenes de servicios
│   ├── electricidad.jpg
│   ├── pintura.jpg
│   ├── jardineria.jpg
│   ├── limpieza.jpg
│   └── carpinteria.jpg
├── media/
│   └── presentacion.mp4   # Video de presentación
└── README.md              # Documentación del proyecto
```

## Tecnologías Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Servidor**: Apache (AppServe)
- **Base de Datos**: MySQL (para formularios y reportes)

## Instalación y Configuración

### Requisitos Previos
- AppServe instalado y configurado
- Navegador web moderno
- Editor de código (recomendado: VS Code)

### Pasos de Instalación

1. **Clonar o descargar el proyecto**
   ```bash
   git clone https://github.com/joshuaqm/negocios
   ```

2. **Colocar archivos en AppServ**
   ```
   Copiar la carpeta 'negocios' a: C:\Appserve\www\
   ```

3. **Iniciar servicios web**
   - Iniciar Apache
   - Iniciar MySQL (si se usan formularios con BD)

4. **Acceder al sitio**
   ```
   http://localhost/negocios/index.php
   ```

## Páginas del Sitio

### Página Principal (index.php)
- Hero section con descripción de servicios
- Catálogo detallado de servicios con efectos interactivos
- Sección "¿Por qué elegirnos?" con ventajas competitivas
- Testimonios de clientes
- Video de presentación corporativo

### Solicitud de Servicios (solicitud.php)
- Formulario para solicitar cotización
- Selección de tipo de servicio
- Campos para datos de contacto y descripción del trabajo

### Reporte de Solicitudes (reporte.php)
- Dashboard para visualizar solicitudes recibidas
- Filtros y búsqueda de solicitudes

### Galería (galeria.php)
- Showcase de trabajos realizados
- Imágenes organizadas por categoría de servicio

### Equipo (nosotros.php)
- Información detallada del equipo de desarrollo
- Perfiles y roles de cada integrante

## Funcionalidades JavaScript

### Efectos Interactivos
- **agrandarImagen()**: Efecto hover para las tarjetas de servicios
- **restaurarImagen()**: Restaura el tamaño original de las imágenes
- **resaltarParrafo()**: Resalta texto específico en la página

## Estilo y Diseño

- Diseño limpio y profesional
- Paleta de colores corporativa
- Tipografía legible y moderna
- Responsive design para dispositivos móviles
- Efectos CSS para mejorar la experiencia de usuario

## Contacto y Soporte

Este es un proyecto académico desarrollado para la materia de Negocios Electrónicos y Desarrollo Web.

**Institución**: Facultad de Ingeniería
**Semestre**: 2026-1  
**Equipo**: 5

---

*Proyecto desarrollado con fines educativos - 2025*
