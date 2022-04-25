import React from 'react'
import { Page } from '../../components/templates'

export default function notifications({ notifications }) {
   return (
      <Page title={'Notifications'}>
         {JSON.stringify(notifications)}
      </Page>
   )
}
