<!DOCTYPE html>
<html lang="en" class="h-full text-gray-600">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="php, css">
    <link rel="stylesheet" href="style.css">
    <title>Job Postings</title>
</head>
<body class="h-full">
    <?php
        include ('models/Job.php');
        include("helpers/FileHandler.php");
        $job = new Job();
        $job->setPosId("P001")
            ->setJobTitle("Software Engineer")
            ->setDescription("Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod omnis obcaecati ducimus non? Eveniet illo voluptate eligendi fugit pariatur soluta consequatur nostrum? Optio consequuntur qui delectus non labore. Sapiente, dolor!")
            ->setLocation("Victoria")
            ->setClosingDate("10/10/2020")
            ->setFullTime(true)
            ->setApplicationBy(["Mail", "Post"]);
        FileHandler::getInstance()->writeFile("jobs.txt", $job);
        echo FileHandler::getInstance()->readFile("jobs.txt")[0];
    ?>
    <div class="h-full flex items-center flex-col relative">
    <?php include('partials/navbar.php') ?>
    <div class="container h-full relative">
        <div class="flex justify-center items-center h-full -m-4" >
            <?php include('searchjobform.php') ?>
        </div>

    </div>
    <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-indigo-600 cursor-pointer icon absolute bottom-0 right-0 mb-4 mr-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div id="info" class="absolute bottom-0 right-0 mt-2 mb-12 mr-4 w-1/3 rounded-md shadow-lg hidden">
                <div class="rounded-md bg-white shadow-xs p-4 ">
                    <h2 class="text-lg">Ryan Reichenberg (101106611)</h2>
                    <h3 class="text-xs">101106611@student.swin.edu.au</h3>
                    <p class="pt-4 text-sm">
                        I  declare  that  this  assignment  is  my  individual  work.  I  have  not  worked collaboratively nor have I copied from any other student’s work or from any other source.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>