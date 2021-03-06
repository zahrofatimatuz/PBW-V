<<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
	<link rel="../img/logosquare.png" href="img/logosquare.png">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link href="coba.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js'></script>

</head>

<body>
  <section>
    <div class="drag">
      <div class="wrap">
        <div class="wrap-liner">
          <div class="mentors">
            <div class="mentor-container">
              <div class="mentor-header">Pilih Waktu</div>
              <div class="mentor-wrap">
                <ul class="mentor-liner draggable droppable" id="mentor-1">
                </ul>
              </div>
            </div>
          </div>
          <div class="students">
            <div class="students-container">
              <div class="students-header">Waktu</div>
              <div class="students-wrap">
                <ul class="students-liner draggable droppable" id="students">
                  <li class="student">Jam 09.00</li>
                  <li class="student">Jam 10.00</li>
                  <li class="student">Jam 11.00</li>
                  <li class="student">Jam 12.00</li>
                  <li class="student">Jam 13.00</li>
                  <li class="student">Jam 14.00</li>
                  <li class="student">Jam 15.00</li>
                  <li class="student">Jam 16.00</li>
                  <li class="student">Jam 17.00</li>
                  <li class="student">Jam 18.00</li>
                  <li class="student">Jam 19.00</li>
                  <li class="student">Jam 20.00</li>
                  <li class="student">Jam 21.00</li>
                  <li class="student">Jam 22.00</li>
                  <li class="student">Jam 23.00</li>
                </ul>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/jquery-drag.js"></script>
  <script src="../js/jquery-3.3.1.min"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>