<!DOCTYPE html>
<html>
<head>
	<title>Nuevo pedido</title>
</head>
<body>
	<p>
		Se ha realizado un nuevo pedido!
	</p>
	<p>
		Estos son los datos del cliente que realizó el pedido:
	</p>
	<ul>
		<li>
			<strong>Nombre:</strong>
			{{ $user->name }}
		</li>
		<li>
			<strong>E.mail:</strong>
			{{ $user->email}}
		</li>
		<li>
			<strong>Fecha del Pedido</strong>
			{{ $cart->order_date }}
		</li>
	</ul>
	<p>
		<a href=" url('/admin/orders/'.$cart->id)">Haz clic aquí</a>
		para ver mas información sobre este pedido.
	</p>
</body>
</html>