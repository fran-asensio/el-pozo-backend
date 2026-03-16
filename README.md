# 💧 ElPozo - Backend API (Laravel)

Repositorio oficial del Backend para el sistema de gestión de **ElPozo**. Esta API centraliza la lógica de negocio, la seguridad de los datos y la generación de identificadores QR.

---

### 🛠️ Stack Tecnológico
* **Framework:** Laravel 11.x
* **Lenguaje:** PHP 8.x
* **Base de Datos:** MySQL (TiDB Cloud)
* **Autenticación:** Laravel Sanctum (Tokens API)
* **Generación QR:** `simplesoftwareio/simple-qrcode`

---

### 📂 Funcionalidades del Servidor
* **Control de Acceso (RBAC):** Gestión de permisos diferenciados entre perfiles **Admin** y **User**.
* **Motor de QR:** Generación dinámica de códigos QR vinculados a cada registro del pozo.
* **Persistencia:** Gestión eficiente de registros históricos y auditoría de usuarios.
* **Infraestructura:** API preparada para despliegue en contenedores (Railway).

---

### ⚙️ Configuración del Entorno
Para instalar este Backend en local (XAMPP/Laragon):

1. **Clonar e instalar:**
   ```bash
   git clone [https://github.com/fran-asensio/el-pozo-backend.git](https://github.com/fran-asensio/el-pozo-backend.git)
   composer install
