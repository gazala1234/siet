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
        <ul>
            <li><a href="../pdf/research/math.pdf" target="_blank">Mathematics</a></li>
            <li><a href="../pdf/research/phy.pdf" target="_blank">Physics</a></li>
            <li><a href="../pdf/research/che.pdf" target="_blank">Chemistry</a></li>
        </ul>

    <?php elseif ($department == "Civil") : ?>
        <ul>
            <li><a href="../pdf/research/cv.pdf" target="_blank">Civil Research</a></li>
        </ul>

    <?php elseif ($department == "Computer Science") : ?>
        <ul>
            <li><a href="../pdf/research/cs.pdf" target="_blank">CS Research</a></li>
        </ul>

    <?php elseif ($department == "Electrical and Electronics") : ?>
        <ul>
            <li><a href="../pdf/research/ee.pdf" target="_blank">EE Research</a></li>
        </ul>

    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <ul>
            <li><a href="../pdf/research/ec.pdf" target="_blank">EC Research</a></li>
        </ul>

    <?php elseif ($department == "Mechanical") : ?>
        <ul>
            <li><a href="../pdf/research/me.pdf" target="_blank">Mech Research</a></li>
        </ul>

    <?php endif; ?>
</div>