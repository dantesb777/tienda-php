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


