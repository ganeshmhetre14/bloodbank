<!DOCTYPE html>
<html>
<head>
    <title>Select Multiple Options and Send Messages</title>
</head>
<body>
    <h2>Select Multiple Options and Send Messages</h2>

    <form id="messageForm" action="send_messages.php" method="post">
        <!-- Add the "Select All" checkbox -->
        <input type="checkbox" id="selectAll" onchange="selectAllRows()"> Select All<br><br>

        <table border='1'>
            <tr>
                <th><input type="checkbox" name="checkall" id="checkAll"> Select all</th>
                <th>Sr No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Blood Group</th>
                <th>DOB</th>
                <th>Last Donated</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Request for Blood</th>
            </tr>
            <?php
            while($row = mysql_fetch_array($qry)) {
            ?>
            <tr>
                <td><input type="checkbox" name="update[]" class="checkbox"></td>
                <td><text><?php echo "<center>".$row['d_id'];?></td>
                <td><?php echo $row['d_first_name'];?></td>
                <td><?php echo $row['d_last_name'];?></td>
                <td><?php echo $row['d_blood_group'];?></td>
                <td><?php echo $row['d_dob'];?></td>
                <td><?php echo $row['d_last_date_donate'];?></td>
                <td><?php echo $row['d_phone'];?></td>
                <td><?php echo $row['d_address'];?></td>
                <td><button type="button" onclick="sendMessage(<?php echo $row['d_id'];?>)">Message</button></td>
            </tr>
            <?php
            }
            ?>
        </table>

        <input type="submit" value="Send Selected Messages">
    </form>

    <script>
        // Function to select or deselect all checkboxes
        function selectAllRows() {
            const checkboxes = document.querySelectorAll('.checkbox');
            const selectAllCheckbox = document.getElementById('selectAll');
            const checkAllCheckbox = document.getElementById('checkAll');

            for (let i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = selectAllCheckbox.checked;
            }

            // Update the "Select All" checkbox in the table header
            checkAllCheckbox.checked = selectAllCheckbox.checked;
        }

        // Function to send messages for selected rows
        function sendMessage(userId) {
            alert("Sending message to user with ID: " + userId);
            // Add code here to send the message via AJAX or other means
        }
    </script>
</body>
</html>
