const boton_calcular = document.getElementById('calcular')
const boton_borrar = document.getElementById('blanco')
const total_ventas = document.getElementById('resp_venta')
const total_gan = document.getElementById('resp_gan')
const fo = document.getElementById('f1')


fo.addEventListener('submit', func_form)
function func_form(event){
    event.preventDefault()
    
}

boton_calcular.addEventListener ('click', hacer_calculo)
function hacer_calculo(){

    let vc = parseFloat(document.getElementById('vc').value)
    let pg = parseFloat(document.getElementById('pg').value)
    let pi = parseFloat(document.getElementById('pi').value)
    

    let op1 = vc + (vc*(pg/100)) + (vc*(pi/100))
    let total1 = Number(op1.toFixed(2))
    let op2 = (vc + (vc*(pg/100)))-vc
    let tottal2 = Number(op2.toFixed(2))

    total_ventas.innerHTML= ` ${total1} COP`
    total_gan.innerHTML= `${tottal2} COP`

}

boton_borrar.addEventListener('click', hacer_borrado)
function hacer_borrado(){
    if (window.confirm('¿Estas seguro que deseas limpiar los espacios?')){
        localStorage.removeItem('vc')
        localStorage.removeItem('pg')
        localStorage.removeItem('pi')
        localStorage.removeItem('resp_venta')
        localStorage.removeItem('resp_gan')

        total_ventas.innerHTML=``
        total_gan.innerHTML=``



        document.getElementById("f1").reset();
    }
}

