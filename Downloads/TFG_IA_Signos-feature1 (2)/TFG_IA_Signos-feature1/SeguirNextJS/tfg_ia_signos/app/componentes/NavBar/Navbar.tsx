import Link from 'next/link';
import '@/app/componentes/NavBar/navbar.css'

const Navbar = () => {
    return (
        <div className="col-12 p-0 contenedor-video"> 

            {/*Ancho del navbar puesto para que ocupe todo el ancho de la página*/}
                <nav className="navegacion navbar navbar-expand-lg py-2"> {/*La pagina colapsa en pantallas ≥992px*/}
                    {/*Contenedor fluido ocupando todo el ancho*/}
                    <div className="container-fluid">

                    {/*Del logo situado a la parte izquierda*/}
                    <div className="navbar-left">
                        <div className="btn navbar-brand logo"></div>
                    </div>
                    {/*Boton hambuerguesa*/}
                    <button className="navbar-toggler navbar-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                            <span className="navbar-toggler-icon"></span>
                    </button>

                     <div className="offcanvas offcanvas-start" tabIndex={-1} id="offcanvasMenu">
                        <div className="offcanvas-header">
                            <h5 className="offcanvas-title" id="offcanvasMenu">Menu</h5>
                            <button type="button" className="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
                        </div>
                    <div className="enlaces offcanvas-body" id="menuNav">
                        <div className="navbar-nav ms-auto gap-3 me-3">
                            <Link href="/" className="nav-link">Inicio</Link>
                            <Link href="/Traduccion"  className="nav-link">Traducción</Link>
                            <Link href="/Quienes-Somos" className="nav-link">Quiénes Somos</Link>
                            <div className="login">
                            <Link href="/Login" className="nav-link log">Log-in</Link>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
  
);
};

export default Navbar;