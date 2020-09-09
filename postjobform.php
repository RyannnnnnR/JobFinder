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
    <?php include('partials/navbar.php') ?>
    <div class="h-full flex justify-center items-center flex-col">

        <div class="container h-full">
            <div class="w-full flex items-center justify-center">
            <form class="form w-1/2 mt-16" method="POST">
                <p class="text-xl leading-5 font-medium text-gray-700">Job Information</p>
                <p class="text-gray-600 mt-2 mb-8">This information will be used to create a new job posting.</p>
                <div class="flex flex-col">
                    <label for="posId" class="text-sm leading-5 font-medium text-gray-700">Position ID</label>
                    <div class="mt-1 max-w-xs">
                        <div class="rounded-md shadow-sm">
                            <input type="text" name="posId" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" placeholder="P0001"/>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="posId" class="text-sm leading-5 font-medium text-gray-700">Job Title</label>
                    <div class="max-w-lg mt-1">
                        <div class="rounded-md shadow-sm">
                            <input type="text" name="posId" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" placeholder="Software Engineer"/>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="description" class="text-sm leading-5 font-medium text-gray-700">Description</label>
                    <div class="max-w-xl mt-1">
                        <div class="rounded-md shadow-sm">
                            <textarea type="text" name="posId" id="" rows="4"class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2"></textarea>
                        </div>
                        <p class="text-gray-600 mt-2">A brief description about the job.</p>
                    </div>
                </div>
                
                <div class="flex flex-col mt-6">
                <label for="description" class="text-sm leading-5 font-medium text-gray-700">Closing Date:</label>
                    <div class="max-w-xs mt-1">
                        <div class="rounded-md shadow-sm">
                            <input type="date" name="posId" id="" class="w-full py-2 bg-white border rounded-md border-gray-400 sm:text-sm sm:leading-5 focus:outline-none pl-2" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <p class="text-sm leading-5 font-medium text-gray-700">Position Type</p>
                    <div class="flex">
                    <input type="radio" id="male" name="partTime" value="1" class="mr-2">
                    <label for="partTime">Male</label>
                    </div>
                    <div>
                    <input type="radio" id="female" name="fullTime" value="2" class="mr-2">
                    <label for="fullTime">Female</label>
                    </div>
                </div>

                <div class="flex flex-col">
                    <p class="text-sm leading-5 font-medium text-gray-700">Contract Type</p>
                    <div>
                    <input type="radio" id="male" name="partTime" value="1">
                    <label for="partTime">On-going</label>
                    </div>
                    <div>
                    <input type="radio" id="female" name="fullTime" value="2">
                    <label for="fullTime">Fixed term</label>
                    </div>
                </div>

                <div class="flex flex-col">
                    <p class="text-sm leading-5 font-medium text-gray-700">Application delivery</label>
                        <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1">Post</label>
                        </div>
                        <div>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2">Mail</label>
                        </div>
                </div>

                <div class="flex flex-col">
                    <label for="cars">State:</label>

                    <select name="cars" id="cars">
                        <option value="volvo">---</option>
                        <option value="2">VIC</option>
                        <option value="saab">NSW</option>
                        <option value="mercedes">NT</option>
                        <option value="audi">WA</option>
                    </select>
                </div>

                <div>
                    <button type="submit">submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>