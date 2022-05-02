export default function WelcomeSection({ title, children }) {
   return (
      <section>
         {title && (
            <header className="mb-4">
               <h3 className="leading-10 text-3xl font-bold">{title}</h3>
               <p className="text-gray-600">Quick glance</p>
            </header>
         )}
         {children}
      </section>
   )
}
