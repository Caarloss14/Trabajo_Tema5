"use client"
import { useState, useEffect } from "react"
import Image from "next/image"
import "@/app/componentes/LSE/LSE.css"
const LSE = () =>{

    const [valor,setValor] = useState(0);
    const [utilizado,setUtilizado] = useState(false);

        const items = [
        {
            titulo:"¿Que es el LSE?",
            texto:`Es la lengua natural de las personas con discapacidad auditiva en España. 
                        Es un idioma completo ,con grámatica y estructura propias, que se comunican
                        a tráves del canal visual y gestual.`
        },
        {
            titulo:"¿Como funciona el LSE a diferencia de la lengua natural?",
            texto:`Ambos son idiomas completos, pero utilizan medios diferentes para la comunicación
                        Español - Auditivo - Hablado y oído.
                        LSE - Visual - Gestos/Expresiones`
        },
        {
            titulo:"Sabias que...",
            texto:"El LSE no sigue el mismo orden gramatical que el español normal"
        },

    ]

    useEffect(() =>{
    setUtilizado(true)
      const interval = setInterval(() =>{
        setValor((prev) => (prev+1) % items.length)
      },5000)

      return () => clearInterval(interval)
    },[])

    if(!utilizado) return null;
    return(
        <div className="container-fluid">
            <div className="seccion_LSE">
            <div className="LSE_window ">
                <Image
                src={"/Imagenes/LSE/Imagenes/LSE.png"}
                alt="LSE Imagen"
                width={50}
                height={50}
                className="img-fluid foto_LSE"
                />
            <div className="LSE_item">
    
            <h3>{items[valor].titulo}</h3>
            <p>{items[valor].texto}</p>
            </div>
        </div>
    </div>
</div>
)
}
export default LSE