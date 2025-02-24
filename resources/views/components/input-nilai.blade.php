<div class="p-10 lg:p-10 bg-white border-b border-gray-200 ">
    <div class="flex flex-row text-center justify-center items-center relative">
        <h1 class="mt-4 relative text-2xl font-medium text-gray-900">Silahkan di input nilai nya</h1>
        <span class="mt-4 text-2xl font-medium ml-2 text-blue-500">{{ explode(' ', Auth::user()->name)[0] }}</span>
    </div>
</div>
