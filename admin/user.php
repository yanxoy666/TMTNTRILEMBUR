<?php
session_start();
include "../config/koneksi.php";

$data = $pdo->query("
SELECT *
FROM users
ORDER BY id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kelola User</title>

<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/user.css">

</head>
<body>

<?php include "sidebar.php"; ?>

<div class="main">

    <h1>👤 Data User</h1>

    <div class="table-container">

        <table>

            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>No HP</th>
                <th>Role</th>
            </tr>

            <?php while($row = $data->fetch(PDO::FETCH_ASSOC)): ?>

            <tr>

                <td><?= $row['id'] ?></td>

                <td><?= htmlspecialchars($row['username']) ?></td>

                <td><?= htmlspecialchars($row['email']) ?></td>

                <td><?= htmlspecialchars($row['fullname']) ?></td>

                <td><?= htmlspecialchars($row['phone']) ?></td>

                <td>

                    <?php if($row['role'] == 'admin'): ?>

                        <span class="badge-admin">
                            Admin
                        </span>

                    <?php else: ?>

                        <span class="badge-user">
                            User
                        </span>

                    <?php endif; ?>

                </td>

            </tr>

            <?php endwhile; ?>

        </table>

    </div>

</div>

</body>
</html>