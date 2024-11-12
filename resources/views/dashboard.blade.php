@include('usersidebar')
<script src="./node_modules/preline/dist/preline.js"></script> 
    <script src="https://cdn.tailwindcss.com"></script>
<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="relative p-6 md:p-16">
      <!-- Grid -->
      <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
        <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
          <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl">
            Welcome to Theoretical Driving Course!
          </h2>
  
          <!-- Tab Navs -->
          <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist" aria-orientation="vertical">
            <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl active" id="tabs-with-card-item-1" aria-selected="true" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
              <span class="flex gap-x-6">
                
                <span class="grow">
                  <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Modules</span>
                  <span class="block mt-1 text-gray-800">Use TDC to gain the</span>
                </span>
              </span>
            </button>
  
            <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl" id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
              <span class="flex gap-x-6">
                
                <span class="grow">
                  <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Smart dashboards</span>
                  <span class="block mt-1 text-gray-800">Quickly Preline sample components, copy-paste codes, and start right off.</span>
                </span>
              </span>
            </button>
  
            <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl" id="tabs-with-card-item-3" aria-selected="false" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
              <span class="flex gap-x-6">
                
                <span class="grow">
                  <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Powerful features</span>
                  <span class="block mt-1 text-gray-800">Reduce time and effort on building modern look design with Preline only.</span>
                </span>
              </span>
            </button>
          </nav>
          <!-- End Tab Navs -->
        </div>
        <!-- End Col -->
  
        <div class="lg:col-span-6">
          <div class="relative">
            <!-- Tab Content -->
            <div>
              <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                <img class="shadow-xl shadow-gray-200 rounded-xl" src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&h=720&q=80" alt="Features Image">
              </div>
  
              <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
                <img class="shadow-xl shadow-gray-200 rounded-xl" src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&h=720&q=80" alt="Features Image">
              </div>
  
              <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
                <img class="shadow-xl shadow-gray-200 rounded-xl" src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&h=720&q=80" alt="Features Image">
              </div>
            </div>
            <!-- End Tab Content -->
  
            {{-- <!-- SVG Element -->
            <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
              <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
              </svg>
            </div>
            <!-- End SVG Element --> --}}
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
  
      <!-- Background Color -->
      <div class="absolute inset-0 grid grid-cols-12 size-full">
        <div class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full"></div>
      </div>
      <!-- End Background Color -->
    </div>
  </div>
  <!-- End Features -->