<label for="checkbox" class="relative flex-inline items-center isolate p-4 rounded-2xl">
   <input id="checkbox" type="checkbox" class="relative peer z-20 text-purple-600 rounded-md focus:ring-0" />
   <span class="ml-2 relative z-20">{{ $attributes->get('label') }}</span>
   <div class="absolute inset-0 bg-white peer-checked:bg-purple-50 peer-checked:border-purple-300 z-10 border rounded-2xl"></div>
</label>
