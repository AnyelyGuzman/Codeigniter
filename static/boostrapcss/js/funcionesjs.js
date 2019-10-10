function ValidacionEmpleado(){
	var TipoIdEmp, NumIdEmp, FecExpEmp, CiudadExpEmp, NomEmpleado1, NomEmpleado2, ApeEmp1, ApeEmp2, FeNacEmp, CiudadNacEmp, SexEmp, EstCivEmp, NivelEducativo, DirEmp, CelEmp, EmailEmp, MsgFinal, Resalte, Normal, ValEmail, validafinal;
	
	toastr.clear();//borra los mensajes que esten en pantalla
	TipoIdEmp = document.getElementsByName("TipoIdEmp");
	NumIdEmp = document.getElementsByName("NumIdEmp");
	FecExpEmp = document.getElementsByName("FexIdEmp");
	CiudadExpEmp = document.getElementsByName("CiudadIdEmp");
	NomEmpleado1 = document.getElementsByName("inputNomEmp1");
	NomEmpleado2 = document.getElementsByName("inputNomEmp2");
	ApeEmp1 = document.getElementsByName("inputApeEmp1");
	ApeEmp2 = document.getElementsByName("inputApeEmp2");
	FeNacEmp = document.getElementsByName("FeNacEmp");
	CiudadNacEmp = document.getElementsByName("CiudadNacEmp");
	SexEmp = document.getElementsByName("SexEmp");
	EstCivEmp = document.getElementsByName("EstCivEmp");
	NivelEducativo=document.getElementsByName("NivEdu");
	DirEmp = document.getElementsByName("DirEmp");
	CelEmp = document.getElementsByName("CelEmp");
	EmailEmp = document.getElementsByName("EmailEmp");
	MsgFinal = "";
	Normal ="form-control";
	Resalte = "bg-resalta form-control border-danger";
	
    
    
    
	if (TipoIdEmp[0].value === "Seleccione" || TipoIdEmp[0].value === ""){
		MsgFinal="Tipo <br>";
		TipoIdEmp[0].className= Resalte;		
	}else {
		TipoIdEmp[0].className= Normal;
	}
		
	if (NumIdEmp[0].value === ""){
		MsgFinal += "Número identificación <br>";
		NumIdEmp[0].className= Resalte;		
	}else if (isNaN(NumIdEmp[0].value)){
		mostrarMensErr("Número identificación deber ser númerico<br>", "Error");
		NumIdEmp[0].className= Resalte;
		validafinal=1;
	}else if(NumIdEmp[0].value<0){
		mostrarMensErr("Número identificación Negativo<br>", "Error");
		NumIdEmp[0].className= Resalte;
		validafinal=1;
	}else if(NumIdEmp[0].value.length>10 || NumIdEmp[0].value.length<5){
		mostrarMensErr("Número Identificaión debe contener entre 5 y 10 dígitos<br>", "Error");
		NumIdEmp[0].className= Resalte;
		validafinal=1;
	}else{
		NumIdEmp[0].className= Normal;
	}
	
	if (FecExpEmp [0].value === ""){
		MsgFinal += "Fecha Expedición <br>";
		FecExpEmp[0].className= Resalte;
	}else if(validaFecha(FecExpEmp[0].value)!==""){
		mostrarMensErr(validaFecha(FecExpEmp[0].value),"Fecha de Expedición");
		validafinal=1;
	}else {
		FecExpEmp[0].className= Normal;
	}
	
	if (CiudadExpEmp [0].value === "Seleccione" ||  CiudadExpEmp [0].value === ""){
		MsgFinal += "Ciudad Expedición <br>";
		CiudadExpEmp[0].className= Resalte;		
	}else {
		CiudadExpEmp[0].className= Normal;
	}
	
	if (NomEmpleado1 [0].value === ""){
		MsgFinal += "Primer Nombre <br>";
		NomEmpleado1[0].className= Resalte;		
	}else if(NomEmpleado1[0].value.length>50 || NomEmpleado1[0].value.length<3){
		mostrarMensErr("Primer nombre debe contener entre 3 y 50 caracteres<br>", "Error");
		NomEmpleado1[0].className= Resalte;
		validafinal=1;
	}else {
		NomEmpleado1[0].className= Normal;
	}

	
	/*if (NomEmpleado2 [0].value === ""){
		MsgFinal += "Otros Nombres <br>";
		NomEmpleado2 [0].className= Resalte;		
	}NO ES OBLIGATORIO*/
	
	//NO ME TOMA LA VALIDACION DE LA CANTIDAD DE CARACTERES REVISAR
	if (ApeEmp1 [0].value === ""){
		MsgFinal += "Primer Apellido <br>";
		ApeEmp1[0].className= Resalte;
	}else if(ApeEmp1[0].value.length>50 || ApeEmp1[0].value.length<3){
		mostrarMensErr("Primer apellido debe contener entre 3 y 50 caracteres<br>", "Error");
		ApeEmp1[0].className= Resalte;
		validafinal=1;
    }else {
		ApeEmp1[0].className= Normal;
	}
	
	/*if (ApeEmp2 [0].value === ""){
		MsgFinal += "Segundo Apellido <br>";
		ApeEmp2[0].className= Resalte;		
	} NO ES OBLIGATORIO*/
	
	if (FeNacEmp [0].value === "" ){
		MsgFinal += "Fecha de Nacimiento <br>";
		FeNacEmp[0].className= Resalte;		
	}else if(validaFecha(FeNacEmp[0].value)!==""){
		mostrarMensErr(validaFecha(FeNacEmp[0].value),"Fecha de Nacimiento");
		validafinal=1;
	}else {
		FeNacEmp[0].className= Normal;
	}
	
	if (CiudadNacEmp [0].value === "Seleccione" || CiudadNacEmp [0].value === ""){
		MsgFinal += "Ciudad de Nacimiento <br>";
		CiudadNacEmp[0].className= Resalte;		
	}else {
		CiudadNacEmp[0].className= Normal;
	}	
	
	if (SexEmp [0].value === "Seleccione" || SexEmp [0].value === ""){
		MsgFinal += "Sexo <br>";
		SexEmp[0].className= Resalte;		
	}else {
		SexEmp[0].className= Normal;
	}

	if (EstCivEmp [0].value === "" || EstCivEmp [0].value === "Seleccione" ){
		MsgFinal += "Estado Civil <br>";
		EstCivEmp[0].className= Resalte;		
	}else {
		EstCivEmp[0].className= Normal;
	}

	if (NivelEducativo [0].value === "Seleccione" || NivelEducativo [0].value === ""){
		MsgFinal += "Nivel Educativo <br>";
		NivelEducativo[0].className= Resalte;		
	}else {
		NivelEducativo[0].className= Normal;
	}
	
	if (DirEmp  [0].value === "" ){
		MsgFinal += "Dirección <br>";
		DirEmp [0].className= Resalte;		
	}else{
		DirEmp[0].className= Normal;
	}
	
	if (CelEmp  [0].value === ""){
		MsgFinal += "Teléfono <br>";
		CelEmp [0].className= Resalte;		
	}else if (isNaN(CelEmp[0].value)){
		mostrarMensErr("Teléfono contiene texto<br>", "Error");
		CelEmp[0].className= Resalte;
		validafinal=1;
	}else if(CelEmp[0].value.length>10 || CelEmp[0].value.length<8){
		mostrarMensErr("Teléfono debe contener entre 8 y 10 dígitos<br>", "Error");
		CelEmp[0].className= Resalte;
		validafinal=1;
	}else if(CelEmp[0].value<0){
		mostrarMensErr("Teléfono Negativo<br>", "Error");
		CelEmp[0].className= Resalte;
		validafinal=1;
	}else{
		CelEmp[0].className= Normal;
	}
	
	//Expresion regular
	//alfanumerico + arroa @ + alafanumérico + punto (.) + caracteres a-z
	ValEmail= /\w+@+\w+\.+[a-z]"/;
	
	if (EmailEmp [0].value === ""){
		MsgFinal += "Email <br>";
		EmailEmp [0].className= Resalte;
	}else if(!ValEmail.test(EmailEmp [0].value)){
		//Cuando no se cumpla la expresión regular
		mostrarMensErr("Email incorrecto<br>", "Error"); 
		EmailEmp [0].className= Resalte; 
		
	}else{
		EmailEmp[0].className= Normal;
	}

	if (MsgFinal==="" && validafinal!==1){
		mostrarMensExito("Datos registrados correctamente", "Felicidades");
	}else if(MsgFinal==="" ){
		return false;
	}else{
		mostrarMensErr(MsgFinal, "Los siguientes campos están vacios:");
		return false;
	}
	
	TipoIdEmp = null;
	NumIdEmp = null;
	FecExpEmp = null;
	CiudadExpEmp = null;
	NomEmpleado1 = null;
	NomEmpleado2 = null;
	ApeEmp1 = null;
	ApeEmp2 = null;
	FeNacEmp = null;
	CiudadNacEmp = null;
	SexEmp = null;
	EstCivEmp = null;
	NivelEducativo=null;
	DirEmp = null;
	CelEmp = null;
	EmailEmp = null;
	
/*---------FIN FORMULA VALIDACION EMPLEADO*/	
}


