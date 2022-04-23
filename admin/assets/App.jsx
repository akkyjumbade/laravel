import React from 'react'
import Footer from './components/molecules/Footer'
import Header from './components/molecules/Header'
import { Layout } from './components/oragnisms'
export default function App({ children, ...props }) {
   console.log({ props })
   return (
      <Layout>
         <Header />
         <main className='flex-1'>
            {children}
         </main>
         <Footer />
      </Layout>
   )
}
