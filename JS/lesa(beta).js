
//CONTRASEÑA
function verificar() {
    let clave = document.getElementById('clave').value;
    let usuario = document.getElementById('usuario').value;
    if (clave==="LESA" && usuario==="Samuel") {
    location.href="entsal.html";
    } else {
    alert('clave incorrecta');
    }
    }
//SISTEMA DE ENTRADA    
function entrada(){
    location.href="lectoren.html";
}
//SISTEMA DE SALIDA
function salida(){
    location.href="lectorsal.html";
}
//ALUMNOS
function verificarmatricula() {
    let matricula = document.getElementById('matricula').value;
    let contrasenamatricula = document.getElementById('contrasenamatricula').value;
    if (matricula==="Samuel" && contrasenamatricula==="LESA") {
    location.href="Alumnos.html";
    } else {
    alert('clave incorrecta');
    }
    }
//REGISTRO DE ENTRADA DE ALUMNOS
function Entradalumno(){
    location.href="entralumno.html"
}
//REGISTRO DE SALIDA DE ALUMNOS   
function Salidalumno(){
    location.href="salidalumno.html"
} 