import { InertiaLink } from '@inertiajs/inertia-react'
import React from 'react'
import { Page } from '../components/templates'
export default function Home() {
   return (
      <Page>
         <ul>
            <li>
               <InertiaLink href={route('admin.profile')}>Profile</InertiaLink>
            </li>
            <li>
               <InertiaLink href={route('admin.teams.index')}>Teams</InertiaLink>
            </li>
            <li>
               <InertiaLink href={route('admin.users.index')}>Users</InertiaLink>
            </li>
            <li>
               <InertiaLink href={route('admin.taxonomies.index')}>taxonomies</InertiaLink>
            </li>
            <li>
               <InertiaLink href={route('admin.settings')}>Settings</InertiaLink>
            </li>
         </ul>
      </Page>
   )
}
