# NÓMINA ELECTRONICA

Estructura de datos para la generación de nóminas electrónicas ante la DIAN.

### Encabezados

Datos de la nómina como Prefijo y numero de nómina etc.

```php
$payrollData = [
    'prefix' => 'NEI',
    'number' => '1',
    'date' => '2025-06-17 10:30:00-05:00',
    'currency' => 'COP',
    'note' => 'notas de prueba',
    'novelty' => '1',
    'novelty_identifier' => 'CUNE DE LA NOVEDAD',
];
```

### Periodo

Datos del periodo de la nómina.

```php
'period' => [
    'type' => '4',
    'admission_date' => '2025-03-17',
    'retirement_date' => '2025-03-17',
    'settlement_start_date' => '2025-03-17',
    'settlement_end_date' => '2025-03-17',
    'worked_time' => 10
];
```

### Empleador/Proveedor

Datos del empleador/proveedor.

```php
'company' => [
    'identification_type' => 31,
    'identification_number' => '123456789',
    'company_name' => 'EMPRESA EJEMPLO S.A.S.',
    'address' => 'Carrera 10 # 20-30',
    'city' => '11001',
    'state' => '11',
    'country' => 'CO'
];
```

### Empleado

Datos del empleado.

```php
'employee' => [
    'worker_type' => '01',
    'worker_subtype' => '00',
    'contract_type' => '1',
    'identification_type' => 13,
    'identification_number' => '1122404871',
    'first_name' => 'Andres',
    'other_names' => 'Mauricio',
    'first_surname' => 'Daza',
    'second_surname' => 'Pabon',
    'address' => 'Transversal 51B # 64B - 85',
    'city' => '11001',
    'state' => '11',
    'country' => 'CO',
    'high_risk_pension' => false,
    'integral_salary' => false,
    'salary' => 1200000,
    'worker_code' => '123456789'
];
```

### Generación del documento

Datos de la generación del documento.

```php
'generation_place' => [
    'country' => 'CO',
    'state' => '11',
    'city' => '11001',
    'language' => 'es'
];
```

### Pagos

Datos de los pagos asociados al documento electrónico.

```php
'payment' => [
    'payment_mean' => '1',
    'payment_method' => '31',
    'bank_name' => 'BANCO',
    'account_type' => 'Ahorros',
    'account_number' => '55555555555',
    'dates' => ['2025-01-02']
];
```

### Totales

Datos de los totales del documento electrónico.

```php
    'rounding' => 0, // Redondeo
    'total_earned' => 1325000, // Total Devengado
    'deductions_total' => 97400, // Total Deducciones
    'total_voucher' => 1334054 // Total Comprobante
```

### Notas de ajuste Reemplazo/Eliminación

Cuando emitimos notas de ajuste de reemplazo o eliminación la DIAN nos pide que enviemos el motivo por el cual se emite esta misma.

```php
'type' => '1' // Reemplazo
'type' => '2' // Eliminación
```

### Predecesor

Datos del predecesor del documento electrónico.

```php
'predecessor' => [
    'number' => 'NEI1',
    'cune' => 'CUNE-REFERENCIA',
    'issue_date' => '2025-01-02',
];
```

### Instanciar `PayrollBuilder`

```php
use DazzaDev\DianXmlGenerator\Builder\PayrollBuilder;

$payrollBuilder = new PayrollBuilder(
    type: 'individual', // individual, adjustment-note
    payrollData: $payrollData,
    environment: '2', // 1: Producción, 2: Pruebas
    software: $software,
);
```

### Generar el XML

```php
$xml = $payrollBuilder->getXml();
```

### Obtener el documento

```php
$document = $payrollBuilder->getPayroll();
```
