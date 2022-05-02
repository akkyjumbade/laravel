import { InertiaLink } from '@inertiajs/inertia-react'
import { Cell, Column, Row, TableBody, TableHeader } from '@react-stately/table'
import React from 'react'
import CtaCard from '../components/molecules/CtaCard'
import WelcomeSection from '../components/molecules/WelcomeSection'
import { Table } from '../components/oragnisms'
import { Page } from '../components/templates'
export default function Home() {
   return (
      <Page>
         <Page.Section className="mb-6">
            <WelcomeSection title={'Welcome'}>
               <div className="grid grid-cols-4 gap-4">
                  <div className="grid__cell">
                     <CtaCard />
                  </div>
                  <div className="grid__cell">
                     <CtaCard />
                  </div>
                  <div className="grid__cell">
                     <CtaCard />
                  </div>
                  <div className="grid__cell">
                     <CtaCard />
                  </div>
                  <div className="grid__cell">
                     <CtaCard />
                  </div>
                  <div className="grid__cell">
                     <CtaCard />
                  </div>
               </div>
            </WelcomeSection>
         </Page.Section>
         <Page.Section className="mb-6">
            <Table
               aria-label="Example static collection table"
               selectionMode="multiple"
               >
               <TableHeader>
                  <Column>Name</Column>
                  <Column>Type</Column>
                  <Column>Date Modified</Column>
               </TableHeader>
               <TableBody>
                  <Row>
                     <Cell>Games</Cell>
                     <Cell>File folder</Cell>
                     <Cell>6/7/2020</Cell>
                  </Row>
                  <Row>
                     <Cell>Program Files</Cell>
                     <Cell>File folder</Cell>
                     <Cell>4/7/2021</Cell>
                  </Row>
                  <Row>
                     <Cell>bootmgr</Cell>
                     <Cell>System file</Cell>
                     <Cell>11/20/2010</Cell>
                  </Row>
                  <Row>
                     <Cell>log.txt</Cell>
                     <Cell>Text Document</Cell>
                     <Cell>1/18/2016</Cell>
                  </Row>
               </TableBody>
            </Table>
         </Page.Section>
      </Page>
   )
}
