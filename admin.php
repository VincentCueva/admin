<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            overflow-x: hidden;
        }

        #wrapper {
            display: flex;
        }

        #sidebar-wrapper {
            position: fixed;
            width: 250px;
            height: 100%;
            background: #000;
            overflow-y: auto;
            transition: all 0.5s ease;
            padding-top: 20px;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 10px;
            color: white;
            text-align: center;
        }

        #sidebar-wrapper .list-group {
            padding: 20px;
        }

        #sidebar-wrapper .list-group-item {
            border: none;
            background: #000;
            color: #fff;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        #sidebar-wrapper .list-group-item:hover {
            background: rgba(255, 255, 255, 0.2);
            border-left: 4px solid red;
            color: #fff;
        }

        #page-content-wrapper {
            flex: 1;
            padding-left: 250px;
            padding-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #wrapper.toggled #page-content-wrapper {
            padding-left: 0;
        }

        .fa {
            margin-right: 10px;
        }

        
        .blog-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            width: 80%; 
        }
    </style>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading">Admin Dashboard</div>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
                <a href="index.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-book"></i> Training Guide
                </a>
                <a href="manage_accounts.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-users"></i> Manage User Accounts
                </a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Admin Dashboard</h1>
                        <p>The Admin Dashboard serves as the centralized nerve center for our system, providing a comprehensive and intuitive interface to streamline operations, enhance decision-making, and ensure a seamless experience for both staff and members. With a user-friendly design, real-time data updates, and powerful functionalities, the Admin Dashboard is tailored to meet the diverse needs of our gym administrators, enabling efficient management and optimization of resources.</p>
                    </div>
                </div>

                <!-- Box for Rules, Regulations, and Policies -->
                <div class="blog-box">
                    <h2>Gym Rules :</h2>
                    <p>1. All members must have a valid and current membership to use the facilities. <br>
2. Appropriate workout attire, including athletic shoes, must be worn at all times.<br>
3. Towels are required on all equipment; wipe down machines after use.<br>
4. Respect others by keeping noise to a minimum, including the use of headphones.<br>
5. Limit cell phone use in workout areas..</p>
                </div>
                  <!-- Box for Rules, Regulations, and Policies -->
                  <div class="blog-box">
                    <h2>Policies</h2>
                    <p>1. Properly use and return equipment; limit time on cardio machines during peak hours.<br>
2. Use lockers for personal belongings; gym is not responsible for lost items.<br>
3. Follow proper lifting techniques to prevent injuries.<br>
4. Guests must sign in and adhere to gym rules; limit the number of guests per member.</p>
                </div>
                  <!-- Box for Rules, Regulations, and Policies -->
                  <div class="blog-box">
                    <h2>Regulations</h2>
                    <p>1. No outside food or drink on the workout floor; use designated areas for eating.<br>       
2. Be respectful of other members and gym staff; follow all posted rules and guidelines.<br>
3. Adhere to the gym's opening and closing hours; note any holiday or special hours.<br>
4. Members with medical conditions should consult with a doctor before using the gym; inform staff of any emergencies.</p>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Your custom JavaScript -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>
