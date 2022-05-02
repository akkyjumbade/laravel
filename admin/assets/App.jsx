import React from 'react'
import Footer from './components/molecules/Footer'
import Header from './components/molecules/Header'
import { Layout } from './components/oragnisms'
import { AnimatePresence, motion } from 'framer-motion'

export default function App({ children, ...props }) {
   console.log({ props })
   return (
      <Layout>
         <Header />
         <motion.div initial={{ opacity: 0, }} animate={{ opacity: 1, }} exit={{ opacity: 0, }} className='flex-1'>
            <AnimatePresence>
               {children}
            </AnimatePresence>
         </motion.div>
         <Footer />
      </Layout>
   )
}
