const boton_calcular_dos = document.getElementById('calcu_2')
const fo_dos = document.getElementById('f2')
const total_res = document.getElementById('res_byte')

fo_dos.addEventListener('submit', func_form_2)
function func_form_2(event_2){
    event_2.preventDefault()
    
}



boton_calcular_dos.addEventListener('click',hacer_calculo_dos)
function hacer_calculo_dos(){

    let vb = parseFloat(document.getElementById('vb').value)
    let op_1 = parseFloat(document.getElementById('op_1').value)
    let op_2 = parseFloat(document.getElementById('op_2').value)

    if (op_1 == 1 && op_2 == 1){
        total = vb
    }
    else if (op_1 == 1 && op_2 == 2){
        total = vb / 8
    }
    else if (op_1 == 1 && op_2 == 3){
        total = vb / (8 * 1024)
    }
    else if (op_1 == 1 && op_2 == 4){
        total = vb / (8 * 1048576)
    }
    else if (op_1 == 1 && op_2 == 5){
        total = vb / (8 * 1073741824)
    }
    else if (op_1 == 1 && op_2 == 6){
        total = vb / (8 * 1099511627776)
    }

    else if (op_1 == 2 && op_2 == 1){
        total = (vb *8)
    }
    else if (op_1 == 2 && op_2 == 2){
        total = (vb*8) / 8
    }
    else if (op_1 == 2 && op_2 == 3){
        total = (vb*8) / (8 * 1024)
    }
    else if (op_1 == 2 && op_2 == 4){
        total = (vb*8) / (8 * 1048576)
    }
    else if (op_1 == 2 && op_2 == 5){
        total = (vb*8) / (8 * 1073741824)
    }
    else if (op_1 == 2 && op_2 == 6){
        total = (vb*8) / (8 * 1099511627776)
    }


    else if (op_1 == 3 && op_2 == 1){
        total = (vb * 8 * 1024)
    }
    else if (op_1 == 3 && op_2 == 2){
        total = (vb * 8 *1024) / 8
    }
    else if (op_1 == 3 && op_2 == 3){
        total = (vb * 1024) / (1024)
    }
    else if (op_1 == 3 && op_2 == 4){
        total = (vb * 1024) / (1048576)
    }
    else if (op_1 == 3 && op_2 == 5){
        total = (vb *1024) / (1073741824)
    }
    else if (op_1 == 3 && op_2 == 6){
        total = (vb *1024) / (1099511627776)
    }


    else if (op_1 == 4 && op_2 == 1){
        total = (vb * 8 *1048576)
    }
    else if (op_1 == 4 && op_2 == 2){
        total = (vb * 8 *1048576) / 8
    }
    else if (op_1 == 4 && op_2 == 3){
        total = (vb * 8 *1048576) / (8 * 1024)
    }
    else if (op_1 == 4 && op_2 == 4){
        total = (vb *1048576) / (1048576)
    }
    else if (op_1 == 4 && op_2 == 5){
        total = (vb *1048576) / (1073741824)
    }
    else if (op_1 == 4 && op_2 == 6){
        total = (vb *1048576) / (1099511627776)
    }


    else if (op_1 == 5 && op_2 == 1){
        total = (vb * 8 *1073741824)
    }
    else if (op_1 == 5 && op_2 == 2){
        total = (vb * 8 * 1073741824) / 8
    }
    else if (op_1 == 5 && op_2 == 3){
        total = (vb * 8 *1073741824) / (8 * 1024)
    }
    else if (op_1 == 5 && op_2 == 4){
        total = (vb * 8 *1073741824) / (8 * 1048576)
    }
    else if (op_1 == 5 && op_2 == 5){
        total = (vb * 1073741824) / (1073741824)
    }
    else if (op_1 == 5 && op_2 == 6){
        total = (vb * 1073741824) / (1099511627776)
    }


    else if (op_1 == 6 && op_2 == 1){
        total = (vb* 8 * 1099511627776)
    }
    else if (op_1 == 6 && op_2 == 2){
        total = (vb * 8 * 1099511627776) / 8
    }
    else if (op_1 == 6 && op_2 == 3){
        total = (vb * 8 * 1099511627776) / (8 * 1024)
    }
    else if (op_1 == 6 && op_2 == 4){
        total = (vb * 8 * 1099511627776) / (8 * 1048576)
    }
    else if (op_1 == 6 && op_2 == 5){
        total = (vb * 8 * 1099511627776) / (8 * 1073741824)
    }
    else if (op_1 == 6 && op_2 == 6){
        total = (vb *1099511627776) / (1099511627776)
    }


   
    
    
    total_res.innerHTML= `${total}`

}