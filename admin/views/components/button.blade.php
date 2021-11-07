<button {{ $attributes->merge([ 'class' => 'inline-flex items-center px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo' ])  }} >
   {{ $slot }}
</button>
