@include('navbar')
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
<!-- Hero -->
<div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/squared-bg-element.svg')] before:bg-no-repeat before:bg-top before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">

    <!-- Title -->
    <div class="mt-5 max-w-xxl text-center mx-auto">
      <h1 class="block font-bold text-gray-800 text-5xl md:text-5xl lg:text-5xl">
        Master Road Etiquette and Drive Safely with Our Comprehensive Driving Course
      </h1>
    </div>
    <!-- End Title -->

    <div class="mt-5 max-w-2xl text-center mx-auto">
      <p class="text-lg text-gray-600">Learn the rules of the road with expert-designed lessons. Whether you're just starting or preparing for your driving test, we’ve got you covered!</p>
    </div>

    <!-- Buttons -->
    <div class="mt-8 gap-3 flex justify-center">
      <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 focus:outline-none focus:from-violet-600 focus:to-blue-600 border border-transparent text-white text-sm font-medium rounded-full py-3 px-4" href="register">
        Get Started
      </a>
    </div>
    <!-- End Buttons -->
  </div>
</div>
<!-- End Hero -->

<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-2">
    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-100 dark:focus:bg-neutral-100" href="#">
      <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
        </svg>
      </div>
      <div class="mt-5">
        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-gray-800 dark:group-hover:text-black">Comprehensive Curriculum</h3>
        <p class="mt-1 text-gray-600 dark:text-neutral-500">Our course covers all essential topics, from road signs and signals to defensive driving techniques.</p>
        <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium">
          Learn more
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
      </div>
    </a>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-100 dark:focus:bg-neutral-100" href="#">
      <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
        </svg>        
      </div>
      <div class="mt-5">
        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-gray-800 dark:group-hover:text-black">Interactive Quizzes</h3>
        <p class="mt-1 text-gray-600 dark:text-neutral-500">Test your knowledge with quizzes designed to prepare you for the written driving exam and improve your understanding of road safety.</p>
        <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium">
          Learn more
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
      </div>
    </a>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-100 dark:focus:bg-neutral-100" href="#">
      <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </div>
      <div class="mt-5">
        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-gray-800 dark:group-hover:text-black">Track Your Progress</h3>
        <p class="mt-1 text-gray-600 dark:text-neutral-500">Monitor your learning journey with a personalized dashboard, progress reports, and helpful tips to stay on track.</p>
        <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium">
          Learn more
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
      </div>
    </a>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-100 dark:focus:bg-neutral-100" href="#">
      <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
        </svg>        
      </div>
      <div class="mt-5">
        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-gray-800 dark:group-hover:text-black">Anytime, Anywhere Access</h3>
        <p class="mt-1 text-gray-600 dark:text-neutral-500">Learn at your own pace, whenever and wherever suits you best. All you need is an internet connection.</p>
        <span class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium">
          Learn more
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
      </div>
    </a>
    <!-- End Icon Block -->
  </div>
</div>
<!-- End Icon Blocks -->

<!-- Testimonials -->
<div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Blockquote -->
  <blockquote class="text-center lg:mx-auto lg:w-3/5">
    

    <div class="mt-6 lg:mt-10">
      <p class="relative text-xl sm:text-2xl md:text-3xl md:leading-normal font-medium text-gray-800">
        
        <span class="relative z-10 italic text-black dark:text-black">"Before taking this course, I was nervous about the driving test. The lessons were clear, easy to understand, and the quizzes really helped me prepare!"</span>
      </p>
    </div>

    <footer class="mt-6">
      <div class="font-semibold text-black dark:text-black">— Sarah M.</div>
      
    </footer>
  </blockquote>
  <!-- End Blockquote -->
</div>
<!-- End Testimonials -->

<!-- FAQ -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-3xl md:leading-tight text-gray-800 dark:text-gray-800">
      Frequently Asked Questions
    </h2>
  </div>
  <!-- End Title -->

  <div class="max-w-5xl mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 gap-6 md:gap-12">
      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:gray-800">
          Is this course suitable for beginners?
        </h3>
        <p class="mt-2 text-gray-800 dark:text-neutral-800">
          Yes! Whether you're new to driving or just want to refresh your knowledge, our course is designed for all levels.
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-800">
          Do I need to complete the course in one go?
        </h3>
        <p class="mt-2 text-gray-800 dark:text-neutral-800">
          No, you can complete the course at your own pace. Log in and out as needed.
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-800">
          Will I receive a certificate?
        </h3>
        <p class="mt-2 text-gray-800 dark:text-neutral-800">
          No. But upon completing the course, we assure you that you will be ready to get your license!
        </p>
      </div>
      <!-- End Col -->

      <div>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-800">
          Can I take the quizzes multiple times?
        </h3>
        <p class="mt-2 text-gray-800 dark:text-neutral-800">
          Absolutely! We encourage you to take the quizzes as many times as you need to feel confident.
        </p>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End FAQ -->
<!-- ========== FOOTER ========== -->
<footer class="mt-auto py-3 bg-gray-800 dark:bg-neutral-800">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-white">Have questions? Reach out to us at tdc@gmail.com</p>
  </div>
</footer>
</body>
</html>