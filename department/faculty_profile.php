<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faculty profile</title>
  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
  <style>
    p{
      padding: 5px 5px;
      margin: 0px;
    }
    .card {
      position: relative;
      width: 300px;
      height: 500px;
      background: #1a988b;
      border-radius: 10px;
      background: linear-gradient(#1a988b, #1a988b 45%, #fff 45%, #fff 100%);
      border-top: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(15px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    }

    .img-bx {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      transform: translateY(30px) scale(0.5);
      transform-origin: top;
    }

    .img-bx img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      padding-bottom: 2px;
    }

    .content .detail {
      display: inline-block;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .content .detail h4 {
      color: #1a988b;
      font-size: 1em;
      font-weight: bolder;
    }

    .content .detail h4 span {
      font-size: 0.7em;
      color: #1a988b;
      font-weight: bold;
    }
  </style>
</head>
<?php include '../conn.php';

$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';

// Query to get the faculty details from the faculty table
$sql = "SELECT * FROM `faculty` WHERE dept ='$department' AND `status` ='1' order by fid";
// print_r($sql);
$result = mysqli_query($conn, $sql);
?>

<body>
  <div class="row">
    <?php if ($result && mysqli_num_rows($result) > 0) : ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="col-md-4 mt-4">
          <div class="card">
            <div class="img-bx">
              <img src="../img/<?= $row['imgpath'] ?>" alt="Faculty Image" />
            </div>
            <div class="content">
              <div class="detail">
                <h4><?= $row['fname'] ?><br/>
                <span><?= $row['designation'] ?></span></h4>
                <h6><?= $row['qualification'] ?></h6>
                <p><b>Phone: </b><?= $row['mobile']?></p>
                <p><b>Email: </b><?= $row['emailid']?></p>
                <p><b>Blog: </b><?= $row['blog']?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <p>No faculty members found for this department.</p>
    <?php endif; ?>
  </div>


</body>

</html>