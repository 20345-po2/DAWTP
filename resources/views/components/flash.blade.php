@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 5000)"
         x-show="show"
         class="bg-success text-sm-center text-white rounded px-4 py-2 m-3"
         style="position: fixed; bottom: 25%; right: 0; width: 300px; ">
        <p>{{session('success')}}</p>
    </div>
@endif