function mostrarMensErr(mensaje, titulo){
	var mensaje1,titulo1;
	mensaje1= mensaje +"<br><button type='button' class='btn btn-light'>Entendido</button>";
	titulo1= titulo;
	toastr.options.positionClass= "toast-top-right";//posicion del mensaje right, left, center
	//toastr.clear();//eliminar mensaje si se presentan errores otra vez
	toastr.options.preventDuplicates= true;//prevenir ventanas duplicadas
	toastr.options.closeButton= true;//boton de cerrar
	toastr.options.timeOut=10000;//Tiempo se mostrará el Toast sin interacción del usuario 
	toastr.options.extendedTimeOut=10000;//Tiempo para mostrar el toast después de que un usuario se coloque sobre ella
	toastr.options.progressBar  =  true ;//barra de progreso
	toastr.error(mensaje1,titulo1);	
}

function mostrarMensExito(mensaje, titulo){
	var mensaje1,titulo1;
	mensaje1= mensaje;
	titulo1= titulo;
	toastr.options.positionClass= "toast-top-center";//posicion del mensaje right, left, center
	//toastr.clear();//eliminar mensaje si se presentan errores otra vez
	toastr.options.preventDuplicates= true;//prevenir ventanas duplicadas
	toastr.options.closeButton= true;//boton de cerrar
	toastr.options.timeOut=4000;//Tiempo se mostrará el Toast sin interacción del usuario 
	//toastr.options.extendedTimeOut=10000;//Tiempo para mostrar el toast después de que un usuario se coloque sobre ella
	//toastr.options.progressBar  =  true ;//barra de progreso
	toastr.success(mensaje1,titulo1);//success-verde info-azul error-rojo warning-naranja
}

