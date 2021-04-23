<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="../css/backend.css">
    <meta charset="utf-8">
    <title>Admin</title>
</head>

<body>

    <div class="BEheader">
        <div class="logo">
            <a href="backEnd7.php">Grocery</a>
        </div>
        <a href="../index.php" class="frontEnd">Front End</a>
    </div>

    <div class="mainGrid">
        <div class="sideBar">
            <div class="NavCard">

                <a href="backEnd7.php">PRODUCTS</a>
                <a href="backEnd9.php">ACCOUNTS</a>
                <a href="backend11.php">ORDERS</a>

            </div>
        </div>

        <!-- onchange="this.form.submit()" -->
        <div class="BEmain">
            <div class="log">
                <div class="UserList">
                    <form>
                        <label for="sort">Sort by:</label>
                        <select style="width:100px;">
                            <option value="ID">ID</option>
                            <option value="First Name">First Name</option>
                            <option value="Last Name">Last Name</option>
                        </select>
                    </form>
                    <br>
                    <br>

                    <a href="backEnd10.php"><button class="addUser p9but">Add User</button></a>

                    <ul class="list">
                        <?php
                        $showUserRow = '';
                        $getUserTable = '../xml/users.xml';
                        $getUsers = simplexml_load_file($getUserTable);

                        foreach ($getUsers->children() as $user) {
                            $showUserRow .= '
                            <li class="list-item">
                                <div>
                                    <img src="../images/other/blank-profile.png" class="list-item-image">
                                </div>
                                <div class="list-item-content">
                                    <form class="list-item-content-form" action="../BackEndPhp/User.php">
                                        <h4>' . $user->firstName . ' ' . $user->lastName . '</h4>
                                        <p>ID: ' . $user->userID . '</p>
                                        <input type="hidden" name="editUserID" id="getUserID" value="' . $user->userID . '"/>
                                        <input class="deleteEditUser p9but" type="submit" name="BackEndEditUser" value="Edit User">
                                        <input class="deleteEditUser p9but" id="userDelete" type="submit" name="BackEndDeleteUser" value="Delete User">
                                    </form>
                                </div>                            
                            </li>
                            ';
                        }

                        echo $showUserRow;
                        ?>
                    </ul>

                </div>
            </div>
        </div>


    </div>

    <script src="../script/backEnd9.js"></script>
</body>

</html>