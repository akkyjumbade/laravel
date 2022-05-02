import {
   Cell,
   Column,
   Row,
   TableBody,
   TableHeader,
   useTableState
} from '@react-stately/table';
import { mergeProps } from '@react-aria/utils';
import { useRef } from 'react';
import { useFocusRing } from '@react-aria/focus';
import { useTable } from '@react-aria/table';
import TableRowGroup from './TableRowGroup';
import TableHeaderRow from './TableHeaderRow';
import TableSelectAllCell from './TableSelectAllCell';
import TableColumnHeader from './TableColumnHeader';
import TableRow from './TableRow';
import TableCheckboxCell from './TableCheckboxCell';
import TableCell from './TableCell';

export default function Table(props) {
   let { selectionMode, selectionBehavior } = props;
   let state = useTableState({
      ...props,
      showSelectionCheckboxes: selectionMode === 'multiple' &&
         selectionBehavior !== 'replace'
   });

   let ref = useRef();
   let { collection } = state;
   let { gridProps } = useTable(props, state, ref);

   return (
      <table {...gridProps} ref={ref} style={{ borderCollapse: 'collapse' }}>
         <TableRowGroup
            type="thead"
            style={{
               borderBottom: '2px solid var(--spectrum-global-color-gray-800)'
            }}
         >
            {collection.headerRows.map((headerRow) => (
               <TableHeaderRow key={headerRow.key} item={headerRow} state={state}>
                  {[...headerRow.childNodes].map((column) =>
                     column.props.isSelectionCell
                        ? (
                           <TableSelectAllCell
                              key={column.key}
                              column={column}
                              state={state}
                           />
                        )
                        : (
                           <TableColumnHeader
                              key={column.key}
                              column={column}
                              state={state}
                           />
                        )
                  )}
               </TableHeaderRow>
            ))}
         </TableRowGroup>
         <TableRowGroup type="tbody">
            {[...collection.body.childNodes].map((row) => (
               <TableRow key={row.key} item={row} state={state}>
                  {[...row.childNodes].map((cell) =>
                     cell.props.isSelectionCell
                        ? <TableCheckboxCell key={cell.key} cell={cell} state={state} />
                        : <TableCell key={cell.key} cell={cell} state={state} />
                  )}
               </TableRow>
            ))}
         </TableRowGroup>
      </table>
   );
}
