<?php
include "header.php";
?>
<h2>Daftar Buku</h2>
<div class="row">
    <?php
    include "connect.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)) {
        ?>
        <div class="col-md-3">
        <?php 
        // Display the image
        echo '<img src="data:image/jpeg;base64,'.base64_encode($dt_buku['foto']).'" class="card-img-top">';
        ?>
    </div>
                    <h5 class="card-title"><?= $dt_buku['nama_buku'] ?></h5>
                    <p class="card-text"><?= substr($dt_buku['deskripsi'], 0, 20) ?></p>
                    <a href="pinjam_buku.php?id_buku=<?= $dt_buku['id_buku'] ?>" class="btn btn-primary">Pinjam</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>