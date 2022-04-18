export default function Layout({ children }) {
   return (
      <div className="bg-gray-100 w-screen h-screen">
         <div className="container mx-auto" >
            {children}
         </div>
      </div>
   )
}
