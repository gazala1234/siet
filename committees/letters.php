<!-- included header -->
<?php include '../home/header.php' ?>
<style>
.container ul {
    list-style: none;
    padding: 0;
}

.container ul li {
    background: #e4e4e4;
    margin: 10px 0;
    padding: 15px;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.container ul li:hover {
    background: #ddd;
}

@media (max-width: 600px) {
    .container {
        width: 100%;
        padding: 10px;
    }

    .container ul li {
        padding: 10px;
    }
}
</style>

    <div class="container mt-3">
        <h4>APPROVAL LETTERS</h4>
        <ul>
            <li><a href="../pdf/governance/letter.pdf" target="_blank">AICTE Approval Letter</a></li>
        </ul>
    </div>

<!-- included footer -->
<?php include '../home/footer.php' ?>