function validaFecha(fecha){
	
	var fechaFinal, anio, mes, dia, fechajs, hoy, menFecha;
	
	fechaFinal= fecha;
		
	anio =fechaFinal.substring(6, 10);
	mes = fechaFinal.substring(3, 5);
	dia = fechaFinal.substring(0, 2);	
	
	fechajs= new Date(mes + '/' + dia + '/'  + anio);//se pasa al formato de javascript
	hoy= new Date();
	hoy.setHours(0,0,0,0);//se inicia en cero las horas
	
	if (fechajs > hoy) {
		menFecha="Fecha mayor a la actual";
	}else if(fechajs.getDate() !== Number(dia) || (fechajs.getMonth()+1) !== Number(mes) || fechajs.getFullYear() !== Number(anio)) {
		menFecha="Formato incorrecto";
	}else {
	 	menFecha="";
	}
	return menFecha;
}

function solotexto(texto){
    
    var formatoTexto, textofinal, msgTexto;
    
    formatoTexto=/[a-z]|[A-Z]/i;
    textoFinal= texto;
    
    if(!formatoTexto.test(textoFinal)){
        msgTexto="Formato Incorrecto";
    }else{
        msgTexto="";
    }
        
    return msgTexto;
}


function calendario(){
	/*
    Era para dejar solo la fecha actual como final
    var hoycal= new Date();
	var fechafincal= hoycal.getDate() + "/" + (hoycal.getMonth()+1)+ "/" + hoycal.getFullYear();*/
	
	$('.date-propio').datepicker({
    format: "dd/mm/yyyy",
    language: "es",
    autoclose: true,
    todayHighlight: true,
	calendarWeeks:false,
	endDate: "",/*ultima fecha que pueden ver*/
	keyboardNavigation: true,
	startDate: "01/01/1960",/*pimera fecha que pueden ver*/
	});
	
}
	
	
	
	
	
