<div class="w-3/5">
    <div class="mt-20 mb-12">
        <h1 class="text-2xl mb-3 tracking-wide text-gray-800" style="font-size: 1.75rem;">The job of your dreams, just
            one click away...</h1>
        <form action="searchjobprocess.php" method="GET">
            <div class="input-group w-full inline-block">
                <input type="text"
                       class="h-12 w-4/5 bg-gray-200 text-gray-600 p-2 pl-4 rounded-lg focus:outline-none  focus:bg-white focus:border-gray-300 border border-transparent inline-block"
                       placeholder="Search for job..." style="width:83%;"  name="title"/>
                <button type="submit"
                        class="bg-indigo-600 w-32 h-12 text-white rounded-full hover:bg-indigo-700 inline-block ml-1"
                        style="width:15%;">Search
                </button>
                <div class="">
                    <a href="advancedsearchform.php" class="text-xs text-indigo-600 pt-1 pl-1 hover:underline">Advanced
                        Search
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="w-3 h-3 inline">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </form>
    </div>
    <?php
        include("helpers/JobsHandler.php");
        $searches = JobsHandler::getInstance()->getRecentJobSearches();
        if(!empty($searches)) { ?>
        <div class="recent-searches text-gray-700">
            <h2 class="text-lg mb-2">Recent Searches:</h2>
            <div class="rounded-md shadow-lg">
                <ul class="rounded-md bg-white shadow-xs">
                    <?php foreach ($searches as $search) {
                        if (empty($search)) continue;
                        ?>
                    <li class="p-4 border-b border-gray-300"><a href="searchjobprocess.php?title=<?php echo $search ?>" class="flex justify-between"><?php echo $search ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="w-4 h-4 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

                <?php }; ?>
        </div>
    </div>
</div>