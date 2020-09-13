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
    <?php include('partials/navbar.php') ?>
        <div class="container h-full">
            <div class="w-full flex items-center justify-center">
            <form class="form w-2/3 mt-12" method="POST" action="postjobprocess.php">
                <p class="text-2xl leading-5 font-bold text-gray-700">Job Information</p>
                <p class="text-indigo-600 mt-2 mb-10">This information will be used to create a new job posting.</p>
                <div class="flex flex-col">
                    <label for="posId" class="text-lg leading-5 font-medium text-gray-700">Position ID</label>
                    <div class="mt-1 w-1/5">
                        <div class="rounded-md shadow-sm w-full">
                            <input type="text" name="posId" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" placeholder="P0001"/>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="posId" class="text-lg leading-5 font-medium text-gray-700">Job Title</label>
                    <div class="w-1/2 mt-1">
                        <div class="rounded-md shadow-sm w-full">
                            <input type="text" name="title" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" placeholder="Software Engineer"/>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col mt-6">
                    <label for="description" class="text-lg leading-5 font-medium text-gray-700">Description</label>
                    <div class="w-3/4 mt-1">
                        <div class="rounded-md shadow-sm w-full">
                            <textarea type="text" name="description" id="" rows="5"class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2"></textarea>
                        </div>
                        <p class="text-gray-600 mt-2">A brief description about the job.</p>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                <label class="text-lg leading-5 font-medium text-gray-700">Location</label>

                    <div class="w-1/3 mt-1">
                        <div class="rounded-md shadow-sm relative w-full">
                            <select name="location" id="cars" class="mt-2 w-full py-2 appearance-none bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2">
                                <option value="">---</option>
                                <option value="Victoria">VIC</option>
                                <option value="New South Wales">NSW</option>
                                <option value="Northern Territory">NT</option>
                                <option value="Western Australia">WA</option>
                                <option value="South Australia">SA</option>
                                <option value="Tasmania">TAS</option>
                                <option value="Australian Capital Territory">ACT</option>
                                <option value="Queensland">QLD</option>
                            </select>
                            <span class="pointer-events-none absolute mt-2 mr-1 flex flex-col inset-y-0 right-0 items-center justify-center px-2 text-gray-500">
                                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                                    <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    
                </div>
                
                <div class="flex flex-col mt-6">
                <label for="closingDate" class="text-lg leading-5 font-medium text-gray-700">Closing Date</label>
                    <div class="w-1/3 mt-1">
                        <div class="rounded-md shadow-sm w-full">
                            <input type="text" name="closingDate" id="closingDate" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" value="<?php echo date('d/m/y') ?>" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <p class="text-lg leading-5 font-medium text-gray-700">Position</p>
                    <div class="mt-1">
                        <input type="radio" id="male" name="position" value="1" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                        <label for="male" class="text-sm font-medium leading-5 text-gray-700">Full Time</label>
                    </div>
                    <div class="mt-2">
                        <input type="radio" id="female" name="position" value="2" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                        <label for="female" class="text-sm font-medium leading-5 text-gray-700">Part Time</label>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <p class="text-lg leading-5 font-medium text-gray-700">Contract</p>
                    <div class="mt-1">
                        <input type="radio" id="male" name="contract" value="1" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                        <label for="male" class="text-sm font-medium leading-5 text-gray-700">On-going</label>
                    </div>
                    <div class="mt-2">
                        <input type="radio" id="female" name="contract" value="2" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                        <label for="female" class="text-sm font-medium leading-5 text-gray-700">Fixed term</label>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <label class="text-lg leading-5 font-medium text-gray-700">Application Delivery</label>
                        <div class="mt-1">
                            <input type="checkbox" id="post" name="post" value="1" class="mr-2 checkbox-input appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-md flex-shrink-0 align-middle">
                            <label for="post" class="text-sm font-medium leading-5 text-gray-700">Post</label>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" id="email" name="email" value="1" class=" mr-2 checkbox-input appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-md flex-shrink-0 align-middle">
                            <label for="email" class="text-sm font-medium leading-5 text-gray-700">E-Mail</label>
                        </div>
                </div>

                <div class="flex justify-end mt-6 mb-6 border-t border-gray-300 pt-4">
                    <button type="reset" class="mr-4 border-2 border-indigo-300 px-4 py-2 text-indigo-700 rounded-md hover:bg-indigo-300 hover:text-indigo-700 inline-block">Reset</button>
                    <button type="submit" class="border-2 border-indigo-600 bg-indigo-600 px-4 py-2 text-white rounded-md hover:bg-indigo-700 inline-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>