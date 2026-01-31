Họ tên: Vũ Minh Thành
MSV: 23810310236

Mục tiêu Lab
Ngày 1:
Hiểu và áp dụng mô hình MVC (Model – View – Controller)

Biết cách dùng Composer & Autoload (PSR-4)

Kết nối CSDL MySQL bằng PDO

Tổ chức source code rõ ràng, đúng chuẩn

Ngày 2:
Làm quen với Composer và thư viện bên ngoài

Cấu hình Autoload theo chuẩn PSR-4

Tổ chức project theo mô hình MVC (Model – View – Controller)

Xây dựng ứng dụng CRUD quản lý sản phẩm kết nối Database MySQL

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    image VARCHAR(255),
    description TEXT
);
