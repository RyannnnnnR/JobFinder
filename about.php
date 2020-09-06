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
    <div class="h-full flex justify-center items-center flex-col relative">
        <?php include('partials/navbar.php') ?>
        <div class="container h-full relative mt-18">
        <div class="text-center mb-10">
        <h3 class="mt-2 text-3xl font-extrabold text-gray-600 sm:text-4xl sm:leading-10">
        ABOUT
      </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
        The About page. Answers the required questions and presents important information about the assignment.
      </p>
                </div>
            <div class="flex h-full" >
                
                <div class="w-1/2 flex flex-col mr-20">
                    <div style="height:25%;">
                    <div class="rounded-md shadow-lg">
                        <div class="flex rounded-md bg-white shadow-xs p-4">
                        <div class="bg-indigo-500 rounded-md w-12 h-12 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col ml-4 w-3/4 pb-4">
                            <h1 class="text-lg leading-6 text-gray-600 font-bold">General Information</h1>
                            <div class="text-sm mt-1">
                            <ul>
                                <li><b>PHP Version:</b> <?php echo phpversion() ?></li>
                                <li><b>Tailwind CSS Version:</b> 1.7.6</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div style="height: 25%;">
                    <div class="rounded-md shadow-lg">
                    <div class="flex rounded-md bg-white shadow-xs p-4">
                        <div class="bg-indigo-500 rounded-md w-12 h-12 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                        </div>
                        <div class="flex flex-col ml-4 w-3/4 pb-4">
                            <h1 class="text-lg leading-6 text-gray-600 font-bold">Discussion</h1>
                            <div class="text-sm mt-2">
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo in inventore veniam consectetur corrupti voluptatem ratione iure non nulla, nostrum eum ipsam aut sed illo assumenda modi libero a odit.</p>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo in inventore veniam consectetur corrupti voluptatem ratione iure non nulla, nostrum eum ipsam aut sed illo assumenda modi libero a odit.</p>
                                <p class="mt-2">
                                    <a class="break-words text-indigo-700" href="https://swinburne.instructure.com/courses/29943/discussion_topics/430655" class="">https://swinburne.instructure.com/courses/29943/discussion_topics/430655</a>
                                </p>
                            </div>
                    </div>
                    </div>
                </div>
                    </div>
            </div>
            <div class="w-1/2">
            <div style="height:25%;">
                    <div class="rounded-md shadow-lg">
                        <div class="flex rounded-md bg-white shadow-xs p-4">
                        <div class="bg-indigo-500 rounded-md w-12 h-12 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
</svg>
                        </div>
                        <div class="flex flex-col ml-4 w-3/4 pb-2">
                            <h1 class="text-lg leading-6 text-gray-600 font-bold">Features</h1>
                            <div class="text-sm mt-1">
                            <ul>
                                <li>PHP: 7.1.3</li>
                                <li>TailwindCSS: 1.7.6</li>
                                <li>React JS: 1.6.3</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div style="height:20%;">
                    <div class="rounded-md shadow-lg">
                        <div class="flex rounded-md bg-white shadow-xs p-4">
                        <div class="bg-indigo-500 rounded-md w-12 h-12 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
</svg>
                        </div>
                        <div class="flex flex-col ml-4 w-3/4 pb-2">
                            <h1 class="text-lg leading-6 text-gray-600 font-bold">Missing Features</h1>
                            <div class="text-sm mt-1">
                           <p>I believe I am missing no required features for this assignment.</p>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div style="height:25%;">
                    <div class="rounded-md shadow-lg">
                        <div class="flex rounded-md bg-white shadow-xs p-4">
                        <div class="bg-indigo-500 rounded-md w-12 h-12 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
</svg>
                        </div>
                        <div class="flex flex-col ml-4 w-3/4 pb-4">
                            <h1 class="text-lg leading-6 text-gray-600 font-bold">Bugs</h1>
                            <div class="text-sm mt-1">
                            <p>No bugs to report as of <b>06/09/2020</b>.</p>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
            </div>
            </div>

        </div>
    </div>
</body>
</html>