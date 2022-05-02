import React from 'react'
// import { Inertia } from "@inertiajs/inertia";
import { InertiaLink } from "@inertiajs/inertia-react";
import DataGrid, { useRowSelection } from 'react-data-grid';
import { useEffect, useState } from "react";
import { Inertia } from '@inertiajs/inertia';
import { Page } from '../../components/templates';
import { useMemo } from 'react';
import { CollectionToolbar } from '../../components/oragnisms'

const SelectAllCell = ({
   value,
   isCellSelected,
   disabled,
   onChange,
   'aria-label': ariaLabel,
   'aria-labelledby': ariaLabelledBy
}) => {
   return (
      <input disabled={disabled} value={value} type={'checkbox'} checked={isCellSelected} onChange={onChange} />
   )
}

const SelectCell = ({
   value,
   isCellSelected,
   disabled,
   onChange,
   'aria-label': ariaLabel,
   'aria-labelledby': ariaLabelledBy
}) => {
   const [isRowSelected, onRowSelectionChange] = useRowSelection();
   return (
      <input disabled={disabled} value={value} type={'checkbox'} checked={isCellSelected} onChange={onChange} />
   )
}

export default function users({ users }) {
   const [ search, setSearch ] = useState(null)
   const [ selectedRows, setSelectedRows ] = useState([])
   const columns = useMemo(() => {
      let cols = Object.keys(users.data[0]).map(ok => ({
         key: ok,
         name: ok,
         sortable: true,
      }))
      cols = [{
         // key: '_check',
         width: 35,
         minWidth: 35,
         maxWidth: 35,
         resizable: false,
         sortable: false,
         frozen: true,
         headerRenderer(props) {
            return (
              <SelectAllCell
                aria-label="Select All"
                isCellSelected={props.isCellSelected}
                value={props.allRowsSelected}
                onChange={props.onAllRowsSelectionChange}
              />
            );
         },
         formatter(props) {
            return (
              <SelectCell
                aria-label="Select"
                isCellSelected={props.isCellSelected}
                value={props.allRowsSelected}
                onChange={props.onAllRowsSelectionChange}
              />
            );
         },
      }, ...cols]
      return cols

   }, [])

   return (
      <Page title={'Users'}>
         <CollectionToolbar />
         <Page.Section>
            <DataGrid
               className="rdg-light"
               columns={columns}
               rows={users.data}
               defaultColumnOptions={{
                  sortable: true,
                  resizable: true
               }}
               selectedRows={selectedRows}
               onSelectedRowsChange={setSelectedRows}

            />
         </Page.Section>

         {/* {JSON.stringify(users)} */}
      </Page>
   )
}
