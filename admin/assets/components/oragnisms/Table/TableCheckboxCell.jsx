import { useTableCell, useTableSelectionCheckbox } from '@react-aria/table';
import { useToggleState } from '@react-stately/toggle';
import { useCheckbox } from '@react-aria/checkbox';
import { useRef } from 'react';

export default function TableCheckboxCell({ cell, state }) {
   let ref = useRef();
   let { gridCellProps } = useTableCell({ node: cell }, state, ref);
   let { checkboxProps } = useTableSelectionCheckbox(
      { key: cell.parentKey },
      state
   );

   let inputRef = useRef(null);
   let { inputProps } = useCheckbox(
      checkboxProps,
      useToggleState(checkboxProps),
      inputRef
   );

   return (
      <td
         {...gridCellProps}
         ref={ref}
      >
         <input {...inputProps} />
      </td>
   );
}
