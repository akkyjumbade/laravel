import React from 'react'
export default function App({ children, ...props }) {
   console.log({ props })
   return (
      <div>
         {children}
      </div>
   )
}
