<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Processing job posting...</title>
</head>
<body>
<?php
    include ('helpers/JobsHandler.php');
    $errors = JobsHandler::getInstance()->validateJobListing($_POST);


?>
<?php if(!empty($errors)) { ?>
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
            <p class="font-bold">Something went wrong!</p>
            <ul class="list-disc p-4">
                <!-- Print errors based on our valivation method               -->
                <?php if(in_array("posid_not_unique", $errors)) { ?><li>Please ensure the position ID is unique</li> <?php } ?>
                <?php if(in_array("invalid_date", $errors)) { ?><li>Please ensure the closing date is in the correct format: dd/mm/yy</li><?php }?>
                <?php if(in_array("invalid_data", $errors)) { ?><li>Please fill out all of the required fields.</li><?php }?>
            </ul>
            <p>Click <a href="postjobform.php" class="underline">here</a> to go back to the post jobs form <b>OR</b> click <a href="index.php" class="underline">here</a> to go back to the homepage.</p>
        </div>
<?php } else {
        // Build new job object and write  to file.
        JobsHandler::getInstance()->buildAndSaveObjectFromForm($_POST);
        ?>
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
        <p class="font-bold">Successfully created post!</p>
        <p>Click <a href="jobdetails.php?posId=<?php echo $_POST['posId']?>" class="underline">here</a> to see the job details page <b>OR</b> click <a href="index.php" class="underline">here</a> to go back to the homepage.</p>
    </div>
<?php } ?>
</body>
</html>