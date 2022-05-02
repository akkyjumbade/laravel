import { useFocusRing } from '@react-aria/focus';
import { useTableCell } from '@react-aria/table';
import { mergeProps } from '@react-aria/utils';
import { useRef } from 'react';

export default function TableCell({ cell, state }) {
   let ref = useRef();
   let { gridCellProps } = useTableCell({ node: cell }, state, ref);
   let { isFocusVisible, focusProps } = useFocusRing();

   return (
      <td
         {...mergeProps(gridCellProps, focusProps)}
         style={{
            padding: '5px 10px',
            outline: isFocusVisible ? '2px solid orange' : 'none',
            cursor: 'default'
         }}
         ref={ref}>
         {cell.rendered}
      </td>
   );
}
