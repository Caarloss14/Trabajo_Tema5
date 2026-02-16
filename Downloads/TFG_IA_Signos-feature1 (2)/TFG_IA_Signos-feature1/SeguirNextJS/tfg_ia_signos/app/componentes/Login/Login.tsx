import Image from "next/image";
import Link from "next/link";
import '@/app/componentes/Login/estiloslogin.css'
const Login = () => {

    return(
       <div className="login-page">

      {/* VOLVER */}
      <div className="volver-inicio">
        <Link href="/">
          <Image
            src="/Imagenes/Login/flecha.png"
            alt="Volver"
            width={32}
            height={32}
          />
          <span>Volver al inicio</span>
        </Link>
      </div>

      <div className="posicion">
        <div className="contenedor-login">

          {/* LOGIN */}
          <div id="sesion">
            <div id="sombreado">
              <h1>Inicia Sesión</h1>

              <form onSubmit={(e) => e.preventDefault()}>
                <div className="input-group">
                    <input id="username" type="text" name="username" className="input-box" placeholder=" " required/>
                    <label htmlFor="username">Nombre de usuario</label>
                </div>
                <br/>
                <div className="input-group">
                    <input id="password" type="password" name="password" className="input-box" placeholder=" " required />
                    <label htmlFor="password">Contraseña</label>
                </div>
                <button type="submit" id="ingreso">Ingresar</button>
                <p>¿No tienes cuenta? <Link id ="link" href="/Registro">Regístrate</Link></p>
              </form>
            </div>
          </div>

          {/* IMAGEN */}
          <div className="imagen-login">
            <Image
            src="/Imagenes/Seccion_Inicio/mano_inicio.png"
            alt="Imagen Login"
            width={700}
            height={700}
            />
          </div>
        </div>
      </div>
    </div> 
    )
}
export default Login