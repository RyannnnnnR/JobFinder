<!DOCTYPE html>
<html lang="en" class="h-full text-gray-600">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="php, css">
    <link rel="stylesheet" href="style.css">
    <title>About</title>
</head>

<body class="h-full">
    
    <div class="h-full flex items-center flex-col relative">
    <?php
        include('partials/navbar.php');
        include("helpers/JobsHandler.php");
    ?>
        <div class="container h-full">
            <div class="w-full flex items-center justify-center">
                <div class="info w-2/3 mt-12">
                    <h1 class="text-3xl leading-9 font-bold text-gray-900 pl-2">Job Postings</h1>
                    <?php
                        // Log search
                        JobsHandler::getInstance()->logRecentSearch($_GET['title']);
                        $filtered = JobsHandler::getInstance()->filterJobs($_GET);
                        $jobs = JobsHandler::getInstance()->sortByDate($filtered);
                        echo "<h3 class='text-lg leading-5 font-medium text-gray-600 mb-6 mt-1 pl-2'>Found ",count($jobs)," jobs...</h3>";
                    ?>
                    <? if(!empty($jobs)) { ?>
                        <a href="advancedsearchform.php" class="text-xs text-indigo-600 hover:underline block -mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-3 h-3 inline-block" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            <span>Return to Advanced Search</span>
                        </a>
                    <?php foreach ($jobs as $job) { ?>
                        <a href="jobdetails.php?posId=<?php echo $job->getPosId(); ?>">
                        <div class="rounded-lg shadow-sm">
                            <div class="flex justify-between items-center rounded-lg px-6 py-4 shadow-xs bg-white my-6">
                                <div class="space-y-6">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-7 font-semibold text-indigo-600"><?php echo $job->getJobTitle()?></h3>
                                        <p class="text-gray-500 truncate" style="width: 480px"><?php  echo $job->getDescription() ?></p>
                                    </div>
                                    <dl class="space-y-4 md:flex md:space-y-0 md:space-x-6">
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path>
                                                </svg><span class="text-gray-600"><? echo $job->getFullTime() ==  1 ? "Full Time": "Part Time"?></span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><? echo $job->getLocation()?></span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><span aria-hidden="true">Closes on</span> <?php echo date_format(date_create($job->getClosingDate()), "j F, Y"); ?></span></div>
                                        </div>
                                    </dl>
                                </div>
                                <div class="hidden md:block">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 text-gray-400">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php }?>
                    <?php }  else {?>
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                            <p class="font-bold">Something went wrong!</p>
                            <p class="py-1">Sorry! We could not find any jobs matching that criteria.</p>
                            <p>Click <a href="advancedsearchform.php" class="underline">here</a> to go back to the advanced search form <b>OR</b> click <a href="index.php" class="underline">here</a> to go back to the homepage.</p>
                        </div>
                    <? } ?>
                </div>
            </div>
</body>

</html>