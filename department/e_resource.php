    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
        tbody tr td img {
            width: 50%;
            height: auto;
            display: block;
            margin: 0px auto;
        }

        .resources-table {
            width: 100%;
            margin: 0px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .resources-table th,
        .resources-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .resources-table th {
            background-color: #f2f2f2;
            color: #333;
        }

        .resources-table tr:hover {
            background-color: #f5f5f5;
        }

        .resources-table a {
            color: #007bff;
            text-decoration: none;
        }

        .resources-table a:hover {
            text-decoration: underline;
        }
    </style>
    </head>

    <body>
        <!-- Get the Department Name -->
        <?php
        include '../conn.php';
        $department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
        // $name = $department;
        if ($department == 'Applied Science') {
            $name = 'Basic Science';
        } 

        ?>

        <h3 class="text-center mt-3">e-Resource</h3>

        <div class="container">
            <ul class="nav nav-tabs eres">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">PDF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Video</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <table id="example" class="display resources-table">
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th>Subject Name</th>
                                        <th>Subject Code</th>
                                        <th>Title</th>
                                        <th>Document</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM esrc WHERE dept='$name' AND utp='pdf' order by subject";
                                    $result = mysqli_query($conn, $sql);
                                    $slno = 1;
                                    while ($r = mysqli_fetch_assoc($result)) {
                                        $pth = $r['path'];
                                    ?>
                                        <tr>
                                            <td><?php echo $slno++; ?></td>
                                            <td><?php echo $r['subject']; ?></td>
                                            <td><?php echo $r['scode']; ?></td>
                                            <td><?php echo $r['title']; ?></td>
                                            <td><a href='<?php echo $pth; ?>' target='_blank'><img src="../img/pdft.jpg" alt="PDF File"></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="container tab-pane fade">
                    <div class="row">
                        <div class="col-md-12">
                            <br><br>
                            <table id="example1" class="display resources-table">
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th>Subject Name</th>
                                        <th>Subject Code</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM esrc WHERE dept ='$name' AND utp!='pdf' order by subject";
                                    $result = mysqli_query($conn, $sql);
                                    $slno = 1;
                                    while ($r = mysqli_fetch_assoc($result)) {
                                        $pth = $r['path_old'];
                                        $utp = $r['utp'];
                                    ?>
                                        <tr>
                                            <td><?php echo $slno++; ?></td>
                                            <td><?php echo $r['subject']; ?></td>
                                            <td><?php echo $r['scode']; ?></td>
                                            <td><?php echo $r['title']; ?></td>
                                            <td>
                                                <?php if ($utp == 'LINK') { ?>
                                                    <a href='<?php echo $pth; ?>' target='_blank'><?php echo $pth; ?></a>
                                                <?php } else { ?>
                                                    <a href='<?php echo $pth; ?>' target='_blank'><img src="" alt="Video File"></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
                $('#example1').DataTable();
            });
        </script>