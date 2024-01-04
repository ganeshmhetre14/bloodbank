<!DOCTYPE html>
<html>
<head>
    <title>Choose One Option with Additional Details</title>
    <script>
        function showDetails() {
            var option = document.querySelector('input[name="option"]:checked').value;
            var additionalDetailsDiv = document.getElementById("additional-details");

            if (option === "option1") {
                additionalDetailsDiv.innerHTML = '<label>Option 1 Details:</label> <input type="text" name="option1_details">';
            } else if (option === "option2") {
                additionalDetailsDiv.innerHTML = '<label>Option 2 Details:</label> <input type="text" name="option2_details">';
            } else if (option === "option3") {
                additionalDetailsDiv.innerHTML = '<label>Option 3 Details:</label> <input type="text" name="option3_details">';
            } else {
                additionalDetailsDiv.innerHTML = '';
            }
        }
    </script>
</head>
<body>
    <h1>Choose One Option</h1>
    <form method="POST">
        <input type="radio" name="option" value="option1" id="option1" onclick="showDetails()">
        <label for="option1">Option 1</label>
        <br>
        <input type="radio" name="option" value="option2" id="option2" onclick="showDetails()">
        <label for="option2">Option 2</label>
        <br>
        <input type="radio" name="option" value="option3" id="option3" onclick="showDetails()">
        <label for="option3">Option 3</label>
        <br>
        <input type="submit" value="Submit">
    </form>

    <div id="additional-details"></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["option"])) {
        $selectedOption = $_POST["option"];
        $additionalDetails = $_POST[$selectedOption . '_details'] ;

        if (!empty($additionalDetails)) {
            echo "<p>You chose: $selectedOption</p>";
            echo "<p>Additional Details: $additionalDetails</p>";
        } else {
            echo "<p>You chose: $selectedOption</p>";
            echo "<p>No additional details provided.</p>";
        }
    }
    ?>
</body>
</html>
