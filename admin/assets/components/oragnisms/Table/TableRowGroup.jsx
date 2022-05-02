import { useTableRowGroup } from '@react-aria/table';

export default function TableRowGroup({ type: Element, style, children }) {
   let { rowGroupProps } = useTableRowGroup();
   return (
      <Element {...rowGroupProps} style={style}>
         {children}
      </Element>
   );
}
