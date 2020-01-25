Link demo : https://bangunpsb.000webhostapp.com/6-a/


<?php
$koneksi = mysqli_connect("localhost", "root", "", "arkademy_bootcamp");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>

<table border="1">
    <thead>
        <tr>
            <th>Chasier</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php $sql = mysqli_query($koneksi, "SELECT product.id_chasier, product.name AS nmp, product.id_category, product.price ,chasier.id,chasier.name AS nmk,category.id,category.name AS nmc from product, category, chasier where product.id_chasier=chasier.id and product.id_category=category.id") ?>
        <?php while ($data = $sql->fetch_assoc()) { ?>
            <tr>
                <td><?= $data['nmk']; ?></td>
                <td><?= $data['nmp']; ?></td>
                <td><?= $data['price']; ?></td>
                <td> <?= $data['nmc']; ?></td>
            </tr>
        <?php } ?>

    </tbody>
</table>
