@extends('admin.adminsidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./node_modules/preline/dist/preline.js"></script> 
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
              <div>
                <h2 class="text-xl font-semibold text-gray-800">
                  Users
                </h2>
                <p class="text-sm text-gray-600">
                  Add users, edit and more.
                </p>
              </div>
  
              <div>
                <div class="inline-flex gap-x-2">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Add user
                  </a>
                </div>
              </div>
            </div>
            <!-- End Header -->
  
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="ps-8 py-3 text-start">
                    <label for="hs-at-with-checkboxes-main" class="flex">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                        #
                      </span>
                    </label>
                  </th>
  
                  <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                        Name
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                        Email
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class=" pe-8 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                        User Type
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                        Password
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                        Created
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-end"></th>
                </tr>
              </thead>
  
              <tbody>
                  @if (count($users) > 0)
                    @foreach ($users as $item)
                      <tr>
                        <td class= "ps-8">{{$loop->iteration}}</td>
                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-black ">{{$item->name}}</span>
                            </div>
                        </div>
                        </td>
                        
                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-black ">{{$item->email}}</span>
                            </div>
                          </div>
                        </td>
                            

                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-black ">{{$item->usertype}}</span>
                            </div>
                          </div>
                        </td>
                        
                        <td class="size-px whitespace-nowrap"><div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-6">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-black ">{{$item->password}}</span>
                            </div>
                          </div>
                        </td>

                        <td>{{$item->created_at}}</td>

                        <td class="size-px whitespace-nowrap">
                          <div class="px-6 py-1.5">
                            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                              Edit
                            </a>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                  @else 
                    
                  @endif
  
                
              </tbody>
            </table>
            <!-- End Table -->
  
            <!-- Footer -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
              <div>
                <p class="text-sm text-gray-600">
                  
                </p>
              </div>
  
              <div>
                <div class="inline-flex gap-x-2">
                  <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                    Prev
                  </button>
  
                  <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                    Next
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->
</body>
</html>