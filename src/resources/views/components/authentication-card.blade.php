<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-white ">
    <div class="border-2 border-[#1a237e] rounded-lg flex flex-col sm:justify-center items-center ">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-white shadow-md overflow-hidden sm:rounded-lg ">
        {{ $slot }}
    </div>
    </div>
</div>
