export default function CollectionToolbar({  }) {
   return (
      <div className="container mx-auto mb-4">
         <div className="flex flex-col md:flex-row items-center justify-between gap-4">
            <div className="md:w-6/12">
               <input placeholder="Search" className="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium" />
            </div>
            <div className="md:w-6/12 flex justify-end gap-3">
               <button className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add New</button>
               <button className="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Export</button>
            </div>
         </div>
      </div>
   )
}
