import React from 'react'
import { useListBox } from "@react-aria/listbox"
import { useListState } from "@react-stately/list"
import { useEffect, useState } from "react"
import TableRow from './TableRow'

const AllRowsCheckbox = props => {
   return (
      <label className="border rounded-full w-4 h-4 flex focus-within:ring-2 ring-slate-500 cursor-pointer focus-within:bg-slate-500">
         <input className="default:ring-2 appearance-none checked:bg-blue-500 ..." type={'checkbox'} {...props} />
      </label>
   )
}

const RowCheckbox = props => {
   return (
      <label className="border rounded-full w-4 h-4 flex focus-within:ring-2 ring-slate-500 cursor-pointer focus-within:bg-slate-500">
         <input className="default:ring-2 appearance-none checked:bg-blue-500 ..." type={'checkbox'} {...props} />
      </label>
   )
}

export default function Table({ columns, rows, ...props }) {
   const [ selectedRows, setSelectedRows ] = useState([])
   let state = useListState(props);
   let ref = React.useRef();
   let { listBoxProps, labelProps } = useListBox(props, state, ref);
   console.log({ state })
   function onSelectAll({ target }) {
      if (target.checked) {

      } else {

      }
   }
   useEffect(() => {

   }, [ selectedRows ])
   return (
      <div>

         <div className="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25"><div className="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]" style={{ backgroundPosition: '10px 10px' }} /><div className="relative rounded-xl overflow-auto">
            <div className="shadow-sm overflow-hidden my-6">
               <table ref={ref} className="border-collapse table-auto w-full text-sm">
                  <thead>
                     <tr>
                        <th className="border-b w-2 dark:border-slate-600 font-medium p-3 pl-6 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                           <AllRowsCheckbox />
                        </th>
                        {columns && columns.map(col => (
                        <th key={`th_${col.key}`} className="border-b dark:border-slate-600 font-medium p-3 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                           {col.title}
                        </th>
                        ))}
                        <th className="border-b dark:border-slate-600 font-medium p-3 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Year</th>
                     </tr>
                  </thead>
                  <tbody className="bg-white dark:bg-slate-800">
                     {[...state.collection].map((item) => (
                        <TableRow
                           key={item.key}
                           item={item}
                           state={state}
                        />
                     ))}
                     {rows && rows.map((row, rowIndex) => (
                     <tr key={`tr_${rowIndex}`} className="hover:bg-slate-50">
                        <td className="border-b border-slate-100 dark:border-slate-700 p-3 pl-6 text-slate-500 dark:text-slate-400">
                           {/* {'#'} */}
                           <RowCheckbox />
                        </td>
                        {columns && columns.map(col => (
                        <td key={`tr_${rowIndex}_${col.key}`} className="border-b border-slate-100 dark:border-slate-700 p-3 text-slate-500 dark:text-slate-400">
                           Malcolm Lockyer
                        </td>
                        ))}
                        <td className="border-b border-slate-100 dark:border-slate-700 p-3 pr-8 text-slate-500 dark:text-slate-400">1961</td>
                     </tr>
                     ))}
                  </tbody>
               </table>
            </div>
         </div><div className="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5" /></div>
      </div>
   )
}

Table.defaultProps = {
   columns: [
      { key: 'id', title: 'ID' },
      { key: 'title', title: 'Title' },
      { key: 'artist', title: 'Artist' },
      { key: 'year', title: 'Year' },
      { key: 'created_at', title: 'Year' },
      { key: 'updated_at', title: 'Year' },
   ],
   rows: [
      {
         id: 'ID',
         title: 'Title',
         artist: 'Artist',
         year: 2022,
         created_at: 2022,
         updated_at: 2022,
      },
      {
         id: 'ID',
         title: 'Title',
         artist: 'Artist',
         year: 2022,
         created_at: 2022,
         updated_at: 2022,
      },
      {
         id: 'ID',
         title: 'Title',
         artist: 'Artist',
         year: 2022,
         created_at: 2022,
         updated_at: 2022,
      },
      {
         id: 'ID',
         title: 'Title',
         artist: 'Artist',
         year: 2022,
         created_at: 2022,
         updated_at: 2022,
      },
      {
         id: 'ID',
         title: 'Title',
         artist: 'Artist',
         year: 2022,
         created_at: 2022,
         updated_at: 2022,
      },
   ]
}
