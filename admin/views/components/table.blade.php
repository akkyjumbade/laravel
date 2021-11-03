@push('js')
<script>
   const columns = @json($columns);
   const rows = @json($rows);

   const collection = () => {
      return {
         columns,
         rows
      }
   };
</script>
@endpush
<section class="section container mx-auto my-4 px-4">
   <div class="table-container rounded-2xl bg-white border overflow-hidden">
      <table class="table table-hover w-full" x-data="collection">
         <thead class="bg-gray-100">
            <tr>
               <template x-for="th, thindex in columns" x-key="thindex">
                  <th class="text-left px-3 py-3 uppercase text-sm">
                     <span x-text="th"></span>
                  </th>
               </template>
            </tr>
         </thead>
         <tbody>
            <template x-for="row, rowindex in rows.data" x-key="rowindex">
               <tr>
                  <template x-for="rowCol, rowColIndex in columns" x-key="'row_'+rowColIndex">
                     <td class="text-left px-3 py-2">
                        <span x-text="row[rowCol]"></span>
                     </td>
                  </template>
               </tr>
            </template>
            {{ $slot }}
         </tbody>
      </table>
   </div>

</section>
