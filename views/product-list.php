<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h2>Danh sách sinh viên</h2>

<a href="index.php?page=product-add" class="btn btn-primary mb-2">Thêm mới</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Họ tên</th>
    <th>MSSV</th>
    <th>Email</th>
    <th>Hành động</th>
</tr>

<?php foreach ($products as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['fullname'] ?></td>
    <td><?= $p['student_code'] ?></td>
    <td><?= $p['email'] ?></td>
    <td>
        <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
        <a href="index.php?page=product-delete&id=<?= $p['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
    </td>
</tr>
<?php endforeach ?>
</table>

</body>
</html>
