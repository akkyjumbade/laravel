export default function CollectionToolbar({  }) {
   return (
      <div className="container mx-auto mb-4">
         <div className="flex flex-col md:flex-row items-center justify-between gap-4">
            <div className="md:w-6/12">
               <input placeholder="Search" />
            </div>
            <div className="md:w-6/12 flex justify-end gap-3">
               <button>Add New</button>
               <button>Export</button>
            </div>
         </div>
      </div>
   )
}
