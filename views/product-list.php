<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<a href="?page=product-add" class="btn btn-primary mb-3">➕ Thêm sản phẩm</a>

<table class="table table-bordered">
<tr>
    <th>ID</th><th>Tên</th><th>Giá</th><th>Hình</th><th>Hành động</th>
</tr>
<?php foreach ($products as $p): ?>
<tr>
<td><?= $p['id'] ?></td>
<td><?= $p['name'] ?></td>
<td><?= $p['price'] ?></td>
<td><img src="<?= $p['image'] ?>" width="80"></td>
<td>
<a href="?page=product-detail&id=<?= $p['id'] ?>">Xem</a> |
<a href="?page=product-edit&id=<?= $p['id'] ?>">Sửa</a> |
<a href="?page=product-delete&id=<?= $p['id'] ?>"
   onclick="return confirm('Xóa?')">Xóa</a>
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>
