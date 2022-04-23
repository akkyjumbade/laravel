import { InertiaLink } from '@inertiajs/inertia-react'
import React from 'react'
export default function Home() {
   return (
      <div>
         Home
         <InertiaLink href={route('admin.profile')}>Profile</InertiaLink>
         <InertiaLink href={route('admin.teams.index')}>Teams</InertiaLink>
      </div>
   )
}
