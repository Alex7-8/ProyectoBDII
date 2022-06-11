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
        <h1>Sistema de Transacciones</h1>
		<form action="api/transaccion.php" method="POST" class="TR">
			<div class='field'>
				<label>Cuenta Destino</label>
				<input name='Cuenta_Destino' type='name' placeholder='Cuenta Destino' autocomplete />
			</div>
			<div class='field'>
				<label>Cuenta Origen</label>
				<input name='Cuenta_Origen' type='name' placeholder='Cuenta Origen' autocomplete />
			</div>
			<div class='field'>
				<label>Tipo de Transaccion</label>
				<select name='Tipo' required>
					<option selected disabled>Sel. una opción</option>
					<option>cajero</option>
					<option>ach</option>
					<option>moneda-cru</option>
                    <option>trans</option>
				</select>
			</div>
			<div class='field'>
				<label>Monto</label>
				<input name='Monto' type='text'  placeholder='Monto'autocomplete />
			</div>
			<div class='submit'>
				<button>
					Transferir
				</button>
			</div>
		</form>
    </main>

    <script src="javascript/script.js"></script>
</body>
</html>