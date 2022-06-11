<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Grupo Financiero UMG</title>
    <link rel="stylesheet" href="css/styleb.css">
	<link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="css/formulario.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800&display=swap" rel="stylesheet">
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    
    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-explosion"></i>
            <h4>Grupo UMG</h4>
        </div>

        <div class="options__menu">	

            <a href="cuentas.php">
                <div class="option">
                    <i class="far fa-address-card" title="Agregar Cuentas"></i>
                    <h4>Agregar Cuentas</h4>
                </div>
            </a>
            
            <a href="clientes.php">
                <div class="option">
                    <i class="far fa-id-badge" title="Agregar Clientes"></i>
                    <h4>Agregar Clientes</h4>
                </div>
            </a>

            <a href="transacciones.php">
                <div class="option">
                    <i class="fa-solid fa-money-check-dollar" title="Realizar Transacciones"></i> 
                    <h4>Realizar Transacciones</h4>
                </div>
            </a>
        </div>

    </div>

    <main>
        <h1>Formulario de Registro Clientes</h1>
		<form action="api/cli.php" method="POST" class="Cl">
			<div class='field'>
				<label>Id_Cuenta</label>
				<input name='Id' type='name' placeholder='Id_Cuenta' />
			</div>
            <div class='field'>
				<label>Id_Direccion</label>
				<select name='Idr' required>
					<option selected disabled>Sel. una opción</option>
					<option>1</option>
					<option>2</option>
				</select>
			</div>
			<div class='field'>
				<label>Nombre</label>
				<input name='Nombre' type='name' placeholder='Nombre' />
			</div>
		
			<div class='field'>
				<label>Apellido</label>
				<input name='Apellido' type='name' placeholder='Apellido' />
			</div>
			<div class='field'>
				<label>Direccion</label>
				<input name='Direccion' type='text' placeholder='Direccion'/>
			</div>
			<div class='field'>
				<label>Telefono</label>
				<input name='Telefono' type='number' placeholder='Telefono' />
			</div>
			<div class='field'>
				<label>Fecha de Nacimeiento</label>
				<input name='FechaN' type='text' placeholder='Fecha de Nacimeiento' />
			</div>
			<div class='field'>
				<label>Estado</label>
				<input name='Estado' type='text' placeholder='Estado' />
			</div>
            <div class='field'>
				<label>DPI</label>
				<input name='DPIC' type='text' placeholder='DPI' />
			</div>
			<div class='submit'>
				<button>
					REGISTRAR
				</button>
			</div>
		</form>
    </main>

    <script src="javascript/script.js"></script>
</body>
</html>