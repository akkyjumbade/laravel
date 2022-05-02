import { Item } from '@react-stately/collections'
import React from 'react'
import { ResourcePicker, Table } from '../../components/oragnisms'
import { Page } from '../../components/templates'

const NotificationItem = ({ ...props }) => {
   return (
      <div>

      </div>
   )
}

export default function notifications({ notifications }) {
   return (
      <Page title={'Notifications'}>
         <Page.Section>
            {/* {JSON.stringify(notifications)} */}
            <Table>
               <Item key={'id'} >
                  ID
               </Item>
               <Item key={'title'} >
                  title
               </Item>
            </Table>
            {/* <ResourcePicker /> */}
         </Page.Section>
      </Page>
   )
}
