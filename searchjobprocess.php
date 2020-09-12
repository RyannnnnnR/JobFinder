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
    <?php include('partials/navbar.php') ?>
        <div class="container h-full">
            <div class="w-full flex items-center justify-center">
                <div class="info w-2/3 mt-12">
                    <h1 class="text-3xl leading-9 font-bold text-gray-900 pl-2">Job Postings</h1>
                    <h3 class="text-lg leading-5 font-medium text-gray-600 mb-12 mt-1 pl-2">Found 14 jobs...</h3>


                    <a href="jobdetails.php?posId=P0001">
                        <div class="rounded-lg shadow-sm">
                            <div class="flex justify-between items-center rounded-lg px-6 py-4 shadow-xs bg-white">
                                <div class="space-y-6">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-7 font-semibold text-indigo-600">Full-Stack Developer</h3>
                                        <p class="text-gray-500">Help us design and build more awesome UI tools for developers.</p>
                                    </div>
                                    <dl class="space-y-4 md:flex md:space-y-0 md:space-x-6">
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path>
                                                </svg><span class="text-gray-600">Full-time</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">Remote</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">$115,000 – $135,000 USD</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><span aria-hidden="true">Closed on</span> <time datetime="2020-05-27T21:00:00.0">May 27, 2020</time></span></div>
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

                    <a href="jobdetails.php?posId=P0001" class="block my-6">
                        <div class="rounded-lg shadow-sm">
                            <div class="flex justify-between items-center rounded-lg px-6 py-4 shadow-xs bg-white">
                                <div class="space-y-6">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-7 font-semibold text-indigo-600">Full-Stack Developer</h3>
                                        <p class="text-gray-500">Help us design and build more awesome UI tools for developers.</p>
                                    </div>
                                    <dl class="space-y-4 md:flex md:space-y-0 md:space-x-6">
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path>
                                                </svg><span class="text-gray-600">Full-time</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">Remote</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">$115,000 – $135,000 USD</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><span aria-hidden="true">Closed on</span> <time datetime="2020-05-27T21:00:00.0">May 27, 2020</time></span></div>
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

                    <a href="jobdetails.php?posId=P0001" class="block my-6">
                        <div class="rounded-lg shadow-sm">
                            <div class="flex justify-between items-center rounded-lg px-6 py-4 shadow-xs bg-white">
                                <div class="space-y-6">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-7 font-semibold text-indigo-600">Full-Stack Developer</h3>
                                        <p class="text-gray-500">Help us design and build more awesome UI tools for developers.</p>
                                    </div>
                                    <dl class="space-y-4 md:flex md:space-y-0 md:space-x-6">
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path>
                                                </svg><span class="text-gray-600">Full-time</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">Remote</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">$115,000 – $135,000 USD</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><span aria-hidden="true">Closed on</span> <time datetime="2020-05-27T21:00:00.0">May 27, 2020</time></span></div>
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

                    <a href="jobdetails.php?posId=P0001" class="block my-6">
                        <div class="rounded-lg shadow-sm">
                            <div class="flex justify-between items-center rounded-lg px-6 py-4 shadow-xs bg-white">
                                <div class="space-y-6">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-7 font-semibold text-indigo-600">Full-Stack Developer</h3>
                                        <p class="text-gray-500">Help us design and build more awesome UI tools for developers.</p>
                                    </div>
                                    <dl class="space-y-4 md:flex md:space-y-0 md:space-x-6">
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path>
                                                </svg><span class="text-gray-600">Full-time</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">Remote</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">$115,000 – $135,000 USD</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><span aria-hidden="true">Closed on</span> <time datetime="2020-05-27T21:00:00.0">May 27, 2020</time></span></div>
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

                    <a href="jobdetails.php?posId=P0001" class="block my-6">
                        <div class="rounded-lg shadow-sm">
                            <div class="flex justify-between items-center rounded-lg px-6 py-4 shadow-xs bg-white">
                                <div class="space-y-6">
                                    <div class="space-y-1">
                                        <h3 class="text-lg leading-7 font-semibold text-indigo-600">Full-Stack Developer</h3>
                                        <p class="text-gray-500">Help us design and build more awesome UI tools for developers.</p>
                                    </div>
                                    <dl class="space-y-4 md:flex md:space-y-0 md:space-x-6">
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path>
                                                </svg><span class="text-gray-600">Full-time</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">Remote</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600">$115,000 – $135,000 USD</span></div>
                                        </div>
                                        <div>
                                            <div class="flex items-start space-x-2 text-sm leading-5"><svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg><span class="text-gray-600"><span aria-hidden="true">Closed on</span> <time datetime="2020-05-27T21:00:00.0">May 27, 2020</time></span></div>
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

                </div>
            </div>
</body>

</html>