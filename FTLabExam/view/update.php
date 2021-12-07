<?php
include('../control/updatecheck.php');
?>
<html>
    <body>
        <h1>
            Update Employee
        </h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        Search By ID:
                    </td>
                </tr>
                <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                <tr>
                    <td>
                        <input type="text" name="id" id="id" >
                    </td>
                    <td><h3 id="message_id"></h3></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="search" id="search" value="search">
                    </td>
                </tr>

            </table>
            <br><br>
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                    </td>
                    <td><h3 id="message_name"></h3></td>
                </tr>
                <tr>
                    <td>
                        Department:
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="department" id="department" value="<?php echo $department; ?>">
                    </td>
                    <td><h3 id="message_department"></h3></td>
                </tr>
                <tr>
                    <td>
                        Joining Date:
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="date" id="date" value="<?php echo $date; ?>">
                    </td>
                    <td><h3 id="message_date"></h3></td>
                </tr>
                <tr>
                    <td>
                        Salary:
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="salary" id="salary" value="<?php echo $salary;?>">
                    </td>
                    <td><h3 id="message_salary"></h3></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" onclick="return validateform()" name="update" id="update" value="Update">
                    </td>
                </tr>
            </table>
        </from>
        <script src="../js/js.js"></script> 
    </body>
</html>