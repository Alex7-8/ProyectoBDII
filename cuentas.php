<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Grupo Financiero UMG</title>
    <link rel="stylesheet" href="css/styleb.css">
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
        <h1>Formulario de Registro Cuentas</h1>
		<form action="api/cuenta.php" method="POST" class="Cu">
			<div class='field'>
				<label>DPI</label>
				<input name='DPI' type='name' placeholder='DPI' />
			</div>
		
			<div class='field'>
				<label>Id Agencia</label>
				<input name='IdA' type='name' placeholder='Id Agencia' />
			</div>
			<div class='field'>
				<label>Estado de Cuenta</label>
				<input name='idec' type='number' placeholder='Estado de Cuenta' />
			</div>
			<div class='field'>
				<label>Saldo</label>
				<input name='sl' type='text' placeholder='Saldo' />
			</div>
            <div class='field'>
				<label>Tipo de Cuenta</label>
				<select name='Tc' required>
					<option selected disabled>Sel. una opción</option>
					<option>1</option>
					<option>2</option>
				</select>
			</div>
            <div class='field'>
				<label>Moneda</label>
				<select name='Mn' required>
					<option selected disabled>Sel. una opción</option>
					<option>Q</option>
					<option>$</option>
				</select>
			</div>
            <div class='submit'>
				<button>
					CREAR
				</button>
			</div>
		</form>
    </main>

    <script src="javascript/script.js"></script>
</body>
</html>