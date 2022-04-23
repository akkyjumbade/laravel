import { InertiaLink } from '@inertiajs/inertia-react'
import React from 'react'
export default function Profile({ user }) {
   return (
      <div>
         {user?.name}
         <InertiaLink href={route('admin.settings')}>Settings</InertiaLink>
      </div>
   )
}
