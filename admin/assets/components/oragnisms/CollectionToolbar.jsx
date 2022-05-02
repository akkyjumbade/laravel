export default function CollectionToolbar({ selectedRows, onDeleteMany }) {
   return (
      <div className="container mx-auto mb-4">
         <div className="flex flex-col md:flex-row items-center justify-between gap-4">
            <div className="md:w-6/12">
               <input placeholder="Search" className="border dark:text-white dark:bg-slate-600 dark:focus:ring-slate-800 dark:hover:bg-slate-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium px-3 py-2 rounded-lg sm:w-auto w-full" />
            </div>
            <div className="md:w-6/12 flex justify-end gap-3">
               <button className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add New</button>
               {onDeleteMany && (
               <button type="button" onClick={onDeleteMany} disabled={!selectedRows?.length} className="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm w-10 h-10 flex items-center justify-center text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                  <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                     <path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" />
                  </svg>
               </button>
               )}
               <button className="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                     <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clipRule="evenodd" />
                  </svg>
               </button>
            </div>
         </div>
      </div>
   )
}
