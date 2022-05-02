import { InertiaLink } from "@inertiajs/inertia-react"
import { route } from "../../utils"

export default function Pagination({ pagination }) {
   console.log({ pagination })
   return (
      <div className="flex items-center gap-3">
         <InertiaLink href={pagination.prev_page_url} >Prev</InertiaLink>
         <InertiaLink href={pagination.next_page_url} >Next</InertiaLink>
      </div>
   )
}
