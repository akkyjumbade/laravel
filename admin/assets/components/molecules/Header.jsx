import { InertiaLink } from "@inertiajs/inertia-react";

export default function Header() {
   return (
      <nav className="bg-white border-b border-gray-100">
         <div className="container mx-auto">
            <div className="flex">
               <div className="md:w-32">
                  <InertiaLink href="/cp">Logo</InertiaLink>
               </div>
               <div className="flex-1">
                  center
               </div>
               <div className="md:w-3/12">
                  right
               </div>
            </div>
         </div>
      </nav>
   )
}
