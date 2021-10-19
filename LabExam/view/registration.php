<?php include "../control/validation.php"; ?>
<html>
    <body>
        <h1>Please fill up the form</h1>
        <hr>
        <form action="" method="post">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Male">
                        <label for="gender">Male</label>
                        <input type="radio" name="gender" value="Female">
                        <label for="gender">Female</label>
                    </td> 
                </tr>
                <tr>
                    <td>Mobile No:</td>
                    <td>
                        <input type="text" name="mobile">
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td>
                        <input type="date" name="dob">
                    </td> 
                </tr>
                <tr>
                    <td>HSC results:</td>
                    <td>
                        <input type="text" name="hsc">
                    </td> 
                </tr>
                <tr>
                    <td>SSC results:</td>
                    <td>
                        <input type="text" name="ssc">
                    </td> 
                </tr>
                <tr>
                    <td><label for="dept">Select a course you want to enroll:</label></td>
                    <td>
                        <select name="dept">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="BBA">BBA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="year">Choose a year enrolling year:</label></td>
                    <td>
                        <select name="year">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="semester">Choose a semester enrolling semester:</label></td>
                    <td>
                        <select name="semester">
                            <option value="Summer">Summer</option>
                            <option value="Spring">Spring</option>
                            <option value="Fall">Fall</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Insert Data">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>