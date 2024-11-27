@include('admin.adminsidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="flex flex-wrap">
    <div class=" flex flex-nowrap max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

        <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
              <!-- Header -->
              <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                <div>
                  <h2 class="text-xl font-semibold text-gray-800">
                    Quiz
                  </h2>
                  <p class="text-sm text-gray-600">
                    Add Quiz, edit and more.
                  </p>
                </div>
  
                <div>
                  <div class="inline-flex gap-x-2">
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="createquiz">
                      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                      Add Quiz
                    </a>
                  </div>
                </div>
              </div>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
              <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                  <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">ID</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">TITLE</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">DESCRIPTION</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Topic</th>
                      </tr>
                    </thead>
                    
                    </div>
                    <tbody>
                        <!-- Check if quizzes exist -->
                        @if($quizzes->isNotEmpty())
                        @foreach($quizzes as $quiz)

                        <!-- Display quiz title or any other attribute -->

                        <tr>
                        <td class= "ps-7">{{ $quiz->id }}</td>
                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-5 pe-6 py-3">
                            <div class="flex items-center gap-x-3">
                              <div class="grow">
                                <span class="block text-sm font-semibold text-black ">{{ $quiz->title }}</span>
                            </div>
                        </div>
                        </td>

                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-7 pe-6 py-3">
                            <div class="flex items-center gap-x-3">
                              <div class="grow">
                                <span class="block text-sm font-semibold text-black ">{{ $quiz->description }}</span>
                            </div>
                        </div>
                        </td>


                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-6 pe-6 py-3">
                            <div class="flex items-center gap-x-3">
                              <div class="grow">
                                <span class="block text-sm font-semibold text-black ">{{ $quiz->topic }}</span>
                            </div>
                        </div>
                        </td>
                                    
                                    
                        <td class="size-px whitespace-nowrap">

                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5">
                              <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="{{ route('admin.showquestions', $quiz->id) }}">
                                Questions
                              </a>
                            </div>
                          </td>

                          </td>
      
                      </tr>
                        @endforeach
                        
                        <ul>  
                            @else
                            <h1> No Quiz Found. </h1>
                            @endif
                        </ul>


    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script>
      const button = document.querySelector('#button');
      const tooltip = document.querySelector('#tooltip');

      const popperInstance = Popper.createPopper(button, tooltip);
    </script>
</body>

</html>