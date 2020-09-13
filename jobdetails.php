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
    
    <div class="h-full flex items-center flex-col">
    <?php
        include('partials/navbar.php');
        include('helpers/JobsHandler.php');
    ?>
        <div class="container h-full">
            <div class="w-full flex items-center justify-center">
                <div class="info w-2/3 mt-8">
                    <p class="text-2xl leading-5 font-bold text-gray-700">Job Detail Information</p>
                    <p class="text-sm text-indigo-600 mt-2 mb-4 border-b border-gray-400 pb-6">Full details of job posting</p>
                    <table class="table-auto">
                        <tbody>
                        <?php
                            $job = JobsHandler::getInstance()->getJobByPositionId($_GET['posId']);
                            if ($job == null) {
                                echo "Cannot find job";
                                return;
                            }
                        ?>
                        <tr class="border-b border-gray-400">
                                <td class="pb-4 w-64 inline-block">Position ID</td>
                                <td class="pb-4 px-10 text-gray-700 w-full"><?php echo $job->getPosId() ?></td>
                            </tr>
                            <tr class="border-b border-gray-400">
                                <td class="py-4 w-64 inline-block">Job Title</td>
                                <td class="py-4 px-10 text-gray-700"><?php echo $job->getJobTitle() ?></td>
                            </tr>
                            <tr class="border-b border-gray-400">
                                <td class="py-4 w-64 inline-block">Location</td>
                                <td class="py-4 px-10 text-gray-700"><?php echo $job->getLocation() ?></td>
                            </tr>
                            <tr class="border-b border-gray-400">
                                <td class="py-4 w-64 inline-block">Closing Date</td>
                                <td class="py-4 px-10 text-gray-700"><?php echo $job->getClosingDate() ?></td>
                            </tr>
                            <tr class="border-b border-gray-400">
                                <td class="py-4 w-64 inline-block">About</td>
                                <td class="py-4 px-10 text-gray-700"><?php echo $job->getDescription() ?></td>
                            </tr>
                            <tr class="border-b border-gray-400">
                                <td class="py-4 w-64 inline-block">Position</td>
                                <td class="py-4 px-10 text-gray-700">
                                    <ul class="list-disc text-indigo-400">
                                        <li>
                                            <span class="text-black"><?php echo $job->getFullTime() ? "Full Time" : "Part Time" ?></span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-400">
                                <td class="py-4 w-64 inline-block">Contract</td>
                                <td class="py-4 px-10 text-gray-700">
                                    <ul class="list-disc text-indigo-400">
                                        <li>
                                            <span class="text-black"><?php echo $job->getContract() ? "On-Going" : "Fixed Term" ?></span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-6 w-64 inline-block">Application By</td>
                                <td class="pt-6 px-10 text-gray-700">
                                    <ul class="list-disc text-indigo-400">
                                        <?php if ($job->getApplicationByEMail()) { ?>
                                            <li>
                                                <span class="text-black">Email</span>
                                            </li>
                                        <? } ?>
                                        <?php if ($job->getApplicationByPost()) { ?>
                                            <li>
                                                <span class="text-black">Post</span>
                                            </li>
                                        <? } ?>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                    
        </div>
    </div>
</body>
</html>