<?php
// Devon Hornsby

include('functions.php');

// initializes values
$dateDifference = null;
$dateSign = null;

//.
if ($_POST) {
    // get values from form
    $returnDate = $_POST['returnDate'];
    $dueDate = $_POST['dueDate'];

    // calculate date difference, also check if it's early or late
    $dateDifference = CalculateDate($dueDate, $returnDate);
    $dateSign = GetDateSign($dueDate, $returnDate);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return a Book</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        defer></script>
</head>

<body>

    <div class="container mt-5">
        <div class="card mx-auto shadow-sm" style="max-width: 600px;">
            <div class="card-body">
                <h1 class="text-center mb-4">📚 Return a Book</h1>
                <?php include('form.php'); ?>
                <!-- If we have a date difference, display it -->
                <?php if ($dateDifference != null) { ?>
                    <hr>

                    <!-- Display the appropriate message -->
                    <?php if ($dateSign == "+") { ?>
                        <p class="text-center text-danger">
                           ❌  The book is overdue by
                            <?php echo $dateDifference; ?>.
                        </p>
                    <?php } else { ?>
                        <p class="text-center text-success">
                            ✅ The book was returned
                            <?php echo $dateDifference; ?> early.
                        </p>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>