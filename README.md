# DIAN XML GENERATOR

Paquete para la generación de archivos XML validos para la factura electrónica DIAN.

## Instalación

```bash
composer require dazza-dev/dian-xml-generator
```

## Uso

Primero vamos a entender la estructura de los datos que debemos pasar al constructor.

### Software

Datos del software propio creado en el modulo de habilitación de la [DIAN](https://catalogo-vpfe-hab.dian.gov.co/User/Login).

```php
$software = [
    'identifier' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
    'test_set_id' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
    'pin' => 'pin_software',
];
```

### Estructura

- [Factura Electrónica](./INVOICE.md)
- [Nómina Electrónica](./PAYROLL.md)

### Listado de códigos permitidos

Este repositorio contiene los listados oficiales de datos que deben ser utilizados para la emisión de facturas electrónicas ante la DIAN. Es crucial que los códigos enviados en los campos del documento coincidan exactamente con los establecidos por la DIAN, de lo contrario, la factura será rechazada.

- [Listado](./data)

## Contribuciones

Contribuciones son bienvenidas. Si encuentras algún error o tienes ideas para mejoras, por favor abre un issue o envía un pull request. Asegúrate de seguir las guías de contribución.

## Autor

Dian XML Generator fue creado por [DAZZA](https://github.com/dazza-dev).

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
