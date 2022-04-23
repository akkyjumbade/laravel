import { Inertia } from "@inertiajs/inertia";
import { InertiaLink, usePage } from "@inertiajs/inertia-react";

export default function create({ team, errors, ...props }) {
   // const { props: { errors  }} = usePage()
   function onSubmit(e) {
      e.preventDefault()
      Inertia.post(route('admin.teams.store'), new FormData(e.target))
   }
   return (
      <div>
         <form onSubmit={onSubmit}>
            <input name={'title'} />
            <button>Submit</button>
         </form>
         {/* {JSON.stringify({ team })} */}
         {JSON.stringify(errors)}
      </div>
   )
}
