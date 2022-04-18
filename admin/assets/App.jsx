import React from 'react'
import { Layout } from './components/oragnisms'
export default function App({ children, ...props }) {
   console.log({ props })
   return (
      <Layout>
         sd sdf df
         {children}
      </Layout>
   )
}
