<html>
    <head>
    <link rel="stylesheet" href="<?php echo PUBLIC_DIR."style.css";?>"><meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        function showPassword(id)
        {
            var x = document.getElementById(id);
            if (x.type === "password") 
            {
                x.type = "text";
            } else 
            {
                x.type = "password";
            }
        }
    </script>    
    </head>
    <body>
        <div class = "modifyUserDiv" class="container">
            <?php 
            $getUserDataQuery = "SELECT * FROM users WHERE uid = ".$_GET['I']." LIMIT 1";
            $userResult = classList($getUserDataQuery);
                foreach($userResult as $userData)
                {
                ?>
                <table>
                <form method = "POST">
                    <h2>Edit <span style = "color:#42a68f;"><?php echo $userData["username"]; ?></span> user datas</h2>
                    <tr>
                        <td><span>Username: </span></td>
                        <td><input type = "text" value = "<?php echo $userData["username"];?>" disabled></td>   
                    </tr>
                    <tr>
                        <td><span>New password:</span></td>
                        <td><input type = "password" name = "newPassword" id = "newPass"></td>
                    </tr>
                    <tr>
                        <td colspan = 2 class = 'checkPasswords'>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" onclick = "showPassword('newPass')"/>
                            <label class="custom-control-label" for="customSwitch1">Show passwords</label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = 2><button class="btn btn-dark" name = "modifyUserPass" value =<?= $userData['uid']?>>Modify Password</button></td>
                    </tr>
                    <tr>
                        <td><span>Email:</span></td>
                        <td><input type = "text" name = "Email" disabled value = <?php echo $userData["email"];?>></td>
                    </tr>
                    <tr>
                        <td><span>New Email:</span></td>
                        <td><input type = "email" name = "newEmail"></td>
                    </tr>
                    <tr>
                        <td colspan = 2><button class="btn btn-dark" name = "modifyUserEmail" value =<?= $userData['uid']?>>Modify Email</button></td>
                    </tr>
                </form>
                </table>
                <?php
                }
            ?>
        </div>
    </body>
</html>
<?php
    if(isset($_POST["modifyUserPass"]))
    {
        if($_POST["newPassword"] == null)
        {
        ?>
            <script>
                Swal.fire(
                    'Error!',
                    'You not entered any new password!',
                    'warning'
                )
            </script>
        <?php
        }
        else if(strlen($_POST["newPassword"]) < 7)
        {
            ?>
                <script>
                    Swal.fire({
                    icon: 'warning',
                    title: 'User password need 8 length password!',
                    showConfirmButton: false,
                    timer: 2000
                    })
                </script>
            <?php
        }
        else
        {
            $getUID = $_GET["I"];
            $getNewPassword = sha1($_POST["newPassword"]);
            $modifyEmailQuery = "UPDATE users SET password = '".$getNewPassword."' WHERE uid = ".$getUID."";
            executeQuery($modifyEmailQuery);
            ?>
                <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'User password successfully modified!',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    window.setTimeout(function() {
                    window.location.href = 'index.php?P=modifyUserAdmin&I=<?php echo $getUID; ?>';
                    }, 1500);
                </script>
            <?php
        }
    }
    if(isset($_POST["modifyUserEmail"]))
    {
        if($_POST["newEmail"] == null)
        {
        ?>
            <script>
                Swal.fire(
                    'Error!',
                    'You not entered any new email!',
                    'warning'
                )
            </script>
        <?php
        }
        else
        {
            $getUID = $_GET["I"];
            $getNewEmail = $_POST["newEmail"];
            $modifyEmailQuery = "UPDATE users SET email = '".$getNewEmail."' WHERE uid = ".$getUID."";
            executeQuery($modifyEmailQuery);
            ?>
                <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'User email successfully modified!',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    window.setTimeout(function() {
                    window.location.href = 'index.php?P=modifyUserAdmin&I=<?php echo $getUID; ?>';
                    }, 1500);
                </script>
            <?php
        }
    }
?>