"use client";
import Image from "next/image";
import { useRef } from "react";
import Webcam from "react-webcam";
import '@/app/componentes/Transcripcion/estilostutocam.css'

export default function Camara_Seccion() {
  const webcamRef = useRef<Webcam>(null);

  const videoConstraints = {
    width: 640,
    height: 360,
    facingMode: "user",
  };

  return (
    <div className="cam_Page">

      {/* Tutorial */}
      <div className="tutorial">
        <div className="tutorial_card">
          <h3>Paso 1: ¡Activa la cámara!</h3>
          <p>Acepta el uso de la cámara en tu navegador.</p>
          <Image src="/Imagenes/Transcripcion/activacam.png" alt="Cámara" width={200} height={200} />
        </div>
        <div className="tutorial_card">
          <h3>Paso 2: ¡Ponte frente a la cámara!</h3>
          <p>Colócate en una zona bien iluminada.</p>
          <Image src="/Imagenes/Transcripcion/frentecamara.png" alt="Activar Cámara" width={200} height={200} />
        </div>
        <div className="tutorial_card">
          <h3>Paso 3: ¡Transcribe!</h3>
          <p>Gesticula y observa el resultado.</p>
          <Image src="/Imagenes/Transcripcion/hombreok.png" alt="Gesticulación" width={200} height={200} />
        </div>
      </div>
      <br />
      {/* Webcam */}
      <div className="webcam_container">
        <Webcam
          ref={webcamRef}
          audio={false}
          mirrored={true}
          screenshotFormat="image/jpeg"
          videoConstraints={videoConstraints}
          className="webcam"
        />
        <div className="contenedor-transcripcion">
            <p className="texto-introduccion">¡COMIENZA A TRANSCRIBIR!</p>
        </div>
      </div>

    </div>
  );
}
