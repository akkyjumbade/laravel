import { useFocusRing } from '@react-aria/focus';
import { useOption } from '@react-aria/listbox';
import { mergeProps } from '@react-aria/utils';
import React from 'react'

export default function TableRow({ item, state, ...props }) {
   let ref = React.useRef();
   let { optionProps, isSelected, isDisabled } = useOption(
      { key: item.key },
      state,
      ref
   );
   let { isFocusVisible, focusProps } = useFocusRing();

   console.log({ row: props, item, state })
   return (
      <tr {...props} {...mergeProps(optionProps, focusProps)}>
         {item.rendered}
      </tr>
   )
}
