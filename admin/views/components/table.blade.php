@push('css')
   <style>
      .collection-table tbody td {
         padding: 0.4rem 0.6rem;
      }
   </style>
@endpush
@push('js')
<script>
   const columns = @json($columns);
   const rows = @json($rows);

   function editItem(row) {
      location.href = 'edit?id='+row.id
   }
   const collection = () => {
      return {
         columns,
         rows,
         editItem
      }
   };
</script>
@endpush
<section class="section container mx-auto my-4 px-4">
   <div class="table-container rounded-2xl bg-white border overflow-hidden">
      <table class="table table-hover w-full collection-table" x-data="collection">
         <thead class="bg-gray-100">
            <tr>
               <template x-for="th, thindex in columns" x-key="thindex">
                  <th class="text-left px-3 py-3 uppercase text-sm">
                     <span x-text="th"></span>
                  </th>
               </template>
               <th class="text-right px-3 py-3 uppercase text-sm">

               </td>
            </tr>
         </thead>
         <tbody>
            <template x-for="row, rowindex in rows.data" x-key="rowindex">
               <tr>
               @if(isset($row))
                  {{ $row }}
               @else
                  <template x-for="rowCol, rowColIndex in columns" x-key="'row_'+rowColIndex">
                     <td class="text-left px-3 py-2">
                        <span x-text="row[rowCol]"></span>
                     </td>
                  </template>
                  <td class="text-right px-3 py-2">
                     <x-admin-button x-on:click="editItem(row)">Edit</x-admin-button>
                  </td>
               @endif
               </tr>
            </template>
            {{ $slot }}
         </tbody>
      </table>
   </div>

</section>
