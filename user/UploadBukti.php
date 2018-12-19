<<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BolaOn - Upload Bukti Pembayaran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
          rel="stylesheet">
</head>
<body class="body">

<?php
include "navbar.php";
?>

<div class="container">
    <div class="col-md-12 center"></div>
    <div class="row">
        <div class="langkah">
            <img class="center-block" id="langkah" src="../img/step/step-3.png">
        </div>

        <div class="content">
            <form action="proses_upload.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                <ul class="list-inline">
                    <li style="color: #01D362"><h2><u><strong>Upload </strong></h2></u></li>
                    <li><h2><strong>Bukti Pembayaran </strong></h2></li>
                </ul>

                <div class="form-group">
                    <label for="bayar">Nominal bayar:</label>
                    <input type="text" name="bayar" class="form-control" id="bayar">
                </div>

                <div class="td">
                    <h3>Waktu anda untuk membayar uang muka tersisa : 15 menit</h3>
                    <h4 class="text-danger"> *mohon untuk upload bukti pembayaran di bawah ini </h4>
                    <div class="uploadbukti">

                        <img id="upimg" class='thumbnail' src="http://placehold.it/180" alt="your image"/>


                        <input type='file' id="btnupimg" name="bukti" onchange="readURL(this);"/>
                    </div>
                </div>


                <div class="tombol-submit">
                    <button type="submit" class="btn btn-success" id="selesai"> Selesai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#upimg')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>
