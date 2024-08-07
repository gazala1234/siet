<style>
    .research {
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        max-width: 400px;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }
    .research ul {
        list-style-type: none;
        padding: 0;
    }
    .research li {
        background-color: #1a988b;
        color: white;
        padding: 10px;
        margin: 5px 0;
        border-radius: 3px;
        text-align: center;
    }
    .research a {
        color: white;
        text-decoration: none;
    }
    .research a:hover {
        text-decoration: underline;
    }
</style>

<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="research">
    <?php if ($department == "Applied Science") : ?>
        

    <?php elseif ($department == "Civil") : ?>
        

    <?php elseif ($department == "Computer Science") : ?>
        <ul>
            <li><a href="../pdf/achievements/cs_fac_acheivement.pdf" target="_blank">Faculty Achievements</a></li>
        </ul>

    <?php elseif ($department == "Electrical and Electronics") : ?>
        

    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        

    <?php elseif ($department == "Computer Network") : ?>
        <ul>
            <li><a href="../pdf/achievements/cne1.pdf" target="_blank">Student Achievements</a></li>
        </ul>

    <?php endif; ?>
</div>