


function validar(){
    var form = document.form
    if(form.cnombre.value==""){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe ingresar el nombre del cliente'
         });
         form.cnombre.value="";
         form.cnombre.focus();
         return false;
    }
    if(form.identificacion.value==0){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe ingresar el número de documento del cliente'
         });
         form.identificacion.value="";
         form.identificacion.focus();
         return false;
    }
    if(form.cdireccion.value==""){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe ingresar la dirección del cliente'
         });
         form.cdireccion.value="";
         form.cdireccion.focus();
         return false;
    }
    if(form.ctel.value==0){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe ingresar el número de telefono del cliente'
         });
         form.ctel.value="";
         form.ctel.focus();
         return false;
    }
    if(form.enombre.value==""){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Ingrese el nombre de la empresa'
         });
         form.enombre.value="";
         form.enombre.focus();
         return false;
    }
    if(form.nit.value==0){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe digitar el Nit de la empresa'
         });
         form.nit.value="";
         form.nit.focus();
         return false;
    }
    if(form.edireccion.value==""){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe ingresar la dirección de la empresa'
         });
         form.edireccion.value="";
         form.edireccion.focus();
         return false;
    }
    if(form.etel.value==0){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe ingresa el número de telefono de la empresa'
         });
         form.etel.value="";
         form.etel.focus();
         return false;
    }
    
    form.submit();
}