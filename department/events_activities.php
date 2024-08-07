<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activities</title>
    <style>
        .container {
            max-width: 1200px;
        }

        h4 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 20px;
            border-bottom: 2px solid #1a988b;
            padding-bottom: 10px;
            text-align: center;
        }

        ul.list-unstyled {
            padding-left: 0;
            list-style-type: none;
        }

        ul.list-unstyled li {
            cursor: pointer;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        ul.list-unstyled li:hover {
            background-color: #e9ecef;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .event-details {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .col-md-6 {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
    <script>
        function showEventDetails(eventId) {
            // Fetch event details from the server
            fetch(`event_details.php?id=${eventId}`)
                .then(response => response.json())
                .then(data => {
                    // Populate and display event details
                    const detailsContainer = document.getElementById('event-details');
                    if (data.error) {
                        detailsContainer.innerHTML = `<p>${data.error}</p>`;
                    } else {
                        detailsContainer.innerHTML = `
                    <h5>${data.title}</h5>
                    <p>${data.description}</p>
                    ${data.image ? `<img src="${data.image}" alt="${data.title}" style="max-width: 100%; height: auto;">` : ''}
                `;
                        detailsContainer.style.display = 'block';
                    }
                })
                console.log(data.image)
                .catch(error => console.error('Error fetching event details:', error));
        }
    </script>
</head>

<body>
    <!-- Get the Department Name -->
    <?php
    include '../conn.php';
    $department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h4>Technical Activities</h4>
                <?php
                $sql = "SELECT * FROM `event` WHERE dept ='$department' AND `sec` ='Student Activities'";
                $result = mysqli_query($conn, $sql);
                ?>
                <ul class="list-unstyled">
                    <?php while ($r = mysqli_fetch_assoc($result)) { ?>
                        <li class="mb-3" onclick="showEventDetails(<?php echo $r['id']; ?>)">
                            <p><?php echo $r['title']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-md-6">
                <h4>Non-Technical Activities</h4>
                <?php
                $sql = "SELECT * FROM `event` WHERE dept ='$department' AND `sec` ='Non-Technical Activities'";
                $result = mysqli_query($conn, $sql);
                ?>
                <ul class="list-unstyled">
                    <?php while ($r = mysqli_fetch_assoc($result)) { ?>
                        <li class="mb-3" onclick="showEventDetails(<?php echo $r['id']; ?>)">
                            <p><?php echo $r['title']; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Event Details Section -->
    <div id="event-details" class="event-details"></div>

</body>

</html>


