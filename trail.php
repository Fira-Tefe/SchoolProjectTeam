<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./CSS/admin.css">
    <style>
        /* Modal styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px; 
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div>
                <img src="./image/admin.jpg" alt="There is no image" title="Admin image">
            </div>
            <div class="action">
                <i class="fa-solid fa-user"><a href="#" id="techInfo">Teacher Information</a></i> 
                <i class="fa-solid fa-graduation-cap"><a href="#">Student Information</a></i>
                <i class="fa-solid fa-people-group"><a href="#">Family Information</a></i> 
            </div>
        </div>
        <div class="mainPage">
            <h1>About Admin</h1>
            <div class="image">
                <img src="./image/admin.jpg" alt="There is no image" title="Admin image">
            </div>
            <div class="name">
                <h2>Mr. Dereje Shibiru</h2>
            </div>
            <div class="para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat vero similique, omnis ex in dolorem officia eaque minima reprehenderit cumque laboriosam voluptatem eius laborum nam nemo! Rem nihil harum ullam?
                    Rerum reiciendis suscipit eum? Eveniet consequuntur maiores quod dolores aperiam odit iste consequatur, culpa, vero optio pariatur. Consequuntur voluptatem ab numquam quibusdam. Reiciendis cupiditate veritatis asperiores! Aliquid quae hic molestiae.
                    Veniam ipsum, dignissimos officiis aperiam perferendis nam aspernatur amet consectetur minus! Iste, quasi dolores. Ex, enim cumque suscipit aspernatur alias doloremque, odit harum necessitatibus eligendi ea consequatur accusamus sunt qui?
                    Saepe, ut illum eveniet tempora explicabo, neque excepturi, architecto placeat dolore nesciunt recusandae esse dolor quidem quas accusantium culpa quam reprehenderit! Quia, dolorum molestiae! Voluptate dolorum corporis sint quidem vitae!
                    Voluptatum repellat asperiores saepe voluptatem facere, aspernatur eveniet iste inventore, praesentium facilis, adipisci quam commodi tenetur iure itaque. Doloribus veritatis consequuntur illum. Sapiente ab quo, provident aliquam adipisci fugit minus?
                    Aliquam, quisquam dolor facilis, molestiae ipsum consequatur nemo aspernatur illum voluptas maxime ipsam asperiores minima repellendus ipsa, iure tenetur odit cupiditate. Perspiciatis sapiente asperiores molestiae possimus eaque? Quaerat, inventore quae?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore debitis a veritatis accusamus, deserunt ut natus nemo, laudantium distinctio incidunt temporibus ea quod facilis quisquam reiciendis doloribus ad? Sequi, temporibus!
                    Facilis a sed fugiat ipsum vitae quibusdam excepturi quas esse repellat inventore fugit ratione dolorem hic maxime laboriosam delectus commodi veritatis quo natus blanditiis, quidem odit nemo optio? Et, corporis.
                    Alias suscipit, maiores quo repudiandae optio ad eos voluptatem aspernatur facilis minus non voluptatum? Odio quam harum atque rem consequuntur in neque vero impedit magnam sapiente, aliquid dolores, modi voluptate?
                </p>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modalBody">
                <!-- Content from Tech.php will be loaded here -->
            </div>
        </div>
    </div>

</body>
</html>