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
            <form class="form w-2/3 mt-12" method="get" action="searchjobprocess.php">
                <p class="text-2xl leading-5 font-bold text-gray-700">Advanced Search</p>
                <p class="text-indigo-600 mt-2 mb-10">Find a jobs based on the application type, location, position, etc.</p>

                <div class="flex flex-col mt-6">
                    <label for="posId" class="text-lg leading-5 font-medium text-gray-700">Job Title</label>
                    <div class="w-full mt-1">
                        <div class="rounded-md shadow-sm">
                            <input type="text" name="title" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" placeholder="Software Engineer"/>
                        </div>
                    </div>
                </div>

                <div class="flex mt-6">
                    <div class="w-1/2 mr-4">
                <label class="text-lg leading-5 font-medium text-gray-700">Location</label>

                    <div class="w-full">
                        <div class="rounded-md shadow-sm relative">
                            <select name="location" class="mt-2 w-full py-2 appearance-none bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2">
                                <option value="">---</option>
                                <option value="vic">VIC</option>
                                <option value="nsw">NSW</option>
                                <option value="nt">NT</option>
                                <option value="wa">WA</option>
                            </select>
                            <div class="pointer-events-none absolute mt-2 mr-1 flex flex-col inset-y-0 right-0 items-center justify-center px-2 text-gray-500">
                                <svg class="fill-current h-4 w-4 transform rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                <svg class="fill-current h-4 w-4 -mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                                </div>
                    <div class="w-1/2">
                    <label for="description" class="text-lg leading-5 font-medium text-gray-700">Closing Date</label>
                    <div class="w-full mt-1">
                        <div class="rounded-md shadow-sm">
                            <input type="date" name="closingDate" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" />
                        </div>
                    </div>
                    </div>
                    
                </div>
                

                <div class="flex mt-6">
                    <div class="w-1/3">
                        <p class="text-lg leading-5 font-medium text-gray-700">Position</p>
                        <div class="mt-1">
                            <input type="radio" id="male" name="position" value="0" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                            <label for="male" class="text-sm font-medium leading-5 text-gray-700">Full Time</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" id="female" name="position" value="1" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                            <label for="female" class="text-sm font-medium leading-5 text-gray-700">Part Time</label>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <p class="text-lg leading-5 font-medium text-gray-700">Contract</p>
                        <div class="mt-1">
                            <input type="radio" id="male" name="contract" value="0" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                            <label for="male" class="text-sm font-medium leading-5 text-gray-700">On-going</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" id="female" name="contract" value="1" class="mr-2 radio-button appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-full flex-shrink-0 align-middle">
                            <label for="female" class="text-sm font-medium leading-5 text-gray-700">Fixed term</label>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <label class="text-lg leading-5 font-medium text-gray-700">Application Delivery</label>
                            <div class="mt-1">
                                <input type="checkbox" id="vehicle1" name="mail" value="1" class="mr-2 checkbox-input appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-md flex-shrink-0 align-middle">
                                <label for="delivery1" class="text-sm font-medium leading-5 text-gray-700">Post</label>
                            </div>
                            <div class="mt-2">
                                <input type="checkbox" id="vehicle2" name="post" value="1" class=" mr-2 checkbox-input appearance-none inline-block select-none text-indigo-700 w-5 h-5 border border-gray-300 bg-white border-box rounded-md flex-shrink-0 align-middle">
                                <label for="delivery2" class="text-sm font-medium leading-5 text-gray-700">Mail</label>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                   
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