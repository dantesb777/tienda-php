# 🛒 Tienda PHP

Sistema de información desarrollado en PHP para gestionar productos, registrar compras y ventas, y consultar movimientos e inventario.

## 📌 Descripción

Este sistema permite:
- Registrar productos con su tipo, estado y precio.
- Registrar compras de proveedores (encabezado y detalle).
- Registrar ventas a clientes (encabezado y detalle).
- Consultar reportes por periodo de tiempo.
- Generar Kardex del inventario con entradas y salidas.
- Controlar el estado de las compras y ventas (activas o anuladas).

## ⚙️ Tecnologías usadas

- 🐘 PHP
- 🐬 MySQL (phpMyAdmin)
- 🧰 HTML, CSS
- 🖥️ XAMPP como servidor local
- 📝 Git y GitHub para control de versiones

## 📁 Estructura del proyecto

/Tienda
│
├── conexion.php
├── registrar_producto.php
├── registrar_compra.php
├── registrar_venta.php
├── consultas/
│ ├── consultar_compras.php
│ ├── consultar_ventas.php
│ └── kardex.php
├── css/
│ └── estilos.css
├── img/
├── .gitignore
└── README.md

bash
Copy
Edit

## 🧪 ¿Cómo probar el sistema?

1. Clona el repositorio:

   ```bash
   git clone https://github.com/dantesb777/tienda-php.git
Copia la carpeta dentro de C:\xampp\htdocs\.

Inicia Apache y MySQL desde XAMPP.

Importa el archivo SQL de la base de datos (si lo tienes) desde phpMyAdmin.

Accede desde tu navegador a:

arduino
Copy
Edit
http://localhost/tienda
📈 Funcionalidades
Módulo	Descripción
Productos	Registro, edición y desactivación de productos
Compras	Registro de compras con detalle por proveedor
Ventas	Registro de ventas con detalle por cliente
Consultas	Consultas por fechas y estados
Kardex	Reporte de movimientos de inventario

📊 Ejemplo de Kardex
sql
Copy
Edit
+----------------+------------+---------+---------+-----------+
| Tipo Movimiento| Fecha      | Producto| Cantidad| Subtotal  |
+----------------+------------+---------+---------+-----------+
| Entrada        | 2025-06-21 | Café    | 10      | 100000    |
| Salida         | 2025-06-22 | Café    | 6       |  90000    |
+----------------+------------+---------+---------+-----------+
| SALDO FINAL: 4 unidades – $10,000 c/u promedio |
📜 Licencia
Este proyecto fue desarrollado con fines educativos por Daniel Osorio. Puedes modificarlo y reutilizarlo libremente.



