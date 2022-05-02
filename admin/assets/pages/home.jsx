import { InertiaLink } from '@inertiajs/inertia-react'
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
            <Table />
         </Page.Section>
      </Page>
   )
}
