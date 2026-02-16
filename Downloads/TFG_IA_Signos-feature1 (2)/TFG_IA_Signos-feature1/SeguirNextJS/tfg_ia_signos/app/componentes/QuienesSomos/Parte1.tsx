import "./Parte1.css"
import Image from 'next/image';
const Parte1 = () =>{
return(
    <>
    <div className="container-fluid d-flex justify-content-center p-0 min-vh-90 mb-4">
        <div className="row  seccion-quienes-somos">
            <div className="col-10 col-md-6 parte1_texto ">
                
                <h3>¿Donde nace <span>Amadeus</span>?</h3>
                <p>Somos una iniciativa dedicada a la creación de soluciones basadas<strong> en inteligencia artificial(IA)</strong>, 
                y enfocados a derribar la barrera de comunicación entre todas las personas
                </p>
            </div>
            <div className="col-10 col-md-5">
                <Image 
                alt="Logo Pagina"
                width={300}
                height={300}
                className="img-fluid"
                src="/Imagenes/Seccion_Inicio/logo_blanco.png"/>
            </div>
            <div className="col-12 objetivo">
                <h3>¿Cual es  <span>nuestro Objetivo</span>?</h3>
                <p>Nuestro Objetivo es desarrollar herramientas de transcripción automatizada que permitan agilizar el trabajo de los usuarios y
                    poder garantizar esa precisión a la hora de transcribir sus gestos.
                </p>
            </div>
    </div>
    </div>
<div className="container-fluid seccion_nosotros ">
    <div className="row justify-content-around align-items-center min-vh-100">
        <div className="titulo_seccion_nosotros text-center"><h2>Nuestro Equipo de Desarrollo</h2></div>
        <div className="col-12 col-md-4 developer">
            <h3 className="fw-bold fs-4">Desarrollador</h3>
            <div className="foto_container">
                <Image 
                    src="/Imagenes/Quienes_Somos/Imagenes/Desarrolladores/Carlos_desarrollador.png"
                    alt="Imagen Carlos"
                    width={200}
                    height={200}
                    className="imagen_dev"
                />
            </div>
            <h5 className="mt-1">Carlos Sánchez</h5>
            <div className="descripcion">
                <p><strong>Miembro de Amadeus</strong></p>
            </div>
        </div>
        <div className="col-12 col-md-4 developer">
            <h3 className="fw-bold fs-4">Desarrollador</h3>
            <div className="foto_container">
                <Image 
                    src="/Imagenes/Quienes_Somos/Imagenes/Desarrolladores/Sebas_desarrollador.png"
                    alt="Imagen Carlos"
                    width={200}
                    height={200}
                    className="imagen_dev"
                />
            </div>
          <h5 className="mt-1">Angel Sebastián</h5>
            <div className="descripcion">
                <p><strong>Miembro de Amadeus</strong></p>
            </div>
        </div>
        <div className="col-12 col-md-4 developer">
            <h3 className="fw-bold fs-4">Desarrollador</h3>
            <div className="foto_container">
                <Image 
                    src="/Imagenes/Quienes_Somos/Imagenes/Desarrolladores/Jorge_desarrollador.png"
                    alt="Imagen Jorge"
                    width={180}
                    height={180}
                    className="imagen_dev"
                />
            </div>
            <h5 className="mt-1">Jorge Valverde</h5>
            <div className="descripcion">
                <p><strong>Miembro de Amadeus</strong></p>
            </div>
        </div>
        </div>
    </div>

<div className="video_container">
    {/*Video aplicado al fondo de las páginas*/}
        <video className="video_inicio" autoPlay muted loop playsInline>
                <source src="/Imagenes/Seccion_Inicio/video_fondo.mp4" type="video/mp4"/>
        </video>



    
    <div className="container-fluid d-flex justify-content-center p-0">
        <div className="row seccion-quienes-somos ultima_parte">
            <div className="col-10 col-md-6 parte1_texto ">
                
                <h3>¿Cuál es <span> nuestra visión</span> acerca de este proyecto?</h3>
                <p>Ser referencia líder<strong> en herramientas de transcripción y comunicación asistida</strong>, 
                eliminando barreras y conectando con los usuarios
                </p>
            </div>
            <div className="col-10 col-md-5">
                <Image 
                alt="Logo Pagina"
                width={300}
                height={300}
                className="img-fluid"
                src="/Imagenes/Seccion_Inicio/logo_blanco.png"/>
            </div>
            <div className="col-12 objetivo">
                <h3>Nuestros principales <span>valores</span></h3>

                <ul>
                    <li>Innovación</li>
                    <li>Inclusión</li>
                    <li>Precisión</li>
                    <li>Colaboración</li>
                    <li>Compromiso con la accesibilidad</li>
                </ul>

            </div>
    </div>
    </div>
</div>

    
    </>
    
)
}
export default Parte1;
