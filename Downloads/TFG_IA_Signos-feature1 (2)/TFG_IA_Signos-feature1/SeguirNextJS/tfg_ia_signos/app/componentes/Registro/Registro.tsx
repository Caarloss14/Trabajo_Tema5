{/**Importamos el css del componente */}
import "@/app/componentes/Registro/registro.css"

const Registro = () =>{
    return(
        
    <div className="container-fluid ">
        {/**Contenedor General del componente registro*/}
        <div className="row ">
            {/**Imagen del componente registro*/}
            <div className="inicio_registro col-12 col-md-12 col-lg-6 order-2">

                <img src="/Imagenes/Seccion_Registro/Entrada.png" alt=""/> 

            </div>

        {/**Seccion manejo de datos del registro*/}
        <div className="formulario col-12 col-lg-6 mt-5 order-1 mb-5">
            <h1>Registro</h1>
            {/**Formulario método POST con todos los campos disponibles*/}
            <form action="" method="POST">
                <div className="col-12 input-container">
                   
                        <input type="text" className="form-control" placeholder="" name="usuario" id="usuario"/>
                        <label>Usuario</label>
                </div>
                <div className="col-12 input-container">
                    
                        <input type="email" className="form-control" placeholder="" name="correo" id="correo"/>
                        <label>Correo</label>
                </div>
                <div className="col-12 input-container">
                    
                        <input type="password" className="form-control" placeholder="" name="passwd" id="passwd"/>
                        <label>Contraseña</label>
                </div>
                {/** Boton acceder*/}
                <div className="interaccion">
                <button type="submit" className="btn">Acceder</button>
                </div>
            </form>
        </div>
    </div>
 </div>
    )
}
export default Registro