@include('partials.header')
<x-nav/>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 table-dark">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">email</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      @foreach ($users as $user)
      <tr class="hover:bg-gray-50">
          
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$user->name}}</div>
              </div>
          </td>
  
          <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$user->email}}</div>
              </div>
          </td>
          @endforeach
  </tr>
      </tbody>
     
     </table>
  </div>


  @include('partials.footer')