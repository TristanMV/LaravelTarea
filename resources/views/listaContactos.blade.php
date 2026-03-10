<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Contactos</h1>
    <ul>
        
        $contactos = Contacto::all();

        return view('listaContactos', compact)
   
    </ul>
</body>
</html>