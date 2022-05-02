import React from 'react'
import { render } from 'react-dom'
import { createInertiaApp } from '@inertiajs/inertia-react'
import { InertiaProgress } from '@inertiajs/progress'
console.log('main file')

InertiaProgress.init()
import { default as Bootstrap } from './App'

createInertiaApp({
   resolve: name => import(`./pages/${name}`),
   setup({ el, App, props }) {
      render((
         <Bootstrap>
            <App {...props} />
         </Bootstrap>
      ), el)
   },
})
