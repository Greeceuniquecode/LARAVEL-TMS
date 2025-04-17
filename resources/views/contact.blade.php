@extends("/layout")
@section('content')
<div class="max-w-3xl mx-auto shadow-lg rounded-lg overflow-hidden">
  <div class="bg-gradient-to-b from-blue-50 to-white px-8 py-10">
    <h2 class="text-3xl font-bold text-center text-blue-700 mb-2">Contact Us</h2>
    <p class="text-gray-600 text-center mb-8">Have questions? Reach out to us!</p>
    
    <div class="space-y-6 mb-8">
      <div class="flex items-center border-b border-gray-200 pb-3">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
          </svg>
        </div>
        <div>
          <p class="text-sm text-gray-500">Email</p>
          <a href="mailto:notgreece2@gmail.com" class="font-medium">notgreece2@gmail.com</a>
        </div>
      </div>
      
      <div class="flex items-center border-b border-gray-200 pb-3">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
          </svg>
        </div>
        <div>
          <p class="text-sm text-gray-500">Phone</p>
          <p class="font-medium">9807040261</p>
        </div>
      </div>
      
      <div class="flex items-center border-b border-gray-200 pb-3">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="text-sm text-gray-500">Address</p>
          <p class="font-medium">Itahari, Sunsari, Koshi Province</p>
        </div>
      </div>
      
      <div class="flex items-center border-b border-gray-200 pb-3">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="text-sm text-gray-500">Official Website</p>
          <a target='_blank' href="https://limitlessplaying.blogspot.com/" class="font-medium text-blue-600 hover:text-blue-800">limitlessplaying.blogspot.com</a>
        </div>
      </div>
      
      <div class="flex items-center pb-3">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
          </svg>
        </div>
        <div>
          <p class="text-sm text-gray-500">Instagram</p>
          <a target='_blank' href="https://instagram.com/greecedahal" class="font-medium text-blue-600 hover:text-blue-800">@greecedahal</a>
        </div>
      </div>
    </div>
    
    <div class="text-center pt-6 border-t border-gray-200">
      <p class="text-lg font-semibold text-blue-700 mb-1">Need help? Contact us anytime!</p>
      <p class="font-bold text-gray-800">LimitlessTMS</p>
      <p class="mt-4 text-gray-600">Thank you for reaching out!</p>
    </div>
  </div>
</div>
@endsection