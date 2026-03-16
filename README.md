# 💧 ElPozo - Backend (API Laravel)

Este repositorio contiene la lógica de negocio, la gestión de base de datos y la API del proyecto **ElPozo**. Se encarga de la seguridad, la administración de usuarios y la generación de códigos QR.

---

### 🔗 Enlaces del Proyecto
* **Frontend (Web):** [https://github.com/fran-asensio/el-pozo-frontend](https://github.com/fran-asensio/el-pozo-frontend)
* **Backend (API):** [https://github.com/fran-asensio/el-pozo-backend](https://github.com/fran-asensio/el-pozo-backend)

---

### 🛠️ Tecnologías Utilizadas
* **Framework:** Laravel 11.x (PHP 8.x).
* **Base de Datos:** MySQL (Hospedada en TiDB Cloud).
* **Autenticación:** Laravel Sanctum (Seguridad por Tokens).
* **Generación QR:** Librería `simplesoftwareio/simple-qrcode`.
* **Despliegue:** Railway (Backend).

---

### 📂 Funcionalidades Principales
* **Gestión de Roles:** Sistema de acceso con dos niveles:
  * **Admin:** Control total de registros y usuarios.
  * **User:** Consulta de datos y generación de reportes.
* **Módulo QR:** Generación automática de códigos únicos para la identificación de registros del pozo.
* **API REST:** Estructura optimizada para la comunicación con el Frontend.

---

### ⚙️ Instalación Local
Si usas XAMPP o Laragon, sigue estos pasos:

1. **Clonar e instalar dependencias:**
   ```bash
   git clone [https://github.com/fran-asensio/el-pozo-backend.git](https://github.com/fran-asensio/el-pozo-backend.git)
   composer install
