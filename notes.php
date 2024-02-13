<?php
  require_once('database.php');
  $data=tampildata('notes');
  $nomor=0;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NOTES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link active" href="notes.php">Notes</a>
            <a class="nav-link" href="user.php">user</a>
            <a class="nav-link" href="edit.php">Edit Notes</a>
          </div>
        </div>
      </nav>

      <div class = "container">
        <center><h1>DAFTAR CATATAN</h1></center>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Created at</th>
      <th scope="col">Note</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item): ?>
    <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['id']; ?></td>
      <td><?php echo $item['created_at']; ?></td>
      <td><?php echo $item['notes']; ?></td>
      <td><?php echo "<a href='edit.php?id=$item[id]'>Edit</a> | <a href='javascript:hapusData(".$item['id'].")'>Hapus Data</a>"; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <script languange="JavaScript" type="text/javascript">
    function hapusData(id){
      if(confirm("Apakah anda yakin menghapus data ini?")){
        window.location.href = 'delete.php?id=' + id;
      }
    }
    </script>
  </body>
</html>