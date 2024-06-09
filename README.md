# Damn Vulnerable SQLi Lab

Este repositorio contiene el entorno de laboratorio para el curso de seguridad informática, específicamente diseñado para practicar y entender las vulnerabilidades de inyección SQL.

## Descripción

Este laboratorio incluye un conjunto de retos de inyección SQL que están diseñados para ser explotados. Puedes utilizar este laboratorio para aprender cómo realizar ataques de inyección SQL y para entender cómo mitigar estas vulnerabilidades en aplicaciones reales.

## Estructura del Repositorio

El repositorio está estructurado de la siguiente manera:
- `sql/`: Contiene scripts SQL para crear y poblar las bases de datos.
- `web/`: Contiene el código PHP vulnerable a inyecciones SQL.

## Cómo Usar

### Requisitos Previos

Para utilizar este laboratorio, necesitarás tener instalado Docker y Docker Compose en tu máquina. Visita [Docker](https://www.docker.com/products/docker-desktop) y [Docker Compose](https://docs.docker.com/compose/install/) para obtener las guías de instalación.

### Instrucciones de Configuración

1. Clona este repositorio en tu máquina local:

git clone https://github.com/carlosaruy/damnvulnerablesqli.git
cd damnvulnerablesqli


2. Inicia los contenedores utilizando Docker Compose:

docker-compose up -d


Esto construirá e iniciará los contenedores necesarios para el laboratorio. El servidor web estará accesible a través de `http://localhost`.

### Detener el Laboratorio

Para detener y remover los contenedores, puedes usar:
docker-compose down

## Descarga desde docker hub
Para descargarlo directamente desde docker hub:

docker pull carlosaruy/damnvulnerablesqli

## Advertencias de Seguridad

- **Este laboratorio está diseñado con vulnerabilidades intencionales como parte de un entorno controlado para fines educativos.**
- **NO debes exponer este laboratorio en una red insegura o en Internet.**
- **Asegúrate de utilizar este laboratorio únicamente en un entorno seguro y aislado.**

## Objetivos Pedagógicos

Este laboratorio está diseñado para enseñar a los estudiantes sobre:
- La identificación y explotación de vulnerabilidades de inyección SQL.
- Las mejores prácticas y técnicas para mitigar vulnerabilidades de inyección SQL.

## Contribuciones

Si estás interesado en mejorar el laboratorio o en contribuir con nuevos retos, no dudes en hacer fork del repositorio y enviar tus pull requests o abrir issues para discutir mejoras.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

