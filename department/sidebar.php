<style>
    img {
        width: 100%;
        height: 80%;
    }
</style>

<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
$name = $department;
if ($department == 'Applied Science') {
    $name = 'Applied Science';
} elseif ($department == 'Civil') {
    $name = 'Civil Engineering';
} elseif ($department == 'Computer Science') {
    $name = 'Computer Science and Engineering';
} elseif ($department == 'Electrical and Electronics') {
    $name = 'Electrical and Electronics Engineering';
} elseif ($department == 'Electronics and Communication Engineering') {
    $name = 'Electronics and Communication Engineering';
} elseif ($department == 'Mechanical') {
    $name = 'Mechanical Engineering';
} elseif ($department == 'Computer Network') {
    $name = 'Computer Network';
} elseif ($department == 'Digital Electronics') {
    $name = 'Digital Electronics';
}

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo ($name); ?></title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="../css/sidebar.css" />
    <!-- Bootstrap 5 icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .nav-link.active {
            background-color: #f8f9fa;
            color: #000;
        }
    </style>
</head>

<body>
    <!-- Side-Nav -->
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white">
            <li class="nav-item">
                <a class="nav-link">
                    <img src="../img/logo5.png" alt="">
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=home&dept=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?>">
                    <i class="bi bi-house-door"></i>
                    <span class="mx-2" style="font-size:15px;">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=home&dept=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'overview' ? 'active' : ''; ?>">
                    <i class="bi bi-globe-americas"></i>
                    <span class="mx-2" style="font-size:15px;">Overview</span>
                </a>
            </li>
            <?php 
            if ($department != 'Digital Electronics' && $department != 'Computer Network') {
                echo '<li class="nav-item">
                <a href="?page=hod_msg&dept=' . $department . '" class="nav-link ' . ($currentPage == 'hod_msg' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">HOD Message</span>
                </a>
            </li>';
            }
            ?>
            <li class="nav-item">
                <a href="?page=faculty_profile&dept=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'faculty_profile' ? 'active' : ''; ?>">
                    <i class="bi bi-person-bounding-box"></i>
                    <span class="mx-2" style="font-size:15px;">Faculty Profile</span>
                </a>
            </li>
            <?php 
            if ($department == 'Computer Network') {
                echo '<li class="nav-item">
                <a href="?page=achievements&dept=' . $department . '" class="nav-link ' . ($currentPage == 'research' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Student Achievements</span>
                </a>
            </li>';
            }

            if ($department == 'Computer Science') {
                echo '<li class="nav-item">
                <a href="?page=achievements&dept=' . $department . '" class="nav-link ' . ($currentPage == 'achievements' ? 'active' : '') . '">
                <i class="bi bi-person-bounding-box"></i>
                    <span class="mx-2" style="font-size:15px;">Faculty Achievements</span>
                </a>
            </li>';
            echo '<li class="nav-item">
                <a href="?page=scholar&dept=' . $department . '" class="nav-link ' . ($currentPage == 'scholar' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Research Scholar</span>
                </a>
            </li>';
            }

            if ($department != 'Digital Electronics' && $department != 'Computer Network') {
                echo '<li class="nav-item">
                <a href="?page=research&dept=' . $department . '" class="nav-link ' . ($currentPage == 'research' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Research</span>
                </a>
            </li>';
                echo '<li class="nav-item">
                <a href="?page=workshops&dept=' . $department . '" class="nav-link ' . ($currentPage == 'workshops' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Colloquium and Workshops</span>
                </a>
            </li>';
            }
            if ($department != 'Applied Science' && $department != 'Digital Electronics' && $department != 'Computer Network') {
                echo '<li class="nav-item">
                <a href="?page=industrial_visit&dept=' . $department . '" class="nav-link ' . ($currentPage == 'industrial_visit' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Industrial Visit</span>
                </a>
            </li>';
                echo '<li class="nav-item">
                <a href="?page=projects&dept=' . $department . '" class="nav-link ' . ($currentPage == 'projects' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Projects</span>
                </a>
            </li>';
            }
            if ($department != 'Digital Electronics' && $department != 'Computer Network') {
                echo '<li class="nav-item">
                <a href="?page=e_resource&dept=' . $name . '" class="nav-link ' . ($currentPage == 'e_resource' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">E-Resource</span>
                </a>
            </li>';
                echo '<li class="nav-item">
                <a href="?page=events_activities&dept=' . $department . '" class="nav-link ' . ($currentPage == 'events_activities' ? 'active' : '') . '">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Events and Activities</span>
                </a>
            </li>';
                if ($department != 'Applied Science' && $department != 'Digital Electronics' && $department != 'Computer Network') {
                    echo '<li class="nav-item">
                <a href="?page=non_teaching_staff&dept=' . $department . '" class="nav-link ' . ($currentPage == 'non_teaching_staff' ? 'active' : '') . '">
                    <i class="bi bi-camera"></i>
                    <span class="mx-2" style="font-size:15px;">Non-Teaching Staff</span>
                </a>
            </li>';
                }
            }
            if ($department != 'Applied Science' && $department != 'Digital Electronics' && $department != 'Computer Network') {
                echo '<li class="nav-item">
                    <a href="?page=students&dept=' . $department . '&sec=Industrial%20Visit" class="nav-link ' . ($currentPage == 'students' ? 'active' : '') . '">
                        <i class="bi bi-caret-right"></i>
                        <span class="mx-2" style="font-size:15px;">Student List</span>
                    </a>
                </li>';
                echo '<li class="nav-item">
                    <a href="?page=news&dept=' . $department . '&sec=Student%20Activities" class="nav-link ' . ($currentPage == 'news' ? 'active' : '') . '">
                        <i class="bi bi-caret-right"></i>
                        <span class="mx-2" style="font-size:15px;">News Letters</span>
                    </a>
                </li>';
            }
            if ($department != 'Digital Electronics' && $department != 'Computer Network') {
                echo '<li class="nav-item">
            <a href="?page=gallery&dept=' . $department . '" class="nav-link ' . ($currentPage == 'gallery' ? 'active' : '') . '">
                <i class="bi bi-person-exclamation"></i>
                <span class="mx-2" style="font-size:15px;">Gallery</span>
            </a>
        </li>';
            }
            ?>
        </ul>
    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <h2 class="dept-name"><?php echo ($name); ?></h2>
        </nav>
        <!--End Top Nav -->

        <!-- main right side content -->
        <div class="container mt-1">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            $allowed_pages = ['home', 'hod_msg', 'research', 'achievements', 'workshops', 'faculty_profile', 'projects', 'non_teaching_staff', 'students', 'news', 'scholar', 'industrial_visit', 'e_resource', 'events_activities', 'gallery'];
            if (in_array($page, $allowed_pages)) {
                include "../department/{$page}.php";
            } else {
                include '../department/home.php';
            }
            ?>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="../js/sidebar.js"></script>
</body>

</html>